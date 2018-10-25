<?php 
add_theme_support( 'menus' ); // enable menus
add_theme_support( 'post-thumbnails' );  // enable thumbnails 
set_post_thumbnail_size(750,300);

/**
* Enregistrement de nos menus... 
*
* @return void
*/
function register_theme_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __("Primary menu"),
            )
        );
}
add_action('init', 'register_theme_menus');
    
function add_classes_menu( $classes, $item ){
    if (in_array('current-menu-item',$classes)){
        $classes[] = "nav-item active";
    }else{
        $classes[] = "nav-item";
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'add_classes_menu' , 10 , 2);


function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
/* end menu */

// reade more 

function modify_read_more_link() {
    return '<a class="more-link btn btn-primary" href="' . get_permalink() . '">'.__('Read more').' <i class="fa fa-arrow-right"></i></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

    
    /**
    * loading css
    *
    * @return void
    */
    function load_styles()
    {
        wp_enqueue_style('boostrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style('bootflat', get_template_directory_uri().'/vendor/bootstrap/css/bootflap.min.css' );
        wp_enqueue_style('fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
        wp_enqueue_style('home-css', get_template_directory_uri().'/css/blog-home.css' );
        
    }
    
    add_action('wp_enqueue_scripts','load_styles');


// sidebar 
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h5 class="card-header">',
	'after_title'   => '</h5>',
    ) );
}


?>