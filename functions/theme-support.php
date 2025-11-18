

<?php 


function ninewoo_support(){

    add_theme_support( 'title-tag' );
    
    add_theme_support( 'post-thumbnails' );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('automatic-feed-links');

    add_theme_support('html5');

    add_editor_style();

    add_theme_support('wp-block-styles');

    add_theme_support('align-wide');

    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-zoom' );

    add_theme_support( 'wc-product-gallery-lightbox' );
    
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus([

        'header_menu' => __('Header Menu','ninewoo'),
    ]);

}

add_action('after_setup_theme', 'ninewoo_support');

?>