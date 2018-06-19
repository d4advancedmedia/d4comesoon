<?php
/*
	Plugin Name: D4 Coming Soon
	Description: Dumb coming soon plugin: activate to add, deactivate to remove. 
	Version: 1.0
	Author: D4 Adv. Media
*/

function quickmaintenance_page() {

	if ( ! is_user_logged_in() && ! is_admin() && ! in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php')) ) {         
		// Over reaction to not being logged in.
			include('inc/index.php');
			exit;
	}

} add_action( 'template_redirect', 'quickmaintenance_page' );
