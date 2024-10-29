<header id="home-page">
	<div class="home-bg"></div>
	<div class="container-fluid aitasi-container">
		<div class="row">
			<div class="col-md-12 text-center home-page">
				<div class="main-logo">
					<a href="<?php echo get_home_url(); ?>"><img src="
										<?php
										$logo_id         = cs_get_option( 'aitasi_logo' );
										$logo_attachment = wp_get_attachment_image_src( $logo_id, 'full' );
										echo $logo_attachment[0];
										?>
						" alt="" width="<?php echo cs_get_option( 'aitasi_logo_width' ); ?>" height="
												   <?php
													echo cs_get_option( 'aitasi_logo_height' );
													?>
						"/></a>
				</div>
				<?php
				echo cs_get_option( 'aitasi_main_titles' );
				?>
				<?php if ( cs_get_option( 'aitasi_countdown_on' ) == 'true' ) { ?>
					<div class="container">
						<!-- COUNTDOWN -->
						<div class="row">
							<div class="col-sm-12 tk-countdown">
								<div class="row">
									<div class="countdown" data-countdown="
									<?php
									_e(
										cs_get_option( 'aitasi_countdown_date' )
									);
									?>
									">
									</div>
								</div>
							</div>
						</div>
						<!-- /COUNTDOWN -->
					</div>
				<?php } ?>
				<div class="col-sm-12 social-share text-center">
					<?php
					$aitasi_socials = cs_get_option( 'aitasi_social_links' );
					if ( is_array( $aitasi_socials ) || is_object( $aitasi_socials ) ) {
						foreach ( $aitasi_socials as $aitasi_social ) {
							?>
							<a href="<?php echo esc_url( $aitasi_social['aitasi_social_links_url'] ); ?>"
							   target="_blank"><i
									class="<?php echo $aitasi_social['aitasi_social_links_icon']; ?>"></i></a>
							<?php
						}
					}
					?>


				</div><!-- /.social-shear -->
			</div>
		</div>

	</div>

</header><!-- /#home-page -->
