<?php $__env->startSection('content'); ?>
  <div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Login</h1>
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a> /</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="login-registration-page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-registration-field">
                    <h2 class="cart-area-title">Login</h2>
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <label>Email address <span style="color: #FF0000; margin-left: 0px;">*</span></label>
                        <input type="text" placeholder="E-mail" name="email"/>
                        <label>Password <span style="color: #FF0000; margin-left: 0px;">*</span></label>
                        <input type="password" placeholder="Password" name="password"/>
                        <button class="btn-send-message disabled" type="submit">Login</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/auth/login.blade.php ENDPATH**/ ?>