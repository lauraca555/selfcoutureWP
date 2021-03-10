<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mitema
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <header class="entry-header">
            <?php
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
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
                <div id="lire-suite">
                    <a href="<?php the_permalink();?>">Lire la suite ---></a>
                </div><!-- lire-suite -->
            </div> <!-- archive-footer -->
        </div><!--container-item-content-->
            <footer class="entry-footer">
                <div class="separateur-entry-content">
                                <?php mitema_ciseaux()?>
                </div> 
            </footer> <!-- .entry-footer -->
        </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->