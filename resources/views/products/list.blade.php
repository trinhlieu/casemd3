@extends('admin.master')
@section('content')
    <div class="col-6">
        <form class="navbar-form navbar-left" method="get" action="{{route('product.search')}}">
            @csrf
            <div class="row">
                <div class="col-8 pr-0">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm..."
                               value=""{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}"">
                    </div>
                </div>
                <div class="col-4 pl-0">
                    <button type="submit" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            Tìm kiếm
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card mt-2">
        <h5 class="card-header">Danh sách sản phẩm</h5>
        <div class="card-body">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th></th>
                    {{--                    <th><input type="checkbox"></th>--}}
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Nhà xuất bản</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Giá</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $key => $product)
                    <tr id="product-item-{{$product->id}}">
                        <td><input type="checkbox" class="product-checked" value="{{$product->id}}"></td>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$product->name}}</td>
                        <td>
                            {{ $product->category->name}}
                        </td>
                        <td>{{$product->publish}}</td>
                        <td><img src="{{asset('storage/'.$product->image)}}" alt="" width="45px"></td>
                        <td>{{Illuminate\Support\Str::limit($product->desc, 50, $end='...')}}</td>
                        <td>{{number_format($product->price)}}</td>
                        @can('crud-product')
                            <td><a href="{{route('product.edit', $product->id)}}">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd"
                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>@endcan
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                @endforelse
                </tbody>
            </table>{{ $products->appends(request()->query()) }}
        </div>
    </div>
    @can('crud-product')
        <div class="col-12 mt-2">
            <a class="btn btn-success" href="{{ route('product.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    Thêm mới</svg></a>
            <button class="btn btn-danger delete-product">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                     viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd"
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    Delete
                </svg>
            </button>
        </div>
    @endcan
@endsection
