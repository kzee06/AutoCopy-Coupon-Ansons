<?php
/*
Plugin Name: AutoCopy Coupon
Description: Lightweight plugin to auto-copy coupon codes when an image is clicked.
Version: 1.0
Author: KC Cheng
*/

// Enqueue assets
function autocopy_coupon_enqueue_scripts() {
    wp_enqueue_script('autocopy-coupon-script', plugin_dir_url(__FILE__) . 'assets/js/autocopy-coupon.js', [], '1.0', true);
    wp_localize_script('autocopy-coupon-script', 'AutoCopyCouponData', [
        'coupons' => get_option('autocopy_coupon_codes', [])
    ]);
}
add_action('wp_enqueue_scripts', 'autocopy_coupon_enqueue_scripts');

// Include the admin settings
require_once plugin_dir_path(__FILE__) . 'admin/settings.php';
?>
