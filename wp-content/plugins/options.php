<?php 


add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_options_page( 
		'My Options',
		'My Plugin',
		'manage_options',
		'my-plugin.php',
		'my_plugin_page'
	);
}

class options_page {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	function admin_menu() {
		add_options_page(
			'Page Title',
			'Circle Tree Login',
			'manage_options',
			'options_page_slug',
			array(
				$this,
				'settings_page'
			)
		);
	}

	function  settings_page() {
		echo 'This is the page content';
	}
}

new options_page;