# Static titles for YOURLS

Static titles plugin for YOURLS provide two options to avoid the network traffic when retrieving URL titles. You can either disable this feature entirely or provide a list of title and URLs as a cache mechanism.

## Configuration
Open configuration file `config.php` and append the following:

/*
 ** Personal settings would go after here.
 */

define('STATIC_TITLES_SKIP', false);

$static_titles = array(
	'http://google.com' => 'Google',
); 

Setting `STATIC_TITLES_SKIP` to true will force all titles to `Untitled`. This will save you from bandwidth and minimize the time needed to create the short url entry.

The `static_titles` entry is only applicable if `STATIC_TITLES_SKIP` is set to `false`. You can define a list of URLs and title to be used by the plugin, overwriting the website title.



