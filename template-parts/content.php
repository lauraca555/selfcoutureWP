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
			the_title( '<h1 class="entry-title">', '</h1>' );
                        mitema_metainfo();
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
                        } 
            else {?>
                <div class="container-fluid">        
                    <div class="card" >
                        <div class="row m-0 p-0 bg success">
                            <div class="col-4 container-fluid d-flex justify-content-left">
                                <div class=" d-block single-card img-fluid" >
                                    <?php the_post_thumbnail("mitema-small-size"); ?>
                                </div>                                        
                            </div>
                            <div class="col-8  my-3">
                                <div>
                                    <?php the_title('<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                                </div>
                                <div class="card-text">
                                    <?php  the_excerpt(); ?>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="entry-footer">
                    <div id="separateur-entry-content">
                        <?php mitema_ciseaux()?>
                    </div>
                </footer>     
            <?php } ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
