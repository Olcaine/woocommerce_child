<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

?>
<p class="price">prix : <?php echo $product->get_price_html(); ?></p>
