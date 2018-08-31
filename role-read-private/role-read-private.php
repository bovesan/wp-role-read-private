<?php
/*
Plugin Name: Role Read Private
Description: Creates a role with no permissions other than read_private_pages and read_private_posts
Version: 1.0
Author: Bengt Ove Sannes
Author URI: http://github.com/bovesan
License: GPL2
*/

function add_role_read_private() {
   add_role( 'read_private', 'Read private', array(
   	'read_private_pages' => true,
   	'read_private_posts' => true
   ) );
}
function remove_role_read_private() {
   remove_role( 'read_private' );
}
register_activation_hook( __FILE__, 'add_role_read_private' );
register_deactivation_hook( __FILE__, 'remove_role_read_private' );
