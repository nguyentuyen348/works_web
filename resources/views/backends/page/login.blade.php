<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('mycss/login_register_css/login.css')}}">
    <title>Document</title>
</head>
<body>



<!------ Include the above in your HEAD tag ---------->

<div class="container">


    <div class="kpx_login">
        <h3 class="kpx_authTitle">Login or <a href="{{route('page.showRegister')}}">Sign up</a></h3>
        <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
            <div class="col-xs-2 col-sm-2">
                <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="fa fa-facebook fa-2x"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
            <div class="col-xs-2 col-sm-2">
                <a href="#" class="btn btn-lg btn-block kpx_btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <i class="fa fa-twitter fa-2x"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
            <div class="col-xs-2 col-sm-2">
                <a href="#" class="btn btn-lg btn-block kpx_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
                    <i class="fa fa-google-plus fa-2x"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
        </div><br>



        <div class="row kpx_row-sm-offset-3 kpx_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="kpx_hrOr">
                <span class="kpx_spanOr">or</span>
            </div>
        </div>

        <div class="row kpx_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="kpx_loginForm" action="" autocomplete="off" method="POST">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <hr />

                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                        <input  type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <hr />
                    <button class="btn btn-lg btn-outline-primary btn-block" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                </form>
            </div>
        </div>
        <div class="row kpx_row-sm-offset-3">
            <div class="col-xs-12 col-sm-3">
                <p></p>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="remember-me">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Remember me!</span>
                </label>
                </p>

            </div>
            <div class="col-xs-12 col-sm-3">
                <p class="kpx_forgotPwd">
                    <a href="#">Forgot password?</a>
                </p>
            </div>

            <div class="col-lg-12">
                <p class="text-lg-center text-md-center text-sm-center text-xs-center">Created by <a href="http://www.koalapix.com" target="_blank">koalapix. studio</a>, for crazy developers...</p>
            </div>
        </div>
    </div>




</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
