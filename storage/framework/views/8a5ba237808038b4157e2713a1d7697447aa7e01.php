<?php echo $__env->make('core.hakon-admin.common.signin-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
    	<div class=" card-box">
            <?php if(isset($messages->error)): ?>
                <div class="alert alert-danger">
                    <?php echo $messages->error; ?>

                </div>
            <?php endif; ?>
        <div class="panel-heading"> 
            <h3 class="text-center"> Sign In to <strong class="text-custom"><?php echo e($application->project->name); ?></strong></h3>
        </div> 

        <div class="panel-body">
        <form class="form-horizontal m-t-20" action="<?php echo e(URL::Route('hakon::admin')); ?>" method="POST">
            
            <div class="form-group ">
                <div class="col-xs-12">
                    <input name="username" class="form-control" type="text" required="" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input name="password" class="form-control" type="password" required="" placeholder="Password">
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup"  name="remember" type="checkbox" value="on">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                    
                </div>
            </div>
            
            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

            <div class="form-group m-t-30 m-b-0">
                <div class="col-sm-12">
                    <a href="<?php echo e(URL::route('hakon::passwordRecovery')); ?>" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
            </div>
        </form> 
        
        </div>   
        </div>                              
        
    </div>

<?php echo $__env->make('core.hakon-admin.common.signin-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;