<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mitema
 */

?>
	
	</div><!-- #content -->

	<footer  class="site-footer">
	
        <div class="menu-footer-supercontainer">
                    <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'footer-menu',
			) );
			?>
                       
                       
        </div>
	</footer>
</div><!-- #page -->


<?php wp_footer(); ?>
</body>
</html>
