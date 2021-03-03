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

		echo "<h2>ebook: LA COUTURE: mode d'emploi</h2>";
                ?><ul class="chapitre-ebook-couture"><h3>1. Fonctionnement de la machine à coudre</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'fonctionnement-mac'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>
               <ul class="chapitre-ebook-couture"><h3>2. Commencer à coudre</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'commencer-a-coudre'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>
               <ul class="chapitre-ebook-couture"><h3>3. Les ourlets</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'les-ourlets'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>
                <ul class="chapitre-ebook-couture"><h3>4. Le biais et le passepoil</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'le-biais-et-le-passepoil'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>    
                <ul class="chapitre-ebook-couture"><h3>5. La fermeture éclair</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'la-fermeture-eclair'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>  
                <ul class="chapitre-ebook-couture"><h3>6. Les élastiques</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'les-elastiques'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>      
                <ul class="chapitre-ebook-couture"><h3>7. Fronces et volants</h3><?php
                
                $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'fronces-et-volants'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
                    }    
                endif;
                wp_reset_postdata(); 
                ?></ul>    
                    
                    
                    

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        
         
<?php get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();
