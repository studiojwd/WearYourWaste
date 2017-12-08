/*-----------------------------------------------------------------------------------*/
/* SINGLE PRODUCTS */
/*-----------------------------------------------------------------------------------*/

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 20);

if (!function_exists('woocommerce_output_related_products')) {
	function woocommerce_output_related_products() {
	    woocommerce_related_products(4,4); // 3 products, 3 columns
	}
}

// Upsells
/*remove_action( 'woocommerce_after_single_product', 'woocommerce_upsell_display');
add_action( 'woocommerce_after_single_product', 'woocommerce_output_upsells', 20);

if (!function_exists('woocommerce_output_upsells')) {
	function woocommerce_output_upsells() {
	    woocommerce_upsell_display(4,4); // Display 3 products in rows of 3
	}
}*/