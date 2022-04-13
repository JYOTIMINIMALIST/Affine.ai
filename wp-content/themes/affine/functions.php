<?php
/**
 * affine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package affine
 */
require get_theme_file_path('./inc/search-data.php');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'affine_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function affine_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on affine, use a find and replace
		 * to change 'affine' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'affine', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'affine' ),
				'thoughts-unboxed' => esc_html__( 'thoughts-unboxed-menu', 'affine' ),
				'livewire-action' => esc_html__( 'livewire-action-menu', 'affine' ),
				'affinopedia' => esc_html__( 'affinopedia-menu', 'affine' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'affine_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'affine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function affine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'affine_content_width', 640 );
}
add_action( 'after_setup_theme', 'affine_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function affine_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'affine' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'affine' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'affine_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function affine_scripts() {
	wp_enqueue_style( 'affine-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'affine-style', 'rtl', 'replace' );

	wp_enqueue_script( 'affine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'affine_scripts' );

function affine1_scripts() {
	wp_enqueue_script( 'ajax-script','https://dev.affine.ai/js/whitepaper.js', array('jquery'));
	wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	}
add_action('wp_enqueue_scripts','affine1_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Template Setting - functions.php
if( function_exists('acf_add_options_page') ) {
  	acf_add_options_page(array(
    	'page_title'  => 'Theme General Settings',
    	'menu_title'  => 'Theme Settings',
    	'menu_slug'   => 'theme-general-settings',
    	'capability'  => 'edit_posts',
    	'redirect'    => false
  	));
	acf_add_options_sub_page(array(
	    'page_title'  => 'Theme Header Settings',
	    'menu_title'  => 'Header Update',
	    'parent_slug' => 'theme-general-settings',
  	));
	acf_add_options_sub_page(array(
	    'page_title'  => 'Theme Footer Settings',
	    'menu_title'  => 'Footer Update',
	    'parent_slug' => 'theme-general-settings',
  	));
}

add_filter( 'upload_mimes', 'my_myme_types');
function my_myme_types( $mime_types ) {
  	$mime_types['svg'] = 'image/svg+xml'; // Adding .svg extension
    $mime_types['svg'] = 'image/svg'; // Adding .svg extension
  	$mime_types['json'] = 'application/json'; // Adding .json extension
  	$mime_types['json'] = 'text/plain'; // Adding .json extension
  	unset( $mime_types['xls'] );  // Remove .xls extension
  	unset( $mime_types['xlsx'] ); // Remove .xlsx extension
  return $mime_types;
}

register_post_type( 'newsroom-post', array('labels' => array(
  	'name' => __( 'NewsroomPost' ),
  	'singular_name' => __( 'NewsroomPost' )),
 	'public' => true,
 	'has_archive' => true,
 	'menu_icon' => 'dashicons-format-image',
 	'type' => 'select',
	'supports'=> array( 'title', 'thumbnail', 'page-attributes', 'editor'),
)
);

register_post_type( 'whitepaper-post', array('labels' => array(
  	'name' => __( 'WhitepaperPost' ),
  	'singular_name' => __( 'Whitepaper' )),
 	'public' => true,
 	'has_archive' => true,
 	'menu_icon' => 'https://ixdtm.com/projects/affine/wp-content/themes/affine/images/whitepaper-inner.png',
 	'type' => 'select',
	'supports'=> array( 'title', 'thumbnail', 'page-attributes', 'editor'),
)
);
register_post_type( 'casestudies-post', array('labels' => array(
	'name' => __( 'CasestudiesPost' ),
	'singular_name' => __( 'Casestudies' )),
   'public' => true,
   'has_archive' => true,
   'menu_icon' => 'https://ixdtm.com/projects/affine/wp-content/themes/affine/images/casestudies-inner.png',
   'type' => 'select',
  'supports'=> array( 'title', 'thumbnail', 'page-attributes', 'editor'),
)
);
register_post_type( 'video-post', array('labels' => array(
	'name' => __( 'VideoPost' ),
	'singular_name' => __( 'Videos' )),
   	'public' => true,
   	'has_archive' => true,
   	'menu_icon' => 'https://ixdtm.com/projects/affine/wp-content/themes/affine/images/videos-inner.png',
   	'type' => 'select',
  	'supports'=> array( 'title', 'thumbnail', 'page-attributes', 'editor'),
)
);

/*
Custom post type : workforce
*/
add_action( 'init', 'create_post_type_workforce_post' );
function create_post_type_workforce_post() {
  	register_post_type( 'workforce-post',
    	array(
			'labels' => array(
				'name' => __( 'WorkforcePost' ),
				'singular_name' => __( 'WorkforcePost' ),
				'add_new_item' => __( 'Add New WorkforcePost' ),
				'all_items' => __( 'All WorkforcePost' ),
				'edit_item' => __( 'Edit WorkforcePost' ),
				'new_item' => __( 'New WorkforcePost' ),
				'search_item' => __( 'Search WorkforcePost' ),
				'featured_image'        => __( 'Featured Image size (300*450 px)', 'Affine' ),
				'set_featured_image'    => __( 'Set Featured image size(300*450 px)', 'Affine' ),
				'remove_featured_image' => _x( 'Remove Featured image size(300*450 px)', 'Affine' ),
				'use_featured_image'    => _x( 'Use as Featured image size(300*450 px)', 'Affine' ),
			),
      		'menu_position'  => 5,
      		'public' => true,
      		'has_archive' => true,
      		'taxonomies' => array('post_tag','post'),
      		'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
      		'menu_icon'   => 'dashicons-format-image',
    	)
  	);
}

register_post_type( 'event', array('labels' => array(
	'name' => __( 'Event' ),
	'singular_name' => __( 'Event' )),
   'public' => true,
   'has_archive' => true,
   'menu_icon' => 'dashicons-format-image',
   'type' => 'select',
  'supports'=> array( 'title', 'thumbnail', 'page-attributes', 'editor'),
)
);

// create custom taxnomies
add_action( 'init', 'create_custom_taxonomy');
function create_custom_taxonomy() {
	$labels = array(
    	'name'              => __( 'Newsroom Categories'),
    	'singular_name'     => __( 'NewsroomPost'),
    	'search_items'      => __( 'Search NewsroomCategories'),
    	'all_items'         => __( 'All Newsroom Categories'),
    	'parent_item'       => __( 'Parent Newsroom Categories'),
    	'edit_item'         => __( 'Edit Newsroom Categories'),
    	'update_item'       => __( 'Update Newsroom Categories'),
    	'add_new_item'      => __( 'Add New Newsroom Categories'),
    	'new_item_name'     => __( 'New Newsroom Categories Name'),
    	'menu_name'         => __( 'Newsroom Categories'),
	);

	register_taxonomy('newsroom_categories',array('newsroom-post'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
		'labels'        => $labels,
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'newsroom_categories' ),
  	));

  	$labels = array(
    	'name'              => __( 'Whitepaper Categories'),
    	'singular_name'     => __( 'WhitepaperPost'),
    	'search_items'      => __( 'Search WhitepaperCategories'),
    	'all_items'         => __( 'All Whitepaper Categories'),
    	'parent_item'       => __( 'Parent Whitepaper Categories'),
    	'edit_item'         => __( 'Edit Whitepaper Categories'),
    	'update_item'       => __( 'Update Whitepaper Categories'),
    	'add_new_item'      => __( 'Add New Whitepaper Categories'),
    	'new_item_name'     => __( 'New Whitepaper Categories Name'),
    	'menu_name'         => __( 'Whitepaper Categories'),
	);

	register_taxonomy('whitepaper_categories',array('whitepaper-post'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
		'labels'        => $labels,
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'whitepaper_categories' ),
  	));

	  $labels = array(
    	'name'              => __( 'Casestudies Categories'),
    	'singular_name'     => __( 'CasestudiesPost'),
    	'search_items'      => __( 'Search CasestudiesCategories'),
    	'all_items'         => __( 'All Casestudies Categories'),
    	'parent_item'       => __( 'Parent Casestudies Categories'),
    	'edit_item'         => __( 'Edit Casestudies Categories'),
    	'update_item'       => __( 'Update Casestudies Categories'),
    	'add_new_item'      => __( 'Add New Casestudies Categories'),
    	'new_item_name'     => __( 'New Casestudies Categories Name'),
    	'menu_name'         => __( 'Casestudies Categories'),
	);

	register_taxonomy('casestudies_categories',array('casestudies-post'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
		'labels'        => $labels,
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'casestudies_categories' ),
  	));

	  $labels = array(
    	'name'              => __( 'Video Categories'),
    	'singular_name'     => __( 'VideoPost'),
    	'search_items'      => __( 'Search VideoCategories'),
    	'all_items'         => __( 'All Video Categories'),
    	'parent_item'       => __( 'Parent Video Categories'),
    	'edit_item'         => __( 'Edit Video Categories'),
    	'update_item'       => __( 'Update Video Categories'),
    	'add_new_item'      => __( 'Add New Video Categories'),
    	'new_item_name'     => __( 'New Video Categories Name'),
    	'menu_name'         => __( 'Video Categories'),
	);

	register_taxonomy('video_categories',array('video-post'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
		'labels'        => $labels,
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'video_categories' ),
  	));

	  $labels = array(
    	'name'              => __( 'Workforce Categories'),
    	'singular_name'     => __( 'WorkforcePost'),
    	'search_items'      => __( 'Search WorkforceCategories'),
    	'all_items'         => __( 'All Workforce Categories'),
    	'parent_item'       => __( 'Parent Workforce Categories'),
    	'edit_item'         => __( 'Edit Workforce Categories'),
    	'update_item'       => __( 'Update Workforce Categories'),
    	'add_new_item'      => __( 'Add New Workforce Categories'),
    	'new_item_name'     => __( 'New Workforce Categories Name'),
    	'menu_name'         => __( 'Workforce Categories'),
	);

	register_taxonomy('workforce_categories',array('workforce-post'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
		'labels'        => $labels,
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'workforce_categories' ),
  	));

	$labels = array(
    	'name'              => __( 'Event Categories'),
	    'singular_name'     => __( 'Event'),
	    'search_items'      => __( 'Search EventCategories'),
	    'all_items'         => __( 'All Event Categories'),
	    'parent_item'       => __( 'Parent Event Categories'),
	    'edit_item'         => __( 'Edit Event Categories'),
	    'update_item'       => __( 'Update Event Categories'),
	    'add_new_item'      => __( 'Add New Event Categories'),
	    'new_item_name'     => __( 'New Event Categories Name'),
	    'menu_name'         => __( 'Event Categories'),
  	);

  	register_taxonomy('event_categories',array('event'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
    	'labels'        => $labels,
    	'show_ui'       => true,
    	'query_var'     => true,
    	'rewrite'       => array( 'slug' => 'event_categories' ),
  	));
}

function reading_time()
{
    $content = get_post_field('post_content', $post->ID);
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
        $timer = " Min"; // minute
    } else {
        $timer = " Min"; // minutes
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

// Game ajax
add_action('wp_ajax_data_game' , 'data_game');
add_action('wp_ajax_nopriv_data_game','data_game');
function data_game(){
	if($_REQUEST['keyword'] != ''){
		$key = $_REQUEST['keyword'][0];
		$priceNum = $key - 1;
		$slotArray = get_field('slot_machine','option');	
		// print_r($fourdata);
		$slotName = $slotArray[$priceNum]['name'];
		echo json_encode(array('success' => true, 'slotArray' => $slotArray ,'slotName' => $slotName ));
	}
	wp_reset_postdata();
    die();
}

//////////////////////////////////////

/*
 * Create a column. And maybe remove some of the default ones
 * @param array $columns Array of all user table columns {column ID} => {column Name} 
 */
add_filter( 'manage_users_columns', 'rudr_modify_user_table' );

function rudr_modify_user_table( $columns ) {
	
	// unset( $columns['posts'] ); // maybe you would like to remove default columns
	$columns['registration_date'] = 'Registration date'; // add new

	return $columns;

}

/*
 * Fill our new column with the registration dates of the users
 * @param string $row_output text/HTML output of a table cell
 * @param string $column_id_attr column ID
 * @param int $user user ID (in fact - table row ID)
 */
add_filter( 'manage_users_custom_column', 'rudr_modify_user_table_row', 10, 3 );

function rudr_modify_user_table_row( $row_output, $column_id_attr, $user ) {
	
	$date_format = 'j M, Y H:i';

	switch ( $column_id_attr ) {
		case 'registration_date' :
			return date( $date_format, strtotime( get_the_author_meta( 'registered', $user ) ) );
			break;
		default:
	}

	return $row_output;

}

/*
 * Make our "Registration date" column sortable
 * @param array $columns Array of all user sortable columns {column ID} => {orderby GET-param} 
 */
add_filter( 'manage_users_sortable_columns', 'rudr_make_registered_column_sortable' );

function rudr_make_registered_column_sortable( $columns ) {
	return wp_parse_args( array( 'registration_date' => 'registered' ), $columns );
}