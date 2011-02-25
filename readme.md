=== Instagram Embed ===

Easily embed your Instagram photos into WordPress posts (or pages) by placing the instagram url on its own line. For more control, wrap the url in the embed shortcode and pass it one of three values via the size attribute.

Shortcode Examples:

`[embed size=t]http://instagr.am/p/BsUh5/[/embed]`

`[embed size=m]http://instagr.am/p/BsUh5/[/embed]`

`[embed size=l]http://instagr.am/p/BsUh5/[/embed]`

The values t, m, or l correspond to the thumbnail, medium, and large sizes of the images. Medium is the default size.

== Installation ==

1. Upload the plugin folder (after you unzip the download) to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Embed some Instagram love in your posts

== Frequently Asked Questions ==

= What is Instagram? =

An iPhone (only) App that allows you to add filters to your crappy iPhone pics and turn them into some kind of digital gold. 

I don't work there, I'm just a fan. Learn more here: http://instagram.com/

= I want to wrap the image in a bunch of divs to make it easier for me to style. =

Less is more.

This plugin only outputs a simple img tag with nothing more than the class instagram-photo and a unique ID. This, in most cases, should be enough to make the embeded image(s) more malleable in the DOM, but for more advanced uses, just add a filter.

Example:

add_filter( 'embed_instagram', 'my_rad_instagram_filter', 10, 4 );
function my_rad_instagram_filter( $embed, $matches, $attr, $url, $rawattr )
{
	return '<a href="' . $url . '">' . $embed . '</a>';
}

== Screenshots ==

1. Instagram Embed - Action Shot

== Changelog ==

= 0.1 =

* Initial Release

== Upgrade Notice ==

= 0.1 =

* Thanks for the API, Instagram!

== License ==

The Instagram Embed plugin was developed by Eric Marden, and is provided with out warranty under the GPLv2 License. More info and other plugins at: http://xentek.net

Copyright 2011  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA