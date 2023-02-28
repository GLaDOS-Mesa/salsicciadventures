<li class="mkdf-blog-slider-item">
	<div class="mkdf-blog-slider-item-inner">
		<div class="mkdf-item-image">
            <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/media', 'blog', '', $params ); ?>
        </div>
		<div class="mkdf-bli-content">
			<?php
                if ( $post_info_destination == 'yes' ) {
                    backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/destination', 'blog', '', $params );
                }
                backpacktraveler_mikado_get_module_template_part('templates/parts/title', 'blog', '', $params);

                if ( $post_info_category == 'yes' ) {
                    backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/category', 'blog', '', $params );
                }
            ?>
            <?php
                if ( $post_info_share == 'yes' ) {
                    backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/share', 'blog', '', $params );
                }
            ?>
		</div>
	</div>
</li>