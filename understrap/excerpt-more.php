<?php

/*
* Entfernt [...] aus Understrap Excerpt more
*/

function gsg_new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'gsg_new_excerpt_more',999999999999999);

function understrap_all_excerpts_get_more_link( $post_excerpt ) {
	return $post_excerpt;
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );
