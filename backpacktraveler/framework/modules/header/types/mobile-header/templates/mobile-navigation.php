<?php do_action('backpacktraveler_mikado_action_before_mobile_navigation'); ?>
<?php if ( has_nav_menu( 'mobile-navigation' ) || has_nav_menu( 'main-navigation' ) ) { ?>
<div class="mkdf-mobile-side-area">
    <div class="mkdf-close-mobile-side-area-holder">
        <?php echo backpacktraveler_mikado_icon_collections()->renderIcon('dripicons-cross', 'dripicons'); ?>
    </div>
    <div class="mkdf-mobile-side-area-inner">
    <nav class="mkdf-mobile-nav" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Menu', 'backpacktraveler' ); ?>">
        <div class="mkdf-grid">
            <?php
            // Set main navigation menu as mobile if mobile navigation is not set
            $theme_location = has_nav_menu( 'mobile-navigation' ) ? 'mobile-navigation' : 'main-navigation';
            wp_nav_menu(array(
                'theme_location' => $theme_location,
                'container'  => '',
                'container_class' => '',
                'menu_class' => '',
                'menu_id' => '',
                'fallback_cb' => 'top_navigation_fallback',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'walker' => new BackpackTravelerMikadoClassMobileNavigationWalker()
            )); ?>
        </div>
    </nav>
    </div>
    <div class="mkdf-mobile-widget-area">
        <div class="mkdf-mobile-widget-area-inner">
            <?php
            if(is_active_sidebar('mkdf-mobile-area')) : ?>
                <?php dynamic_sidebar('mkdf-mobile-area'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php } ?>
<?php do_action('backpacktraveler_mikado_action_after_mobile_navigation'); ?>
