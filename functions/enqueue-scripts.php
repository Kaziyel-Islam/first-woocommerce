<?php 

function register_styles(){


    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('line-awesome-min', get_template_directory_uri() . '/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css');

    // Font Awesome
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css', array(), '7.0.0');


    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/plugins/owl-carousel/owl.carousel.css');

    wp_enqueue_style('manific-popup', get_template_directory_uri() . '/assets/css/plugins/magnific-popup/magnific-popup.css');

    wp_enqueue_style('jquery-countdown', get_template_directory_uri() . '/assets/css/plugins/jquery.countdown.css');

    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('skin-demo', get_template_directory_uri() . '/assets/css/skins/skin-demo-4.css');

     wp_enqueue_style('demo-4', get_template_directory_uri() . '/assets/css/demos/demo-4.css');



}

function register_scripts(){

    // jQuery (included in WordPress)

    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-min-js', get_template_directory_uri() . "/assets/js/jquery.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('bootstrap-bundle-min-js', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('jquery-hoverIntent-min-js', get_template_directory_uri() . "/assets/js/jquery.hoverIntent.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('jquery-waypoints-min-js', get_template_directory_uri() . "/assets/js/jquery.waypoints.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('superfish-min-js', get_template_directory_uri() . "/assets/js/superfish.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('owl-carousel-min-js', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('bootstrap-input-spinner-js', get_template_directory_uri() . "/assets/js/bootstrap-input-spinner.js", array('jquery'), '1.0', true);

    wp_enqueue_script('jquery-plugin-min-js', get_template_directory_uri() . "/assets/js/jquery.plugin.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('jquery-magnific-popup-min-js', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('jquery-countdown-min-js', get_template_directory_uri() . "/assets/js/jquery.countdown.min.js", array('jquery'), '1.0', true);

    wp_enqueue_script('main-js', get_template_directory_uri() . "/assets/js/main.js", array('jquery'), '1.0', true);

    wp_enqueue_script('demo-4-js', get_template_directory_uri() . "/assets/js/demos/demo-4.js", array('jquery'), '1.0', true);


}



add_action('wp_enqueue_scripts', 'register_styles');

add_action('wp_enqueue_scripts', 'register_scripts');



?>