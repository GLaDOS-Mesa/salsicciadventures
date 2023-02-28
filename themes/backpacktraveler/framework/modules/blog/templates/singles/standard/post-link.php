<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-text">
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-text-main">
                    <div class="mkdf-post-mark">
                        <span class="icon_link_alt mkdf-link-mark"></span>
                    </div>
                    <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-type/link', 'blog', '', $part_params); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mkdf-post-info-top">
		<?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/destination', 'blog', '', $part_params); ?>
		<?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params); ?>
    </div>
    <div class="mkdf-post-additional-content">
        <?php the_content(); ?>
    </div>
    <div class="mkdf-post-info-bottom-upper-part">
        <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/tags', 'blog', '', $part_params); ?>
        <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/like', 'blog', '', $part_params); ?>
        <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/comments', 'blog', '', $part_params); ?>
    </div>
    <div class="mkdf-post-info-bottom clearfix">
        <div class="mkdf-post-info-bottom-left">
			<?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/author', 'blog', '', $part_params); ?>
        </div>
        <div class="mkdf-post-info-bottom-center">
			<?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/share', 'blog', '', $part_params); ?>
        </div>
        <div class="mkdf-post-info-bottom-right">

			<?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params); ?>
        </div>
    </div>
</article>