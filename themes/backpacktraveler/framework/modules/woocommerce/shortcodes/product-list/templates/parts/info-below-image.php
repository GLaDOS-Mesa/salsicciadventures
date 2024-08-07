<?php
$item_classes           = $this_object->getItemClasses( $params );
$shader_styles          = $this_object->getShaderStyles( $params );
$text_wrapper_styles    = $this_object->getTextWrapperStyles( $params );
$params['title_styles'] = $this_object->getTitleStyles( $params );
?>
<div class="mkdf-pli mkdf-item-space <?php echo esc_attr( $item_classes ); ?>">
	<div class="mkdf-pli-inner">
		<?php do_action( 'backpacktraveler_mikado_action_before_pl_image' ); ?>
		<div class="mkdf-pli-image">
			<?php
                backpacktraveler_mikado_get_module_template_part( 'templates/parts/image', 'woocommerce', '', $params );
                backpacktraveler_mikado_get_module_template_part( 'templates/parts/price', 'woocommerce', '', $params );
            ?>
		</div>
		<a class="mkdf-pli-link" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
	</div>
	<div class="mkdf-pli-text-wrapper" <?php echo backpacktraveler_mikado_get_inline_style( $text_wrapper_styles ); ?>>
		<?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/rating', 'woocommerce', '', $params ); ?>

		<?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/title', 'woocommerce', '', $params ); ?>
		
		<?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/category', 'woocommerce', '', $params ); ?>
		
		<?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/excerpt', 'woocommerce', '', $params ); ?>

		<?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/add-to-cart', 'woocommerce', '', $params ); ?>
	</div>
</div>