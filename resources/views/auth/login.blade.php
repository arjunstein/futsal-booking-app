<!DOCTYPE html>
<html>

<head>

    @include('layouts.head_login')

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Futsal</b>App</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Masuk ke aplikasi</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                @if ($errors->has('email'))
                    <span class="help-block text-red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                        placeholder="Email / Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block text-red">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat
                                masuk
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="#">Lupa password?</a><br>
            <a href="/register" class="text-center">Belum punya akun? Daftar member disini</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    @include('layouts.script_login')

</body>

</html>
