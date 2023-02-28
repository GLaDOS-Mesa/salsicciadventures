<?php if ( ! empty( $excerpt ) ) { ?>
    <p itemprop="description" class="mkdf-bcli-excerpt"><?php echo wp_kses_post( $excerpt ); ?></p>
<?php } ?>