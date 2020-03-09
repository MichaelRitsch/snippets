<?php

$args = array(
        'post_type' => 'news',
        'meta_key'  => 'news_date_start',
        'orderby'   => 'meta_value',
        'order'     => 'ASC',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key'     => 'news_date_start',
                'value'   => date('Ymd', strtotime("now")),
                'compare' => '>=',
            ),
            array(
                'key'     => 'news_date_end',
                'value'   => date('Ymd', strtotime("now")),
                'compare' => '>=',
            )
        )
       );

    $the_query = new WP_Query($args);
    
    /* ....... */
