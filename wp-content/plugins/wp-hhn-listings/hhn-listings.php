<?php
/**
 * Plugin Name: WP HHN Listings
 * Plugin URI: webstudioplace.com
 * Description: This plugin allows you to add a prperty listing to your WordPress website.
 * Author: Pyramid Guest
 * Author URI: webstudioplace.com
 * Version: 0.0.1
 * License: GPLv2
 */

//Exit if accessed directly
if ( ! defined( 'ABSPATH')){
    exit;
}

function dwwp_register_post_type() {

  $args = array( 'public' => true, 'lable' => 'HHN Listings');
  register_post_type( 'listing', $args);
}
add_action( 'init', 'dwwp_register_post_type');
