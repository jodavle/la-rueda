<?php

    function laRueda_resource() {
        wp_enqueue_script( 'my-custom-r', get_stylesheet_directory_uri() . '/dist/javascript/main.min.js', array(), '1.0.0', true );
        /*wp_enqueue_style( 'customfont', get_stylesheet_directory_uri() . '/webfont/stylesheet.css' );
        /*wp_enqueue_style( 'awesomefont', get_stylesheet_directory_uri() . '/fonts/font-awesome.css' );
	wp_enqueue_style( 'customstyles', get_stylesheet_directory_uri() . '/src/gridlex.css' );*/
        wp_enqueue_style( 'estilo', get_stylesheet_uri() );

    }

    add_action('wp_enqueue_scripts', 'laRueda_resource');

function widgetInit() {
    register_sidebar(array(
        'name' => 'Area Footer 2',
        'id' => 'footer2',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Area Footer 3',
        'id' => 'footer3',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));
}

add_action('widgets_init', 'widgetInit');

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');

// Custom customizers :)
function lwp_section_fp($wp_customize) {
    $wp_customize->add_section('lwp_section_fp-section', array(
        'title' => 'Sección 1 FP',
    ));
    // Opción pagina de seccion 1
    $wp_customize->add_setting('lwp_section_fp-link');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp-link-control', array(
        'label' => 'Link',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('lwp_section_fp-2-link');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp-2-link-control', array(
        'label' => 'Link 1 Sección 4',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp-2-link',
        'type' => 'dropdown-pages'
    )));
    $wp_customize->add_setting('lwp_section_fp-3-link');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp-3-link-control', array(
        'label' => 'Link 2 Sección 4',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp-3-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('lwp_section_fp--2-headline-1');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-headline-1-control', array(
        'label' => 'Titulo 1, Sección 2',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp--2-headline-1',
        'default' => 'Misión'
    )));

    $wp_customize->add_setting('lwp_section_fp--2-headline-2');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-headline-2-control', array(
        'label' => 'Titulo 2, Sección 2',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp--2-headline-2',
        'default' => 'Visión'
    )));

    $wp_customize->add_setting('lwp_section_fp--2-text-1');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-text-1-control', array(
        'label' => 'Texto 1, Sección 2',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp--2-text-1',
        'type' => 'textarea'
    )));

    $wp_customize->add_setting('lwp_section_fp--2-text-2');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-text-2-control', array(
        'label' => 'Texto 2, Sección 2',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp--2-text-2',
        'type' => 'textarea'
    )));

    $wp_customize->add_setting('lwp_section_fp-1-image');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
    'lwp-section-fp-1-image-control', array(
        'label' => 'Imágen 1, Sección 2',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp-1-image',
        'width' => 500,
        'height' => 500
    )));

    $wp_customize->add_setting('lwp_section_fp-2-image');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
    'lwp-section-fp-2-image-control', array(
        'label' => 'Imágen 2, Sección 2',
        'section' => 'lwp_section_fp-section',
        'settings' => 'lwp_section_fp-2-image',
        'width' => 500,
        'height' => 500
    )));

}
add_action('customize_register', 'lwp_section_fp');

function lwp_section_2_fp($wp_customize) {
    $wp_customize->add_section('lwp_section_fp2-section', array(
        'title' => 'Sección 2 FP',
    ));


    $wp_customize->add_setting('lwp_fp_section_1');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-headline-1-control', array(
        'label' => 'Footer Sección 2',
        'section' => 'lwp_section_fp2-section',
        'settings' => 'lwp_fp_section_1',
        'default' => 'Misión'
    )));

    $wp_customize->add_setting('lwp_fp_section_2');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-headline-2-control', array(
        'label' => 'Teléfono',
        'section' => 'lwp_section_fp2-section',
        'settings' => 'lwp_fp_section_2',
        'default' => '(502) 3526 7494'
    )));

    $wp_customize->add_setting('lwp_fp_section_3');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'lwp-section-fp--2-headline-3-control', array(
        'label' => 'Correo',
        'section' => 'lwp_section_fp2-section',
        'settings' => 'lwp_fp_section_3',
        'default' => 'info@saboreslarueda.com'
    )));

}
add_action('customize_register', 'lwp_section_2_fp');


function register_my_menus() {
    register_nav_menus(
      array(
        'menu' => __( 'Menu' ),
        'redes-sociales' => __( 'Redes Sociales' )
      )
    );
  }
add_action( 'init', 'register_my_menus' );


// Caracteristicas especiales para wordpress

//CUSTOM LOGO
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
//SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');

add_post_type_support( 'page', 'excerpt' );

//BreakLine
function break_the_title($id){
    return str_replace(' | ', '<br />', get_the_title($id));
}
//Thumbnail
add_theme_support( 'post-thumbnails' );
//
//ADD LINE BREAK
add_filter( 'the_title', 'custom_the_title', 10, 2 );

function custom_the_title( $title, $post_id ){
    $title = str_replace( '|', '<br/>', $title ); // we replace '|' by ￼'<br>':
    return $title;
}

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

