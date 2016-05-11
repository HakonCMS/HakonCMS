@include("install::common.header")

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL::Route('install::info') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Hakon</b> CMS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation"></nav>
    </header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="col-md-1"></div>
            <h1>Setup</h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <!-- right column -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <!-- form start -->
                        <form action="{{ URL::Route('install::save') }}" method="POST" class="form-horizontal">

                            <div class="box-header with-border">
                                <h3 class="box-title">Project information</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="name" class="col-sm-1 control-label">Title</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Hakon CMS">
                                    </div>
                                </div>

                            </div>

                            <div class="box-header with-border">
                                <h3 class="box-title">Admin information</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="user_name" class="col-sm-1 control-label">Name</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Kevin Smith">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user_username" class="col-sm-1 control-label">Username</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="user_username" name="user_username" placeholder="hakoncms">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user_email" class="col-sm-1 control-label">E-mail</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="user_email" name="user_email" placeholder="hakoncms@efuzyon.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user_password" class="col-sm-1 control-label">Password</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="user_password" name="user_password" placeholder="69#8dc1@9d4##89">
                                    </div>
                                </div>

                            </div>

                            <div class="box-header with-border">
                                <h3 class="box-title">Database</h3>
                                <small>(MySQL)</small>
                            </div><!-- /.box-header -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="host" class="col-sm-1 control-label">Host</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="host" name="host" placeholder="localhost">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="host" class="col-sm-1 control-label">Port</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="port" name="port" placeholder="3306">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="host" class="col-sm-1 control-label">Database</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="database" name="database" placeholder="HakonCMS">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-1 control-label">Username</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="root">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-sm-1 control-label">Password</label>
                                    <div class="col-sm-11">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="root">
                                    </div>
                                </div>

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ URL::Route("install::setup") }}" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-info pull-right">Next &raquo;</button>
                            </div><!-- /.box-footer -->
                        </form>
                    </div><!-- /.box -->
                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer" style="margin-left: 0;">
        <div class="pull-right hidden-xs">
            <b>Version</b> {{ $application->project->version }}
        </div>
        <strong><a href="http://github.com/HakonCMS/HakonCMS/" target="_blank">Hakon CMS</a></strong>
        <small>created by <a href="http://github.com/efuzyon/" target="_blank">eFuzyon Technology</a></small>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

@include("install::common.footer")