<?php 
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//registrando css y js
function init_template(){
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag');
}
add_action( 'after_setup_theme', 'init_template' );

function assets (){
    wp_register_style('Font Awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', '', '5.8', 'all');
    wp_register_style('Google Fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', '', '1.0', 'all');
    wp_register_style('Bootstrap core CSS', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1', 'all');
    wp_register_style('Material Design Bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css', '', '4.13', 'all');

    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('Font Awesome', 'Google Fonts', 'Bootstrap core CSS', 'Material Design Bootstrap'), '1.0', 'all' );

    wp_register_script( 'JQuery',  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', '3.4', true);
    wp_register_script( 'Bootstrap tooltips',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', '', '1.14', true);
    wp_register_script( 'Bootstrap core JavaScript',  'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js', '', '4.4', true);

    wp_enqueue_script( 'MDB core JavaScript', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js', array('JQuery','Bootstrap tooltips','Bootstrap core JavaScript'), '4.13',  true);

    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'assets');

function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de pagina',
            'id' => 'footer',
            'description' => 'Zona de Widgets para pie de pagina',
            'before_title' => '<p>',
            'after_title' => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
        )
        );
};
add_action( 'widgets_init', 'sidebar' );

//Registrar menu izquierda
function register_my_menusl() {
    register_nav_menus(
      array(
        'menu-izquierdo' => __( 'Menu Izquierdo' )
       )
    );
}
add_action( 'init', 'register_my_menusl' );

//Registrar menu derecha
function register_my_menusr() {
    register_nav_menus(
      array(
        'menu-derecho' => __( 'Menu Derecho' )
       )
    );
}
add_action( 'init', 'register_my_menusr' );