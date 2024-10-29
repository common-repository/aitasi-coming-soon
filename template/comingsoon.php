<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">

	<!-- Website Title & Description -->
	<title><?php echo cs_get_option( 'aitasi_site_title' ); ?></title>
	<meta name="keywords" content="<?php echo cs_get_option( 'aitasi_keyword_content' ); ?>">
	<meta name="description" content="<?php echo cs_get_option( 'aitasi_description_content' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1, initial-scale=1,
	minimum-scale=1"/>


	<!-- Favicon -->
	<?php
	$fav_id  = cs_get_option( 'aitasi_favicon' );
	$fav_img = wp_get_attachment_image_src( $fav_id, 'full' );
	if ( $fav_img[0] != '' ) {
		echo '<link rel="icon" type="image/png" href="' . $fav_img[0] . '">';
	}
	?>

	<!--	Google Fonts Enqueueing-->
	<!-- Google Web Fonts -->
	<link href='//fonts.googleapis.com/css?family=open-sans:100,200,300,400,600,700,800,900,
	200italic,300italic,400italic' rel='stylesheet' type='text/css'>



	<?php wp_head(); ?>
	<!-- CSS -->

	<link rel="stylesheet" href="<?php echo plugins_url( 'css/bootstrap.min.css', __FILE__ ); ?>" type="text/css"
		  media="all"/>
	<link rel="stylesheet" href="<?php echo plugins_url( 'css/font-awesome.min.css', __FILE__ ); ?>" type="text/css"
		  media="all"/>
	<link rel="stylesheet" href="<?php echo plugins_url( 'css/style.css', __FILE__ ); ?>" type="text/css" media="all"/>
	<?php
	// Color CSS
	if ( file_exists( AITASI_PATH . 'template/inc/stylization_css.php' ) ) {

		require_once AITASI_PATH . 'template/inc/stylization_css.php';
	}
	?>
</head>
<body <?php body_class( 'aitasi' ); ?>>
<?php if ( cs_get_option( 'aitasi_pre_loader' ) == 'true' ) { ?>
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div><!-- /#st-preloader -->
<?php } ?>

<?php
if ( file_exists( 'section-home.php' ) ) {

	include_once 'section-home.php';
}
			require_once 'section-home.php';
?>
<!-- JS -->
<script src="<?php echo plugins_url( 'js/jquery.min.js', __FILE__ ); ?>"></script>
<script src="<?php echo plugins_url( 'js/bootstrap.min.js', __FILE__ ); ?>"></script>
<script src="<?php echo plugins_url( 'js/countdown.js', __FILE__ ); ?>"></script>
<script src="<?php echo plugins_url( 'js/scripts.js', __FILE__ ); ?>"></script>

<?php
// Image Background


	$img_bg = cs_get_option( 'aitasi_home_image_background' );

	$attachment_img = wp_get_attachment_image_src( $img_bg, 'full' );
?>
	<style scoped>
		.aitasi #home-page {
			background-image: url(<?php echo $attachment_img[0]; ?>);
			position: relative;
			background-position: 50% 0;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: <?php echo cs_get_option( 'aitasi_home_image_background_attachment' ); ?>;
		}

		.aitasi .home-bg {
			background: <?php echo cs_get_option( 'aitasi_home_image_background_ol' ); ?>;
			z-index: 0 !important;
		}
	</style>

<?php wp_footer(); ?>
</body>
</html>
