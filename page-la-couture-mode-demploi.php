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
                   

		the_title( '<h2 class="entry-title">', '</h2>' );/*
                 //donne le compte de fiches
                    echo "<p>Accedez aux ";mitema_numero_fiches();echo " fiches du guide de couture en achetant l'ebook complet. </p>";
                    ////////////////////////
                $current_user_id = get_current_user_id();
                if (edd_has_user_purchased($current_user_id, 6272, $variable_price_id = null)){echo "Vous pouvez télécharger toutes les fiches sur leur page en suivant le lien dans cet index ou dans <a href=\"https://www.self-couture.com/historique-de-telechargements/\">votre bibliotheque</a>.<br>";}
                else {echo do_shortcode("[purchase_link id=\"6272\" text=\"Ajouter au panier\" style=\"button\" color=\"blue\"]");}*/
                mitema_index_book();?>    
                    
                    
                    

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        
         
<?php get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();
