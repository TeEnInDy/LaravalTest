<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('Asset/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('Asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('Asset/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>SE CAMP Final</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ url('/register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    {{ $errors->first('email') }}
                    <div class="input-group mb-3">
                        <input type="email" name="email"
                            class="form-control <?php if($errors->has('email')){ ?>is-invalid<?php } ?>" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    {{ $errors->first('password') }}
                    <div class="input-group mb-3">
                        <input type="password" name="password"
                            class="form-control <?php if($errors->has('password')){ ?>is-invalid<?php } ?>"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation"
                            class="form-control <?php if($errors->has('password')){ ?>is-invalid<?php } ?>"
                            placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button onclick="myFunction()" type="submit"
                                class="btn btn-primary btn-block">Register</button>
                        </div>
                        <script>
                            function myFunction() {
                                alert("Create Successfully!!!");
                            }
                        </script>
                    </div>
                </form>

                <a href="login" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ url('Asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('Asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('Asset/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
