<div class="mkdf-grid-row">
	<div <?php echo backpacktraveler_mikado_get_content_sidebar_class(); ?>>
		<div class="mkdf-search-page-holder">
			<?php backpacktraveler_mikado_get_search_page_layout(); ?>
		</div>
		<?php do_action( 'backpacktraveler_mikado_action_page_after_content' ); ?>
	</div>
	<?php if ( $sidebar_layout !== 'no-sidebar' ) { ?>
		<div <?php echo backpacktraveler_mikado_get_sidebar_holder_class(); ?>>
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
</div>