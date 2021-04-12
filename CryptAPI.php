<?php

/*
Plugin Name: Astrapay Payment Gateway for WooCommerce
Plugin URI: https://github.com/astrapay
Description: Accept cryptocurrency payments on your WooCommerce website
Version: 1.0.4
Requires at least: 4.0
Tested up to: 5.3
WC requires at least: 2.4
WC tested up to: 3.8
Requires PHP: 5.5
Author: AstraSilicon Developers
Author URI: https://astrasilicon.io
License: MIT
*/

require_once 'define.php';

function astrapay_missing_wc_notice() {
    echo '<div class="error"><p><strong>' . sprintf( esc_html__( 'astrapay requires WooCommerce to be installed and active. You can download %s here.', 'astrapay' ), '<a href="https://woocommerce.com/" target="_blank">WooCommerce</a>' ) . '</strong></p></div>';
}


function astrapay_include_gateway($methods) {
    $methods[] = 'WC_astrapay_Gateway';
    return $methods;
}

function astrapay_loader() {
    if ( ! class_exists( 'WooCommerce' ) ) {
        add_action( 'admin_notices', 'astrapay_missing_wc_notice' );
        return;
    }

    $dirs = [
        astrapay_PLUGIN_PATH . 'controllers/',
        astrapay_PLUGIN_PATH . 'utils/',
    ];

    astrapay_include_dirs($dirs);

    $astrapay = new WC_astrapay_Gateway();
}

add_action('plugins_loaded', 'astrapay_loader');
add_filter('woocommerce_payment_gateways', 'astrapay_include_gateway');


function astrapay_include_dirs($dirs) {

    foreach ($dirs as $dir) {
        $files = astrapay_scan_dir($dir);
        if ($files === false) continue;

        foreach ($files as $f) {
            astrapay_include_file($dir . $f);
        }
    }
}

function astrapay_include_file($file) {
    if (astrapay_is_includable($file)) {
        require_once $file;
        return true;
    }

    return false;
}

function astrapay_scan_dir($dir) {
    if(!is_dir($dir)) return false;
    $file = scandir($dir);
    unset($file[0], $file[1]);

    return $file;
}

function astrapay_is_includable($file) {
    if (!is_file($file)) return false;
    if (!file_exists($file)) return false;
    if (strtolower(substr($file,-3,3)) != 'php') return false;

    return true;
}