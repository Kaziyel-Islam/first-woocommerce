
<?php
defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}

// Get product categories
$categories = wc_get_product_category_list( $product->get_id() );

if ( $product->is_type( 'simple' ) ) {
    $button_text = 'Add To Cart';
} elseif ( $product->is_type( 'variable' ) ) {
    $button_text = 'Select Options';
} elseif ( $product->is_type( 'grouped' ) ) {
    $button_text = 'View Products';
} else {
    $button_text = 'Add To Cart';
}
?>



<li class="product product-7 text-center">

    
        <figure class="product-media">

            <?php if ( $product->is_on_sale() ) : ?>
            <span class="product-label label-sale">Sale</span>
            <?php endif; ?>
            <?php
                 $created = strtotime( $product->get_date_created() );
                 if ( $created > strtotime('-30 days') ) :
            ?>
            <span class="product-label label-new">New</span>
            <?php endif; ?>
            
            <a href="<?php echo esc_url( get_permalink() ); ?>">
            <?php echo $product->get_image( 'woocommerce_thumbnail', ['class' => 'product-image'] ); ?>
            </a>

            <div class="product-action-vertical">
            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
            </div><!-- End .product-action-vertical -->

            <div class="product-action">
            <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
            aria-label="<?php echo esc_attr( $button_text ); ?>" class="btn-product btn-cart add_to_cart_button ajax_add_to_cart">
            <span><?php echo esc_html( $button_text ); ?></span>
            </a>
            </div><!-- End .product-action -->

        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">
             <a href="#"> <?php echo $categories; ?> </a>
            </div>
            <h3 class="product-title">
            <a href="<?php echo esc_url( get_permalink() ); ?>">
                <?php echo esc_html( $product->get_name() ); ?>
            </a>
            </h3>
            
            <div class="product-price">
            <?php echo $product->get_price_html(); ?>
            </div>
            <div class="ratings-container">
                <div class="ratings">
                    <?php
                    $rating = $product->get_average_rating();
                    $percentage = ( $rating / 5 ) * 100;
                    ?>
                    <div class="ratings-val" style="width: <?php echo $percentage; ?>%;"></div>
                </div>

                <span class="ratings-text">( <?php echo $product->get_rating_count(); ?> Reviews )</span>
            </div>
           
        </div><!-- End .product-body -->
  

</li>
