<?php

add_action('wp_enqueue_scripts', 'my_enqueue_custom_js');
function my_enqueue_custom_js() {
    wp_enqueue_script('header-js', get_stylesheet_directory_uri().'/js/header.js', 1, true);
    wp_enqueue_script('services-js', get_stylesheet_directory_uri().'/js/services.js', 1, true);
    wp_enqueue_script('modal-js', get_stylesheet_directory_uri().'/js/modal.js', 1, true);
}

//styles
function groomNglow_scripts_styles(){
  
    $cdn_css_bootstrap = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
    $cdn_js_bootstrap = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';
    wp_register_style('register-bootstrap', $cdn_css_bootstrap , [], false , 'all');
    wp_register_style('styles', get_stylesheet_uri() . '/css/style.css' , [], false , 'all');
    wp_enqueue_script('bootstrap-js', $cdn_js_bootstrap, [], '5.3.0', 'all' );
    wp_enqueue_style('bootstrap-css', $cdn_css_bootstrap, array('register-bootstrap'), '5.3.0', 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri().'/css/style.css');
}
add_action('wp_enqueue_scripts', 'groomNglow_scripts_styles');


//menu-nav
function groomNglow_menus(){
    $locations = array(
        'menu-main' => __('Main menu','groomNglow')
    );
    register_nav_menus($locations);
};

add_action('init', 'groomNglow_menus');

//Activate custom logo
function set_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo',
    array(
        "height" => 35,
        "width" => 35,
        "flex-width" => true,
        "flex-height" => true
    )
);
}
add_action('after_setup_theme', 'set_support');


//custom-post-type
// Register Custom Post Type
function groomNglow_contact_and_social_media() {

    $labels = array(
        'name'                  => _x( 'contact', 'groomNglow' ),
        'singular_name'         => _x( 'info-contact', 'groomNglow' ),
        'menu_name'             => __( 'info-contact-social-media', 'groomNglow' ),
    );
    $args = array(
        'label'                 => __( "contact page", "groomNglow" ),
        'description'           => __( "information", 'groomNglow' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu-icon'             => 'dashicons-instagram',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => true,
        'show_in_rest'          => true,
        'taxonomies'            => array( 'category' )
    );
    register_post_type('contact', $args );
}

add_action( 'init', 'groomNglow_contact_and_social_media');

function groomNglow_sections() {
	$labels = array(
		'name'                  => _x( 'sections', 'groomNglow' ),
		'singular_name'         => _x( 'section landing page', 'groomNglow' ),
		'menu_name'             => __( 'Landing page sections', 'groomNglow' ),
	);
	$args = array(
		'label'                 => __( 'section landing page', 'groomNglow' ),
		'description'           => __( "Landing page's section", 'groomNglow' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
        'menu-icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'rewrite'               => true,
        'show_in_rest'          => true,
        'taxonomies'            => array( 'category' ),
	);
	register_post_type('section-landing-page', $args );
}
add_action( 'init', 'groomNglow_sections');

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Contact Info', 'groomNglow' ),
        'id'         => 'untitled',
        'post_types' => 'contact',
        'context'    => 'normal',
        'fields'     => [
            [
                'type'        => 'url',
                'name'        => esc_html__( 'Facebook', 'groomNglow' ),
                'id'          => $prefix . 'facebook',
                'desc'        => esc_html__( 'add facebook link account', 'groomNglow' ),
                'placeholder' => esc_html__( 'add facebook link account', 'groomNglow' ),
            ],
            [
                'type'        => 'url',
                'name'        => esc_html__( 'Instagram', 'groomNglow' ),
                'id'          => $prefix . 'instagram',
                'desc'        => esc_html__( 'add Instagram link account', 'groomNglow' ),
                'placeholder' => esc_html__( 'add facebook link account', 'groomNglow' ),
            ],
            [
                'type'        => 'url',
                'name'        => esc_html__( 'Youtube', 'groomNglow' ),
                'id'          => $prefix . 'youtube',
                'placeholder' => esc_html__( 'add youtube link account', 'groomNglow' ),
            ],
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Number phone', 'groomNglow' ),
                'id'          => $prefix . 'number_phone',
                'placeholder' => esc_html__( 'number phone', 'groomNglow' ),
            ],
            [
                'type'        => 'email',
                'name'        => esc_html__( 'Email', 'groomNglow' ),
                'id'          => $prefix . 'email_24lilqriplqh',
                'placeholder' => esc_html__( 'email address', 'groomNglow' ),
            ],
        ],
    ];

    return $meta_boxes;
}



function groomNglow_services() {

    $labels = array(
        'name'                  => _x( 'service', 'groomNglow' ),
        'singular_name'         => _x( 'service', 'groomNglow' ),
        'menu_name'             => __( 'services', 'groomNglow' ),
    );
    $args = array(
        'label'                 => __( "service page", "groomNglow" ),
        'description'           => __( "services", 'groomNglow' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu-icons'             => 'dashicons-pets',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => true,
        'show_in_rest'          => true,
        'taxonomies'            => array( 'category' )
    );
    register_post_type('services', $args );
}

add_action( 'init', 'groomNglow_services');

function groomNglow_additional_services() {

    $labels = array(
        'name'                  => _x( 'additional_service', 'groomNglow' ),
        'singular_name'         => _x( 'additional_service', 'groomNglow' ),
        'menu_name'             => __( 'additional services', 'groomNglow' ),
    );
    $args = array(
        'label'                 => __( "additional service page", "groomNglow" ),
        'description'           => __( "Add a additional services", 'groomNglow' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu-icons'             => 'dashicons-pets',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => true,
        'show_in_rest'          => true,
        'taxonomies'            => array('category' )
    );
    register_post_type('additional_services', $args );
}

add_action( 'init', 'groomNglow_additional_services');

function  groomNglow_getService($service, $price){
    if (get_field($service) && get_field($price)) {
       return  printf("
        <div class='d-flex w-full'>
            <div>
                <input 
                id='%s'
                type='radio' 
                name='service-details'
                value='%s'
                data-price='%d'
                class='service-details'
                />
                <label for='%s'>%s</label>
            </div>  
            <div class='dots flex-grow-1'></div>
            <span>$ %d </span>
        </div>",
            get_field($service),
            get_field($service),
            get_field($price),
            get_field($service),
            get_field($service),
            get_field($price));
    }
    return '';
}

function  groomNglow_getAdditionalServices($service, $price){
    if (get_field($service) && get_field($price)) {
       return  printf("
        <div class='d-flex w-full'>
            <div>
                <input 
                id='%s'
                type='checkbox' 
                name='additional-service'
                value='%s'
                data-price='%d'
                />
                <label for='%s'>%s</label>
            </div>  
            <div> - </div>
            <span>$ %d </span>
        </div>",
            get_field($service),
            get_field($service),
            get_field($price),
            get_field($service),
            get_field($service),
            get_field($price));
    }
    return '';
}

//rest api
// Habilitar la API REST de WordPress
//add_filter('rest_enabled', '__return_true');


add_action('rest_api_init', 'groomNglow_Api');
function groomNglow_Api(){
    $args = array(
        'methods' => 'POST', 
        'callback' => 'groomNglow_callback'
    );

    register_rest_route(
        'groomNglow',
        'booking'
        , $args
    );  
}

function groomNglow_callback($request){
 return $request->get_params();
  
}

?>