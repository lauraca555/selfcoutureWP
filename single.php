<?php
get_header();
?>
	<aside id="secondary-1" >
		<?php get_sidebar('sidebar');?>
    </aside> 

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<aside id="secondary-2" class="widget-container-right">        
         
<?php  get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();
