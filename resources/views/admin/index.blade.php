@extends('admin.master')
@section('content')
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sản phẩm hiện có</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    @foreach($products as $key => $product)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                            <div class="brand_box">
                                <img src="{{asset('storage/' . $product->image)}}" alt="img" width="200px"/>
                                <h3><strong class="red">{{number_format($product->price)}}</strong> VND</h3>
                                <i><img src="{{asset('images/star.png')}}"/></i>
                                <i><img src="{{asset('images/star.png')}}"/></i>
                                <i><img src="{{asset('images/star.png')}}"/></i>
                                <i><img src="{{asset('images/star.png')}}"/></i>
                                <i><img src="{{asset('images/star.png')}}"/></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
