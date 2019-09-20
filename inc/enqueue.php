<?php

function prince_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.css' );
	wp_enqueue_style( 'splitlayout', get_template_directory_uri() . '/assets/css/splitlayout.css' );
	wp_enqueue_style( 'animations', get_template_directory_uri() . '/assets/css/animations.css' );
	wp_enqueue_style( 'responsiveslides', get_template_directory_uri() . '/assets/vendor/responsiveslides/responsiveslides.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/vendor/popup/magnific-popup.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'pe-icon-7-stroke.min', get_template_directory_uri() . '/assets/css/pe-icon-7-stroke.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery.matchHeight-min', get_template_directory_uri() . '/assets/vendor/jquery.matchHeight-min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'jquery.alterclass', get_template_directory_uri() . '/assets/vendor/jquery.alterclass.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'particles.min', get_template_directory_uri() . '/assets/vendor/particles.min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'nasa-particles', get_template_directory_uri() . '/assets/vendor/nasa-particles.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'modernizr.custom', get_template_directory_uri() . '/assets/vendor/modernizr.custom.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'typed.min', get_template_directory_uri() . '/assets/vendor/typed.min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'responsiveslides.min', get_template_directory_uri() . '/assets/vendor/responsiveslides/responsiveslides.min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'jquery.fittext', get_template_directory_uri() . '/assets/vendor/jquery.fittext.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/assets/vendor/isotope.pkgd.min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/vendor/slick/slick.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/assets/vendor/popup/jquery.magnific-popup.min.js', [ 'jquery' ], PRINCE_VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', [ 'jquery' ], PRINCE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'prince_scripts' );
