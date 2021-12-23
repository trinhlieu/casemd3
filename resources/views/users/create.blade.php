@extends('admin.master')
@section('content')
    <div class="card mt-2">
        <h5 class="card-header">Thêm người dùng</h5>
        <div class="card-body">
            <form method="post" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
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
                    <label for="">Số điện thoại</label>
                    <input type="number" name="phone" value="{{ old('phone') }}" class="form-control">
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" class="form-select" aria-label="Default select example">
                        <option selected>Chọn role</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    @error('role')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" value="{{old('password')}}" class="form-control">
                    {{--                    @error('publish')--}}
                    {{--                    <p class="text-danger">{{ $message }}</p>--}}
                    {{--                    @enderror--}}
                </div>
                <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="date" name="birthday" value="{{old('birthday')}}" class="form-control">
                    @error('birthday')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                    @error('avatar')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="{{route('product.index')}}" class="btn btn-danger">Thoát</a>
            </form>
        </div>
    </div>
@endsection
