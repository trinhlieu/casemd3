@extends('admin.master')
@section('content')
    <div class="card mt-2">
        <h5 class="card-header">Thêm sản phẩm</h5>
        <div class="card-body">
            <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                           class="form-control  @error('name') is-invalid @enderror">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Thể loại</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="desc" value="{{ old('desc') }}" class="form-control">
                    @error('desc')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Nhà xuất bản</label>
                    <input type="text" name="publish" value="{{old('publish')}}" class="form-control">
                    @error('publish')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="image" value="{{old('image')}}}" class="form-control">
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="price" class="form-control">
                    @error('price')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="{{route('product.index')}}" class="btn btn-danger">Thoát</a>
            </form>
        </div>
    </div>
@endsection
