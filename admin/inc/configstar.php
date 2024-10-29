<?php
/**
 * Configstar.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.
/**
 *
 * CSFramework Config
 *
 * @since 1.0
 * @version 1.0
 */
function aitasi_options_settings( $settings ) {

	// Framework Settings
	$settings = array(
		'menu_title' => __( 'Aitasi Options', 'aitasi' ),
		'menu_type'  => 'add_menu_page',
		'menu_slug'  => 'aitasi-options',
		'ajax_save'  => true,
	);

	return $settings;
}


add_filter( 'cs_framework_settings', 'aitasi_options_settings' );

// framework options filter example
function extra_cs_framework_options( $options ) {

	// Framework Options
	$options = array(); // remove old options

	// CSFramework::instance( $settings, $options );
	//

	/*
	Main Setting and Home Section
	===================================*/
	$options[] = array(
		'name'   => 'aitasi_main_setting_area',
		'title'  => __( 'Main Settings', 'aitasi' ),
		'icon'   => 'fa fa-wrench',
		'fields' => array(

			// My fields
								array(
									'id'      => 'aitasi_main_setting',
									'type'    => 'select',
									'title'   => __( 'Plugin Mode', 'aitasi' ),
									'desc'    => __( 'Select plugin mode Coming Soon to activate the plugin and Off to deactivate.', 'aitasi' ),
									'options' => array(
										'off'     => 'Off',
										'enabled' => 'Coming Soon',
									),
									'default' => 'off',
								),

			array(
				'type'       => 'heading',
				'content'    => __( 'Metas', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'         => 'aitasi_site_title',
				'type'       => 'text',
				'title'      => 'Meta Title*',
				'desc'       => __( 'Used as the Site Title and window/tab title', 'aitasi' ),
				'after'      => __( '<p class="cs-text-info">Type the text to the meta title</p> ', 'aitasi' ),
				'default'    => 'Aitasi - Coming Soon Plugin',
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'                         => 'aitasi_keyword_content',
				'type'                       => 'textarea',
				'title'                      => __( 'Meta Keywords', 'aitasi' ),
				'attributes'                 => array(
					'rows' => 5,
				),
								'desc'                       => __( 'Type the text to the meta keywords', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'                         => 'aitasi_description_content',
				'type'                       => 'textarea',
				'title'                      => __( 'Meta Description', 'aitasi' ),
				'attributes'                 => array(
					'rows' => 5,
				),
				'desc'       => __( 'Type the text to the meta description ', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'         => 'aitasi_favicon',
				'type'       => 'image',
				'title'      => __( 'Favicon Image', 'aitasi' ),
				'desc'       => __( 'Upload favicon image,width and height 16px X 16px or 32px X 32px', 'aitasi' ),
				'after'      => __( '<p>Image format must be one of PNG, GIF and ICO.</p>', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'         => 'aitasi_pre_loader',
				'type'       => 'switcher',
				'title'      => __( 'Show Pre-loader Image', 'aitasi' ),
				'desc'       => __( 'On the switch to show pre-loader image', 'aitasi' ),
				'default'    => true,
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),

			array(
				'type'       => 'heading',
				'content'    => __( 'Main Contents', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'         => 'aitasi_logo',
				'type'       => 'image',
				'title'      => __( 'Main Logo', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),

			array(
				'id'                         => 'aitasi_main_titles',
				'type'                       => 'wysiwyg',
				'title'                      => __( 'Main Titles', 'aitasi' ),
				'desc'                       => __(
					'Write the Main titles. Use <span class="cs-text-info">Heading1</span> and <span class="cs-text-info">Heading2</span> to get
 the demo style.',
					'aitasi'
				),
				'sanitize'   => true,
				'default'    => __(
				'<h2>We are currently working on awesome new site.</h2><h1>Stay tuned!</h1>',
				'aitasi'
),
				'settings'   => array(
				'textarea_rows' => 5,
				'media_buttons' => false,
),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),

			array(
				'id'         => 'aitasi_countdown_heading',
				'type'       => 'heading',
				'content'    => __( 'Countdown Date Settings', 'aitasi' ),
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'         => 'aitasi_countdown_on',
				'type'       => 'switcher',
				'title'      => __( 'Show Countdown Timer', 'aitasi' ),
				'default'    => true,
				'dependency' => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
			),
			array(
				'id'                         => 'aitasi_countdown_date',
				'type'                       => 'text',
				'title'                      => __( 'Countdown Date', 'aitasi' ),
				'attributes'                 => array(
					'placeholder' => 'Y-m-d',
				),
				'default'    => '2025-9-15',
				'class'      => 'aitasi_date',
				'after'      => '<p class="cs-text-info">Year-Month-Day.</p> ',
				'dependency' => array( 'aitasi_main_setting|aitasi_countdown_on', '==|==', 'enabled|true' ),
								/*dependency rule*/
			),

			array(
				'id'              => 'aitasi_social_links',
				'type'            => 'group',
				'title'           => __( 'Social Links', 'aitasi' ),
				'button_title'    => __( 'Add New Social', 'aitasi' ),
				'accordion_title' => __( 'Add New Social Link', 'aitasi' ),
				'dependency'      => array( 'aitasi_main_setting', '==', 'enabled' ), // dependency rule
				'fields'          => array(

					array(
						'id'      => 'aitasi_social_links_icon',
						'type'    => 'icon',
						'title'   => __( 'Social Icon', 'aitasi' ),
						'default' => 'fa fa-twitter',
					),
					array(
						'id'      => 'aitasi_social_links_url',
						'type'    => 'text',
						'title'   => __( 'Social Profile URL', 'aitasi' ),
						'default' => '#',
					),

				),
			),

		),
	);

	// Background and style settings
	// ========================================
	$options[] = array(
		'name'   => 'aitasi_style_settings',
		'title'  => __( 'Stylization', 'aitasi' ),
		'icon'   => 'fa fa-paint-brush',
		'fields' => array(

			// Image Background

			array(
				'id'        => 'aitasi_home_image_background',
				'type'      => 'image',
				'title'     => __( 'Set Background Image', 'aitasi' ),
				'add_title' => __( 'Add Image', 'aitasi' ),

			),

			array(
				'id'      => 'aitasi_home_image_background_attachment',
				'type'    => 'select',
				'title'   => __( 'Background Image Attachment', 'aitasi' ),
				'options' => array(
					'fixed'  => __( 'Fixed', 'aitasi' ),
					'scroll' => __( 'Scroll', 'aitasi' ),
				),
				'default' => 'scroll',
			),

			array(
				'id'      => 'aitasi_home_image_background_ol',
				'type'    => 'color_picker',
				'title'   => __( 'Background Overlay Color', 'aitasi' ),
				'default' => 'rgba(0,0,0,0.7)',
				'rgba'    => true,

			),
			array(
				'type'    => 'heading',
				'content' => __( 'Brand Color', 'aitasi' ),
			),
			array(
				'id'      => 'aitasi_main_brand_color',
				'type'    => 'color_picker',
				'title'   => __( 'Main Color', 'aitasi' ),
				'desc'    => __( 'Used as main color', 'aitasi' ),
				'default' => '#48b4ff',
			),

			array(
				'id'      => 'aitasi_main_brand_hover_color',
				'type'    => 'color_picker',
				'title'   => __( 'Hover Color', 'aitasi' ),
				'desc'    => __( 'Used as mouse over color', 'aitasi' ),
				'default' => '#1FA3FF',
			),

		),
	);

	return $options;
}

add_filter( 'cs_framework_options', 'extra_cs_framework_options' );
