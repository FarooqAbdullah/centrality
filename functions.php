<?php
/**
 * The functions file for Centrality theme
 *
 * @package Objects
 * @subpackage Centrality
 */

/********************************
    Theme Includes
********************************/
function theme_includes() {
    require("includes/navigation.php");
    require("includes/shortcodes/shortcodes.php");
    require("includes/sidebar/sidebar.php");
    require("admin/CMB2-master/init.php");
    require("admin/theme_options.php");
	require("admin/customfields/customfields.php");
}
add_action('init', 'theme_includes');

/********************************
    Theme Setup
 ********************************/
function theme_setup() {

    require_once(ABSPATH.'/wp-admin/includes/file.php');
    require_once(ABSPATH.'/wp-admin/includes/plugin.php');
    WP_Filesystem();

    $source = get_template_directory()."/plugins/";
    $destination = WP_PLUGIN_DIR;

    if(file_exists($source . "/revslider.zip") && !file_exists($destination ."/revslider.zip")) {
        copy($source . "revslider.zip", $destination . "/revslider.zip");
        $rev_result = unzip_file( $destination . "/revslider.zip", $destination);
        if($rev_result) {
            if(file_exists($destination . "/revslider.zip")) {
                unlink($destination . "/revslider.zip");
            }
            activate_plugin($destination . "/revslider/revslider.php");
        }
    }

    if(file_exists($source . "/advanced-custom-fields-pro.zip") && !file_exists($destination ."/advanced-custom-fields-pro.zip")) {
        copy($source . "advanced-custom-fields-pro.zip", $destination . "/advanced-custom-fields-pro.zip");
        $acf_result = unzip_file( $destination . "/advanced-custom-fields-pro.zip", $destination);
        if($acf_result) {
            if(file_exists($destination . "/advanced-custom-fields-pro.zip")) {
                unlink($destination . "/advanced-custom-fields-pro.zip");
            }
            activate_plugin($destination . "/advanced-custom-fields-pro/acf.php");
        }
    }
}
add_action('after_setup_theme', 'theme_setup');

/**************************
Theme Support
 **************************/
function theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
}
add_action('init', 'theme_support');

/********************************
Theme Styles and Scripts
 ********************************/
function theme_styles() {

    // Register Style Sheets
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '', '');
    wp_register_style( 'font-awesome', get_template_directory_uri().'/css/font/css/font-awesome.min.css', array('bootstrap'), '', '');
    wp_register_style( 'theme-style', get_template_directory_uri().'/css/theme.css', array('bootstrap'), '', '');
    wp_register_style( 'theme-responsive', get_template_directory_uri().'/css/theme_responsive.css', array('bootstrap'), '', '');

    // Enqueue Style Sheets
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('theme-style');
    wp_enqueue_style('theme-responsive');
}

function theme_scripts() {

    // Register Scripts
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '', true);
    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script('theme-javascript', get_template_directory_uri().'/js/theme.js', array('jquery', 'bootstrap'), '', true);

    // Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('theme-javascript');
}
function theme_styles_scripts() {
    theme_styles();
    theme_scripts();
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts');

function theme_admin_styles () {

    // Register Style Sheets
    wp_register_style( 'admin-bootstrap', get_template_directory_uri().'/admin/css/bootstrap.min.css', array(), '', '');
    wp_register_style( 'admin-font-awesome', get_template_directory_uri().'/css/font/css/font-awesome.min.css', array('admin-bootstrap'), '', '');
    wp_register_style( 'admin-theme-style', get_template_directory_uri().'/admin/css/admin_theme.css', array('admin-bootstrap'), '', '');

    // Enqueue Style Sheets
    wp_enqueue_style('admin-bootstrap');
    wp_enqueue_style('admin-font-awesome');
    wp_enqueue_style('admin-theme-style');
}
function theme_admin_scripts() {

    // Register Scripts
    wp_register_script('admin-jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '', true);
    wp_register_script('admin-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script('admin-javascript', get_template_directory_uri().'/admin/js/theme_admin.js', array('jquery'), '', true);

    // Enqueue Scripts
//    wp_enqueue_script('admin-jquery');
    wp_enqueue_script('admin-bootstrap');
    wp_enqueue_script('admin-javascript');

}

function admin_styles_scripts() {
    theme_admin_styles();
    theme_admin_scripts();
}
add_action( 'admin_enqueue_scripts', 'admin_styles_scripts');


/********************************
    Function to fetch Posts
 ********************************/
function fetch_posts($category_name=null, $orderby = '', $order = '', $posts_per_page = -1, $post_id = null){
    $arguments = array('category_name' => $category_name, 'orderby' => $orderby, 'order' => $order , 'posts_per_page' => $posts_per_page, 'p' => $post_id );
    $query = new WP_Query($arguments);
    return $query;
}
function get_post_id_from_title ($title){
    global $wpdb;
    $posttitle = $title;
    $postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );
    return $postid;
}


 
 
?>