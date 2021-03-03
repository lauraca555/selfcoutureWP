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
<div class="widget-container">
    
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
                info_produit();
		echo edd_get_purchase_link( array( 'download_id' => 5705 ) );
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div  class="right-container">
    <div class="right-content"></div>
</div>         

<?php

get_footer();