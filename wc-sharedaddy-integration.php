<?php

/*
Plugin Name: WooCommerce ShareDaddy Integration
Description: Provides the integration between WooCommerce and ShareDaddy through Jetpack.
Author: Coen Jacobs
Author URI: http://coenjacobs.me
Version: 0.1
*/

// Add the integration to WooCommerce
function add_sharedaddy_integration( $integrations ) {
    if ( class_exists('jetpack') ) {
        include_once( 'includes/class-wc-sharedaddy-integration.php' );
        $integrations[] = 'WC_ShareDaddy';
    }
    
    return $integrations;
}

add_filter( 'woocommerce_integrations', 'add_sharedaddy_integration' );