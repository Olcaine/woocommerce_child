<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ($product->get_price() < 20){ ?>
    <p class="price"> promotions : <?php echo $product->get_price_html(); ?></p> <?php
} else {
    ?> <p class="price"> prix : <?php echo $product->get_price_html(); ?></p> <?php
}?>
