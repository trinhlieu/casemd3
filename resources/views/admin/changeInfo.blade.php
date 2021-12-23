@extends('admin.master')
@section('content')
    <div class="card mt-2">
        <h1 class="card-header"><strong>Cập nhập thông tin</strong></h1>
        <div class="card-body">
            @if(session()->has('successIF'))
                <span class="alert alert-success">
                        <strong>{{ session()->get('successIF') }}</strong>
                    </span>
            @endif
            <form method="post" action="{{ route('admin.update' , $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="name" readonly value="{{ $user->email }}" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="date" name="birthday" value="{{ $user->birthday }}" class="form-control">
                    @error('birthday')
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
                    <label for="">Số điện thoại</label>
                    <input type="number" name="phone" value="{{ $user->phone }}" class="form-control">
                    @error('phone')
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
                <a href="{{route('admin.user.index')}}" class="btn btn-danger">Thoát</a>
            </form>
        </div>
    </div>
@endsection
