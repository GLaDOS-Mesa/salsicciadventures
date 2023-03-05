<div class="mkdf-blog-category-list-holder mkdf-grid-list <?php echo esc_attr( $holder_classes ); ?>">
    <?php if ( $is_slider ) { ?>
        <div class="arrow arrow--left"> < </div>
        <div class="custom-slider-wrapper">
    <?php } ?>
            <div class="mkdf-bcl-inner mkdf-outer-space <?php echo esc_attr( $inner_classes ); ?>">
                    <?php
                    if ( ! empty( $query_results ) ) {
                        foreach ($query_results as $query) {
                            $termID            = $query->term_id;
                            $params['image']   = get_term_meta( $termID, 'blog_category_image', true );
                            $params['title']   = $query->name;
                            $params['excerpt'] = $query->description;
                            $count = $query->count;
                            $params['count'] = $count.esc_html__(' posts', 'backpacktraveler');
                            ?>
                            <article class="mkdf-bcl-item mkdf-item-space">
                                <a itemprop="url" class="mkdf-bcli-link" href="<?php echo get_term_link( $termID ); ?>"></a>
                                <div class="mkdf-bcl-item-inner">
                                    <?php backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-category-list/parts/image', 'blog', '', $params ); ?>
                                    <div class="mkdf-bcli-text-holder">
                                        <div class="mkdf-bcli-text-wrapper">
                                            <div class="mkdf-bcli-text">
                                                <?php backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-category-list/parts/title', 'blog', '', $params ); ?>
                                                <?php backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-category-list/parts/count', 'blog', '', $params ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php }
                    }
                    ?>
            </div>
    <?php if ( $is_slider ) { ?>
        </div>
        <div class="arrow arrow--right"> > </div>
    <?php } ?>
</div>