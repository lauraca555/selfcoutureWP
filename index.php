<?php
get_header();
?>
<div class="row mx-2">
	   

	<div id="primary" class="content-area col-12 col-md-9 d-flex  justify-content-center justify-content-md-end">
		<main id="main" class="d-flex flex-column">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			mitema_the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left d-none d-md-inline-block col">        
<?php get_sidebar('sidebar-2');?>         

</aside></div><?php



get_footer();
