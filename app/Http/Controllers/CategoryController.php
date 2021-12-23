<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        if (!Gate::allows('crud-category')) {
            abort(403);
        }
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        Session::flash('success', 'Them moi the loai thanh cong');
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        Product::where('category_id', $id)->update(['category_id' => 10]);
        Category::destroy($id);
        Session::flash('success', 'Xoa the loai thanh cong');
        return redirect()->route('category.index');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        Session::flash('success', 'Cap nhap the loai thanh cong');
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.update', compact('category'));
    }
}
