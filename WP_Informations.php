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

function wp_informations_adminbar() {
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
}
add_action('wp_before_admin_bar_render', 'wp_informations_adminbar' );


// Contenu de la Settings Page Principale
function wp_informations_settings() {

    wp_register_style( 'add_admin_CSS', plugins_url( '/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    ?>
    <br/>
    <h3>Ci-dessous les différentes informations des personnes selon leur spécialité</h3>
    <br>
    <section>
        <div class="boite">
            <h2 class="role">Développeur</h2>
            <table class="form-table">
                <tr>
                    <th scope="row">Prénom :</th>
                    <td><input class="wp_information_input" type="text" name="wp-info-name-dev" 
                    value="<?php echo get_option('wp-info-name-dev'); ?>" disabled='disabled' /></td>
                </tr>

                <tr>
                    <th scope="row">Pseudo @Twitter :</th>
                    <td><input class="wp_information_input" type="text" name="wp-info-twitter-dev" 
                    value="<?php echo get_option('wp-info-twitter-dev'); ?>" disabled='disabled' /></td>
                </tr>
                 
                <tr>
                    <th scope="row">Numéro de téléphone :</th>
                    <td><input class="wp_information_input" type="tel" name="wp-info-tel-dev" 
                    value="<?php echo get_option('wp-info-tel-dev'); ?>" disabled='disabled' /></td>
                </tr>
                
                <tr>
                    <th scope="row">Email :</th>
                    <td><input class="wp_information_input" type="email" name="wp-info-email-dev" 
                    value="<?php echo get_option('wp-info-email-dev'); ?>" disabled='disabled' /></td>
                </tr>

                <tr>
                    <th scope="row">Rôle :</th>
                    <td>
                        <select name="select" disabled='disabled'>
                            <option name ="test1" value="<?php echo get_option('test1'); ?>">Administrateur</option> 
                            <option name ="test2" value="<?php echo get_option('test2'); ?>">Editeur</option>
                            <option name ="test3" value="<?php echo get_option('test3'); ?>">Auteur</option>
                            <option name ="test4" value="<?php echo get_option('test4'); ?>">Contributeur</option>
                            <option name ="test5" value="<?php echo get_option('test5'); ?>">Abonné</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p>
                <a href="admin.php?page=wp_about_dev">Modifier</a>
            </p>
        </div>
        <div class="boite">
            <h2 class="role">Marketeur</h2>
            <table class="form-table">
                <tr>
                    <th scope="row">Prénom :</th>
                    <td><input class="wp_information_input" type="text" name="wp-info-name-market" 
                    value="<?php echo get_option('wp-info-name-market'); ?>" disabled='disabled' /></td>
                </tr>

                <tr>
                    <th scope="row">Pseudo @Twitter :</th>
                    <td><input class="wp_information_input" type="text" name="wp-info-twitter-market" 
                    value="<?php echo get_option('wp-info-twitter-market'); ?>" disabled='disabled' /></td>
                </tr>
                 
                <tr>
                    <th scope="row">Numéro de téléphone :</th>
                    <td><input class="wp_information_input" type="tel" name="wp-info-tel-market" 
                    value="<?php echo get_option('wp-info-tel-market'); ?>" disabled='disabled' /></td>
                </tr>
                
                <tr>
                    <th scope="row">Email :</th>
                    <td><input class="wp_information_input" type="email" name="wp-info-email-market" 
                    value="<?php echo get_option('wp-info-email-market'); ?>" disabled='disabled' /></td>
                </tr>

                <tr>
                    <th scope="row">Rôle :</th>
                    <td>
                        <select name="select" disabled='disabled'>
                            <option name ="test1" value="<?php echo get_option('test1'); ?>">Administrateur</option> 
                            <option name ="test2" value="<?php echo get_option('test2'); ?>">Editeur</option>
                            <option name ="test3" value="<?php echo get_option('test3'); ?>">Auteur</option>
                            <option name ="test4" value="<?php echo get_option('test4'); ?>">Contributeur</option>
                            <option name ="test5" value="<?php echo get_option('test5'); ?>">Abonné</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p><a href="admin.php?page=wp_about_market">Modifier</a></p>
        </div>
    </section>
    <?php
}

// Ajout des submenus dans la sidebar
 function wp_informations_submenu() {

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
 }
add_action('admin_menu', 'wp_informations_submenu');


// Content du submenu dev
function wp_informations_about_dev() {
     ?>
    <h1>Informations des développeurs</h1>
    <form method="POST" action="options.php">
    <?php settings_fields( 'wp_information_settings_group_dev' ); ?>
    <table class="form-table">
        <tr>
            <th scope="row">Prénom :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-name-dev" 
            value="<?php echo get_option('wp-info-name-dev'); ?>" /></td>
        </tr>

        <tr>
            <th scope="row">Pseudo @Twitter :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-twitter-dev" 
            value="<?php echo get_option('wp-info-twitter-dev'); ?>" /></td>
        </tr>
         
        <tr>
            <th scope="row">Numéro de téléphone :</th>
            <td><input class="wp_information_input" type="tel" name="wp-info-tel-dev" 
            value="<?php echo get_option('wp-info-tel-dev'); ?>" /></td>
        </tr>
        
        <tr>
            <th scope="row">Email :</th>
            <td><input class="wp_information_input" type="email" name="wp-info-email-dev" 
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
        <?php settings_fields( 'wp_information_settings_group_market' ); ?>
        <!--     <?php //( 'my-plugin-settings-group' ); ?> -->
        <table class="form-table">
            <tr>
                <th scope="row">Prénom :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-name-market" 
                value="<?php echo get_option('wp-info-name-market'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">Pseudo @Twitter :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-twitter-market" 
                value="<?php echo get_option('wp-info-twitter-market'); ?>" /></td>
            </tr>
             
            <tr>
                <th scope="row">Numéro de téléphone :</th>
                <td><input class="wp_information_input" type="tel" name="wp-info-tel-market" 
                value="<?php echo get_option('wp-info-tel-market'); ?>" /></td>
            </tr>
            
            <tr>
                <th scope="row">Email :</th>
                <td><input class="wp_information_input" type="email" name="wp-info-email-market" 
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