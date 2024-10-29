<?php
/**
 * Plugin Name: Aitasi Coming Soon
 * Plugin URI: https://wordpress.org/plugins/aitasi-coming-soon/
 * Description: Aitasi Coming Soon is a modern, beautiful, Responsive and Full width professional landing page that’ll help you create a stunning coming soon page or Maintenance Mode pages instantly without any coding or design skills. You can work on your site while visitors see a “Coming Soon” or “Maintenance Mode” page. It is very easy & quick to install in your WordPress installed website.
 * Author: ShapedPlugin
 * Author URI: https://shapedplugin.com/
 * Version: 2.0.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}  // if direct access

$aitasi_version = '2.0.2';

define( 'AITASI_PATH', plugin_dir_path( __FILE__ ) );
define( 'AITASI_URL', plugin_dir_url( __FILE__ ) );


add_action( 'plugins_loaded', 'aitasi_load_textdomain' );

/*
--------------------------------------------------------------
// Load Text Domain.
--------------------------------------------------------------*/
function aitasi_load_textdomain() {
	load_plugin_textdomain( 'aitasi', false, plugin_basename( __DIR__ ) . '/languages' );
}


/*
--------------------------------------------------------------
// CodeStart Framework Inclusion
--------------------------------------------------------------*/

if ( file_exists( AITASI_PATH . 'admin/codestar-framework/cs-framework.php' ) ) {

	require_once AITASI_PATH . 'admin/codestar-framework/cs-framework.php';
}


if ( file_exists( AITASI_PATH . 'admin/inc/configstar.php' ) ) {
	require_once AITASI_PATH . 'admin/inc/configstar.php';
}

// active modules.
defined( 'CS_ACTIVE_FRAMEWORK' ) or define( 'CS_ACTIVE_FRAMEWORK', true );
defined( 'CS_ACTIVE_METABOX' ) or define( 'CS_ACTIVE_METABOX', false );
defined( 'CS_ACTIVE_SHORTCODE' ) or define( 'CS_ACTIVE_SHORTCODE', false );
defined( 'CS_ACTIVE_CUSTOMIZE' ) or define( 'CS_ACTIVE_CUSTOMIZE', false );


add_action( 'admin_enqueue_scripts', 'aitasi_script_load' );
if ( ! function_exists( 'aitasi_script_load' ) ) {
	function aitasi_script_load() {
		wp_enqueue_script( 'jquery-ui-datepicker', array( 'jquery' ) );
		wp_enqueue_script(
			'admin-scripts',
			AITASI_URL . '/admin/inc/admin-scripts.js',
			array( 'jquery' ),
			null,
			true
		);

		wp_enqueue_style( 'jquery-style', AITASI_URL . '/admin/inc/jquery-ui.css' );
	}
}

/**
 * Config
 */
if ( cs_get_option( 'aitasi_main_setting' ) == 'enabled' ) {
	if ( ! class_exists( 'AITASI_COMING_SOON' ) ) {
		class AITASI_COMING_SOON {
			function __construct() {
				$this->plugin_includes();
			}

			function plugin_includes() {
				add_action( 'template_redirect', array( &$this, 'aitasi_redirect_mm' ) );
			}

			function is_valid_page() {
				return in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) );
			}

			function aitasi_redirect_mm() {
				if ( is_user_logged_in() ) {
					// do not display maintenance page
				} elseif ( ! is_admin() && ! $this->is_valid_page() ) {
					// show maintenance page
						$this->load_sm_page();
				}
			}

			function load_sm_page() {
				header( 'HTTP/1.0 503 Service Unavailable' );
				include_once 'template/comingsoon.php';
				exit();
			}
		}

		if ( isset( $_POST['aitasi_subscriber_list'] ) ) {
			update_option( 'aitasi_subscriber_list', $_POST['aitasi_subscriber_list'] );
			header( 'Location: ' . $_SERVER['REQUEST_URI'] );
		}

		$GLOBALS['aitasi_coming_soon'] = new AITASI_COMING_SOON();
	}
}

if ( is_admin() ) : // Load only if we are viewing an admin page.

	function shaped_plugin_aitasi_register_settings() {
		// Register settings and call sanitation functions.
		register_setting( 'aitasi_p_options', 'aitasi_options', 'aitasi_validate_options' );
	}

	add_action( 'admin_init', 'shaped_plugin_aitasi_register_settings' );


endif; // EndIf is_admin().
