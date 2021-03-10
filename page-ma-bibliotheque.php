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

<div id="primary" class="ebook-primary">
		<main id="main" class="site-main-book">

    <header id="tittre-ebook" class="entry-header">
        
         
        
    <div class="page-title-cours"><h2 class="entry-title">ma bibliotheque</h2></div>
    
    </header><!-- .entry-header -->
        <div id= "bibliotheque-content" class="entry-content">
    <?php liste_fiches_ebook(); ?>
           
        
      
</div><!-- .entry-content -->  
 <footer class="entry-footer">
                <div class="separateur-entry-content">
                    <?php mitema_ciseaux()?>
                </div> 
            </footer> <!-- .entry-footer -->

                    </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();