<?php

/********** Variation ***********/

$product = new WC_Product_Variable( get_the_ID() );
#Step 1: Get product variations
$available_variations = $product->get_available_variations();
#Step 2: Get product variation id
$variation_id = $available_variations[0]['variation_id'];
#3 Create the product object
$variation_product = new WC_Product_Variation( $variation_id );

#4 Use the variation product object to get the variation prices
echo " ### regular_price: " . $variation_product->regular_price;
echo " | sale_price: " . $variation_product->sale_price;
echo " | price: " . $variation_product->price;

/********** get_post_meta ***********/

$currency = get_woocommerce_currency_symbol();
$price    = get_post_meta( get_the_ID(), '_price', true );
$regular  = get_post_meta( get_the_ID(), '_regular_price', true );
$sale     = get_post_meta( get_the_ID(), '_sale_price', true );
?>
<h5><?php echo esc_html( $currency );
	echo esc_html( $price ); ?></h5>
<?php

/********** wc_get_product ***********/

$_product = wc_get_product( get_the_ID() );
echo " | get_regular_price: " . $_product->get_regular_price();
echo " | get_sale_price: " . $_product->get_sale_price();
echo " | get_price: " . $_product->get_price();

?>
