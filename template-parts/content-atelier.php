<?php
/**
 * Template part for displaying type-posts atelier et cours 
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
                        
		else :  
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
             endif;
         ?>
	</header>    
	<div class="entry-content">
	<div id="container-item-content">
            <div id="image-entry-content">
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
            <div id="excerpt-entry-content">
                <?php  the_excerpt(); ?>
            </div><!-- excerpt-entry-content -->  
            <div id="archive-footer">
                 <div id="justify-button">
                <div id="lire-suite">
                    <a href="<?php the_permalink();?>">Aller à l'atelier ---></a>
                </div><!-- lire-suite -->
                 </div>
            </div> <!-- archive-footer -->
        </div><!--container-item-content-->
            <footer class="entry-footer">
                <div class="separateur-entry-content">
                                <?php mitema_ciseaux()?>
                </div> 
            </footer> <!-- .entry-footer -->
        </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
