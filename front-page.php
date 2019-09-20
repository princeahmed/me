<?php get_header(); ?>


<div id="splitlayout" class="splitlayout close-right">
	<div class="intro">


		<!--Start Home-->
		<div class="home_type full-height">
			<div class="side side-left container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/home_2.jpg);">
				<div class="overlayer">
					<div id="particles-js"></div>
					<div class="display-table">
						<div class="display-table-cell">
							<h1 class="fit__text">I AM <span id="typed"></span></h1>
							<div id="typed-strings">
								<span>PRINCE</span> <span>DEVELOPER</span> <span>WordPress Engineer</span>
								<span>FROM BD</span>
							</div>

							<div class="more_info">

								<div class="item">
									<span class="info-title">Age : </span> <span class="info-body">22 Years</span>
								</div>


								<div class="item">
									<span class="info-title">E-mail : </span>
									<span class="info-body">israilahmed5@gmail.com</span>
								</div>

								<div class="item">
									<span class="info-title">Phone : </span>
									<span class="info-body">+8801741920985</span>
								</div>

								<div class="item">
									<span class="info-title">Freelance : </span>
									<span class="info-body">Available</span>
								</div>

								<a href="#">RESUME</a> <a href="#contact" class="goToSec">HIRE ME</a>

							</div><!--.more_info-->
						</div><!--.display-table-cell-->
					</div><!--.display-table-->

				</div><!--.overlayer-->
			</div><!--.side-->
		</div><!--.home_type-->
		<!--End Home-->


		<!--Start Menu-->
		<div class="mob-menu-overlay"></div>
		<div class="mob-menu">
			<div class="mob-menu-content">
				<div class="float-left">
					<p class="menu-title">PRINCE</p>
				</div>
				<div class="float-right">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
						<span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="side side-right">
			<div class="intro-content">
				<div class="profile">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.jpg" alt="profile">
				</div>
				<h1>
					<span>Prince Ahmed</span>
				</h1>
				<div class="menu">

					<!--Social links-->
					<div class="social-icons">
						<a href="https://facebook.com/6611.prince"> <i class="fa fa-facebook"></i> </a> <a href="#">
							<i class="fa fa-linkedin"></i> </a> <a href="mailto:israilahmed5@gmail.com">
							<i class="fa fa-envelope-o"></i></a> <a href="http://github.com/princeahmed">
							<i class="fa fa-github"></i></a> <a href="http://wordpress.org/princeahmed">
							<i class="fa fa-wordpress"></i></a>
					</div>

					<!--Menu Items-->
					<ul class="list-unstyled menu_list" id="menu">
						<li>
							<a href="#home" class="active_item">home</a>
						</li>
						<li>
							<a href="#about">about me</a>
						</li>
						<li>
							<a href="#resume">my resume</a>
						</li>
						<li>
							<a href="#services">services</a>
						</li>
						<li>
							<a href="#portfolio">portfolio</a>
						</li>
						<li>
							<a href="#blog">my blog</a>
						</li>
						<li>
							<a href="#contact">contact</a>
						</li>
					</ul>

				</div><!--.menu-->
			</div><!--.intro-content-->
		</div><!--.side-->
		<!--End Menu-->


	</div><!-- /intro -->
	<div class="page page-right full-height">
		<div id="pt-main" class="pt-perspective page-inner">

			<?php get_template_part('template-parts/about'); ?>
			<?php get_template_part('template-parts/resume'); ?>
			<?php get_template_part('template-parts/services'); ?>
			<?php get_template_part('template-parts/portfolio'); ?>
			<?php get_template_part('template-parts/blog'); ?>
			<?php get_template_part('template-parts/contact'); ?>

		</div><!--.page-inner-->
	</div><!--.page-right-->
</div><!--.splitlayout-->


<?php get_footer(); ?>
