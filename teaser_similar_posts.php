<?php

/* Gibt ähnliche Posts des aktuellen Post zurück */
function similar_posts($post,$number_of_posts){
    $html = '';
    $categories = get_the_category($post->ID);

    if ($categories) {
        $category_ids = array();
        foreach ($categories as $individual_category) {
            $category_ids[] = $individual_category->term_id;
        }

        $args = array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts' => $number_of_posts,
            'ignore_sticky_posts' => 1
        );

        $related = new wp_query($args);

        if($related->have_posts()){
            $html .= '<h2 class="decal">ähnliche beiträge</h2>'; 
            $html .= '<div class="row similar-posts-box">';
            while ($related->have_posts()){
                $related->the_post();
                $html .= '<div class="col-md-4">';
                $html .= '<div class="content_box_style">';
                $html .= '<a class="no-style" href="' . get_permalink(). '" title="'.get_the_title().'">';
                $html .= '<img src="' . get_the_post_thumbnail_url($related->ID, 'latest-blog-hard' ) . '" class="img-fluid" alt="' . get_the_title() . '">';
                $html .= '</a>';
                $html .= '<div class="content_box_style_inner">';
                $html .= '<div class="posted-on-box">' . get_the_date('d. F Y') . ' ' . get_category_box($related->ID) . '</div>';
                $html .= '<a class="no-style" href="' . get_permalink(). '" title="'.get_the_title().'">';
                $html .= '<h3>' . get_the_title() . '</h3>';
                $html .= '</a>';
                //$html .= '<p>' . get_the_excerpt() . '</p>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        wp_reset_postdata();
        return $html;
    }
}
