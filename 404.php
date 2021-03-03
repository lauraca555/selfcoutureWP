<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mitema
 */

get_header();
?>
<aside id="secondary-1" >
</aside>     

 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			
				<header class="page-header">
					<h1 class="page-title"><div class="container-h1"><?php esc_html_e( 'Oops! Cette page n&rsquo;existe pas.', 'mitema' ); ?></div></h1>
				</header><!-- .page-header -->
                                <section class="error-404 not-found">

				<div class="page-content">
					<p><?php esc_html_e( 'Il semblerait que il y &agrave; rien sur cette adresse. Esseyez de retrouver ce que vous cherchez en utilisant la barre de recherche. ', 'mitema' ); ?></p>
                                       <div class="search404">        
					<?php
					get_search_form();
                                        ?>
                                       </div>    
                                        

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        

</aside><?php

get_footer();
