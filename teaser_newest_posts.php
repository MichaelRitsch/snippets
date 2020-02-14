<?php

/* Gibt die neuesten Posts */
function get_newest_posts($post_id,$number_of_posts){
    $html = '';
    $args = array(
        'post_type' => 'post',
        'post__not_in' => array($post_id),
        'post_status' => 'publish',
        'posts_per_page' => $number_of_posts,
        'ignore_sticky_posts' => 1,
        'order'=>'DESC',
        'orderby'=>'post_date',
    );

    $newest_posts = new wp_query($args);
    if($newest_posts->have_posts()){
        while ($newest_posts->have_posts()){
            $newest_posts->the_post();
            $html .= '<a class="no-style" href="' . get_permalink() . '" title="'.get_the_title().'">';
            $html .= '<div class="row sidebar-post-teaser-box">';
            $html .= '<div class="col-4 col-xs-4 col-sm-4 col-md-12 col-lg-4">';
            $html .= '<img src="' . get_the_post_thumbnail_url($newest_posts->ID, 'thumbnail' ) . '" class="img-fluid" alt="' . get_the_title() . '">';
            $html .= '</div>';
            $html .= '<div class="col-8 col-md-8">';
            $html .= get_category_box($newest_posts->ID);
            $html .= '<div class="posted-on-box">' . get_the_date('d. F Y') . '</div>';
            $html .= '<h3>' . get_the_title() . '</h3>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</a>';
        }
    }
    wp_reset_postdata();
    return $html;
}
