<li class="mkdf-bl-item mkdf-item-space">
	<div class="mkdf-bli-inner">
		<?php
            if ( $post_info_destination == 'yes' ) {
                backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/destination', 'blog', '', $params );
            }
            backpacktraveler_mikado_get_module_template_part( 'templates/parts/title', 'blog', '', $params );

            if ( $post_info_category == 'yes' ) {
                backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/category', 'blog', '', $params );
            }
        ?>
		<?php if ( $post_info_image == 'yes' ) {
			backpacktraveler_mikado_get_module_template_part( 'templates/parts/media', 'blog', '', $params );
		} ?>

        <div class="mkdf-bli-content">
            <div class="mkdf-bli-excerpt">
		        <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/excerpt', 'blog', '', $params ); ?>
		        <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/read-more', 'blog', '', $params ); ?>
            </div>
            <?php if( $post_info_author == 'yes' || $post_info_comments == 'yes' || $post_info_like == 'yes' || $post_info_date == 'yes' || $post_info_share == 'yes') { ?>
                <div class="mkdf-bli-content-bottom">
                    <?php
                        if ( $post_info_author == 'yes' ) {
                            backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/author', 'blog', '', $params );
                        }
                        if ( $post_info_comments == 'yes' ) {
                            backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/comments', 'blog', '', $params );
                        }
                        if ( $post_info_like == 'yes' ) {
                            backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/like', 'blog', '', $params );
                        }
                        if ( $post_info_share == 'yes' ) {
                            backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/share', 'blog', '', $params );
                        }
                        if ( $post_info_date == 'yes' ) {
                            backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params );
                        }
                    ?>
                </div>
            <?php }?>
        </div>
	</div>
</li>