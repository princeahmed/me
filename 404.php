<?php
/**
 * The template for displaying 404 pages (not found).
 * @package themeplate
 */

get_header(); ?>
<div class="wrapper" id="404-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">

                    <section class="error-404 not-found">
                        
                        <header class="page-header text-center">
	                        <p class="error404-alert">404!</p>
                            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'themeplate' ); ?></h1>
                        </header><!-- .page-header -->
                        
                    </section><!-- .error-404 -->

                </main><!-- #main -->
                
            </div><!-- #primary -->

        </div> <!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
