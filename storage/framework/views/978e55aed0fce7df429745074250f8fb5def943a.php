<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Shop</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/favicon.png')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font/flaticon.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/meanmenu.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/noUiSlider/nouislider.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color/indigo.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>

</head>
<body>
    <div class="wrapper-area">
      <header>
        <div class="header-area-style3" id="sticker">
          <div class="header-top">
            <div class="header-top-inner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="account-wishlist">
                            <ul>
                              <?php if(Auth::check()): ?>
                                <li><a href="<?php echo e(url('wishlist')); ?>"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
                                <li><a href="<?php echo e(url('account')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
                              <?php else: ?>
                                <li><a href="<?php echo e(url('register')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
                                <li><a href="<?php echo e(url('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                              <?php endif; ?>

                            </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top-inner-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-area">
                                <a href="<?php echo e(url('/')); ?>"><img class="img-responsive" src="<?php echo e(asset('images/logo.png')); ?>" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="search-area">
                              <form action="<?php echo e(url('search')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="input-group" id="adv-search">
                                  <input type="text" class="form-control" name="product" placeholder="Search Product" />
                                  <div class="input-group-btn">
                                      <div class="btn-group" role="group">
                                          <button type="submit" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                      </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <ul class="header-cart-area">
                                <li>
                                    <div class="cart-area">
                                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>0</span></a>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </header>

      <?php echo $__env->yieldContent('content'); ?>

    </div>

    <div id="preloader"></div>
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-2.2.4.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/jquery.meanmenu.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/jquery.scrollUp.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/jquery.actual.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendor/noUiSlider/nouislider.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/wNumb.js')); ?>" type="text/javascript"></script>

    <?php echo $__env->yieldContent('js'); ?>

    <script src="<?php echo e(asset('assets/js/main.js')); ?>" type="text/javascript"></script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\shop\resources\views/layouts/main.blade.php ENDPATH**/ ?>