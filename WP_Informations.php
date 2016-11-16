<?php
/*
Plugin Name: WP Informations
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Enregistrez dès-maintenant les informations de tous les admin pour rester en contact très facilement !
Version:     1.0
Author:      Victor
Author URI:  https://developer.wordpress.org/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

// Ajouter la Settings Page à Sidebar Admin
function Wp_Plugin_Menu_Primary() {
	add_menu_page(
        // $page_title
		'WP Informations', 
        // $menu_title
		'WP Informations',
        // $capability
		'administrator',
        // $menu_slug 
		'wp_information_menu',
        // $function
		'wp_informations_settings', 
        // $icon_url
		'dashicons-businessman',
        // $position
        '100'
		);
}
add_action('admin_menu', 'Wp_Plugin_Menu_Primary');

// Ajout de la Settings page + submenu dans adminbar
function wp_informations_adminbar() {
  global $wp_admin_bar;
  $url_once = admin_url();
  $wp_admin_bar->add_menu(array(
    'id'    => 'wp_information',
    'title' => 'WP Informations',
    'href'  => $url_once . "admin.php?page=wp_information_menu"
    ) );
  $wp_admin_bar->add_menu(array(
    'id'    => 'Wp_about_dev',
    'title' => 'Développeurs',
    'parent'=> 'wp_information',
    'href'  => $url_once . "admin.php?page=wp_about_dev"
    ) );
  $wp_admin_bar->add_menu(array(
    'id'    => 'Wp_about_market',
    'title' => 'Marketing',
    'parent'=> 'wp_information',
    'href'  => $url_once . "admin.php?page=wp_about_market"
    ) ); 
}
add_action('wp_before_admin_bar_render', 'wp_informations_adminbar' );

// Ajout des submenus dans la sidebar
 function wp_informations_submenu() {
    $plugin_name = 'WP Informations';
    $plugin_capability = 'administrator';
    $plugin_menu_slug = 'wp_information_menu';

    add_submenu_page( 
        $plugin_menu_slug,
        'Développeurs - ' . $plugin_name,
        'Développeurs',
        $plugin_capability,
        'wp_about_dev',
        'wp_informations_about_dev'
        );
    add_submenu_page( 
        $plugin_menu_slug,
        'Marketing - ' . $plugin_name,
        'Marketing',
        $plugin_capability,
        'wp_about_market',
        'wp_informations_about_market'
        );
 }
add_action('admin_menu', 'wp_informations_submenu');

// Contenu de la Settings Page Principale
function wp_informations_settings() {
    wp_register_style( 'add_admin_CSS', plugins_url( '/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    ?>
    <br/>
    <h1>Ci-dessous les différentes informations des personnes selon leur spécialité</h1>
    <br>
    <section>
        <?php include_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_about_dev.php' ); ?>
        <?php include_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_about_market.php' ); ?>
    </section>
    <?php require_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_footer.php' );
}

// Content du submenu dev
function wp_informations_about_dev() {
    wp_register_style( 'add_admin_CSS', plugins_url( '/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_dev.php' );
    require_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_footer.php' );
}

// Contenu du submenu market
function wp_informations_about_market() {
    wp_register_style( 'add_admin_CSS', plugins_url( '/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_market.php' );
    require_once ( plugin_dir_path(__FILE__) . '/include/WP_Informations_footer.php' );
}

// Initialisation des données de option.php pour DEV
function wp_informations_settings_dev() {
	register_setting( 'wp_information_settings_group_dev', 'wp-info-name-dev' );
    register_setting( 'wp_information_settings_group_dev', 'wp-info-twitter-dev' );
	register_setting( 'wp_information_settings_group_dev', 'wp-info-tel-dev' );
	register_setting( 'wp_information_settings_group_dev', 'wp-info-email-dev' );
	register_setting( 'wp_information_settings_group_dev', 'wp-info-photo-dev' );
}
add_action( 'admin_init', 'wp_informations_settings_dev' );

// Initialisation des données de option.php pour MARKET
function wp_informations_settings_market() {
    register_setting( 'wp_information_settings_group_market', 'wp-info-name-market' );
    register_setting( 'wp_information_settings_group_market', 'wp-info-twitter-market' );
    register_setting( 'wp_information_settings_group_market', 'wp-info-tel-market' );
    register_setting( 'wp_information_settings_group_market', 'wp-info-email-market' );
    register_setting( 'wp_information_settings_group_market', 'wp-info-photo-market' );
}
add_action( 'admin_init', 'wp_informations_settings_market' );