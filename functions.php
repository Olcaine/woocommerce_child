<?php

function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}


add_action( 'woocommerce_after_shop_loop_item_title', 'bbloomer_custom_action', 15 );

    function bbloomer_custom_action() {
    wc_get_template("templates/stock.php");
    }
 ?>
