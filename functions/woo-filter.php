

<?php

function ajax_filter_products_by_category() {

    $categories = $_POST['categories'];

    $args = [
        'post_type' => 'product',
        'posts_per_page' => -1
    ];

    // If it's NOT "all", then filter by category
    if ($categories !== 'all') {
        $args['tax_query'] = [
            [
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $categories
            ]
        ];
    }

    $products = new WP_Query($args);

    if($products->have_posts()) {
        while($products->have_posts()) {
            $products->the_post();
            wc_get_template_part('content', 'product');
        }
        wp_reset_postdata();
    } else {
        echo "<p>No products found.</p>";
    }

    wp_die();
}

add_action('wp_ajax_filter_products_by_category', 'ajax_filter_products_by_category');
add_action('wp_ajax_nopriv_filter_products_by_category', 'ajax_filter_products_by_category');
