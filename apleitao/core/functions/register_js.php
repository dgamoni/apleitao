<?php
function custom_child_scripts() {


	wp_enqueue_style(
		'custom_core_style', 
		CORE_URL . '/css/custom_core_style.css',
		array(),
		rand()
	);

	wp_enqueue_style(
		'adaptive', 
		CORE_URL .  '/css/adaptive.css',
		array('custom_core_style'),
		rand()
	);

	if ( ICL_LANGUAGE_CODE == 'pt-pt') {
		wp_enqueue_script( 
			'apleitao-map',
			CORE_URL . '/js/map-pt.js',
			array('jquery'),
			false,
			true
		);
	} else if ( ICL_LANGUAGE_CODE == 'en') {
		wp_enqueue_script( 
			'apleitao-map',
			CORE_URL . '/js/map-en.js',
			array('jquery'),
			false,
			true
		);
	} else if ( ICL_LANGUAGE_CODE == 'es') {
		wp_enqueue_script( 
			'apleitao-map',
			CORE_URL . '/js/map-es.js',
			array('jquery'),
			false,
			true
		);		
	} else {
		wp_enqueue_script( 
			'apleitao-map',
			CORE_URL . '/js/map.js',
			array('jquery'),
			false,
			true
		);
	}

	wp_enqueue_script(
	    'custom_core',
	    CORE_URL . '/js/custom_core.js',
        array('jquery'), 
        rand(),
        true  
	);

	wp_localize_script( 'custom_script', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );


	
}
add_action( 'wp_enqueue_scripts', 'custom_child_scripts' ); 

function custom_admin_theme_style() {
    wp_enqueue_style('custom-admin-style', CORE_URL .'/css/custom_admin_style.css', array(), rand());
    //wp_enqueue_script('custom_script',  CORE_URL . '/js/custom_admin_js.js', array('jquery'), rand(), true );

}
add_action('admin_enqueue_scripts', 'custom_admin_theme_style');