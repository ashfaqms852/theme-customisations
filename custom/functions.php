<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

add_action( 'init', 'jk_remove_storefront_header_search' );

function jk_remove_storefront_header_search() {
	remove_action( 'storefront_header', 'storefront_product_search', 40 ); 
}