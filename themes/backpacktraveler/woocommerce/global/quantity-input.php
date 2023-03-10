<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.0.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! isset ( $input_id ) ) {
	$input_id = uniqid( 'quantity_' );
}

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="mkdf-quantity-buttons quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	/* translators: %s: Quantity. */
	$label = esc_html__( 'Quantity', 'backpacktraveler' );
	?>
	<div class="mkdf-quantity-buttons quantity">
		<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
		<span class="mkdf-quantity-minus icon_minus-06"></span>
		<input  type="text"
		        id="<?php echo esc_attr( $input_id ); ?>"
		        class="mkdf-quantity-input <?php echo esc_attr( join( ' ', (array) $classes ) ); ?>"
		        data-step="<?php echo esc_attr( $step ); ?>"
		        data-min="<?php echo esc_attr( $min_value ); ?>"
		        data-max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
		        name="<?php echo esc_attr( $input_name ); ?>"
		        value="<?php echo esc_attr( $input_value ); ?>"
		        title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'backpacktraveler' ); ?>"
		        size="4"
                placeholder="<?php echo esc_attr( $placeholder ); ?>"
		        inputmode="<?php echo esc_attr( $inputmode ); ?>" />
		<span class="mkdf-quantity-plus icon_plus"></span>
	</div>
	<?php
}
