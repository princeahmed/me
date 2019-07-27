<?php get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
							<?php

							if ( have_posts() ) {
								// Load posts loop.
								while ( have_posts() ) {
									the_post();

									get_template_part( 'template-parts/content-page' );
								}
							}

							?>
					</div>
				</div><!-- .row -->

			</div><!-- .container -->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
