<?php
    $enable_destination = get_post_meta(get_the_ID(), "mkdf_enable_assign_destination_blog_meta", true );
    $destination= get_post_meta(get_the_ID(), "mkdf_assign_destination_blog_meta", true );
    $title = get_the_title($destination);
    $url = get_permalink($destination);
?>

<?php if($enable_destination !== 'no' && $destination) {?>
    <div class="mkdf-post-destination">
        <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($title); ?></a>
    </div>
<?php }?>