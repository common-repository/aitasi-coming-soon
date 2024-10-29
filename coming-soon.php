<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'aitasi' ); ?>>

	<header id="home-page">

		<div class="container-fluid home-bg">
			<div class="row">
				<div class="col-md-12 text-center home-page">

					<?php if ( shaped_plugin_option( 'aitasi_logo', 'aitasi_general_settings', '' ) ) { ?>
						<div class="main-logo">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo shaped_plugin_option( 'aitasi_logo', 'aitasi_general_settings', '' ); ?>" /></a>
						</div>
					<?php } else { ?>
						<div class="main-logo">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo aitasi_coming_soon_plugin_url; ?>/assets/images/logo.png" /></a>
						</div>
					<?php } ?>
					<?php if ( shaped_plugin_option( 'coming_soon_title1', 'coming_soon' ) ) { ?>
						<h1><?php echo shaped_plugin_option( 'coming_soon_title1', 'coming_soon', 'We are currently working on awesome new site.' ); ?></h1>
					<?php } ?>
					<?php if ( shaped_plugin_option( 'coming_soon_title2', 'coming_soon', 'Stay Tuned!' ) ) { ?>
						<h2><?php echo shaped_plugin_option( 'coming_soon_title2', 'coming_soon', 'Stay Tuned!' ); ?></h2>
					<?php } ?>

					<div class="container">
						<!-- COUNTDOWN -->      
						<div class="row">
							<div class="col-sm-12 tk-countdown">
								<div class="row">

								</div>
							</div>
						</div>
						<!-- /COUNTDOWN -->
					</div>

					<?php if ( shaped_plugin_option( 'aitasi_social_disable', 'coming_soon' ) == 'off' ) { ?>
						<div class="col-sm-12 social-shear text-center">
						<?php if ( shaped_plugin_option( 'aitasi_facebook', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_facebook', 'coming_soon' ); ?>"><i class="fa fa-facebook"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_twitter', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_twitter', 'coming_soon' ); ?>"><i class="fa fa-twitter"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_google', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_google', 'coming_soon' ); ?>"><i class="fa fa-google-plus"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_youtube', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_youtube', 'coming_soon' ); ?>"><i class="fa fa-youtube"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_skype', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_skype', 'coming_soon' ); ?>"><i class="fa fa-skype"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_pinterest', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_pinterest', 'coming_soon' ); ?>"><i class="fa fa-pinterest"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_flickr', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_flickr', 'coming_soon' ); ?>"><i class="fa fa-flickr"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_linkedin', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_linkedin', 'coming_soon' ); ?>"><i class="fa fa-linkedin"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_vimeo', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_vimeo', 'coming_soon' ); ?>"><i class="fa fa-vimeo-square"></i></a>
						<?php } ?>
						<?php if ( shaped_plugin_option( 'aitasi_instagram', 'coming_soon' ) ) { ?>
							<a href="<?php echo shaped_plugin_option( 'aitasi_instagram', 'coming_soon' ); ?>"><i class="fa fa-instagram"></i></a>
						<?php } ?>
							
						</div><!-- /.social-shear -->
					<?php } ?>
					
				</div>
			</div>

		</div>

	</header><!-- /#home-page -->

	<script type="text/javascript">
		 jQuery(function ($) {
			'use strict';

			(function () {
			  // Countdown
				$(function() {
				  var endDate = ["<?php echo shaped_plugin_option( 'coming_soon_date', 'coming_soon' ); ?>"];
				  $('.tk-countdown .row').countdown({
					date: endDate,
					render: function(data) {
					  $(this.el).html('<div><div class="days"><span>' + this.leadingZeros(data.days, 2) + '</span><span>days</span></div><div class="hours"><span>' + this.leadingZeros(data.hours, 2) + '</span><span>hours</span></div></div><div class="tk-countdown-ms"><div class="minutes"><span>' + this.leadingZeros(data.min, 2) + '</span><span>minutes</span></div><div class="seconds"><span>' + this.leadingZeros(data.sec, 2) + '</span><span>seconds</span></div></div>');
					}
				  });
				}); 
			}()); 

		});
	</script>

	<?php wp_footer(); ?>
</body>
</html>
