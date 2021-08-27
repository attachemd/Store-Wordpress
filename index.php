<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The Store
 */

get_header();
?>

<!-- Start Landing Page Image -->
<div class="landing">
    <div class="home-wrap">
        <div class="home-inner"></div>
    </div>
</div>
<!-- End Landing Page Image -->
<!-- Start Landing Page Caption -->
<div class="caption text-light text-uppercase">
    <h1 class="font-weight-bold animate__animated animate__bounceInUp animate__delay-1s">
        welcome to <span class="text-store">the store</span>
    </h1>
    <h3 class="animate__animated animate__bounceInUp animate__delay-2s">
        animated bootstrap theme
    </h3>
    <div class="go-shop animate__animated animate__bounceInUp animate__delay-3s">
        <button type="button" class="btn btn-default btn-circle me-3">
            <i class="icon-right-arrow"></i>
        </button>
        <span>shop now</span>
    </div>
</div>
<!-- End Landing Page Caption -->

<div id="feature">
    <!-- Start Jumbotron -->
    <div class="jumbotron pt-5">

        <div class="container">
            <div class="row px-lg-4 px-xl-5">
                <div class="col-md-4 feature">

                    <div class="shop-number">01</div>
                    <div class="shop-separator">
                        <div class="cntnr">
                            <hr>
                        </div>
                    </div>
                    <div class="shop-content">
                        <h3 class="text-capitalize">free shipping</h3>
                        <p class="lead">shipping on all order with Local Area order above $200</p>
                    </div>
                </div> <!-- End Feature -->
                <div class="col-md-4 feature">

                    <div class="shop-number">02</div>
                    <div class="shop-separator">
                        <div class="cntnr">
                            <hr>
                        </div>
                    </div>
                    <div class="shop-content">
                        <h3 class="text-capitalize">26/7 Support</h3>
                        <p class="lead">Our Customer Support Team is Ready an available to help</p>
                    </div>
                </div> <!-- End Feature -->
                <div class="col-md-4 feature">

                    <div class="shop-number">03</div>
                    <div class="shop-separator">
                        <div class="cntnr">
                            <hr>
                        </div>
                    </div>
                    <div class="shop-content">
                        <h3 class="text-capitalize">30 Days Return</h3>
                        <p class="lead">Your Product any Fault within 30 days for an exchange</p>
                    </div>
                </div> <!-- End Feature -->


            </div><!-- End Row-->
        </div> <!--End Container-->
    </div>
    <!-- End Jumbotron -->
</div>
<div class="selected-products">
    <div class="row">
        <div class="col-12">
            <h3 class="heading py-5 px-3">Selected just for you</h3>
        </div>
        <div class="container">
            <div id="products-carousel" class="owl-carousel owl-theme">
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/farlov.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>Home office comfy chair</h4>
                        <h5>$69.99</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/white-sofa.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>White sofa</h4>
                        <h5>$119.99</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/green-sofa.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>Green couch sofa</h4>
                        <h5>$149.99</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('/img/white-chair.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>White chair</h4>
                        <h5>$69.99</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Jumbotron -->
<div class="jumbotron pt-5">

    <div class="container">
        <div class="row px-lg-4 px-xl-5">

            <div class="col-md-6 col-lg-3 choose-us">
                <div class="shop-icon icon-free-shipping"></div>
                <div class="shop-content">
                    <h3 class="text-capitalize">free shipping</h3>
                    <p class="lead">All purchases over $399 are eligible for free shipping via UPS Pack and Ship.</p>
                </div>
            </div> <!-- End Feature -->
            <div class="col-md-6 col-lg-3 choose-us">
                <div class="shop-icon icon-mobile-payment"></div>
                <div class="shop-content">
                    <h3 class="text-capitalize">Easy Payments</h3>
                    <p class="lead">All payments are processed instantly over a secure payment protocol.</p>
                </div>
            </div> <!-- End Feature -->
            <div class="col-md-6 col-lg-3 choose-us">
                <div class="shop-icon icon-money-back"></div>
                <div class="shop-content">
                    <h3 class="text-capitalize">Money-Back Guarantee</h3>
                    <p class="lead">If an item arrived damaged or you've changed your mind, you can send it back for a
                        full refund.</p>
                </div>
            </div> <!-- End Feature -->
            <div class="col-md-6 col-lg-3 choose-us">
                <div class="shop-icon icon-quality"></div>
                <div class="shop-content">
                    <h3 class="text-capitalize">Finest Quality</h3>
                    <p class="lead">Designed to last, each of our products has been crafted with the finest
                        materials.</p>
                </div>
            </div> <!-- End Feature -->


        </div><!-- End Row-->
    </div> <!--End Container-->
</div>
<!-- End Jumbotron -->

<div class="selected-products">
    <div class="row">
        <div class="col-12">
            <h3 class="heading py-5 px-3">Products in today</h3>
        </div>
        <div class="container">
            <div id="products-carousel2" class="owl-carousel owl-theme">
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/gray-chair.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>Home office comfy chair</h4>
                        <h5>$69.99</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/wood-chair.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>White sofa</h4>
                        <h5>$119.99</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/table.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>Green couch sofa</h4>
                        <h5>$149.99</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img src="<?php echo get_theme_file_uri('img/wardrobe.png') ?>" alt="" class="card-img-top rounded-0">
                    </a>
                    <div class="card-body">
                        <h4>White chair</h4>
                        <h5>$69.99</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container newsletter my-5 px-5">
    <div class="newsletter-bg"></div>
    <div class="row align-items-center">
        <div class="col-md-5 text-light pe-5 newsletter-txt">
            Subscribe to our newsletter and receive exclusive offers every week
        </div>
        <div class="col-md-7">
            <form action="" class="newsletter-form">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <input type="submit" value="Subscribe" class="ms-3 submit">
            </form>
        </div>
    </div>

</div>

<?php
get_footer();
?>
