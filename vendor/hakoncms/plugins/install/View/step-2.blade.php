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
                                    <label for="user_name" class="col-sm-1 control-label">Username</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="hakoncms">
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

@include("install::common.footer")