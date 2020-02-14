<?php

/* Bei The Excerpt Shortcodes Strippen  */

add_filter( 'the_excerpt', 'remove_shortcodes_in_excerpt', 20 );

function remove_shortcodes_in_excerpt( $content){
    $content = strip_shortcodes($content);
    $tagnames = array('blog-date', 'blog-author');  // add shortcode tag name [box]content[/box] tagname = box
    $content = do_shortcodes_in_html_tags( $content, true, $tagnames );

    $pattern = get_shortcode_regex( $tagnames );
    $content = preg_replace_callback( "/$pattern/", 'strip_shortcode_tag', $content );
    return $content;
}
