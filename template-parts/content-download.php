<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mitema
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
           
		<?php
		
			the_title( '<h2 class="entry-title">', '</h2>' );
                        mitema_metainfo();
                
                ?>
	</header><!-- .entry-header -->
        <div class="entry-content">
            
		<?php
                 
                    
                
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continuer à lire<span class="screen-reader-text"> "%s"</span>', 'mitema' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
                ?>
                    
            </footer> <!-- .entry-footer -->
                    
                        
	</div><!-- .entry-content -->

	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
