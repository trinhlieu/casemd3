<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Login</title>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="text-center" style="width: 50%">
            <h1 class='text-white'>Dang nhap</h1>
            <div class="form-login"></br></br>
                @if(session()->has('errorLogin'))
                    <div class="alert alert-danger">{{session()->get('errorLogin')}}</div>
                @endif
                <form action="{{route('auth.login')}}" method="post">
                    @csrf
                    <input type="text" name="email" class="form-control input-sm chat-input" placeholder="email"/>
                    </br></br>
                    <input type="password" name="password" class="form-control input-sm chat-input"
                           placeholder="password"/>
                    </br>
                    <div class="wrapper">
                        <span class="group-btn">
                            <button type="submit" class="btn btn-danger btn-md"><i
                                    class="fa fa-sign-in"> login</i></button>
{{--                            <a href={{url('/redirect/google')}}>Google</a>--}}
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
