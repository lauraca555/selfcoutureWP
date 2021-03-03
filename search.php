<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mitema
 */
get_header();
?>
<aside id="secondary-1" >

<?php
get_sidebar('sidebar'); 
?>
    
</aside> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><div class="container-h1">
					<?php
					/* translators: %s: search query. */
					echo ('r&eacute;sultats correspondant &agrave;: '. get_search_query()   );
					?>
                                    </div></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			mitema_the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none-search' );

		endif;
		?>

		</main><!-- #main -->
                
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        
         
<?php get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();