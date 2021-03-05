<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mitema
 */

?>
<!doctype html >
<html lang="fr">
  
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
       


      <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    
      <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mitema' ); ?></a>
        <header id="masthead" class="site-header">
            <div class="header-content">
                <div class="site-branding">
                    <div id="logo-selfcouture">
                      <?php 
                      echo logo_selfcouture();
                      ?>
                    </div>                        
                </div>
                
                

                <div id="global-navigation">
                    

                    
                        
            </div><?php //global-navigation ?>      
          </div><!-- #header-content --> 
          <!--navigation bootstrap-->
          <nav class="navbar navbar-expand-lg navbar-dark  mitema-navbar-top">
                        <div class="container-fluid mitema-navbar-primary py-1">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'=> 'primary-menu',
                                    'menu_class'=> 'navbar-nav',
                                    
                                    ) );
                            ?>
                            
                                <!--<ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul> -->
                            </div>
                             
                        </div>
                        
                    </nav>

                    <!--fin navigation bootstrap-->
      </header> <!-- #masthead -->

    <div id="content" class="site-content">
