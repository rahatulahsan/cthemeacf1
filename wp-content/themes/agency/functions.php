<?php 


function efrekia_assets(){

    // Enqueue Styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    wp_enqueue_style( 'font-awesome-latest', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'website-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    // Enqueue Style of Theme CSS
    wp_enqueue_style( 'style', get_stylesheet_uri());


    // Enqueue Scripts
    wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotop-min', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'image-loaded-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-counter-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/880bf9a8cc.js', array('jquery'), '1.0.0', true );

}


add_action('wp_enqueue_scripts', 'efrekia_assets');




function efrekia_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery') );
    load_theme_textdomain( 'efrekia', get_template_directory_uri(). '/languages' );

    //register a menu

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'efrekia')
    ));
}


add_action('after_setup_theme', 'efrekia_setup_theme');



// Custom Post Types
function efrekia_custom_posts(){
    
    // custom posts for sliders
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'efrekia'),
            'singular_name' => __('Slides', 'efrekia'),
            'add_new_item' => __('Add New Slide', 'efrekia'),
            'edit_item' => __('Edit Slide', 'efrekia'),
            'new_item' => __('New Slide', 'efrekia'),
            'new_items' => __('New Slides', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-images-alt2'
    ));

    // custom posts for services
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'efrekia'),
            'singular_name' => __('Service', 'efrekia'),
            'add_new_item' => __('Add New Service', 'efrekia'),
            'edit_item' => __('Edit Service', 'efrekia'),
            'new_item' => __('New Service', 'efrekia'),
            'new_items' => __('New Services', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-editor-paste-word'
    ));

    // custom posts for Counter
    register_post_type('counters', array(
        'labels' => array(
            'name' => __('Counters', 'efrekia'),
            'singular_name' => __('Counter', 'efrekia'),
            'add_new_item' => __('Add New Counter', 'efrekia'),
            'edit_item' => __('Edit Counter', 'efrekia'),
            'new_item' => __('New Counter', 'efrekia'),
            'new_items' => __('New Counters', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
        'menu_icon' => 'dashicons-image-filter'
    ));



    // custom posts for Team
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'efrekia'),
            'singular_name' => __('Team', 'efrekia'),
            'add_new_item' => __('Add New Team Member', 'efrekia'),
            'edit_item' => __('Edit Team Member', 'efrekia'),
            'new_item' => __('New Team Member', 'efrekia'),
            'new_items' => __('New Team Members', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-businessperson'
    ));

    // custom posts for Testimonial
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'efrekia'),
            'singular_name' => __('Testimonial', 'efrekia'),
            'add_new_item' => __('Add New Testimonial', 'efrekia'),
            'edit_item' => __('Edit Testimonial', 'efrekia'),
            'new_item' => __('New Testimonial', 'efrekia'),
            'new_items' => __('New Testimonials', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-comments'
    ));

    // custom posts for Gallery
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Galleries', 'efrekia'),
            'singular_name' => __('Gallery', 'efrekia'),
            'add_new_item' => __('Add New Gallery', 'efrekia'),
            'edit_item' => __('Edit Gallery', 'efrekia'),
            'new_item' => __('New Gallery', 'efrekia'),
            'new_items' => __('New Gallery', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-comments'
    ));

    // custom posts for Portfolio
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'efrekia'),
            'singular_name' => __('Portfolio', 'efrekia'),
            'add_new_item' => __('Add New Portfolio', 'efrekia'),
            'edit_item' => __('Edit Portfolio', 'efrekia'),
            'new_item' => __('New Portfolio', 'efrekia'),
            'new_items' => __('New Portfolios', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-gallery',
    ));
    
    // Register Taxonomy for Portfolio Post Type
    register_taxonomy( 'portfolio-cat', 'portfolio', array(
        'labels' => array(
            'name' => __('Categories', 'efrekia'),
            'singular_name' => __('Category', 'efrekia')
        ),
        'rewrite' => array(
            'slug' => 'portfolio',
            'with_front' => false,
            'hierarchical' => true
        ),
        'hierarchical' => true,
        'show_admin_column' => true

    ) );


}

add_action('init', 'efrekia_custom_posts');


/**
 * Add a sidebar.
 */
function efrekia_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'efrekia' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'efrekia' ),
		'before_widget' => '<div class="single-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'efrekia' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'efrekia' ),
		'before_widget' => '<div class="single-footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

    // Logo Widget Sidebar
    register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'efrekia' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'efrekia' ),
		'before_widget' => '<div class="single-footer footer-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );

    // 2nd sidebar for Quick Page Links
    register_sidebar( array(
		'name'          => __( 'Quick Links Sidebar', 'efrekia' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'efrekia' ),
		'before_widget' => '<div class="single-footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );
    // 3rd sidebar for Latest Post Links
    register_sidebar( array(
        'name'          => __( 'Post Links Sidebar', 'efrekia' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'efrekia' ),
        'before_widget' => '<div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ) );
}
add_action( 'widgets_init', 'efrekia_widgets_init' );



// Adding CSS options for ACF
function acf_css(){?>

    <style>
        .header-top{
            background-color: <?php the_field('header_background', 'option'); ?>
        }
    </style>

<?php }

add_action('wp_head', 'acf_css');


// Options for Theme Settings

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'About Settings',
        'menu_title'    => 'About',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'FAQ & Skills Settings',
        'menu_title'    => 'FAQ & Skills',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'CTA Settings',
        'menu_title'    => 'CTA',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Contact Settings',
        'menu_title'    => 'Contact',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

function efrekia_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
     
add_filter( 'comment_form_fields', 'efrekia_move_comment_field_to_bottom' );



?>






   