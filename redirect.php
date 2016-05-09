<?php
/**
 * @package Redirect to login if not logged in
 * @version 1.6.3
 */
/*
Plugin Name:   Redirect to login if not logged in
Plugin URI:    http://wordpress.org/plugins/redirect-to-login-if-not-logged-in/
Description:   Redirects a user to the login page if the user is not logged in. After login the user gets redirected to the original entry page.
Author:        Daan Kortenbach
Version:       1.6.3
Author URI:    http://daan.kortenba.ch/
License:       GPL-2.0 or later
License URI:   http://www.gnu.org/licenses/gpl-2.0.txt
*/

add_action( 'template_redirect', function() {

  if ( is_user_logged_in() ) return;

  $allowed_pages = array( 7966 ); // 7966 is login page

  if ( ! in_array( get_queried_object_id(), $allowed_pages ) ) {
    wp_redirect( site_url( '/login/' ) ); 
    exit();
  }

});
