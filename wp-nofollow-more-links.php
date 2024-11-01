<?php

/*
Plugin Name: WP Nofollow More Links
Version: 1.2
Description: This SEO plugin inserts "nofollow" rel attribute to the more links.
Author: Marvie Pons
Author URI: http://tutskid.com/
Donate URI: http://tutskid.com/
Plugin URI: http://tutskid.com/wp-nofollow-more-links/
  
Copyright 2014  Marvie Pons (email: celebritybanderas@gmail.com)

Released under GPL License.
*/

//Adds the nofollow rel attribute to "read more" link
add_filter('the_content', 'wpnml_nofollow_more_link');

function wpnml_nofollow_more_link($content) {
	return preg_replace("@class=\"more-link\"@", "class=\"more-link\" rel=\"nofollow\"", $content);
}