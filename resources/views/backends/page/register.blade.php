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
        <h3 class="kpx_authTitle">Sign up</h3>
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
                        <input type="text" class="form-control" name="name" placeholder="Username">
                    </div>
                    <hr />

                    <div class="input-group">
                        <span class="input-group-addon" style="text-align: center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg></span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <hr />
                        <div>

                        </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                        <input  type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <hr />

                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                        <input  type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
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
