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
<div class="widget-container">
<div id="widget-zone" class="widget-area">
    <div id="widget-container" class='widget-container-left'>            
    <div class="decoration-widtget-area">    
    <?php
    //lescours payants
                
                 $argu = array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'acces',
                                          'field'=>'slug',
                                          'terms'=>'cours-premium'
                                        )
                                        ),
                                        'posts_per_page' => '100',
                               );
                   echo "<h2>Cours de couture</h2>";
                // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop cours 
    if ( $the_cours_query->have_posts() ) {
    	?><ul id="liste-ateliers-premium"><?php wp_list_pages(array ('depth'=> 1, 'post_type'=>'cours', 'title_li'=>'', 'link_before'=>'<span>', 'link_after'=>'</span>'));?></ul><?php
    }
         else {
     echo "<p class=\"a-venir\">A venir</p>";}
        
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
                   echo "<h2>Tutos technique de couture gratuits</h2>";
                // The Query
                $the_cours_query = new WP_Query($argu);
// The Loop cours free 
    if ( $the_cours_query->have_posts() ) {
        
    	?><ul id="liste-cours-gratuits"><?php
    	while ( $the_cours_query->have_posts() ) :
		$the_cours_query->the_post();
                ?><li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li><?php
        endwhile;
        ?></ul><?php
    }
        
       
         else {
     echo "pas de cours gratuits encore";}
        wp_reset_postdata();
    ?>
</div>
        </div><!--fin .decoration-widtget-area -->
    </div>
            </div><!-- end #secondary -->
</aside>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			
                
                        cours_list();
                        ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->
        
<aside id="secondary-2" class="widget-container-left"> 
    <div class="widget-container-right">
        <!-- START ADVERTISER: Makerist FR from awin.com -->
       
            <div id="pub makerist" class="pub-ext"> 
            <a href="https://www.awin1.com/cread.php?awinmid=17548&awinaffid=693307&clickref=clickref2&ued=https%3A%2F%2Fwww.makerist.fr%2Fusers%2Fself_couture">
                <img src="https://www.self-couture.com/wp-content/themes/mitema/images/raw/NL-designer.jpg">
            </a>
            </br>
            <a href="https://www.awin1.com/cread.php?s=2469670&v=17548&q=371877&r=693307">
                <img src="https://www.awin1.com/cshow.php?s=2469670&v=17548&q=371877&r=693307" border="0">
            </a>
        </div><!-- END ADVERTISER: Makerist FR from awin.com -->         
    </div>
</aside><?php 

get_footer();