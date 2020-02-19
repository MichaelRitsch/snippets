<?php

// Create a Category menue blog entries

function get_term_menue($taxonomy = 'category'){
	$html = '';
	$terms = get_terms( array(
		'taxonomy' => $taxonomy,
		'hide_empty' => true,
	));

	if(sizeof($terms)>0){
		$html .= '<ul>';
		foreach($terms as $term){
			if(!is_wp_error($term)){
				$term_link = get_term_link($term);
				$active = is_tax($taxonomy, $term->slug );
				$html .= "<li class='";
				$html .= ($active === true) ? 'active' : '';
				$html .= "'><a href='$term_link' title='$term->name'>$term->name</a></li>";
			}
		}
		$html .= '</ul>';
	}

	return $html;
}
