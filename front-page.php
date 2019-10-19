<?php get_header(); ?>


<div id="splitlayout" class="splitlayout close-right">
	<div class="intro">

		<?php get_template_part( 'template-parts/sections/home-left' ); ?><?php get_template_part( 'template-parts/sections/menu' ); ?>

	</div><!-- /intro -->

	<div class="pages page-right full-height">
		<div id="pt-main" class="pt-perspective page-inner">

			<?php //get_template_part('template-parts/sections/about'); ?>
			<?php //get_template_part('template-parts/sections/resume'); ?>
			<?php //get_template_part('template-parts/sections/services'); ?>
			<?php //get_template_part('template-parts/sections/portfolio'); ?>
			<?php //get_template_part('template-parts/sections/blog'); ?>
			<?php //get_template_part('template-parts/sections/contact'); ?>

			<?php
			$items = wp_get_nav_menu_items( get_nav_menu_locations()['main_menu'] );
			foreach ( $items as $item ) {
				$post = get_post( $item->object_id );
				?>
				<section class="padding-bottom-90 pt-page" id="page-<?php echo $post->ID; ?>">
					<div class="content">
						<div class="container">
							<div class="sec_title">
								<h2><?php echo $post->post_title; ?></h2>
							</div>

							<?php echo $post->post_content; ?>

						</div>
					</div>
				</section>
			<?php }
			?>

		</div><!--.page-inner-->
	</div><!--.page-right-->

</div><!--.splitlayout-->

<?php get_footer(); ?>
