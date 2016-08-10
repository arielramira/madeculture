<?php
/**
functions child theme
 */

// disable product reviews
add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}
// rename product description tab
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

$tabs['description']['title'] = __( '+' );	// Rename the description tab

return $tabs;

}