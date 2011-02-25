<?php
/*
Plugin Name: Instagram Oembed
Plugin URI: http://xentek.net/
Description: Enables oEmbed support for Instagram Photos
Version: 0.1
Author: Eric Marden
Author URI: http://xentek.net/ 
*/

// When Instagram fixes their oembed support, we'll switch to a proper oEmbed
//wp_oembed_add_provider( 'http://api.instagram.com/oembed?url=*', 'http://instagram.com/oembed', false );

// for now, we do this
function wp_embed_handler_instagram( $matches, $attr, $url, $rawattr ) {
	$size = ( isset( $attr['size'] ) ) ? $attr['size'] : 'm';
	return apply_filters( 'embed_instagram', '<img src="http://instagr.am/p/' . $matches[2] . '/media?size=' . $size . '" alt="Instagram Photo" id="instagram-' . $matches[2] . '" class="instagram-size-' . $size . ' instagram-photo">', $matches, $attr, $url, $rawattr );
	// every plugin should have a filter or action that you can use to cleanly manipulate it in your own projects
}
wp_embed_register_handler( 'instagram', '#http://(instagr\.am|instagram.com)/p/(.*)/#i', 'wp_embed_handler_instagram' );
?>
