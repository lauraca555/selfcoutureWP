<?php
/*
Template Name: mon-compte
Template Post Type:  page
*/

get_header();
?>
<aside id="secondary-1" >
<div id="menu-compte">
    <ul id="lien-mon-compte">
        <li id="profil"><a href="<?php bloginfo('wpurl');?>/profil/">Mon profil</a></li>
        <li id="purchase-history"><a href=" <?php bloginfo('wpurl');?>/commande/historique-de-commandes/">Historique de commandes</a></li>
         <li id="downloads-history"><a href="<?php bloginfo('wpurl');?>/historique-de-telechargements/">Historique de téléchargements</a></li>
    </ul>
</div>    
</aside>  
<?php

if ( ! is_user_logged_in() ) :
        ?><div id="primary" class="content-area-compte">
		<main id="main" class="site-main-compte"><?php
                echo "<div id=\"demande-conection\"><p>Vous devez vous connecter ou créer un nouveau compte pour voir ces informations.<p></div>";
	echo do_shortcode("[lwa]");
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
else : ?>

	<div id="primary" class="content-area-compte">
		<main id="main" class="site-main-compte">

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

<?php endif; 
	?>
<?php

get_footer();
