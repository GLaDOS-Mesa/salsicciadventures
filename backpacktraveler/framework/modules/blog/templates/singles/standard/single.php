<?php

backpacktraveler_mikado_get_single_post_format_html( $blog_single_type );

do_action( 'backpacktraveler_mikado_action_after_article_content' );

backpacktraveler_mikado_get_module_template_part( 'templates/parts/single/single-navigation', 'blog' );

backpacktraveler_mikado_get_module_template_part( 'templates/parts/single/author-info', 'blog' );

backpacktraveler_mikado_get_module_template_part( 'templates/parts/single/related-posts', 'blog', '', $single_info_params );

backpacktraveler_mikado_get_module_template_part( 'templates/parts/single/comments', 'blog' );