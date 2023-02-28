<?php do_action('backpacktraveler_mikado_action_before_page_header'); ?>

<header class="mkdf-page-header">
	<?php do_action('backpacktraveler_mikado_action_after_page_header_html_open'); ?>

    <?php if($show_fixed_wrapper) : ?>
    <div class="mkdf-fixed-wrapper">
        <?php endif; ?>

        <div class="mkdf-menu-area">
            <?php do_action( 'backpacktraveler_mikado_action_after_header_menu_area_html_open' ); ?>

            <?php if($menu_area_in_grid) : ?>
            <div class="mkdf-grid">
                <?php endif; ?>

                <div class="mkdf-vertical-align-containers">
                    <div class="mkdf-position-left"><!--
				 --><div class="mkdf-position-left-inner">
		                    <?php backpacktraveler_mikado_get_header_widget_area_one(); ?>
                        </div>
                    </div>
                    <div class="mkdf-position-center">
                        <div class="mkdf-position-center-inner">
                            <?php backpacktraveler_mikado_get_main_menu(); ?>
                        </div>
                    </div>
                    <div class="mkdf-position-right"><!--
				 --><div class="mkdf-position-right-inner">
		                    <?php backpacktraveler_mikado_get_header_widget_area_two(); ?>
                        </div>
                    </div>
                </div>

                <?php if($menu_area_in_grid) : ?>
            </div>
        <?php endif; ?>
        </div>

        <?php if($show_fixed_wrapper) { ?>
    </div>
    <?php } ?>
    <div class="mkdf-chld-bottom-wrapper">
        <div class="mkdf-vertical-align-containers">
            <div class="mkdf-logo-area">
                <?php do_action( 'backpacktraveler_mikado_action_after_header_logo_area_html_open' ); ?>

                <?php if($logo_area_in_grid) : ?>
                    <div class="mkdf-grid">
                <?php endif; ?>
                    <div class="mkdf-chld-position-left">
                        <div class="mkdf-chld--position-left-inner">
                            <?php backpacktraveler_mikado_get_centered_header_logo_down_left_widget(); ?>
                        </div>
                    </div>
                    <div class="mkdf-position-center"><!--
                     --><div class="mkdf-position-center-inner">
                            <?php if(!$hide_logo) {
                                backpacktraveler_mikado_get_logo();
                            } ?>
                        </div>
                    </div>
                    <div class="mkdf-chld-position-right">
                        <div class="mkdf-chld--position-right-inner">
                            <?php backpacktraveler_mikado_get_centered_header_logo_down_right_widget(); ?>
                        </div>
                    </div>
                <?php if($logo_area_in_grid) : ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
	<?php if($show_sticky) {
		backpacktraveler_mikado_get_sticky_header('centered-logo-down', 'header/types/header-centered-logo-down');
	} ?>
	
	<?php do_action('backpacktraveler_mikado_action_before_page_header_html_close'); ?>
</header>

<?php do_action('backpacktraveler_mikado_action_after_page_header'); ?>