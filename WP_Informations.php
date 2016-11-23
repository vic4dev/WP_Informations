<?php
/**
 * Plugin Name: WP Informations
 * Description: Enregistrez dès-maintenant les informations de tous les admin pour rester en contact très facilement !
 * Version:     1.0
 * Author:      Victor de la Fouchardiere
 * Text Domain: wp_op
 */

/**
DEFINE
*/
defined( 'ABSPATH' )
 or die ( 'No direct load !' );
define( 'WP_INFORMATIONS_DIR',  plugin_dir_path( __FILE__ ) );
define( 'WP_INFORMATIONS_URL',  plugin_dir_url( __FILE__ ) );

if ( is_admin() ) {
    require_once( WP_INFORMATIONS_DIR . 'inc/admin/admin.php' );
}
/**
PLUGIN TRANSLATION
*/
function wp_informations_init() {
    load_plugin_textdomain( 
    	'wp_op', 
    	false, 
    	dirname( plugin_basename( __FILE__ ) ) . '/languages' 
    );
}

add_action( 'plugins_loaded', 'wp_informations_init' );