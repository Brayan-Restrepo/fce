@extends('auth.auth')

@section('htmlheader_title')
    Iniciar Session
@endsection

@section('content')
<body class="login-page">
    <div class="login-box">
        <div class="login-logo col-lg-12">
            <center>
                <a href="{{ url('/home') }}"><b>Sistema de Gestion de Proyectos de Grado</b> </a>
            </center>
            <center>
                <a href="{{ url('/home') }}"><b>Facultad de Ciencias Economicas</b> </a>
            </center>
        </div><!-- /.login-logo -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-box-body col-lg-4 col-lg-offset-4" style='padding-top: 25px;'>
    <br>    
    <form action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <!--<div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div> /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Session</button>
            </div><!-- /.col -->
        </div>
    </form>
    <!--
    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
    </div>
        -->
    <!-- /.social-auth-links 
    <a href="{{ url('/auth/register') }}" type='button' class="btn btn-primary">Registrar</a>
    <a href="{{ url('/password/email') }}" type='button' class='btn btn-success'>Recuperar Contraseña</a>
    -->
</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('auth.scripts')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
