<?php
require_once('lib/admin/admin.php');

require_once('lib/functions/head.php');
require_once('lib/functions/pankuzu.php');
require_once('lib/functions/glnavi.php');
require_once('lib/functions/home.php');
require_once('lib/functions/data.php');
require_once('lib/functions/footer.php');
require_once('lib/functions/func.php');
require_once('lib/functions/custom_menu.php');

add_action( 'admin_menu', 'astemp_constants', 10 );

function astemp_constants() {
	/** Define Directory Location Constants */
	define( 'ASTEMP_PARENT_DIR', get_template_directory() );
	define( 'ASTEMP_CHILD_DIR', get_stylesheet_directory() );
	define( 'ASTEMP_IMAGES_DIR', ASTEMP_PARENT_DIR . '/images' );
	define( 'ASTEMP_LIBRARY_DIR', ASTEMP_PARENT_DIR. '/lib' );
	define( 'ASTEMP_ADMIN_DIR', ASTEMP_LIBRARY_DIR . '/admin' );
	define( 'ASTEMP_ADMIN_IMAGES_DIR', ASTEMP_ADMIN_DIR . '/images' );
	define( 'ASTEMP_ADMIN_JS_DIR', ASTEMP_ADMIN_DIR . '/js' );
	define( 'ASTEMP_ADMIN_CSS_DIR', ASTEMP_ADMIN_DIR . '/css' );
	define( 'ASTEMP_JS_DIR', ASTEMP_LIBRARY_DIR . '/js' );
	define( 'ASTEMP_CSS_DIR', ASTEMP_LIBRARY_DIR . '/css' );	
	define( 'ASTEMP_FUNCTIONS_DIR', ASTEMP_LIBRARY_DIR . '/functions' );
	define( 'ASTEMP_SHORTCODES_DIR', ASTEMP_LIBRARY_DIR . '/footer_info' );
	define( 'ASTEMP_STRUCTURE_DIR', ASTEMP_LIBRARY_DIR . '/structure' );
	if ( ! defined( 'ASTEMP_LANGUAGES_DIR' ) ) /** So we can define with a child theme */
		define( 'ASTEMP_LANGUAGES_DIR', ASTEMP_LIBRARY_DIR . '/languages' );
	define( 'ASTEMP_WIDGETS_DIR', ASTEMP_LIBRARY_DIR . '/widgets' );

	/** Define URL Location Constants */
	define( 'ASTEMP_PARENT_URL', get_template_directory_uri() );
	define( 'ASTEMP_CHILD_URL', get_stylesheet_directory_uri() );
	define( 'ASTEMP_IMAGES_URL', ASTEMP_PARENT_URL . '/images' );
	define( 'ASTEMP_LIBRARY_URL', ASTEMP_PARENT_URL . '/lib' );
	define( 'ASTEMP_ADMIN_URL', ASTEMP_LIBRARY_URL . '/admin' );
	define( 'ASTEMP_ADMIN_IMAGES_URL', ASTEMP_ADMIN_URL . '/images' );
	define( 'ASTEMP_ADMIN_JS_URL', ASTEMP_ADMIN_URL . '/js' );
	define( 'ASTEMP_ADMIN_CSS_URL', ASTEMP_ADMIN_URL . '/css' );
	define( 'ASTEMP_JS_URL', ASTEMP_LIBRARY_URL . '/js' );
	define( 'ASTEMP_CSS_URL', ASTEMP_LIBRARY_URL . '/css' );
	define( 'ASTEMP_FUNCTIONS_URL', ASTEMP_LIBRARY_URL . '/functions' );
	define( 'ASTEMP_SHORTCODES_URL', ASTEMP_LIBRARY_URL . '/footer_info' );
	define( 'ASTEMP_STRUCTURE_URL', ASTEMP_LIBRARY_URL . '/structure' );
	if ( ! defined( 'ASTEMP_LANGUAGES_URL' ) ) /** So we can predefine to child theme */
		define( 'ASTEMP_LANGUAGES_URL', ASTEMP_LIBRARY_URL . '/languages' );
	define( 'ASTEMP_WIDGETS_URL', ASTEMP_LIBRARY_URL . '/widgets' );

}

//絵文字削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');