<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package mitema
 */

function mitema_metainfo() {
    print("<div class='contenedor-metas'>" );
    // Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'mitema' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Cat&eacute;gories %1$s', 'mitema' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'mitema' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				/*printf( '<span class="tags-links">' . esc_html__( 'Etiquette', 'mitema' ) . '</span>', $tags_list ); // WPCS: XSS OK.*/
			}
		}
                
    print ("</div>");
    
}
  

if ( ! function_exists( 'mitema_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function mitema_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		
	}
endif;

if ( ! function_exists( 'mitema_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function mitema_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'pour %s', 'post author', 'mitema' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'mitema_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function mitema_entry_footer() {
		

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Laisser un commentaire<span class="screen-reader-text"> on %s</span>', 'mitema' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		
	}
endif;

if ( ! function_exists( 'mitema_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function mitema_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;
function mitema_the_posts_navigation( $args = array() ) {
	        echo mitema_get_the_posts_navigation( $args );
	}
function mitema_get_the_posts_navigation( $args = array() ) {
    $navigation = '';
 
    // Don't print empty markup if there's only one page.
    if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
        $args = wp_parse_args(
            $args,
            array(
                'prev_text'          => __( 'Articles plus anciens' ),
                'next_text'          => __( 'Articles plus récents' ),
                'screen_reader_text' => __( 'Posts navigation' ),
            )
        );
 
        $next_link = get_previous_posts_link( $args['next_text'] );
        $prev_link = get_next_posts_link( $args['prev_text'] );
 
        if ( $prev_link ) {
            $navigation .= '<div class="nav-previous">' . $prev_link . '</div>';
        }
 
        if ( $next_link ) {
            $navigation .= '<div class="nav-next">' . $next_link . '</div>';
        }
 
        $navigation = _navigation_markup( $navigation, 'posts-navigation', $args['screen_reader_text'] );
    }
 
    return $navigation;
}

