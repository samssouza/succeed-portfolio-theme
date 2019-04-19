<?php  
/**
 * Enqueues scripts and styles.
 *
 * 
 */ 


add_filter( 'nav_menu_item_id' , '__return_null');

function add_menu_item_class( $classes ) {

    $classes = ['nav-item'];
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_menu_item_class' , 10, 1 );

//Text white should be changeable via Wordpress interface later....
function add_menu_link_attributes( $atts ) {

    $atts['class'] = 'nav-link text-white';
    return $atts;
}
add_filter( 'nav_menu_link_attributes' , 'add_menu_link_attributes' , 10, 1 );




function register_theme_menus(){
    register_nav_menus(
        array(
            'header-menu' =>__( 'Header Menu' ) 
        )
    );

}
add_action('init','register_theme_menus');

//Sets up wordpress themes support
if ( ! function_exists( 'dinardotravel_setup' ) ) :
    
    function dinardotravel_setup() {
    
        add_theme_support( 'title-tag' );
    }

endif; 
add_action( 'after_setup_theme', 'dinardotravel_setup' );
    

function dinardotravel_scripts() {
   
    //BootStrap Style
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() .'/css/bootstrap.min.css' );
    
    //Enqueue Popper JS 
    wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js', array('jquery') );

    //Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js' );

    //Main Style(.css)
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
}

add_action( 'wp_enqueue_scripts', 'dinardotravel_scripts' );

function myprofessionalsite_editor_scripts() {
   
    //Enqueue Editor Blocks JS
    wp_enqueue_script( 'custom-blocks-script', get_template_directory_uri() . '/js/custom.blocks.js' );
 
}

add_action( 'enqueue_block_editor_assets', 'myprofessionalsite_editor_scripts' );


add_theme_support('editor-styles');
add_editor_style( get_stylesheet_uri() );
add_editor_style( get_template_directory_uri() .'/css/bootstrap.min.css' );
add_editor_style( get_template_directory_uri() .'/editor-style.css' );

