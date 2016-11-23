<?php 

defined( 'ABSPATH' )
 or die ( 'No direct load !' );

/**
ADDING SETTING PAGE TO THE ADMIN SIDEBAR 
*/
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

/**
ADDING SETTING PAGE & SUBMENU TO THE ADMINBAR 
*/
function wp_informations_adminbar() {
    global $wp_admin_bar;
    $url_once = admin_url();

    $wp_admin_bar->add_menu(array(
        'id'    => 'wp_information',
        'title' => __('WP Informations', 'wp_op'),
        'href'  => $url_once . "admin.php?page=wp_information_menu"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_admin',
        'title' => __('Administrator', 'wp_op'),
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_admin"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_editor',
        'title' => __('Editor', 'wp_op'),
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_editor"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_author',
        'title' => __('Author', 'wp_op'),
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_author"
    ) );
    $wp_admin_bar->add_menu(array(
        'id'    => 'Wp_about_contributor',
        'title' => __('Contributor', 'wp_op'),
        'parent'=> 'wp_information',
        'href'  => $url_once . "admin.php?page=wp_about_contributor"
    ) );
}
add_action('wp_before_admin_bar_render', 'wp_informations_adminbar' );

/**
ADDING SUBMENU TO THE ADMIN SIDEBAR 
*/
 function wp_informations_submenu() {
    $plugin_name = __('WP Informations', 'wp_op');
    $plugin_capability = 'administrator';
    $plugin_menu_slug = 'wp_information_menu';

    add_submenu_page( 
        $plugin_menu_slug,
        'Administrateur - ' . $plugin_name,
        __('Administrator', 'wp_op'),
        $plugin_capability,
        'wp_about_admin',
        'wp_informations_about_admin'
        );
    add_submenu_page( 
        $plugin_menu_slug,
        'Editeur - ' . $plugin_name,
        __('Editor', 'wp_op'),
        $plugin_capability,
        'wp_about_editor',
        'wp_informations_about_editor'
        );
    add_submenu_page(
        $plugin_menu_slug,
        'Auteur - '. $plugin_name,
        __('Author', 'wp_op'),
        $plugin_capability,
        'wp_about_author',
        'wp_informations_about_author'
        );
    add_submenu_page(
        $plugin_menu_slug,
        'Contributeur - '. $plugin_name,
        __('Contributor', 'wp_op'),
        $plugin_capability,
        'wp_about_contributor',
        'wp_informations_about_contributor'
        );
 }  
add_action('admin_menu', 'wp_informations_submenu');

/**
CONTENT OF THE SETTING PAGE
*/
function wp_informations_settings() {
    wp_register_style( 'add_admin_CSS', plugins_url('../../library/css/styles.css', __FILE__) );
    wp_enqueue_style( 'add_admin_CSS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    ?>
    <br/>
    <div id="title_primary_settings">
        <?php echo '<img src="' . plugins_url( '../../library/img/chatting.png', __FILE__ ) . '" > ';?>
        <h1>WP Informations</h1>
    </div>
    <div id="slog_donate">
        <p id="slog"><?php _e('Stay in touch with different site administrators by filling in your information according to your role.', 'wp_op');?></p>
        <a href="http://www.paypal.me/VDelaFouchardiere" ><?php echo '<img src="' . plugins_url( '../../library/img/faire-un-don-plugin-paypal.png', __FILE__ ) . '" > ';?></a>
    </div>
    <br>
    <section id="first">
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_admin_principal.php' ); ?>
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_editor_principal.php' ); ?>
    </section>
    <section id="second">
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_author_principal.php' ); ?>
        <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_contributor_principal.php' ); ?>
    </section>
    <?php require_once ( WP_INFORMATIONS_DIR . '/inc/wp_footer.php' );
}

/**
CONTENT OF THE PAGE [ADMIN]
*/
function wp_informations_about_admin() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_admin.php' );
}

/**
CONTENT OF THE PAGE [EDITOR]
*/
function wp_informations_about_editor() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_editor.php' );
}

/**
CONTENT OF THE PAGE [AUTHOR]
*/
function wp_informations_about_author() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_author.php' );
}

/**
CONTENT OF THE PAGE [CONTRIBUTOR]
*/
function wp_informations_about_contributor() {
    wp_register_style( 'add_admin_CSS', plugins_url( '../../library/css/styles.css',__FILE__ ) );
    wp_enqueue_style( 'add_admin_CSS' );
    wp_register_script( 'add_admin_JS', plugins_url( '../../library/js/script.js',__FILE__ ) );
    wp_enqueue_script( 'add_admin_JS' );
    add_action( 'wp_enqueue_scripts', 'wpp_add_assets' );
    require_once ( WP_INFORMATIONS_DIR . '/inc/wp_contributor.php' );
}


/**
DATA INITILISATION TO THE OPTIONS.PHP [ADMIN]
*/
function wp_informations_settings_admin() {
	register_setting( 'wp_information_settings_group_admin', 'wp-info-name-admin' );
    register_setting( 'wp_information_settings_group_admin', 'wp-info-twitter-admin' );
    register_setting( 'wp_information_settings_group_admin', 'wp-info-facebook-admin' );
	register_setting( 'wp_information_settings_group_admin', 'wp-info-tel-admin' );
	register_setting( 'wp_information_settings_group_admin', 'wp-info-email-admin' );
	register_setting( 'wp_information_settings_group_admin', 'wp-info-photo-admin' );
}
add_action( 'admin_init', 'wp_informations_settings_admin' );

/**
DATA INITILISATION TO THE OPTIONS.PHP [EDITOR]
*/
function wp_informations_settings_editor() {
    register_setting( 'wp_information_settings_group_editor', 'wp-info-name-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-twitter-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-facebook-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-tel-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-email-editor' );
    register_setting( 'wp_information_settings_group_editor', 'wp-info-photo-editor' );
}
add_action( 'admin_init', 'wp_informations_settings_editor' );

/**
DATA INITILISATION TO THE OPTIONS.PHP [AUTHOR]
*/
function wp_informations_settings_author() {
    register_setting( 'wp_information_settings_group_author', 'wp-info-name-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-twitter-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-facebook-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-tel-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-email-author' );
    register_setting( 'wp_information_settings_group_author', 'wp-info-photo-author' );
}
add_action( 'admin_init', 'wp_informations_settings_author' );

/**
DATA INITILISATION TO THE OPTIONS.PHP [CONTRIBUTOR]
*/
function wp_informations_settings_contributor() {
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-name-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-twitter-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-facebook-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-tel-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-email-contributor' );
    register_setting( 'wp_information_settings_group_contributor', 'wp-info-photo-contributor' );
}
add_action( 'admin_init', 'wp_informations_settings_contributor' );