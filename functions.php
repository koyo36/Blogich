<?php

require_once get_template_directory() . '/assets/core/class-wp-navwalker.php';

/**
 * koyocreative functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package koyocreative
 */

if ( ! function_exists( 'koyocreative_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function koyocreative_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on koyocreative, use a find and replace
		 * to change 'koyocreative' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'koyocreative', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'koyocreative' ),
			'menu-2' => esc_html__( 'Footer', 'koyocreative' )
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
		add_theme_support( 'custom-background', apply_filters( 'koyocreative_custom_background_args', array(
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
add_action( 'after_setup_theme', 'koyocreative_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function koyocreative_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'koyocreative_content_width', 640 );
}
add_action( 'after_setup_theme', 'koyocreative_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function koyocreative_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'koyocreative' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'koyocreative' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'koyocreative_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function koyocreative_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');



	wp_enqueue_style( 'koyocreative-style', get_stylesheet_uri() );

 	wp_enqueue_style( 'font-awesome',   get_template_directory_uri() . '/assets/vendor/css/all.css');
 	wp_enqueue_style( 'navigation',     get_template_directory_uri() . '/assets/css/navigation.css');
 	wp_enqueue_style( 'featured-image', get_template_directory_uri() . '/assets/css/featured-image.css');
 	wp_enqueue_style( 'search', 		get_template_directory_uri() . '/assets/css/search.css');
 	wp_enqueue_style( 'comments', 		get_template_directory_uri() . '/assets/css/comments.css');
	//wp_enqueue_script( 'koyocreative-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'koyocreative-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('font-awesome-script', get_template_directory_uri() . '/assets/vendor/font-awesome/js/all.js', array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'koyocreative_scripts' );

// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';

// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }
















// TODO

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package koyocreative
 */

if ( ! function_exists( 'koyocreative_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function koyocreative_posted_on() {
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

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'koyocreative' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'koyocreative_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function koyocreative_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'koyocreative' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'koyocreative_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function koyocreative_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'koyocreative' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'koyocreative' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'koyocreative' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'koyocreative' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'koyocreative' ),
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

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'koyocreative' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'koyocreative_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function koyocreative_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
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




// COMMENTS STUFF
// Modify comments header text in comments
add_filter( 'genesis_title_comments', 'child_title_comments');
function child_title_comments() {
    return __(comments_number( '<h3>No Responses</h3>', '<h3>1 Response</h3>', '<h3>% Responses...</h3>' ), 'genesis');
}

// Unset URL from comment form
function crunchify_move_comment_form_below( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'crunchify_move_comment_form_below' );

// Add placeholder for Name and Email
function modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                '<label for="author">' . __( 'Your Name' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )  .
                '</p>';
    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                '<label for="email">' . __( 'Your Email' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )
                 .
                '</p>';
    $fields['url'] = '<p class="comment-form-url">' .
             '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
            '<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
               '</p>';

    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');
