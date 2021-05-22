<?php $__env->startSection('content'); ?>
  <div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Cart Page</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="cart-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cart-page-top table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td class="cart-form-heading"></td>
                                <td class="cart-form-heading">Product</td>
                                <td class="cart-form-heading">Price</td>
                                <td class="cart-form-heading">Quantity</td>
                                <td class="cart-form-heading">Total</td>
                                <td class="cart-form-heading"></td>
                            </tr>
                        </thead>
                        <tbody id="quantity-holder">
                            <tr>
                                <td class="cart-img-holder">
                                    <a href="product-details1.html"><img src="img/product/cart1.jpg" alt="cart" class="img-responsive"></a>
                                </td>
                                <td>
                                    <h3><a href="product-details1.html">Product Title Name</a></h3>
                                </td>
                                <td class="amount">$59.00</td>
                                <td class="quantity">
                                    <div class="input-group quantity-holder">
                                        <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="amount">$59.00</td>
                                <td class="dismiss"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td class="cart-img-holder">
                                    <a href="product-details2.html"><img src="img/product/cart2.jpg" alt="cart" class="img-responsive"></a>
                                </td>
                                <td>
                                    <h3><a href="product-details2.html">Product Title Name</a></h3>
                                </td>
                                <td class="amount">$59.00</td>
                                <td class="quantity">
                                    <div class="input-group quantity-holder">
                                        <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="amount">$59.00</td>
                                <td class="dismiss"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="update-button">
                        <button class="btn-apply-coupon disabled" type="submit" value="Login">Update Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="cart-page-bottom-right">
                    <h2>Total</h2>
                    <h3>Subtotal<span>$ 118.00</span></h3>
                    <h3>Total<span>$ 118.00</span></h3>
                    <div class="proceed-button">
                        <button class="btn-apply-coupon disabled" type="submit" value="Login">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/cart.blade.php ENDPATH**/ ?>