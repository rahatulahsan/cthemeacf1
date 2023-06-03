<?php 

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
require_once get_template_directory().'/inc/efrekia_activation.php';


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






   