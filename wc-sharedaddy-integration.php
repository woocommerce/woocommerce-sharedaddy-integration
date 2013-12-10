<?php

/*
Plugin Name: WooCommerce ShareDaddy Integration
Description: Provides the integration between WooCommerce and ShareDaddy through Jetpack.
Author: WooThemes
Author URI: http://www.woothemes.com
Version: 1.0
*/

// Add the integration to WooCommerce
function wc_sharedaddy_add_integration( $integrations ) {
    global $woocommerce;

    if ( is_object( $woocommerce ) && version_compare( $woocommerce->version, '2.1-beta-1', '>=' ) ) {
        if ( class_exists('jetpack') ) {
            include_once( 'includes/class-wc-sharedaddy-integration.php' );
            $integrations[] = 'WC_ShareDaddy';
        }
    }

    return $integrations;
}

add_filter( 'woocommerce_integrations', 'wc_sharedaddy_add_integration' );
