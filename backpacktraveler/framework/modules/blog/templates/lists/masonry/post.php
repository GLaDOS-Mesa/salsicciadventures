<?php
    $post_classes[] = 'mkdf-item-space';
    $rounded_featured_image = get_post_meta( get_the_ID(), 'mkdf_featured_image_rounded_meta', true );
    if ($rounded_featured_image == 'yes') {
	    $post_classes[] = 'mkdf-bl-rounded';
    };
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-heading">
            <?php backpacktraveler_mikado_get_module_template_part('templates/parts/media', 'blog', $post_format, $part_params); ?>
        </div>
        <div class="mkdf-post-text">
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-text-main">
                    <?php
                        backpacktraveler_mikado_get_module_template_part( 'templates/parts/post-info/destination', 'blog', '', $params );
                        backpacktraveler_mikado_get_module_template_part('templates/parts/title', 'blog', '', $part_params);
                        backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params);
                        backpacktraveler_mikado_get_module_template_part('templates/parts/excerpt', 'blog', '', $part_params);
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>