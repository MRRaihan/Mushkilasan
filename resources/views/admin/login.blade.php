<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mushkilasan</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

</head>

<body>
<div class="main-wrapper">

    <div class="login-page">
        <div class="login-body container">
            <div class="loginbox">
                <div class="login-right-wrap">
                    <div class="account-header">
                        <div class="account-logo text-center mb-4">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo-icon.png') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="login-header">
                        <h3>Login <span>MUSHKILASAN</span></h3>
                        <p class="text-muted">Access to admin dashboard</p>
                    </div>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Enter your email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Enter your password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <a href="#" class="btn btn-dark btn-sm" >Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.5.0.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/admin.js') }}"></script>

</body>

</html>
