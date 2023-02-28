<?php

if ( ! function_exists( 'backpacktraveler_mikado_like' ) ) {
	/**
	 * Returns BackpackTravelerMikadoClassLike instance
	 *
	 * @return BackpackTravelerMikadoClassLike
	 */
	function backpacktraveler_mikado_like() {
		return BackpackTravelerMikadoClassLike::get_instance();
	}
}

function backpacktraveler_mikado_get_like() {
	
	echo wp_kses( backpacktraveler_mikado_like()->add_like(), array(
		'span' => array(
			'class'       => true,
			'aria-hidden' => true,
			'style'       => true,
			'id'          => true
		),
		'i'    => array(
			'class' => true,
			'style' => true,
			'id'    => true
		),
		'a'    => array(
			'href'  => true,
			'class' => true,
			'id'    => true,
			'title' => true,
			'style' => true
		)
	) );
}