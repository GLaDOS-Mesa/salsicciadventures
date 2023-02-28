<li class="mkdf-blog-slider-item">
    <div class="mkdf-blog-slider-item-inner">
        <div class="mkdf-item-text-wrapper">
            <div class="mkdf-item-text-holder">
		        <?php
		        if ( $post_info_destination == 'yes' ) {
			        backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/destination', 'blog', '', $params );
		        }
		        backpacktraveler_mikado_get_module_template_part( 'templates/parts/title', 'blog', '', $params );

		        if ( $post_info_category == 'yes' ) {
			        backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/category', 'blog', '', $params );
		        }
		        ?>
                <div class="mkdf-item-excerpt">
			        <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/excerpt', 'blog', '', $params ); ?>
			        <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/read-more', 'blog', '', $params ); ?>
                </div>
		        <?php if ($post_info_author=='yes' || $post_info_share == 'yes' || $post_info_date == 'yes') {?>
                    <div class="mkdf-item-content-bottom">
				        <?php
				        if ( $post_info_date == 'yes' ) {
					        backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params );
				        }
				        if ( $post_info_author == 'yes' ) {
					        backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/author', 'blog', '', $params );
				        }
				        if ( $post_info_share == 'yes' ) {
					        backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/share', 'blog', '', $params );
				        }
				        ?>
                    </div>
		        <?php }?>
            </div>
        </div>
        <div class="mkdf-item-content-right">
            <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/media', 'blog', '', $params ); ?>
        </div>
    </div>
</li>