<?php
    $title_styles = isset( $this_object ) && isset( $params ) ? $this_object->getTitleStyles( $params ) : array();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-text">
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-info-top">
                    <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/destination', 'blog', '', $part_params); ?>
                    <h2 itemprop="name" class="entry-title mkdf-post-title" <?php backpacktraveler_mikado_inline_style($title_styles); ?>>
	                <?php if(backpacktraveler_mikado_blog_item_has_link()) { ?>
                        <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php } ?>
                            <?php the_title(); ?>
                            <?php if(backpacktraveler_mikado_blog_item_has_link()) { ?>
                        </a>
                    <?php } ?>
                    </h2>
                    <?php backpacktraveler_mikado_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params); ?>
                </div>
                <div class="mkdf-post-text-main">
                    <?php the_content(); ?>
                    <?php do_action('backpacktraveler_mikado_action_single_link_pages'); ?>
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
            </div>
        </div>
    </div>
</article>