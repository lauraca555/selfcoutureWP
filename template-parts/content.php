<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mitema
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-mitema'); ?>>
	<header class="entry-header">
        <?php
		if ( is_singular() ) : 
			the_title( '<h1 class="entry-title">', '</h1>' );
                mitema_metainfo();
        endif;
        ?>
	</header>
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
                        } 
            else {?>   
                    
                        <div class="card-mitema row m-0 p-0">
                            <div class="col-3 container-fluid d-flex m-0 p-0 justify-content-end">
                                <div class="container-image-card" >
                                   <?php the_post_thumbnail("mitema-small-size"); ?>
                                </div>                                        
                            </div>
                            <div class="col-9 ps-4">
                                <div >
                                    <?php the_title('<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                                </div>
                                <div class="excerpt-card ml-5">
                                    <?php  the_excerpt(); ?>
                                </div> 
                            </div>
                            <div class="entry-footer my-3">
                                <div class="separateur-entry-content">
                                <?php mitema_ciseaux()?>
                                </div>
                            </div> 
                    
                
                    
            <?php } ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
