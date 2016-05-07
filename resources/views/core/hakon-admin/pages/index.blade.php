@include('core.hakon-admin.common.signin-header')

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Hakon</b> CMS</a>
    </div><!-- /.login-logo -->
    @if(isset($messages->error))
        <div class="alert alert-danger">
            {!! $messages->error !!}
        </div>
    @endif
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ URL::Route('hakon::admin') }}" method="post">
            <div class="form-group has-feedback">
                <input name="username" class="form-control" type="text" required="" placeholder="Username"
                       value="hakoncms"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" class="form-control" type="password" required="" placeholder="Password"
                       value="hakoncms"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <hr/>
            <a href="{{ URL::Route('hakon::passwordRecovery') }}">I forgot my password</a><br>
        </div><!-- /.social-auth-links -->

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@include('core.hakon-admin.common.signin-footer');