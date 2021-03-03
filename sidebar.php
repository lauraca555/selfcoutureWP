<?php
/**
 * The sidebar containing the main widget area is left side
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mitema
 */
?>
    
	<?php if (is_active_sidebar( 'sidebar-1' ))
            {?><div id="widget-zone" class="widget-area">
    <div id="widget-container" class='widget-container-left'>            
    <div class="decoration-widtget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>    
    </div><!--fin .decoration-widtget-area -->
    </div>
            </div><!-- end #secondary --><?php ;}?>