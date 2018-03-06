<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="inner-page-content">
<div class="container">
	
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="">
				
				<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>
							<div class="">
						<?php	//the_title();
							the_content(); ?>
							
							</div>
				
					<?php	endwhile; // End of the loop.
						?>
				
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</div>
</section>
<?php get_footer();
