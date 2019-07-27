<?php

get_header();


?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<div class="row d-flex">
					<div class="col-md-9">
						<div class="row">
							<?php

							if ( have_posts() ) {
								// Load posts loop.
								while ( have_posts() ) {
									the_post();

								}
							}

							?>
						</div>
					</div>

					<?php if ( ! wp_is_mobile() ): ?>
						<div class="col-md-3 sidebar-container">
							<?php
							//category sidebar
							dynamic_sidebar( 'single-post-sidebar' );
							?>

						</div>
					<?php endif; ?>

					<?php

					if ( ! empty( get_option( 'single_post_options' )['after_post_ad'] ) ) {
						printf( '<div class="col-md-12"><div class="advertise fullwidth">%s</div></div>', get_option( 'single_post_options' )['after_post_ad'] );
					}

					?>

				</div><!-- .row -->


				<?php
				//related stories
				get_template_part( 'template-parts/related-stories' ); ?>

			</div><!-- .container -->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php

get_footer();
