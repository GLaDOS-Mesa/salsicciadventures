<?php
$tags = get_the_tags();
?>
<?php if($tags) { ?>
<div class="mkdf-tags-holder">
    <div class="mkdf-tags">
	    <?php echo backpacktraveler_mikado_icon_collections()->renderIcon( 'icon_ribbon_alt', 'font_elegant' ); ?>
        <?php the_tags('', ' ', ''); ?>
    </div>
</div>
<?php } ?>