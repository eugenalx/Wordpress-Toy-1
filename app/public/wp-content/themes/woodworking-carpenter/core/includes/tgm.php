<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function woodworking_carpenter_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'woodworking-carpenter' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	woodworking_carpenter_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'woodworking_carpenter_register_recommended_plugins' );