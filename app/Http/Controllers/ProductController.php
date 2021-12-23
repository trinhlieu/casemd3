<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::paginate(5);
        return view('products.list', compact('products'));
    }

    function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword) {
            return redirect()->route('product.index');
        }
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);

        $categories = Category::all();
        return view('products.list', compact('products', 'categories'));
    }

    function fillerByCategory(Request $request) {
        $idCate =$request->input('category_id');

        $cateFiller = Category::findOrFail($idCate);
        $products = Product::where('category_id', $cateFiller->id)->get();
        $totalProductFiller = count($products);

        $categories = Category::all();
        return view('products.list',compact('products','categories','totalProductFiller','cateFiller'));
    }

    function edit($id)
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.update', compact('product', 'categories'));
    }

    function update(CreateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->publish = $request->publish;

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $product->image);
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return back()->with('successIF', 'Cập nhập sản phẩm thành công');
    }

    public function delete(Request $request)
    {
        try {
            $productId = $request->productId;
            Product::destroy($productId);
            $data = [
                'status' => 'success',
                'message' => 'Xoá thành công!'
            ];
            Session::flash('success', 'Xoa san pham thanh cong');
        } catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Lỗi hệ thống!'
            ];
        }

        return response()->json($data);

    }

    function create()
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    function store(CreateProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->publish = $request->publish;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        Session::flash('success', 'Them moi san pham thanh cong');
        return redirect()->route('product.index');
    }
}
