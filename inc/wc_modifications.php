<?php

function the_store_wc_modify() {
	/**
	 * Remove the shop title
	 */
	add_filter( 'woocommerce_show_page_title', 'the_store_remove_shop_title' );
	function the_store_remove_shop_title() {
		return false;
	}

	/**
	 * Modify WooCommerce opening and closing HTML tags
	 * We need Bootstrap-like opening/closing HTML tags
	 */
	add_action( 'woocommerce_before_main_content', 'the_store_open_container_row', 5 );
	function the_store_open_container_row() {
		echo '<div class="container shop-container"><div class="row">';
	}

	add_action( 'woocommerce_after_main_content', 'the_store_close_container_row', 11 );
	function the_store_close_container_row() {
		echo '</div></div>';
	}


	/**
	 * Remove the main WC sidebar from its original position
	 * We'll be including it somewhere else later on
	 */
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );

	if ( is_shop() ) {
		add_action( 'woocommerce_before_main_content', 'the_store_open_sidebar_tag', 6 );
		function the_store_open_sidebar_tag() {
			echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
		}
		/**
		 * Put the main WC sidebar back, but using other action hook and on a different position
		 */
		add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );
		add_action( 'woocommerce_before_main_content', 'the_store_close_sidebar_tag', 8 );
		function the_store_close_sidebar_tag() {
			echo '</div>';
		}
	}


	/**
	 * Modify HTML tags on a shop page. We also want Bootstrap-like markup here (.primary div)
	 */
	add_action( 'woocommerce_before_main_content', 'the_store_open_primary_tag', 9 );
	function the_store_open_primary_tag() {
		echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
	}

	add_action( 'woocommerce_after_main_content', 'the_store_close_primary_tag', 10 );
	function the_store_close_primary_tag() {
		echo '</div>';
	}
}

add_action( 'wp', 'the_store_wc_modify' );



