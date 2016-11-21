<?php 

defined( 'ABSPATH' )
 or die ( 'No direct load !' );

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
        'id'    => 'Wp_about_admin',
        'title' => 'Administrateur',
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_admin"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_editor',
        'title' => 'Editeur',
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_editor"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_author',
        'title' => 'Auteur',
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_author"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_contributor',
        'title' => 'Contributeur',
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_contributor"
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
        'Administrateur - ' . $plugin_name,
        'Administrateur',
        $plugin_capability,
        'wp_about_admin',
        'wp_informations_about_admin'
        );
    add_submenu_page( 
        $plugin_menu_slug,
        'Editeur - ' . $plugin_name,
        'Editeur',
        $plugin_capability,
        'wp_about_editor',
        'wp_informations_about_editor'
        );
    add_submenu_page(
        $plugin_menu_slug,
        'Auteur - '. $plugin_name,
        'Auteur',
        $plugin_capability,
        'wp_about_author',
        'wp_informations_about_author'
        );
    add_submenu_page(
        $plugin_menu_slug,
        'Contributeur - '. $plugin_name,
        'Contributeur',
        $plugin_capability,
        'wp_about_contributor',
        'wp_informations_about_contributor'
        );
 }  
add_action('admin_menu', 'wp_informations_submenu');

// Contenu de la Settings Page Principale
function wp_informations_settings() {
    wp_register_style( 'add_admin_CSS', plugins_url('../../library/css/styles.css', __FILE__) );
    wp_enqueue_style( 'add_admin_CSS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    ?>
    <br/>
    <h1>WP Informations</h1>
    <br>
    <section>
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_admin_principal.php' ); ?>
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_editor_principal.php' ); ?>
    </section>
    <section>
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_author_principal.php' ); ?>
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_contributor_principal.php' ); ?>
    </section>
    <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_footer.php' );
}

// Content du submenu admin
function wp_informations_about_admin() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_admin.php' );
}

// Contenu du submenu editor
function wp_informations_about_editor() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_editor.php' );
}

// Contenu du submenu author
function wp_informations_about_author() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_author.php' );
}

// Contenu du submenu contributor
function wp_informations_about_contributor() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_contributor.php' );
}


// Initialisation des données de option.php pour admin
function wp_informations_settings_admin() {
	register_setting( 'wp_information_settings_group_admin', 'wp-info-name-admin' );
    register_setting( 'wp_information_settings_group_admin', 'wp-info-twitter-admin' );
    register_setting( 'wp_information_settings_group_admin', 'wp-info-facebook-admin' );
	register_setting( 'wp_information_settings_group_admin', 'wp-info-tel-admin' );
	register_setting( 'wp_information_settings_group_admin', 'wp-info-email-admin' );
	register_setting( 'wp_information_settings_group_admin', 'wp-info-photo-admin' );
}
add_action( 'admin_init', 'wp_informations_settings_admin' );

// Initialisation des données de option.php pour EDITOR
function wp_informations_settings_editor() {
    register_setting( 'wp_information_settings_group_editor', 'wp-info-name-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-twitter-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-facebook-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-tel-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-email-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-photo-editor' );
}
add_action( 'admin_init', 'wp_informations_settings_editor' );

// Initialisation des données de option.php pour AUTHOR
function wp_informations_settings_author() {
    register_setting( 'wp_information_settings_group_author', 'wp-info-name-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-twitter-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-facebook-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-tel-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-email-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-photo-author' );
}
add_action( 'admin_init', 'wp_informations_settings_author' );

// Initialisation des données de option.php pour CONTRIBUTOR
function wp_informations_settings_contributor() {
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-name-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-twitter-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-facebook-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-tel-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-email-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-photo-contributor' );
}
add_action( 'admin_init', 'wp_informations_settings_contributor' );