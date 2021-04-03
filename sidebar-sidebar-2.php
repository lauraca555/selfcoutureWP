<?php
/**
 * The sidebar containing the main widget area in right side
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mitema
 */



?>
    
<div id="widget-container" class="widget-container-right d-flex flex-column"> 
        <?php  list_pdfs();
        //**active sidebar-2 if it'as active
        if (is_active_sidebar( 'sidebar-2' )){dynamic_sidebar( 'sidebar-2' );} ?><!--fin .decoration-widtget-area -->      
                <!-- START ADVERTISER: Makerist FR from awin.com -->
                <?php
                /*
                <a href="https://www.awin1.com/cread.php?s=2708165&v=17548&q=396705&r=693307">
                <img src="https://www.awin1.com/cshow.php?s=2708165&v=17548&q=396705&r=693307" border="0">
                </a>
                */
                ?>
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


<!-- #secondary -->


 
    
    
