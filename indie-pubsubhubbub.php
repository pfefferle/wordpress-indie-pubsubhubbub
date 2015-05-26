<?php
/*
Plugin Name: Indie PubSubHubbub
Plugin URI: https://github.com/pfefferle/wordpress-indie-pubsubhubbub/
Description: Pushes the (microformatted) main blog URL via PuSH
Author: Matthias Pfefferle
Author URI: http://notizblog.org
Version: 1.0.0
 */

/**
 * adds the json feed to PubsubHubBub
 *
 * @param array $feeds
 * @return array
 */
function indie_push($feeds)
{
    $feeds[] = site_url("/");
    $feeds[] = site_url();

    return array_unique($feeds);
}
add_filter('pshb_feed_urls', 'indie_push');
