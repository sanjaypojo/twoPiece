<?php

//Enable featured image

add_theme_support( 'post-thumbnails' );


//Register WP navigation menus

register_nav_menus( array(
	'mainMenu' => 'Title menu located in the header',
	'footerMenu' => 'A more detailed footer navigation menu'
) );

//Better handling excerpts (the "more" thingy)
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Hide the admin bar

add_filter('show_admin_bar', '__return_false');

?>
