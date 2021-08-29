<?php
/*
 * Template Name: Home Page
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
            <h3 class="heading py-5 px-3">Products in today</h3>
        </div>
        <div class="container">
            <div id="products-carousel" class="owl-carousel owl-theme">

                <?php

                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 5,
                    'stock' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>

                        <div class="card">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0')) ?>
                                <?php endif; ?>
                            </a>
                            <div class="card-body">
                                <h4><?php the_title(); ?></h4>
                                <?php
                                global $woocommerce;
                                $currency = get_woocommerce_currency_symbol();
                                $_product = wc_get_product(get_the_ID());
                                ?>
                                <h5><?php echo esc_html($currency);
                                    echo esc_html($_product->get_price()); ?></h5>
                            </div>
                        </div>

                    <?php
                    endwhile;
                } else {
                    echo __('No products found');
                }
                wp_reset_postdata();

                ?>
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
            <h3 class="heading py-5 px-3">Selected just for you</h3>
        </div>
        <div class="container">
            <div id="products-carousel3" class="owl-carousel owl-theme">

                <?php

                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 100,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field' => 'name',
                            'terms' => 'featured',
                        ),
                    ),
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>

                        <div class="card">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0')) ?>
                                <?php endif; ?>
                            </a>
                            <div class="card-body">
                                <h4><?php the_title(); ?></h4>
                                <?php
                                global $woocommerce;
                                $currency = get_woocommerce_currency_symbol();
                                $_product = wc_get_product(get_the_ID());
                                ?>
                                <h5><?php echo esc_html($currency);
                                    echo esc_html($_product->get_price()); ?></h5>
                            </div>
                        </div>

                    <?php
                    endwhile;
                } else {
                    echo __('No products found');
                }
                wp_reset_postdata();

                ?>
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
