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

function test() {
  global $wp_admin_bar;
  $url_once = admin_url();
  $wp_admin_bar->add_menu(array(
    'id'    => 'wp_information',
    'title' => 'WP Informations',
    // Parent
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
  $wp_admin_bar->add_menu(array(
    'id'    => 'Wp_about_design',
    'title' => 'Design',
    'parent'=> 'wp_information',
    'href'  => $url_once . "admin.php?page=wp_about_design"
    ) );

}

// Test
add_action('wp_before_admin_bar_render', 'test' );

function wp_informations_settings() {
    ?>
    <h3>Ci dessous les différentes informations des personnes selon leur role</h3>
    <?php  global $wp_admin_bar; var_dump($wp_admin_bar);
}

// Ajout des submenus de la Settings page
 function wp_informations_menu_dev() {

    $plugin_name = 'WP Informations';
    $plugin_capability = 'administrator';
    $plugin_menu_slug = 'wp_information_menu';

    add_submenu_page( 
        // $parent_slug
        $plugin_menu_slug,
        // $page_title
        'Développeurs - ' . $plugin_name,
        // $menu_title 
        'Développeurs',
        // $capability
        $plugin_capability,
        // $menu_slug
        'wp_about_dev',
        // $function 
        'wp_informations_about_dev'
        );
    add_submenu_page( 
        // $parent_slug
        $plugin_menu_slug,
        // $page_title
        'Marketing - ' . $plugin_name,
        // $menu_title 
        'Marketing',
        // $capability
        $plugin_capability,
        // $menu_slug
        'wp_about_market',
        // $function 
        'wp_informations_about_market'
        );
    add_submenu_page( 
        // $parent_slug
        $plugin_menu_slug,
        // $page_title
        'Design - ' . $plugin_name,
        // $menu_title 
        'Design',
        // $capability
        $plugin_capability,
        // $menu_slug
        'wp_about_design',
        // $function 
        'wp_informations_about_design'
        );
 }
add_action('admin_menu', 'wp_informations_menu_dev');


// Content du submenu dev
function wp_informations_about_dev() {
     ?>
    <h1>Informations des développeurs</h1>
    <form method="POST" action="options.php">
    <?php settings_fields( 'my-plugin-settings-group' ); ?>
    <!--     <?php //( 'my-plugin-settings-group' ); ?> -->
    <table class="form-table">

        <tr>
            <th scope="row">Prénom :</th>
            <td><input type="text" name="wp-info-name-dev" 
            value="<?php echo get_option('wp-info-name-dev'); ?>" /></td>
        </tr>

        <tr>
            <th scope="row">Pseudo @Twitter :</th>
            <td><input type="text" name="wp-info-twitter-dev" 
            value="<?php echo get_option('wp-info-twitter-dev'); ?>" /></td>
        </tr>
         
        <tr>
            <th scope="row">Numéro de téléphone :</th>
            <td><input type="tel" name="wp-info-tel-dev" 
            value="<?php echo get_option('wp-info-tel-dev'); ?>" /></td>
        </tr>
        
        <tr>
            <th scope="row">Email :</th>
            <td><input type="email" name="wp-info-email-dev" 
            value="<?php echo get_option('wp-info-email-dev'); ?>" /></td>
        </tr>

        <tr>
            <th scope="row">Rôle :</th>
            <td>
                <select name="select">
                    <option name ="test1" value="<?php echo get_option('test1'); ?>">Administrateur</option> 
                    <option name ="test2" value="<?php echo get_option('test2'); ?>">Editeur</option>
                    <option name ="test3" value="<?php echo get_option('test3'); ?>">Auteur</option>
                    <option name ="test4" value="<?php echo get_option('test4'); ?>">Contributeur</option>
                    <option name ="test5" value="<?php echo get_option('test5'); ?>">Abonné</option>
                </select>
            </td>
        </tr>

    </table>
    <?php submit_button(
        'Enregistrer les informations',
        'primary',
        'submit',
        array( 'tabindex' => '' )
        ); ?>
    </form>
<?php
}

// Contenu du submit market
function wp_informations_about_market() {
     ?>
     <h1>Informations des marketeurs</h1>
    <form method="POST" action="options.php">
        <?php settings_fields( 'my-plugin-settings-group' ); ?>
        <!--     <?php //( 'my-plugin-settings-group' ); ?> -->
        <table class="form-table">

            <tr>
                <th scope="row">Prénom :</th>
                <td><input type="text" name="wp-info-name-market" 
                value="<?php echo get_option('wp-info-name-market'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">Pseudo @Twitter :</th>
                <td><input type="text" name="wp-info-twitter-market" 
                value="<?php echo get_option('wp-info-twitter-market'); ?>" /></td>
            </tr>
             
            <tr>
                <th scope="row">Numéro de téléphone :</th>
                <td><input type="tel" name="wp-info-tel-market" 
                value="<?php echo get_option('wp-info-tel-market'); ?>" /></td>
            </tr>
            
            <tr>
                <th scope="row">Email :</th>
                <td><input type="email" name="wp-info-email-market" 
                value="<?php echo get_option('wp-info-email-market'); ?>" /></td>
            </tr>

        </table>
    <?php submit_button(
        'Enregistrer les informations',
        'primary',
        'submit',
        array( 'tabindex' => '' )
        ); ?>
    </form>
<?php
}

function wp_informations_about_design() {

}

function wp_informations_settings_register() {
	register_setting( 'my-plugin-settings-group', 'wp-info-name-dev' );
    register_setting( 'my-plugin-settings-group', 'wp-info-twitter-dev' );
	register_setting( 'my-plugin-settings-group', 'wp-info-tel-dev' );
	register_setting( 'my-plugin-settings-group', 'wp-info-email-dev' );
	register_setting( 'my-plugin-settings-group', 'wp-info-photo-dev' );

    register_setting( 'my-plugin-settings-group', 'wp-info-name-market' );
    register_setting( 'my-plugin-settings-group', 'wp-info-twitter-market' );
    register_setting( 'my-plugin-settings-group', 'wp-info-tel-market' );
    register_setting( 'my-plugin-settings-group', 'wp-info-email-market' );
    register_setting( 'my-plugin-settings-group', 'wp-info-photo-market' );

    register_setting( 'my-plugin-settings-group', 'select' );
    register_setting( 'my-plugin-settings-group', 'select' );
    register_setting( 'my-plugin-settings-group', 'select' );
    register_setting( 'my-plugin-settings-group', 'select' );
    register_setting( 'my-plugin-settings-group', 'select' );
}
add_action( 'admin_init', 'wp_informations_settings_register' );