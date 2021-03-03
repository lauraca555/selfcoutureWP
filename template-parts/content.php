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
		if ( is_singular() ) : 
			the_title( '<h2 class="entry-title">', '</h2>' );
                        mitema_metainfo();
                
                else :  
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
	</header><!-- .entry-header -->
        <div class="entry-content">
            
		<?php
                if ( is_single()){
                    
                
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
                } else {?>
        <div id="container-item-content">
            <div id="image-entry-content" class="conten-item">
                <div id="image-article">
                    <div class="supercontainer-img-content">
                        <div class="img-separateur">
                            <div class="img-container" >
                                <?php colorthundernail();?>
                            </div><!--image container -->
                        </div><!--img-separateur-->
                    </div> <!--supercontainer-img-content-->
                </div><!-- image article -->
            </div><!-- image-entry-content -->  
            <div id="excerpt-entry-content" class="conten-item">
                <?php  the_excerpt(); ?>
            </div><!-- excerpt-entry-content -->  
            <div id="archive-footer" class="conten-item">
                <div id="justify-button">
                <div id="lire-suite">
                    <a href="<?php the_permalink();?>">Lire la suite ---></a>
                </div><!-- lire-suite -->
                </div>
            </div> <!-- archive-footer -->
        </div><!--container-item-content-->
            <footer class="entry-footer">
                <div id="separateur-entry-content">
                    <?php mitema_ciseaux()?>
                </div> 
            </footer> <!-- .entry-footer -->
            <?php ?>
            
                        <?php
                        }?>
	</div><!-- .entry-content -->

	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
