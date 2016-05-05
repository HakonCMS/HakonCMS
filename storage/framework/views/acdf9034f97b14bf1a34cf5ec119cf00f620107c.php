<?php echo $__env->make("core.hakon-admin.common.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="<?php echo e(URL::Route('hakon::dashboard')); ?>" class="logo">
                        <i class="icon-c-logo" style="color: white;">H</i>
                        <span>Hakon CMS</span>
                    </a> 
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="ion-navicon"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <ul class="nav navbar-nav navbar-right pull-right"></ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>

                    	<li class="text-muted menu-title">Navigation</li>

                        <?php echo e(Html::Hook("Core::Admin::Template::Menu")); ?>


                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">Dashboard</h4>
                            <p class="text-muted page-title-alt">Welcome to Hakon CMS!</p>
                        </div>
                    </div>

                    


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right" style="text-align: right!important;">
                2016 © Hakon CMS.
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

<?php echo $__env->make("core.hakon-admin.common.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>