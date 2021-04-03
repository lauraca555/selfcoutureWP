<?php
if (is_active_sidebar( 'sidebar-1' )){
        ?>
        <div id="widget-zone" class="widget-area w-100">
                <div id="widget-container" class='widget-container-left'>            
                        <div class="decoration-widtget-area">
                                <?php dynamic_sidebar( 'sidebar-1' )?>    
                        </div>
                </div>
        </div>
        <?php ;}?>