<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mitema
 */

get_header();

?>
<div class="widget-container">
    
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
                echo ("[pdf-embedder url=\"https://dl.dropboxusercontent.com/s/bvkqumn773doz80/01%20Fonctionnement%20de%20la%20MAC.pdf?dl=1\"]");
		while ( have_posts() ) :
			the_post();
                        
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div  class="right-container">
    <div class="right-content"></div>
</div>         

<?php

get_footer();