<?php
/*
Template Name: index-mitema
Template Post Type:  atelier, cours
*/
 

get_header();
 

?>
<aside id="secondary-1" >
<div class="widget-container">

   


<?php  index_custum();?>
         

 
	

            


</div>
</aside>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
                ?><div class="porte-atelier-mobil">
                  <?php  index_custum();?>  
                  </div>
                <?php    
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
     
   
   
<aside id="secondary-2" class="widget-container-right">        
<?php  
    get_sidebar('sidebar-2'); 

    ?>
</aside><?php


get_footer();
