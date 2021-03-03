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
		//toute les pages
                echo "<H2> toutes les pages</h2>";
                $query= array('post_type'=> 'page','posts_per_page'=>'100','posts_per_page'=>'100');
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) : 
                    $my_query->the_post();
                    ?><div><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div><?php
                    endwhile;
                endif;
                
                wp_reset_postdata();  
                
                //toute les post
                echo "<h2> tout les posts</h2>";
                $query= array('post_type'=> 'post', 'posts_per_page'=>'100');
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) : 
                    $my_query->the_post();
                    $permalink=get_permalink($post->id);
                    ?><div><a href="<?php echo $permalink; ?>"> <?php the_title(); ?></a></div><?php
                    endwhile;
                endif;
                wp_reset_postdata(); 
                
                 
                
                echo "<h2>Boutique</h2>";
                ?><div class="table-boutique"><?php
                $query= array('post_type'=> 'download', 
                                'post__in'=> array('6272','13069','11908','9720'));
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
                ?></div><?php
                wp_reset_postdata(); 
                
                
                
//lescours payants
                
                 $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'cours-premium',
                                        
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                   echo "<h2>Cours de couture premium</h2>";
                // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop cours 
    if ( $the_cours_query->have_posts() ) {
        ?><ul style="list-style-type: none" ><?php wp_list_pages(array ('depth'=> 1, 'post_type'=>'cours', 'title_li'=>'', 'link_before'=>'<span>', 'link_after'=>'</span>'));?></ul><?php
    	}
         else {
     echo "pas de cours payant encore";}
        
                 wp_reset_postdata(); 
                 
                //lescours free 
                 $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'cours-libre'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                   echo "<h2>Cours de couture GRATUITS</h2>";
                // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop cours free 
    if ( $the_cours_query->have_posts() ) {
    	
    	while ( $the_cours_query->have_posts() ) :
		$the_cours_query->the_post();
                ?><div><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div><?php
        endwhile;}
         else {
     echo "pas de cours gratuits encore";}
        wp_reset_postdata();
        
        //les ATELIER PAYANTS
                 $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'ateliers-premium'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                   echo "<h2> tout les ateliers PAYANT</h2>";
                // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop ateliers payant 
    if ( $the_cours_query->have_posts() ) {?><ul style="list-style-type: none" ><?php wp_list_pages(array ('depth'=> 1, 'post_type'=>'atelier', 'title_li'=>'', 'link_before'=>'<span>', 'link_after'=>'</span>'));?></ul><?php
       
    }
     else {
     echo "pas de atelier payant encore";}
     wp_reset_postdata();
     
     //les ATELIER gratuits
                 $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'atelier-libre'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                   echo "<h2> tout les ateliers GRATUITS</h2>";
                // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop cours free 
    if ( $the_cours_query->have_posts() ) {
    	
    	while ( $the_cours_query->have_posts() ) :
		$the_cours_query->the_post();
                ?><div><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></div><?php
        endwhile;
        
        
       
    }
     else {
     echo "pas de atelier gratuit encore";}
     wp_reset_postdata();
     
     
//les downloads
  ?><h3>Lefiches</h3><?php
  $i=0;echo $i;
 $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'fiches',
                                        
                                        )
                                        ),
                                        'posts_per_page' => '100',
                                        'orderby'=>'title',
                                        'order'=>'ASC'
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><div><a href="<?php the_permalink(); ?>"> <?php the_title(); $i++;?></a></div> <?php
                    }    
                endif; 
    echo $i; 
    wp_reset_postdata();
    //les downloads cat
  ?><h3>Les categorie de fiches</h3><?php
  mitema_index_book();

mitema_nombre_categories_ebook();


?>

   

                
  
                
		
                    
                    

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">       
    
         
<?php get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();


     