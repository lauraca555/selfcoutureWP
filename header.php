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
                <div id="barnner-icons">
                    <div id="self-couture-user">
                        <div id="selfcouture-login">
                            <a href="<?php bloginfo('wpurl');?>/profil/">
                              <?php echo ("<img src='");
                                echo get_template_directory_uri();  
                                print ("/images/raw/icon-user.png' alt=\"se loger\">");
                                ?>
                            </a>
                        </div>
                        <div id="selfcouture-panier">
                            <a href="<?php bloginfo('wpurl');?>/commande/">
                            <?php echo ("<img src='");
                            echo get_template_directory_uri();  
                            print ("/images/raw/icon-panier.png' alt=\"se loger\">");
                            ?>
                            </a>
                        </div> 
                    </div>   
                    <div id="self-couture-communication"> 
                        <div id="selfcouture-newsletter">
                            <a href="https://www.self-couture.com/self-couture-newsletter/">
                            <?php echo ("<img src='");
                            echo get_template_directory_uri();  
                            print ("/images/raw/newsletter-self-couture.png' alt=\"envoyer un message\">");
                            ?>
                            </a>
                        </div>
                        <div id="selfcouture-contact-direct">
                            <a href="https://www.self-couture.com/contact-direct/">
                            <?php echo ("<img src='");
                            echo get_template_directory_uri();  
                            print ("/images/raw/contact-icon.png' alt=\"recevoir les newsletters de self-couture\">");
                            ?>   
                            </a>
                        </div>
                    </div>
                </div>

                <div id="global-navigation">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Navigation', 'mitema' ); ?></button>
                        <?php wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'=> 'primary-menu',) );
                        ?>
                    </nav><!-- #site-navigation -->  
                        
            </div><?php //global-navigation ?>      
          </div><!-- #header-content --> 
      </header> <!-- #masthead -->

    <div id="content" class="site-content">
