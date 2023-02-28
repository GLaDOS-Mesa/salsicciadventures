<?php
$mkdf_search_holder_params = backpacktraveler_mikado_get_holder_params_search();
?>
<?php get_header(); ?>
<?php backpacktraveler_mikado_get_title(); ?>
<?php do_action('backpacktraveler_mikado_action_before_main_content'); ?>
	<div class="<?php echo esc_attr( $mkdf_search_holder_params['holder'] ); ?>">
		<?php do_action( 'backpacktraveler_mikado_action_after_container_open' ); ?>
		<div class="<?php echo esc_attr( $mkdf_search_holder_params['inner'] ); ?>">
			<?php backpacktraveler_mikado_get_search_page(); ?>
		</div>
		<?php do_action( 'backpacktraveler_mikado_action_before_container_close' ); ?>
	</div>
<?php get_footer(); ?>