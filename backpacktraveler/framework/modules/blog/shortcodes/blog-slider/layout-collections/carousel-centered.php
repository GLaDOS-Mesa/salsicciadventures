<li class="mkdf-blog-slider-item">
    <div class="mkdf-blog-slider-item-inner">
        <div class="mkdf-item-image">
            <?php backpacktraveler_mikado_get_module_template_part( 'templates/parts/media', 'blog', '', $params ); ?>
        </div>
        <div class="mkdf-item-text-wrapper">
            <div class="mkdf-item-text-holder">
                <div class="mkdf-item-text-holder-inner">
	                <?php if($post_info_date == 'yes' || $post_info_category == 'yes' || $post_info_author == 'yes' || $post_info_comments == 'yes'){ ?>
		                <div class="mkdf-item-info-section">
			                <?php
			                if ($post_info_date == 'yes') {
				                backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/date', 'blog', '', $params);
			                }
			                if ($post_info_category == 'yes') {
				                backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/category', 'blog', '', $params);
			                }
			                if ($post_info_author == 'yes') {
				                backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/author', 'blog', '', $params);
			                }
			                if ($post_info_comments == 'yes') {
				                backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/comments', 'blog', '', $params);
			                }
			                ?>
		                </div>
	                <?php } ?>
	
	                <?php backpacktraveler_mikado_get_module_template_part('templates/parts/title', 'blog', '', $params); ?>

                    <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/read-more', 'blog', '', $params); ?>
                </div>
            </div>
        </div>
    </div>
</li>