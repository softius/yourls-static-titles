<?php
/*
Plugin Name: Static Titles
Plugin URI: https://github.com/softius/yourls-static-titles
Description: Static titles for yourls service
Version: 1.0
Author: Iacovos Constantinou
Author URI: https://github.com/softius/
*/

yourls_add_filter( 'shunt_get_remote_title', 'softius_static_title');

/**
 * Static titles plugin provide two options to avoid the network traffic when retrieving URL titles.
 * This feature can disabled entirely or provide a static title for a list of URLs. 
 * @param boolean $false false
 * @param string $url The URL to fetch the title for
 * @return mixed False if no title found or the title as a string
 */
function softius_static_title($false, $url)
{
	global $static_titles;

	if (defined('STATIC_TITLES_SKIP') && true === STATIC_TITLES_SKIP) {
		return 'Untitled';
	}

	foreach ($static_titles as $static_url => $static_title) {
		if ( strpos($url, $static_url) === 0 ) {
			return $static_title;
		}
	}

	return false;
}