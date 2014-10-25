<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="col-md-12 site-content" role="main">
			<?php /* The loop */ ?>
			<div class="col-md-9 singlepost">				
				<?php while ( have_posts() ) : the_post(); ?>	
					<?php get_template_part( 'content', get_post_format() ); ?>
					<div class="clear"></div>
				<?php endwhile; ?>					
			</div>
			<div  class="col-md-3 randomposts" >
				<h2>Random Posts</h2>		
				<?php get_template_part( 'content', 'random' ); ?>
			</div>
			<?php get_sidebar(); ?>			
			<?php twentythirteen_post_nav(); ?>	
			<?php comments_template(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

