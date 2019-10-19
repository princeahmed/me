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
<!--				<li>-->
<!--					<a href="#about">about me</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#resume">my resume</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#services">services</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#portfolio">portfolio</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#blog">my blog</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#contact">contact</a>-->
<!--				</li>-->

				<?php

				$items = wp_get_nav_menu_items(get_nav_menu_locations()['main_menu']);

				if(!empty($items)){
					foreach ($items as $item){
						printf('<li><a href="#page-%1$s">%2$s</a></li>', $item->object_id, $item->title);
					}
				}

				?>

			</ul>

		</div><!--.menu-->
	</div><!--.intro-content-->
</div><!--.side-->
<!--End Menu-->
