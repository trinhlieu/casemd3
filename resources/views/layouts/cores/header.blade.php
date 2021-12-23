<header>
    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href=""><img src="{{asset('images/logo.png')}}" style="" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active" ><a href="/">Trang chủ</a></li>
                                    {{--                                    <li> <a href="{{route('directional.about')}}">About</a> </li>--}}
                                    {{--                                    <li><a href="{{route('directional.brand')}}">Brand</a></li>--}}
                                    {{--                                    <li><a href="{{route('directional.special')}}">Specials</a></li>--}}
                                    <li><a href="{{route('showFormLogin')}}">Đăng nhập</a></li>
{{--                                    <li class="nav-item dropdown">--}}
{{--                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
{{--                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                            Xin chào {{\Illuminate\Support\Facades\Auth::user()->name}}--}}
{{--                                        </a>--}}
{{--                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                            <a style="color: black" class="dropdown-item" href="{{route('edit', \Illuminate\Support\Facades\Auth::user()->id)}}">Cập nhập thông tin</a>--}}
{{--                                            <a style="color: black" class="dropdown-item" href="{{route('formChangePW')}}">Đổi mật khẩu</a>--}}
{{--                                            <a style="color: black" class="dropdown-item" href="{{route('auth.logout')}}">Đăng xuất</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="last">--}}
{{--                                        <p><img src="{{asset('storage/' . \Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="" width="50px"></p>--}}
{{--                                        <a href=""><img src="{{asset('images/search_icon.png')}}" alt="icon"/></a>--}}
{{--                                    </li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6 offset-md-6">--}}
{{--                    <div class="location_icon_bottum">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('icon/call.png')}}"/>(+84)968686868</li>--}}
{{--                            <li><img src="{{asset('icon/email.png')}}"/>trieutulinh@gmail.com</li>--}}
{{--                            <li><img src="{{asset('icon/loc.png')}}"/>Hà Nội</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>

