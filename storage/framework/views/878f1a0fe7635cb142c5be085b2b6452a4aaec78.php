<?php $__env->startSection('content'); ?>
<div class="inner-page-banner-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcrumb-area">
                  <h1>Product Details</h1>
                  <ul>
                      <li><a href="#">Home</a> /</li>
                      <li>Product /</li>
                      <li>Details</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Product Details1 Area Start Here -->
<div class="product-details1-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-md-push-3">
              <div class="inner-shop-details">
                  <div class="product-details-info-area">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="inner-product-details-left">
                                  <div class="tab-content">
                                    <?php $__currentLoopData = $product_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <div class="tab-pane fade <?php echo e(($loop->index == 0) ? 'active in' : ''); ?>" id="related<?php echo e($loop->index); ?>">
                                          <a href="#" class="zoom ex1"><img alt="single" src="<?php echo e($item->path_file); ?>" class="img-responsive"></a>
                                      </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                                  <ul>
                                    <?php $__currentLoopData = $product_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li class="<?php echo e(($loop->index == 0) ? 'active' : ''); ?>">
                                        <a href="#related<?php echo e($loop->index); ?>" data-toggle="tab" aria-expanded="false"><img alt="related1" src="<?php echo e($item->path_file); ?>" class="img-responsive"></a>
                                      </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="inner-product-details-right">
                                  <h3><?php echo e($product->product_name); ?></h3>
                                  <ul>
                                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                  </ul>
                                  <p class="price">฿ <?php echo e(number_format($product->price)); ?></p>
                                  <p><?php echo e($product->title); ?></p>
                                  <div class="product-details-content">
                                      <p><span>Availability:</span> In stock</p>
                                      <p><span>Brand:</span> Adidas</p>
                                  </div>
                                  <form id="checkout-form">
                                      <ul class="inner-product-details-cart">
                                          <li>
                                              <div class="input-group quantity-holder" id="quantity-holder">
                                                  <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                  <div class="input-group-btn-vertical">
                                                      <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                      <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                  </div>
                                              </div>
                                          </li>
                                          <li><a href="#">Add To Cart</a></li>
                                          <li><a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i></a></li>
                                      </ul>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="product-details-tab-area">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <ul>
                                  <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
                                  <li><a href="#review" data-toggle="tab" aria-expanded="false">Review(0)</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="tab-content">
                                  <div class="tab-pane fade active in" id="description">
                                      <?php echo $product->detail; ?>

                                  </div>
                                  <div class="tab-pane fade" id="review">

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="featured-products-area2">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <h2 class="title-carousel">Featured Products</h2>
                          </div>
                      </div>
                      <div class="metro-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                        <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="product-box1">
                            <ul class="product-social">
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="product-img-holder">
                                <a href="<?php echo e(url('detail/'.$item->product_name)); ?>"><img src="<?php echo e($item->product_images->path_file); ?>" alt="<?php echo e($item->product_name); ?>"></a>
                            </div>
                            <div class="product-content-holder">
                                <h3><a href="<?php echo e(url('detail/'.$item->product_name)); ?>"><?php echo e($item->product_name); ?></a></h3>
                                <span>฿ <?php echo e(number_format($item->price)); ?></span>
                            </div>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-md-pull-9">
              <div class="sidebar hidden-before-tab">
                  <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
                    <?php echo $__env->make('layouts.brand', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
  <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/detail.blade.php ENDPATH**/ ?>