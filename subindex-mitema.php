<?php
/*
Template Name: subindex
Template Post Type:  atelier, cours, page, post, downloads
*/
 get_header();
 ?>
<aside id="secondary-1" >
<div class="widget-container">
<?php subindex_costum (); ?>
</div>
</aside>    
	<div id="primary" class="content-area">
                
		<main id="main" class="site-main">
                  
                        
                        <!--<a href="#" class="menu-button-atelier">
                            <span><div class="menu-icon"></div></span>
                            <span><div class="menu-icon"></div></span>
                            <span><div class="menu-icon"></div></span>
                            <span><div class="menu-icon"></div></span>
                        </a> -->
                    <div class='atelier-index'>
                        <?php 
                        
                        global $post;
                        $parentID= $post->post_parent;
                        $parent= get_the_title($parentID);
                        $parentadresse= get_permalink($parentID);   

                        if ($parentID){
                            ?><div class="mobil-menu-container">
                                
                                
                                        <h2 class="titre-mobil-menu-container">
                                            <?php echo ("<a href=\"".$parentadresse."\">".$parent."</a>");?>
                                        </h2> 
                                <nav>
                                    <ul>
                                     <?php wp_list_pages(array('child_of'     => $parentID,'post_type'=>$post->post_type,'title_li'     => __( '' )));?>   
                                    </ul>
                                </nav>
                                 
                            </div>
                        
                        <?php }?>
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
<div id="widget-container" class="widget-container-right">
    
        
	<?php  list_video();      
        ?> </div>     
     
</div> 
</aside><?php


get_footer();