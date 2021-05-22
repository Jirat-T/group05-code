<?php $__env->startSection('content'); ?>
<div class="inner-page-banner-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcrumb-area">
                  <h1>Adidas</h1>
                  <ul>
                      <li><a href="#">Home</a> /</li>
                      <li>Product</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="shop-page-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-3">
              <div class="sidebar hidden-after-desk">
                  <?php echo $__env->make('layouts.brand', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <h2 class="title-sidebar">BEST PRODUCTS</h2>
                  <div class="best-products sidebar-section-margin">
                    <?php $__currentLoopData = $best_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="media">
                        <a href="<?php echo e(url('detail/'.$item->product_name)); ?>" class="pull-left">
                            <img alt="<?php echo e($item->product_name); ?>" src="<?php echo e($item->product_images->path_file); ?>" class="img-responsive">
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="<?php echo e(url('detail/'.$item->product_name)); ?>"><?php echo e($item->product_name); ?></a></h3>
                            <p>฿ <?php echo e(number_format($item->price)); ?></p>
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                      <div class="inner-shop-top-left">
                          <div class="dropdown">
                              <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Date</a></li>
                                  <li><a href="#">Best Sale</a></li>
                                  <li><a href="#">Rating</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                      <div class="inner-shop-top-right">
                          <ul>
                              <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                              <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="row inner-section-space-top">
                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="product-box1">
                                <ul class="product-social">
                                    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="product-img-holder">
                                    <a href="<?php echo e(url('detail/'.$item->product_name)); ?>"><img class="img-responsive" src="<?php echo e($item->product_images->path_file); ?>" alt="<?php echo e($item->product_name); ?>"></a>
                                </div>
                                <div class="product-content-holder">
                                    <h3><a href="<?php echo e(url('detail/'.$item->product_name)); ?>"><?php echo e($item->product_name); ?></a></h3>
                                    <span>฿ <?php echo e(number_format($item->price)); ?></span>
                                </div>
                            </div>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>

                      <!-- List Style -->
                      <div role="tabpanel" class="tab-pane clear products-container" id="list-view">
												<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
														<div class="product-box2">
																<div class="media">
																		<a class="pull-left" href="<?php echo e(url('detail/'.$item->product_name)); ?>">
																				<img class="img-responsive" src="<?php echo e($item->img_temp); ?>" alt="<?php echo e($item->product_name); ?>"/>
																		</a>
																		<div class="media-body">
																				<div class="product-box2-content">
																						<h3><a href="<?php echo e(url('detail/'.$item->product_name)); ?>"><?php echo e($item->product_name); ?></a></h3>
																						<span>฿ <?php echo e(number_format($item->price)); ?></span>
																						<p><?php echo e($item->product_name); ?></p>
																				</div>
																				<ul class="product-box2-cart">
																						<li><a href="#">Add To Cart</a></li>
																						<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																				</ul>
																		</div>
																</div>
														</div>
													</div>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <ul class="mypagination">
                          <li class="active"><a href="#">1</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/welcome.blade.php ENDPATH**/ ?>