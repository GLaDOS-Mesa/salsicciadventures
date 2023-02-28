<?php if(backpacktraveler_mikado_core_plugin_installed()) { ?>
    <div class="mkdf-blog-like">
        <?php if( function_exists('backpacktraveler_mikado_get_like') ) backpacktraveler_mikado_get_like(); ?>
    </div>
<?php } ?>