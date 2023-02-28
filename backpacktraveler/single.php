<?php
get_header();
backpacktraveler_mikado_get_title();
get_template_part( 'slider' );
do_action('backpacktraveler_mikado_action_before_main_content');

if ( have_posts() ) : while ( have_posts() ) : the_post();
	//Get blog single type and load proper helper
	backpacktraveler_mikado_include_blog_helper_functions( 'singles', 'standard' );
	
	//Action added for applying module specific filters that couldn't be applied on init
	do_action( 'backpacktraveler_mikado_action_blog_single_loaded' );
	
	//Get classes for holder and holder inner
    $id                 = backpacktraveler_mikado_get_page_id();
	$mkdf_holder_params = backpacktraveler_mikado_get_holder_params_blog();

    $blog_single_type = 'standard';

    if ( backpacktraveler_mikado_core_plugin_installed() ) {
        $blog_single_type = get_post_meta( $id, 'mkdf_choose_type_blog_meta', true );
    }

    if($blog_single_type === '') {
        $blog_single_type = 'standard';  ///securing uploaded posts to render
    }

	?>
	
	<div class="<?php echo esc_attr( $mkdf_holder_params['holder'] ); ?>">
		<?php do_action( 'backpacktraveler_mikado_action_after_container_open' ); ?>
		
		<div class="<?php echo esc_attr( $mkdf_holder_params['inner'] ); ?>">
			<?php backpacktraveler_mikado_get_blog_single( $blog_single_type ); ?>
		</div>
		
		<?php do_action( 'backpacktraveler_mikado_action_before_container_close' ); ?>
	</div>
<?php endwhile; endif;

get_footer(); ?>