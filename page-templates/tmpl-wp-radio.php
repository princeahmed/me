<?php
/**
 * Template Name: WP Radio
 */

get_header('radio');

?>

<!--start home area-->
<?php get_template_part('template-parts/wp-radio/hero-area'); ?>
<!--end home area-->

<!--start features area-->
<?php get_template_part('template-parts/wp-radio/features'); ?>
<!--end features area-->

<!--start pricing-->
<?php get_template_part('template-parts/wp-radio/pricing'); ?>
<!--end pricing-->

<!--start video area-->
<?php get_template_part('template-parts/wp-radio/video-demo'); ?>
<!--end video area-->

<!--start documentation area-->
<?php get_template_part('template-parts/wp-radio/documentation'); ?>
<!--end documentation area-->

<!--start newsletter area-->
<?php get_template_part('template-parts/wp-radio/news-letter'); ?>
<!--end newsletter area-->

<!--start testimonial area-->
<?php get_template_part('template-parts/wp-radio/testimonials'); ?>
<!--end testimonial area-->


<!--start testimonial area-->
<?php get_template_part('template-parts/wp-radio/contact'); ?>
<!--end testimonial area-->

<?php
get_footer('radio');
?>
