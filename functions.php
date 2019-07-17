<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/DeafStyle.css',array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video','gallery'));
add_theme_support('post-formats');

/*
	==========================================
	 Sidebar function
	==========================================
*/
add_action( 'widgets_init', 'add_sidebar' );

function add_sidebar() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'Samuel' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'Samuel' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widgettitle">',
    	'after_title'   => '</h2>',
        )
    );

}



// Register Custom Navigation Walker
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

//customizer link

require get_template_directory() . '/inc/customizer.php';


register_nav_menus( array(
	'primary' => __('Primary Menu', 'indexbascis')
));

register_default_headers( array(
    'banner1' => array(
        'url'           => get_stylesheet_directory_uri() . '/images/banner1.jpg',
        'thumbnail_url' => get_stylesheet_directory_uri() . '/images/banner1.jpg',
        'description'   => esc_html__( 'Banner1', 'theme-textdomain' )
    ),
    'banner2' => array(
        'url'           => get_stylesheet_directory_uri() . '/images/banner2.jpg',
        'thumbnail_url' => get_stylesheet_directory_uri() . '/images/banner2.jpg',
        'description'   => esc_html__( 'Banner2', 'theme-textdomain' )
    ),
    'banner-3' => array(
        'url'           => get_stylesheet_directory_uri() . '/images/banner3.jpg',
        'thumbnail_url' => get_stylesheet_directory_uri() . '/images/banner3.jpg',
        'description'   => esc_html__( 'Banner3', 'theme-textdomain' )
    )
) );



// unregister all widgets
// function unregister_default_widgets() {
//     unregister_widget('WP_Widget_Pages');
//     // unregister_widget('WP_Widget_Calendar');
//     unregister_widget('WP_Widget_Archives');
//     unregister_widget('WP_Widget_Links');
//     unregister_widget('WP_Widget_Meta');
//     unregister_widget('WP_Widget_Search');
//     unregister_widget('WP_Widget_Text');
//     unregister_widget('WP_Widget_Categories');
//     unregister_widget('WP_Widget_Recent_Posts');
//     unregister_widget('WP_Widget_Recent_Comments');
//     unregister_widget('WP_Widget_RSS');
//     unregister_widget('WP_Widget_Tag_Cloud');
//     unregister_widget('WP_Nav_Menu_Widget');
//     unregister_widget('Twenty_Eleven_Ephemera_Widget');
//     unregister_widget('WP_Widget_Custom_HTML');
//     unregister_widget('WP_Widget_Media_Audio');
//     unregister_widget('WP_Widget_Media_Gallery');
//     unregister_widget('WP_Widget_Media_Image');
//     unregister_widget('WP_Widget_Media_Video');

// }







// require get_template_directory() . '/inc/custom_post_types.php';

// function create_posttype() {
 
//     register_post_type( 'movies',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Books' ),
//                 'singular_name' => __( 'Book' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'Books'),
//         )
//     );
// }
// // Hooking up our function to theme setup
// add_action( 'init', 'create_posttype' );

// function custom_post_type() {
 
// // Set UI labels for Custom Post Type
//     $labels = array(
//         'name'                => _x( 'books', 'Post Type General Name', 'twentythirteen' ),
//         'singular_name'       => _x( 'books', 'Post Type Singular Name', 'twentythirteen' ),
//         'menu_name'           => __( 'books', 'twentythirteen' ),
//         'parent_item_colon'   => __( 'Parent book', 'twentythirteen' ),
//         'all_items'           => __( 'All books', 'twentythirteen' ),
//         'view_item'           => __( 'View book', 'twentythirteen' ),
//         'add_new_item'        => __( 'Add New books', 'twentythirteen' ),
//         'add_new'             => __( 'Add New', 'twentythirteen' ),
//         'edit_item'           => __( 'Edit book', 'twentythirteen' ),
//         'update_item'         => __( 'Update book', 'twentythirteen' ),
//         'search_items'        => __( 'Search books', 'twentythirteen' ),
//         'not_found'           => __( 'Not Found', 'twentythirteen' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
//     );
     
// // Set other options for Custom Post Type
     
//     $args = array(
//         'label'               => __( 'books', 'twentythirteen' ),
//         'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
//         'labels'              => $labels,
//         // Features this CPT supports in Post Editor
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         // You can associate this CPT with a taxonomy or custom taxonomy. 
//         'taxonomies'          => array( 'genres' ),
//         /* A hierarchical CPT is like Pages and can have
//         * Parent and child items. A non-hierarchical CPT
//         * is like Posts.
//         */ 
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
//     );
     
//     // Registering your Custom Post Type
//     register_post_type( 'books', $args );
 
// }
 
// /* Hook into the 'init' action so that the function
// * Containing our post type registration is not 
// * unnecessarily executed. 
// */
 
// add_action( 'init', 'custom_post_type', 0 );

