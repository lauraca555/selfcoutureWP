<?php
/**
 * The template for displaying archive pages
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

		<?php if ( have_posts() ) : $i = 1; ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title"><div class="container-h1">', '</div></h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
                        <div id="product-content" class="row-store-template">
                    <div class="content-clearfix">
                        

			<?php
                       
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
?>
		
                        <div class="item">
						
						<div class="product-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('product-image'); ?>
							</a></div><!--end .product-buttons-->
							<div class="botton-price"><?php if(function_exists('edd_price')) { ?>
								<div class="product-price">
									<?php 
										if(edd_has_variable_prices(get_the_ID())) {
											// if the download has variable prices, show the first one as a starting price
											echo "<span class=\"taille-prix\">À partir de :</span><br>"; edd_price(get_the_ID());
										} else {
											edd_price(get_the_ID()); 
										}
									?>
								</div><!--end .product-price-->
							<?php } ?>
						</div>
						<?php if(function_exists('edd_price')) { ?>
							<div class="product-buttons">
								<?php if(!edd_has_variable_prices(get_the_ID())) { ?>
									<?php echo edd_get_purchase_link(get_the_ID(), 'Add to Cart', 'button'); ?>
								<?php } ?>
                                                            <div class="detail-produit"><a href="<?php the_permalink(); ?>">Voir le detail</a></div></div>
							
						<?php } ?>
					</div><!--end .product-->
                      
                    
                    <?php $i+=1; 

			endwhile/*end loop*/;?>
                    </div><!--end .content-clear-fix-->
	        </div><!--end #main-content.row--> 

			
                        <div class="store-pagination">
			<?php 					
				$big = 999999999; // need an unlikely intege					
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, $current_page ),
					'total' => $wp_query->max_num_pages
				) );
			?>
		</div><?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?> 

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        
         
<div id="widget-container" class='widget-container-right'>
    
        
	<?php  
//**active sidebar-2 if it'as active
        if (is_active_sidebar( 'sidebar-2' )){dynamic_sidebar( 'sidebar-2' );} ?><!--fin .decoration-widtget-area -->      
     
</div>
</aside><?php

get_footer();

