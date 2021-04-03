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
	
        <?php
		if ( is_singular() ) :
            ?><header class="entry-header"><?php 
			the_title( '<h1 class="entry-title">', '</h1>' );
                mitema_metainfo();
            ?></header><?php
        endif;
        ?>
	
    <div class="entry-content d-flex flex-column align-self-center">
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
                <div class="card-mitema d-flex flex-column flex-lg-row m-0 p-0">
                    <div class="d-inline-block d-lg-none ">
                        <?php the_title('<h2 class="entry-title mb-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    </div>
                    <div class="col-12 col-lg-3 container-fluid d-flex m-0 p-0 justify-content-center ">
                        <div class="container-image-card " >
                            <?php the_post_thumbnail("mitema-small-size"); ?>
                        </div>                                        
                    </div>
                    <div class="col-12 col-lg-9 ps-lg-4 d-none d-lg-inline-block ">
                        <div >
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        </div>
                        <div class="excerpt-card ml-5 mt-3">
                            <?php  the_excerpt(); ?>
                        </div>                                 
                    </div>
                </div> 
                <div class="entry-footer my-3">
                    <div class="separateur-entry-content">
                        <?php mitema_ciseaux()?>
                    </div>
                </div>
            <?php } ?>
    </div><?php //.entry-content ?>
</article><!-- #post-<?php the_ID(); ?> -->
