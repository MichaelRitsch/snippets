<?php

/* Erzeugt eine Box in der die erste gefundene Kategorie in einer Box zurückgegeben wird */
function get_category_box($post_id){
    $terms = get_the_terms($post_id,'category');
    if(!is_wp_error($terms) && is_array($terms)){
        $term = reset($terms);
        if(isset($term->name)){
            return '<div class="category-box">' . $term->name . '</div>';
        }
    }
}
