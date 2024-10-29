<style>

	/*--------------------------------------------------------------
	## Home Section Colors
	--------------------------------------------------------------*/

	.aitasi .home-page p,
	.aitasi .subscribe-area .form-control,
	.aitasi #subscribe .submit-bt{
		color: <?php echo cs_get_option('aitasi_home_content_color');?>;
	}


	/* --------------------------------------
	=========================================
	MAIN Brand COLOR CODE: #0196a7

	DEEP Brand COLOR CODE: #017B89
	=========================================
	----------------------------------------- */
	.aitasi .tk-countdown div span:last-child,
	.aitasi a,
	.aitasi .home-page h1,
	.aitasi .social-share a i {
		color: <?php echo cs_get_option('aitasi_main_brand_color');?>;
	}

	.aitasi .tk-countdown div.days,
	.aitasi .tk-countdown div.hours,
	.aitasi .tk-countdown div.minutes,
	.aitasi .tk-countdown div.seconds,
	.aitasi .social-share a i{
		border-color: <?php echo cs_get_option('aitasi_main_brand_color');?>;
	}


	/*Hover Color
	========================*/

	.aitasi a:hover {
		color: <?php echo cs_get_option('aitasi_main_brand_hover_color');?> !important;
	}


	.aitasi .social-share a i:hover,
	.aitasi .btn-primary:hover,
	.aitasi .btn-primary:focus,
	.aitasi .btn-primary:active,
	.aitasi .btn-primary.active,
	.aitasi .open > .dropdown-toggle.btn-primary{
		border-color: <?php echo cs_get_option('aitasi_main_brand_hover_color');?>;
	}


	.aitasi .social-share a:hover i,
	.aitasi .btn-primary:hover,
	.aitasi .btn-primary:focus,
	.aitasi .btn-primary:active,
	.aitasi .btn-primary.active,
	.aitasi .open > .dropdown-toggle.btn-primary {
		background: <?php echo cs_get_option('aitasi_main_brand_hover_color');?>;
	}

	/*====================================
		Timer CSS
	=======================================*/
	.aitasi .home-page h2,
	.aitasi .tk-countdown div span:first-child {
		color: #fff;
	}



	/* ==================
		Font Family
	=====================*/
	.aitasi body,
	.aitasi h1, .aitasi h2, .aitasi h3, .aitasi h4, .aitasi h5, .aitasi h6,
	.aitasi p {
		font-family: 'open-sans', sans-serif;
		font-weight: 400; ?>;
	}

</style>

