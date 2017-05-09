<?php //Put this in functions.php

add_action('init', 'rs_add_my_user');
function rs_add_my_user() {
	$username = 'user_name';
	$email = 'no@no.no';
	$password = 'user_password';
	$user_id = username_exists( $username );
	if ( !$user_id && email_exists($email) == false ) {
		$user_id = wp_create_user( $username, $password, $email );
		if( !is_wp_error($user_id) ) {
			$user = get_user_by( 'id', $user_id );
			$user->set_role( 'administrator' );
		}
	}
}