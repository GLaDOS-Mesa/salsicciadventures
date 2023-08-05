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
 * @version 7.4.0
 */

defined( 'ABSPATH' ) || exit;

/* translators: %s: Quantity. */
$label = esc_html__( 'Quantity', 'backpacktraveler' );

if ( $max_value && $min_value === $max_value ) {
	$is_readonly = true;
	$input_value = $min_value;
	?>
	<div class="mkdf-quantity-buttons quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	$is_readonly = false;
}
?>
<div class="mkdf-quantity-buttons quantity">
	<?php
	/**
	 * Hook to output something before the quantity input field.
	 *
	 * @since 7.2.0
	 */
	do_action( 'woocommerce_before_quantity_input_field' );
	?>
	<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
	<span class="mkdf-quantity-minus icon_minus-06"></span>
	<input
		type="text"
		<?php wp_readonly( $is_readonly ); ?>
        id="<?php echo esc_attr( $input_id ); ?>"
        class="mkdf-quantity-input <?php echo esc_attr( join( ' ', (array) $classes ) ); ?>"
		name="<?php echo esc_attr( $input_name ); ?>"
		value="<?php echo esc_attr( $input_value ); ?>"
        title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'backpacktraveler' ); ?>"
        size="4"
		data-min="<?php echo esc_attr( $min_value ); ?>"
		data-max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
		<?php if ( ! $is_readonly ): ?>
			data-step="<?php echo esc_attr( $step ); ?>"
			placeholder="<?php echo esc_attr( $placeholder ); ?>"
			inputmode="<?php echo esc_attr( $inputmode ); ?>"
			autocomplete="<?php echo esc_attr( isset( $autocomplete ) ? $autocomplete : 'on' ); ?>"
		<?php endif; ?>
	/>
	<span class="mkdf-quantity-plus icon_plus"></span>
	<?php
	/**
	 * Hook to output something after quantity input field
	 *
	 * @since 3.6.0
	 */
	do_action( 'woocommerce_after_quantity_input_field' );
	?>
</div>
<?php
