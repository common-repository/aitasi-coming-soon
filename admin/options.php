<?php

if ( ! class_exists( 'ps_aitasi_settings' ) ) :
	class ps_aitasi_settings {

		private $settings_api;

		function __construct() {
			$this->settings_api = new SP_Aitasi_Settings_API();

			add_action( 'admin_init', array( $this, 'admin_init' ) );
			add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		}

		function admin_init() {

			// set the settings
			$this->settings_api->set_sections( $this->get_settings_sections() );
			$this->settings_api->set_fields( $this->get_settings_fields() );

			// initialize settings
			$this->settings_api->admin_init();
		}

		function admin_menu() {
			add_options_page( 'Aitasi Settings', 'Aitasi Settings', 'delete_posts', 'sp_aitasi_settings', array( $this, 'plugin_page' ) );
		}

		function get_settings_sections() {
			$sections = array(
				array(
					'id'    => 'aitasi_general_settings',
					'title' => __( 'General Settings', 'shaped_plugin' ),
				),
				array(
					'id'    => 'coming_soon',
					'title' => __( 'Countdown Timer', 'shaped_plugin' ),
				),
			);
			return $sections;
		}

		/**
		 * Returns all the settings fields
		 *
		 * @return array settings fields
		 */
		function get_settings_fields() {
			$settings_fields = array(
				'aitasi_general_settings' => array(
					array(
						'name'  => 'aitasi_enable',
						'label' => __( 'Enable Coming Soon', 'shaped_plugin' ),
						'type'  => 'checkbox',
					),
					array(
						'name'    => 'aitasi_logo',
						'label'   => __( 'Logo', 'shaped_plugin' ),
						'desc'    => __( 'Upload your logo.', 'shaped_plugin' ),
						'type'    => 'file',
						'default' => '',
					),
					array(
						'name'    => 'brand_color',
						'label'   => __( 'Brand Color', 'shaped_plugin' ),
						'desc'    => __( 'select brand color.', 'shaped_plugin' ),
						'type'    => 'color',
						'default' => '#48B4FF',
					),
					array(
						'name'    => 'brand_hover_color',
						'label'   => __( 'Hover Color', 'shaped_plugin' ),
						'desc'    => __( 'select hover color.', 'shaped_plugin' ),
						'type'    => 'color',
						'default' => '#1ea1ff',
					),
				),

				'coming_soon'             => array(

					array(
						'name'    => 'coming_soon_title1',
						'label'   => __( 'Title 1', 'shaped_plugin' ),
						'desc'    => __( 'Add title 1.', 'shaped_plugin' ),
						'default' => 'We are currently working on awesome new site.',
						'type'    => 'text',
					),
					array(
						'name'    => 'coming_soon_title2',
						'label'   => __( 'Title 2', 'shaped_plugin' ),
						'desc'    => __( 'Add title 2.', 'shaped_plugin' ),
						'default' => 'Stay Tuned!',
						'type'    => 'text',
					),
					array(
						'name'    => 'coming_soon_date',
						'label'   => __( 'Countdown Date', 'shaped_plugin' ),
						'desc'    => __( 'Add countdown date.', 'shaped_plugin' ),
						'type'    => 'date',
						'default' => '',
					),
					array(
						'name'  => 'aitasi_social_disable',
						'label' => __( 'Disable Social Icons', 'shaped_plugin' ),
						'type'  => 'checkbox',
					),
					array(
						'name'              => 'aitasi_facebook',
						'label'             => __( 'Facebook url', 'shaped_plugin' ),
						'desc'              => __( 'Add your facebook url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_twitter',
						'label'             => __( 'Twitter url', 'shaped_plugin' ),
						'desc'              => __( 'Add your twitter url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_google',
						'label'             => __( 'Google+ url', 'shaped_plugin' ),
						'desc'              => __( 'Add your google+ url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_youtube',
						'label'             => __( 'Youtube url', 'shaped_plugin' ),
						'desc'              => __( 'Add your youtube url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_skype',
						'label'             => __( 'Skype url', 'shaped_plugin' ),
						'desc'              => __( 'Add your skype url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_pinterest',
						'label'             => __( 'Pinterest url', 'shaped_plugin' ),
						'desc'              => __( 'Add your pinterest url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_flickr',
						'label'             => __( 'Flickr url', 'shaped_plugin' ),
						'desc'              => __( 'Add your flickr url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_linkedin',
						'label'             => __( 'Linkedin url', 'shaped_plugin' ),
						'desc'              => __( 'Add your linkedin url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_vimeo',
						'label'             => __( 'Vimeo url', 'shaped_plugin' ),
						'desc'              => __( 'Add your vimeo url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'              => 'aitasi_instagram',
						'label'             => __( 'Instagram url', 'shaped_plugin' ),
						'desc'              => __( 'Add your instagram url.', 'shaped_plugin' ),
						'type'              => 'text',
						'sanitize_callback' => 'esc_url',
					),
					array(
						'name'    => 'coming_soon_bg',
						'label'   => __( 'Countdown bg', 'shaped_plugin' ),
						'type'    => 'radio',
						'options' => array(
							'image_background' => 'Image Background',
						),
					),
					array(
						'name'    => 'coming_soon_overlay',
						'label'   => __( 'Overlay Color', 'shaped_plugin' ),
						'desc'    => __( 'Countdown Timer overlay color', 'shaped_plugin' ),
						'type'    => 'rgbacolor',
						'default' => 'rgba(0, 0, 0, 0.7)',
					),
					array(
						'name'    => 'coming_soon_image_background',
						'label'   => __( 'Background Image', 'shaped_plugin' ),
						'desc'    => __( 'Add background image', 'shaped_plugin' ),
						'type'    => 'file',
						'default' => '',
					),

				),

			);

			return $settings_fields;
		}

		function plugin_page() {
			echo '<div class="wrap">';

			$this->settings_api->show_navigation();
			$this->settings_api->show_forms();

			echo '</div>';
		}

		/**
		 * Get all the pages
		 *
		 * @return array page names with key value pairs
		 */
		function get_pages() {
			$pages         = get_pages();
			$pages_options = array();
			if ( $pages ) {
				foreach ( $pages as $page ) {
					$pages_options[ $page->ID ] = $page->post_title;
				}
			}

			return $pages_options;
		}


	}
endif;
