<?php
$post_classes[] = 'mkdf-item-space';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <div class="mkdf-post-content">
        <?php
            backpacktraveler_mikado_get_module_template_part('templates/parts/image-background', 'blog', $post_format, $part_params);
        ?>
	    <div class="mkdf-post-text-main">
            <div class="mkdf-post-text-main-inner">
	            <?php
                    backpacktraveler_mikado_get_module_template_part('templates/parts/title', 'blog', '', $part_params);
                    backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params);
	            ?>
            </div>
		    <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params);?>
	    </div>
    </div>
</article>