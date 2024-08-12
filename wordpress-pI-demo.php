<?php

/*
Plugin Name: Wordpress Plugin Demo
Description: A breif plugin - it works.
Version: 1.0
Author: Carl Kashnier
License: None
*/


function demo_plugin_to_add_text($content)
{
// If this is a single post
    if (is_single()) {

        $content .= '<div class="entry-content alignfull wp-block-post-content has-global-padding is-layout-constrained wp-block-post-content-is-layout-constrained">
<p>You can add text after the post every time - you can add nifty call to actions here.</p>
</div>';
    }
// Return the content
    return $content;
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'demo_plugin_to_add_text');