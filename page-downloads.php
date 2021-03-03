<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<?php
		
                ?><div class="table-boutique"><?php
                ///ebook
                 $query= array('post_type'=> 'download', 
                                'p'=> '6272');
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) : 
                    $my_query->the_post();
                ?><div class="produit-boutique-<?php the_ID();?>">
			<?php $permalink = get_permalink($post->id);?>
                        <div class="tittre-patron">
                            <a href="<?php echo $permalink; ?>"> <?php the_title(); ?></a>
                        </div>
			<div class="image-patron">
			<a href="<?php the_permalink(); ?>">
                        <?php 
                        if(has_post_thumbnail()){the_post_thumbnail('mitema-accueil-size');} ?>
			</a></div><!--end .product-buttons-->
			<?php if(function_exists('edd_price')) { ?>
							<div class="bouton-patron">
								<?php if(!edd_has_variable_prices(get_the_ID())) { ?>
									<?php echo edd_get_purchase_link(get_the_ID(), 'Add to Cart', 'button'); ?>
								<?php } ?>
                                                            						
						 </div><?php } ?>
                                                       </div><!--end .product--><?php
                    endwhile;
                endif;
                
                wp_reset_postdata(); 
                ///les patrons
                $query2= array('post_type'=> 'download', 
                                'post__in'=> array('14929','13069','11908','9720','13330'));
                $my_query2 = new WP_Query($query2);
                if($my_query2->have_posts()) : 
                    while ($my_query2->have_posts() ) : 
                    $my_query2->the_post();
                ?><div class="produit-boutique-<?php the_ID();?>">
			<?php $permalink=get_permalink($post->id);?>
                        <div class="tittre-patron">
                            <a href="<?php echo $permalink; ?>"> <?php the_title(); ?></a>
                        </div>
			<div class="image-patron">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('mitema-accueil-size'); ?>
			</a></div><!--end .product-buttons-->
			<?php if(function_exists('edd_price')) { ?>
							<div class="bouton-patron">
								<?php if(!edd_has_variable_prices(get_the_ID())) { ?>
									<?php echo edd_get_purchase_link(get_the_ID(), 'Add to Cart', 'button'); ?>
								<?php } ?>
                                                            						
						<?php } ?>
                                                        </div></div><!--end .product--><?php
                    endwhile;
                endif;
                
                wp_reset_postdata(); ?>
                    </div><!-- table-boutique -->                               
                </main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        
         
<?php get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();
