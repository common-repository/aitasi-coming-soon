<?php
function aitasi_colors(){ ?>
	<style>
		#home-page{
			background-image: url(
			<?php
			if ( shaped_plugin_option( 'coming_soon_bg', 'coming_soon' ) == 'image_background' ) {
				echo shaped_plugin_option( 'coming_soon_image_background', 'coming_soon' );
			}
			?>
				);
		}
		.home-bg{
			background-color: <?php echo shaped_plugin_option( 'coming_soon_overlay', 'coming_soon', 'rgba(0, 0, 0, 0.7)' ); ?>;
		}
		#service-page{
			background-color: <?php echo shaped_plugin_option( 'service_bg', 'aitasi_service', '#fff' ); ?>;
		}
		#about-page{
			background-color: <?php echo shaped_plugin_option( 'team_bg', 'aitasi_team', '#262626' ); ?>;
		}
		#contact-page{
			background-color: <?php echo shaped_plugin_option( 'contact_bg', 'aitasi_contact', '#fff' ); ?>;
		}
		.footer{
			background-color: <?php echo shaped_plugin_option( 'footer_bg', 'aitasi_footer', '#262626' ); ?>;
		}

		.submit-bt, .social-shear a:hover i, .service:hover i, .member-social .facebook-icon i, .member-social .twitter-icon i, .member-social .linkedin-icon i, .member-social .google-plus-icon i, .contact-form .submit-button, .service-aro-left, .service-aro-right{
			background: <?php echo shaped_plugin_option( 'brand_color', 'aitasi_general_settings', '#48B4FF' ); ?>;
		}
		.submit-bt, .social-shear a i, .service i, .member .member-img img, .contact-form .submit-button, .tk-countdown div.days, .tk-countdown div.hours, .tk-countdown div.minutes, .tk-countdown div.seconds, .subscribe-area .form-control, .contact-form .form-control, .service-aro-icon i{
			border-color: <?php echo shaped_plugin_option( 'brand_color', 'aitasi_general_settings', '#48B4FF' ); ?>;
		}
		.social-shear a i, .service i, .member span, .aitasi a, .yt-controls a, .home-page h1, .tk-countdown div span:last-child, .service-aro-icon{
			color: <?php echo shaped_plugin_option( 'brand_color', 'aitasi_general_settings', '#48B4FF' ); ?>;
		}
		
		.submit-bt:hover, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary, .member-social .facebook-icon i:hover, .member-social .twitter-icon i:hover, .member-social .linkedin-icon i:hover, .member-social .google-plus-icon i:hover, .contact-form .submit-button:hover{
			background: <?php echo shaped_plugin_option( 'brand_hover_color', 'aitasi_general_settings', '#1ea1ff' ); ?>;
		}
		.submit-bt:hover, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary, .contact-form .submit-button:hover{
			border-color: <?php echo shaped_plugin_option( 'brand_hover_color', 'aitasi_general_settings', '#1ea1ff' ); ?>;
		}
		.yt-controls a:hover, a:hover{
			color: <?php echo shaped_plugin_option( 'brand_hover_color', 'aitasi_general_settings', '#1ea1ff' ); ?>;
		}

	</style>
	<?php
}
add_action( 'wp_head', 'aitasi_colors' );
