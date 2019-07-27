<!doctype html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/wpradio/images/favicon.png" />
	<?php wp_head(); ?>
	<!--favicon-->
</head>

<body <?php body_class(); ?>>
<!--start preloader-->
<div class="preloader">
	<div class="d-table">
		<div class="d-table-cell align-middle">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
	</div>
</div>
<!--end preloader-->
<!--start header-->
<header id="header">
	<div class="container">
		<nav class="navbar navbar-light navbar-expand-lg justify-content-center">
			<a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/vendor/wpradio/images/logo.png" alt="logo"></a>
			<button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#NavbarContent">
				<span class="icofont-navigation-menu"></span>
			</button>
			<div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="NavbarContent">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item">
						<a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="1">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="2">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="3">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="4">Testimonial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="5">Faq</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="6">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="7">Contact</a>
					</li>
				</ul>
				<ul class="nav navbar-nav flex-row justify-content-center flex-nowrap download-btn">
					<li class="nav-item"><a class="nav-link" href="#product-area"><i class="icofont-cart mr-1"></i> Buy Now</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--end header-->
