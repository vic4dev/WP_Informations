<?php
/**
 * Plugin Name: WP Informations
 * Description: hey !
 * Version:     1.0
 * Author:      Victor
 * Text Domain: wp_op
 */

defined( 'ABSPATH' )
 or die ( 'No direct load !' );

define( 'WP_INFORMATIONS_DIR',  plugin_dir_path( __FILE__ ) );
define( 'WP_INFORMATIONS_URL',  plugin_dir_url( __FILE__ ) );

if ( is_admin() ) {
    require_once( WP_INFORMATIONS_DIR . 'inc/admin/admin.php' );
}

function wp_informations_init() {
    load_plugin_textdomain( 
    	'wp_op', 
    	false, 
    	dirname( plugin_basename( __FILE__ ) ) . '/languages' 
    );
}

add_action( 'plugins_loaded', 'wp_informations_init' );