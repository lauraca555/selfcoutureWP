	<?php
	get_header();
	?>
	<aside id="secondary-1" class="d-none d-lg-flex col-lg-3 col-xl-2 ">
		<?php get_sidebar('sidebar');?>
	</aside>
	<div id="primary" class="content-area col-12 col-lg-6 col-xl-8 d-flex  justify-content-center">
		<main id="main" class="d-flex flex-column mx-lg-3">

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
	<aside id="secondary-2" class="widget-container-left col-lg-3 col-xl-2">        
		<?php get_sidebar('sidebar-2');?>
	</aside><?php

	get_footer();
