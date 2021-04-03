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
	<div id="primary" class="content-area col-12 col-lg-7 d-flex  justify-content-center">
		<main id="main" class="site-main d-flex flex-column" >
                   
                    <section class="derniers-ateliers container fluid">
                        <div class="maxi-titre-atelier mx-0 row">
                                <a href="<?php echo home_url();?>/les-ateliers/">
                                  <h2>Les ateliers</h2></a></div>
                        <?php  $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'ateliers-couture'
                                        )
                                        ),
                                        'posts_per_page' => '3',
                               );
                             // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop ateliers payant 
    if ( $the_cours_query->have_posts() ) {
      ?><div class="row mt-3"><?php
		while ( $the_cours_query->have_posts() ) :
			$the_cours_query->the_post();

                ?><div class="item-accueil col-4"><div class="image-accueil-item"><div><a href="<?php the_permalink();?>"><?php
                        
			if (has_post_thumbnail()){
                            the_post_thumbnail('mitema-accueil-size');
                        }
                        ?></a></div></div><div class="accueil-item-title"><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></div></div><?php      
		endwhile; // End of the loop.
		
       
    }
     else {
     echo "pas de atelier payant encore";}
     ?></div> <?php
     wp_reset_postdata();
                                   
                               
                        ?>
                    </section>
                    <section class="derniers-cours">
                        <div class="maxi-tittre-cours"><a href="https://www.self-couture.com/les-cours-de-couture/"><h2>Les cours</h2></a></div>
                         <?php  $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'courscouture'
                                        )
                                        ),
                                        'posts_per_page' => '3',
                               );
                             // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop ateliers payant 
    if ( $the_cours_query->have_posts() ) {
		while ( $the_cours_query->have_posts() ) :
			$the_cours_query->the_post();
                ?><div class="item-accueil">
                    <div class="image-accueil-item"><a href="<?php the_permalink();?>"><?php
                        
			if (has_post_thumbnail()){
                            the_post_thumbnail('mitema-accueil-size');
                        }
                        ?></a></div>
                
                    <div class="accueil-item-title">
                        <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a></div>
                </div>    
                    <?php        
		endwhile; // End of the loop.
		
       
    }
     else {
     echo "pas de atelier payant encore";}
     wp_reset_postdata();
                                   
                               
                        ?>
                    </section>                   

		

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left d-md-inline-block col-lg-3">        
         
<?php get_sidebar('sidebar-2'); 
//info_produit();
?>
</aside><?php

get_footer();
