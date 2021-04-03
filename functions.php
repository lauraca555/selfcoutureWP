<?php
/**
 * mitema functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mitema
 */


// show admin bar only for admins
if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}
// show admin bar only for admins and editors
/*if (!current_user_can('edit_posts')) {
	add_filter('show_admin_bar', '__return_false');
}*/

/**
 * 
 * dissable richs snippets
 */

add_filter( 'edd_add_schema_microdata', '__return_false' );

/** adding a custum-logo to login page 
 * 
 * 
 */


///remove unwanted dashboard widgets for relevant users
function remove_dashboard_meta() {
    $user = wp_get_current_user();
    if ( ! $user->has_cap( 'manage_options' ) ) {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');}
        
}
add_action( 'admin_init', 'remove_dashboard_meta' );




/**  
 * redirecting from custum logo
 * 
 */



if ( ! function_exists( 'mitema_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mitema_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mitema, use a find and replace
		 * to change 'mitema' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mitema', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
                add_image_size('mitema-full-size',800,600);
                add_image_size('mitema-small-size',230,150,true);
                add_image_size('mitema-accueil-size',300,205);
                add_image_size('mitema-edd-size', 230, 230, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mitema' ),
            'menu-2' => esc_html__( 'Footer', 'mitema' ),
            'menu-3' => esc_html__( 'costumaside', 'mitema' ),
                    
		) );
                

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mitema_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mitema_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mitema_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mitema_content_width', 640 );
}
add_action( 'after_setup_theme', 'mitema_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mitema_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mitema' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mitema' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => esc_html__( 'Sidebar2', 'mitema' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'custom sidebar2.', 'mitema' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mitema_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mitema_scripts() {
    
       
	wp_enqueue_style( 'mitema-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'mitema-all', get_template_directory_uri() .'/build/all.js', false, NULL, false);
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts','mitema_scripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';



/** 
 * Load self-couture's logo 
 */

function logo_selfcouture (){
    $logo= "/images/raw/logo-self-couture.png";        
    ?><a href="<?php echo get_home_url(); ?>"><?php
        echo ("<img src='".get_template_directory_uri().$logo."'>");   
    ?></a><?php
}


/** 
 * Load photo paneau cours à gauche 
 */

function photocourstop (){
    
    echo "<image src=";
    echo get_template_directory_uri();     
    echo "/images/raw/banniere-cours.png>";
    
}
/** 
 * Load photo paneau cours à droit 
 */

function photodroite (){
    
    
    echo "xlink:href=\"";
    echo get_template_directory_uri();     
    echo "/images/raw/paneau-droite.jpg\"";
   
}


/*
 * 
 * *  Display post by categorie
 */

function category_list ()
{
    $category = get_the_category();
    $mycat = $category[0]->cat_name;
    $mycat2 = get_cat_id($mycat);
    // The Query
    $the_query = new WP_Query( array( 'cat' => $mycat2 ) );
    echo  '<h2>'.get_cat_name($mycat2).'</h2>'; 


    // The Loop
    if ( $the_query->have_posts() ) {
    	echo '<ul>';
    	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
    } else {
	// no posts found
    }
     
  
    
}

/* Retirer les préfixes sur les pages d'archives */
function wp_retirer_prefix_dans_archives() {
	if (is_category()) {
			$title = single_cat_title('', false);
                           } 
                        elseif (is_tag()) {
			$title = single_tag_title('', false);
                        } 
                        elseif (is_author()) {
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;
                        } 
                        elseif (is_post_type_archive()) {
			$title = post_type_archive_title('', false);
                        } elseif ( is_tax() ) {
                        $title = single_term_title( '', false );
                        }
	return $title;
}
add_filter('get_the_archive_title', 'wp_retirer_prefix_dans_archives');

// Modifier le nombre de mots des extraits
function wpm_post_excerpt($length) {
	return 40;
}
add_filter('excerpt_length', 'wpm_post_excerpt');

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//

/* 
 * *  Display a vidio from vimeo by id
 */
function mitema_video(){
    $term=get_the_terms( $post->ID, 'zap' );
    if($term){
     ?><div  class="zaps-container">
         <div class="zap-content">
             <div class="vimeos-videos">
                 <ul class="list-video">
                     <?php
                        foreach ($term as $video)
                            {
                             $zap=$video;
                            $video_ID=$video->slug;?> 
                                <li class="liste-video" >
                                    
                                    <div class="<?php echo ("container-video-viméo-".$video_ID);?>" style="width:100%">
                                        <div style="padding:65% 0 0 0;position:relative;">
                                            <iframe src="https://player.vimeo.com/video/<?php echo $video_ID;?>?portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <script src="https://player.vimeo.com/api/player.js">
                                        </script>
                                    </div>
                                </li>
                                    <?php
                           }?> 
                </ul>
            </div>
        </div>
       </div><?php
   
   
}}



function list_video(){
//whach for downloads ID 
    $pdfs_list=get_the_terms( $post->ID, 'pdfs' );

       
       
       if($pdfs_list )
            {//whach for users loged
            $client_id= get_current_user_id();
                foreach ($pdfs_list as $produit_download){
                    
                   $idproduit= $produit_download->slug;
                   $my_download = new EDD_Download( $idproduit );
                   $titre_download= $my_download->post_title;
                   if ($client_id==0){
                //not user loges    
                //demande de conection et proposition d'achat 
                  ?><div class="video-vip">
                      <a href="https://www.self-couture.com/downloads/<?php echo ($titre_download);?>">     
                          <img src="<?php echo get_template_directory_uri(); echo "/images/raw/icon-video-vip.png\"";?>></a></div><?php     
                
                                                }
                
                else {
                    if( edd_has_user_purchased($client_id, $idproduit)){mitema_video(); } 
                    elseif (edd_has_user_purchased($client_id, 6272)) {mitema_video(); }
                    else {?><div class="video-vip"><a href="https://www.self-couture.com/downloads/<?php echo ($titre_download);?>"><img src="<?php echo get_template_directory_uri(); echo "/images/raw/icon-video-vip.png\"";?>></a></div><?php }
                     }
                                      
                }//end foreach
            
            
            }/*end if*/
        else{//no downloads attachment do nothing
            }    
        
            }     

function list_pdfs()
    {
    $pdfs_list=get_the_terms( $post->ID, 'pdfs' );?>
    <div id="pdf-aside"> 
       <?php
       if($pdfs_list )
            {
            $client_id= get_current_user_id();
        //il y a pas de user logé
                if ($client_id==0){foreach( $pdfs_list as $pdf)
                {
                $my_pdf=$pdf->slug;
                echo do_shortcode("[pub idnumero=\"6272\"]");
                ?></div><?php
                }
            }
       //le client est logé
       else {
           foreach( $pdfs_list as $pdf) 
                {
                echo "<div id=\"item-doxnload-client\">";
                $my_pdf=$pdf->slug;
                $files = edd_get_download_files( $my_pdf);
                /// le client a acheté le ebook
                    if( edd_has_user_purchased($client_id, 6272))
                            {
                            $user_purchases = edd_get_users_purchases($client_id, -1, false, 'complete');
                            foreach ($user_purchases as $purchase) 
                                {
                                $cart_items = edd_get_payment_meta_cart_details($purchase->ID,$include_bundle_files=true);
                                $item_ids = wp_list_pluck($cart_items, 'id');
                                    if (in_array($my_pdf, $item_ids )) 
                                            {
                                            $email = edd_get_payment_user_email($purchase->ID);
                                            $payment_key = edd_get_payment_key($purchase->ID); 
                                            $download_data = edd_get_download_files($my_pdf, null);
                                                if ($download_data) 
                                                    {
                                                    foreach ($download_data as $filekey => $file) 
                                                        {
                                                        // Generate the file URL and then make a link to it
                                                        $file_url = edd_get_download_file_url($payment_key, $email, $filekey, $my_pdf, null);
                                                        $file_name=$file['name'];
                                                        /*echo "<a href=\"".$file_url."\">".$file_name."</a>";*/
                                                        //afficher le pdf avec pdf embeter
                                                        echo "<div class=\"container-item-pdf-embet\">";
                                                        echo do_shortcode("[pdf-embedder url=\"".$file_url."\" width=\"150\"]");
                                                        echo "</div>";
                                                        }
                                                    }
                                            }
                                }
                            }
                //le client n'as pas acheté l'ebook
                else
                    {
                    //le client a acheté cette fiche
                    if( edd_has_user_purchased($client_id, $my_pdf))
                            {
                            echo "<div class=\"container-item-pdf-embet\">";
                            $user_purchases = edd_get_users_purchases($client_id, -1, false, 'complete');
                            foreach ($user_purchases as $purchase) 
                                {
                                $cart_items = edd_get_payment_meta_cart_details($purchase->ID,$include_bundle_files=true);
                                $item_ids = wp_list_pluck($cart_items, 'id');
                                if (in_array($my_pdf, $item_ids)) 
                                        {
                                        $email = edd_get_payment_user_email($purchase->ID);
                                        $payment_key = edd_get_payment_key($purchase->ID);
                                        if( $files )
                                            {
                                            foreach( $files as $filekey => $file ) 
                                                {
                                                $url_pdf=edd_get_download_file_url($payment_key, $email, $filekey, $my_pdf, null);
                                                echo do_shortcode("[pdf-embedder url=\"".$url_pdf."\" width=\"150\"]");
                                                }
                                            } 
                                        }
                                }
                            //si le client a acheté le produit
                            echo "</div>"; 
                            }
                    else
                        {
                        //le client n'as pas acheté la fiche
                        echo do_shortcode("[pub idnumero=\"6272\"]");
                        }
                        
                    }
                
                    echo "</div>";          
                }
       
            }
       }?></div><?php
    }
  

	
/**
 * Prevents logged-in customers from purchasing an item twice
 */
function pw_edd_prevent_duplicate_purchase( $valid_data, $posted ) {
	$cart_contents = edd_get_cart_contents();
	foreach( $cart_contents as $item ) {
		if( edd_has_user_purchased( get_current_user_id(), $item['id'] ) ) {
			edd_set_error( 'duplicate_item', 'Il y a un ou plusieurs articles dans votre panier que vous avez déjà commandé. <br>Vous trouverez les liens de téléchargement dans <a href="https://www.self-couture.com/historique-de-telechargements/">votre bibliotheque</a>.<br> Retirez ces articles du panier pour finir la commande. '  );
		}
	}
}
add_action( 'edd_checkout_error_checks', 'pw_edd_prevent_duplicate_purchase', 10, 2 );
/**
 * Add notice next to each item in cart that has been purchased
 */
function sd_already_purchased_notice( $item ) {
	if ( edd_has_user_purchased( get_current_user_id(), $item['id'] ) ) {
		echo ' <small style= color:red;>(vous possedez déjà cet article)</small>';
	}
        $terms = get_the_terms( $post->ID, 'download_category' );
        if( $terms ) {
        foreach( $terms as $term ) {
            if( 'ebook-couture-mode-emploi' == $term->slug ) {
              if ( edd_has_user_purchased( get_current_user_id(), 6272 ) ) {
		echo ' <small style= color:red;>(vous possedez déjà cet article). <br>Vous trouverez les liens de téléchargement dans <a href=\"https://www.self-couture.com/historique-de-telechargements/\">votre bibliotheque</a></small>';
	}
            }
            
        }
    }
        /**/
}
add_action( 'edd_checkout_cart_item_title_after', 'sd_already_purchased_notice' );

/// pour l'achat de fiches de l'ebook le clients ayant acheter l'ebook complet ne peuve pas repayer et sont informés de la possibilité de trouver le téléchargement sur leur espace client
function ck_edd_user_download_button($purchase_form, $args)
{   $terms = get_the_terms( $post->ID, 'download_category' );
    if( $terms ) 
        {
                    foreach( $terms as $term ) 
                        {$current_user_id = get_current_user_id();//recupere la ID
                    //si el download pertenece a la cat ebook-couture-mode-emploi
                    if( 'ebook-couture-mode-emploi' == $term->slug )
                        {
                            if (is_user_logged_in()) 
                            {
                                
                                        if (edd_has_user_purchased($current_user_id, 6272, $variable_price_id = null))//conditinnel ebook acheté
                                            //le client a acheté l'ebook
                                {///////////////
                                $idd=get_the_ID($post->ID);
                                
                                
                                $user_purchases = edd_get_users_purchases($current_user_id, -1, false, 'complete');
                                        foreach ($user_purchases as $purchase) {
                                                                                $cart_items = edd_get_payment_meta_cart_details($purchase->ID, $include_bundle_files=true);
                                                                                $item_ids = wp_list_pluck($cart_items, 'id');
                                                                                        if (in_array(6272, $item_ids )) {
                                                                                           
                                                                                            $email = edd_get_payment_user_email($purchase->ID);
                                                                                            $payment_key = edd_get_payment_key($purchase->ID); 
                                                                                            $download_data = edd_get_download_files($idd, null);
                                                                                            if ($download_data) {
                                                                                                foreach ($download_data as $filekey => $file) {
                                                                                                    // Generate the file URL and then make a link to it
                                                                                                    $file_url = edd_get_download_file_url($payment_key, $email, $filekey, $idd, null);
                                                                                                    // Setup the style and colors associated with the settings
                                                                                                    $style = isset($edd_options['button_style']) ? $edd_options['button_style'] : 'button';
                                                                                                    $color = isset($edd_options['checkout_color']) ? $edd_options['checkout_color'] : 'blue';
                                                                                                    $new_purchase_form = '';
                                                                                                   
                                                                                                    $purchase_form = '<span id="deja-commande">' . __('<div id="deja-commande-fond"> <p>Vous avez déjà cet article. <br><span class="deja-non-red">Vous trouverez les liens de téléchargement dans</span> <a href="https://www.self-couture.com/historique-de-telechargements/">votre bibliotheque</a></p></div>', 'edd') . '</span>' /*. $new_purchase_form*/;
                                                                                                    }
                                                                                            }
                                                                                            
                                                                                            
                                                                                            
                                                                                                                        
                                                                                        }
                                                                                                                        
                                                                                }
                                                                              
                                } 
                                else {/*echo "<div style=\"padding:5px\"><p>Accedez aux ";mitema_numero_fiches();echo " fiches du guide de couture en achetant <a href=\"https://www.self-couture.com/la-couture-mode-demploi/\">l'ebook complet à 18 euros</a>.</p> </div>";*/}
                            }
                            else {/*echo "<div style=\"padding:5px\"><p>Accedez aux ";mitema_numero_fiches();echo " fiches du guide de couture en achetant <a href=\"https://www.self-couture.com/la-couture-mode-demploi/\">l'ebook complet à 18 euros</a>. </p></div>";*/}
                              
                         }//if ebook
                        
                        }
                        
        }//IF TERM
    
       
    global $edd_options;
    if (!is_user_logged_in()) {
        return $purchase_form;
    }
    $download_id = (string) $args['download_id'];
    $current_user_id = get_current_user_id();
    // If the user has purchased this item, itterate through their purchases to get the specific
    // purchase data and pull out the key and email associated with it. This is necessary for the
    // generation of the download link
    if (edd_has_user_purchased($current_user_id, $download_id, $variable_price_id = null)) {
        $user_purchases = edd_get_users_purchases($current_user_id, -1, false, 'complete');
        foreach ($user_purchases as $purchase) {
            $cart_items = edd_get_payment_meta_cart_details($purchase->ID);
            $item_ids = wp_list_pluck($cart_items, 'id');
            if (in_array($download_id, $item_ids)) {
                $email = edd_get_payment_user_email($purchase->ID);
                $payment_key = edd_get_payment_key($purchase->ID);
            }
        }
        $download_ids = array();
        if (edd_is_bundled_product($download_id)) {
            $download_ids = edd_get_bundled_products($download_id);
        } else {
            $download_ids[] = $download_id;
        }
        // Setup the style and colors associated with the settings
        $style = isset($edd_options['button_style']) ? $edd_options['button_style'] : 'button';
        $color = isset($edd_options['checkout_color']) ? $edd_options['checkout_color'] : 'blue';
        $new_purchase_form = '';
        foreach ($download_ids as $item) {
            // Attempt to get the file data associated with this download
            $download_data = edd_get_download_files($item, null);
            if ($download_data) {
                foreach ($download_data as $filekey => $file) {
                    // Generate the file URL and then make a link to it
                    $file_url = edd_get_download_file_url($payment_key, $email, $filekey, $item, null);
                    /*$new_purchase_form = '<div class="diff-button"><a href="' . $file_url . '" class="' . $style . ' ' . $color . ' edd-submit"><span class="edd-add-to-cart-label">Télécharger ' . $file['name'] . '</span></a></div>';*/
                }
            }
            // As long as we ended up with links to show, use them.
            if (!empty($new_purchase_form)) {
                $purchase_form = '<div class="edd_purchase_submit_wrapper"><span id="deja-commande">' . __('<div id="deja-commande-fond"> <p>Vous avez déjà cet article ! <br><span class="deja-non-red">Vous trouverez les liens de téléchargement dans</span> <a href="https://www.self-couture.com/historique-de-telechargements/">votre bibliotheque</a></p></div>', 'edd') . '</span></div>';
            }
        }
    }
    return $purchase_form;
}
add_filter('edd_purchase_download_form', 'ck_edd_user_download_button', 10, 2);

//Donne le nombre de fiche de l'ebook la couture:mode d'emploi
function mitema_numero_fiches(){
    $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=>'fiches',
                                        
                                        )
                                        ),
                                        'posts_per_page' => '100',
                                        'orderby'=>'title',
                                        'order'=>'ASC'
                               );
                $my_query = new WP_Query($query);
                $i=0;
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) 
                    {
                    $my_query->the_post();
                    ++$i;
                    }    
                endif;
                echo $i;
                wp_reset_postdata();
}

// Donne le nombre de categorie de l'ebook la couture:mode d'emploi
function mitema_nombre_categories_ebook(){
    $term_id = 157;//changer a 157 si base de donnée réparée
    $i=0;
$taxonomy_name = 'download_category';
$term_children = get_term_children( $term_id, $taxonomy_name );


foreach ( $term_children as $child ) {
	$i++;
}
echo $i;
}


function mitema_index_book(){
    $term_id = 157;//changer à 157 si panne base de données resolut
$taxonomy_name = 'download_category';
$term_children = get_term_children( $term_id, $taxonomy_name );
$i=0;

echo '<div id="sommaire-ebook-la-couture-MDE">';
foreach ( $term_children as $child ) {
        $i++;
	$term = get_term_by( 'id', $child, $taxonomy_name );
        echo '<h3>'.$i.'. '.$term->name. ' .</h3>';
        echo '<div class="index-book">';
	echo '<ul class="chapitre-ebook-couture" >';
        // obtenir les liens de fiches appartenent à la categorie
        $cat_term=$term->slug;
        $query= array ( 
                     'tax_query'=> array(
                                    array('taxonomy'=>'download_category',
                                          'field'=>'slug',
                                          'terms'=> $cat_term,                                        
                                        )
                                        ),
                                        'posts_per_page' => '100',
                                        'orderby'=>'title',
                                        'order'=>'ASC'
                               );
                $my_query = new WP_Query($query);
                if($my_query->have_posts()) : 
                    while ($my_query->have_posts() ) {
                    $my_query->the_post();
                    $itemID= get_the_ID();
                    ?><li id="list-fiche-<?php echo $itemID;?>"><a href="<?php the_permalink(); ?>" > <?php the_title(); ?></a></li> <?php
                    }    
                endif; 
                wp_reset_postdata();
        echo '</ul>';  
        echo '</div>';
        ///// fin         
}
echo '</div>';
}

/// asking to confirm twice mail adresse
function pw_edd_add_email_confirmation() {
	?>
 	<p>
		<label class="edd-label" for="edd-email-confirm"><?php _e('Confirmer l\'adresse mail', 'edd'); ?></label>
		<input class="edd-input required" type="email" name="edd_email_confirm" placeholder="<?php _e('Confirmer l\'adresse mail', 'edd'); ?>" id="edd-emai-confirm" value=""/>
 	</p>
	<?php	
}
add_action('edd_purchase_form_after_email', 'pw_edd_add_email_confirmation');
function pw_edd_process_email_confirmation($valid_data, $data) {
	if( $valid_data['need_new_user'] == false ) {
    		return;
  	}
	
	if( !isset($data['edd_email_confirm'] ) || !is_email( $data['edd_email_confirm'] ) ) {
		edd_set_error( 'email_confirmation_required', __( 'Confirmez votre adresse mail s\'il vous plait', 'edd' ) );
	}
	if( trim( $data['edd_email_confirm'] ) != trim( $data['edd_email'] ) ) {
		edd_set_error( 'email_confirmation_required', __( 'Les adresses email ne correspondent pas ! ', 'edd' ) );
	}
}
add_action('edd_checkout_error_checks', 'pw_edd_process_email_confirmation', 10, 2);

//Recoupère toutes les fiches del ebook
function liste_fiches_ebook(){
    if (is_user_logged_in()) {
                              $user_purchases = edd_get_users_purchases($current_user_id, -1, false, 'complete');
                              foreach ($user_purchases as $purchase) {
                                                                      $cart_items = edd_get_payment_meta_cart_details($purchase->ID, $include_bundle_files=true);
                                                                      
                                                                      $item_ids = wp_list_pluck($cart_items, 'id');
                                                                      $email = edd_get_payment_user_email($purchase->ID);
                                                                      $payment_key = edd_get_payment_key($purchase->ID); 
                                                                      foreach ($item_ids as $item_pdf){
                                                                            $download_data = edd_get_download_files($item_pdf, null);
                                                                            if ($download_data) {
                foreach ($download_data as $filekey => $file) {
                    // Generate the file URL and then make a link to it
                    $file_url = edd_get_download_file_url($payment_key, $email, $filekey, $item_pdf, null);
                    
                    $file_name=$file['name'];
                    echo $file_name;
                    echo"<br>-----------------------------------------<br>";
                    echo "<a href=\"".$file_url."\">".$file_name."</a>";
                    echo"<br>-----------------------------------------<br>";
                    /*$new_purchase_form .= '<div class="diff-button"><a href="' . $file_url . '" class="' . $style . ' ' . $color . ' edd-submit"><span class="edd-add-to-cart-label">Télécharger ' . $file['name'] . '</span></a></div>';*/
                }
    }}}}
            // As long as we ended up with links to show, use them.
            
                                                                            
                                                                      
    else {echo ('vous n\'est pas connecté');}
                             
}
/// mode maintenance :
/*function maintenace_mode() {
    if ( !current_user_can( 'administrator' ) ) {
      wp_die('Maintenance.');
    }
  }
  add_action('get_header', 'maintenace_mode');*/
