<?php


get_header();
?>
<aside id="secondary-1" >

<?php
get_sidebar('sidebar'); 
?>
    
</aside>   
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		
		<a href="<?php echo wp_logout_url('/redirect/profil/') ?>">Log out</a>
		

		</main><!-- #main -->
	</div><!-- #primary -->
<aside id="secondary-2" class="widget-container-left">        
         
<?php get_sidebar('sidebar-2'); 
?>
</aside><?php

get_footer();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

