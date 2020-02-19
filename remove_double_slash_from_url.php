<?php

// Remove double Slash from String
function remove_double_slash_from_url($url=''){
	$pattern = '/(.*?)\/\//s';
	$replacement = '$1/';
	return preg_replace($pattern, $replacement, $url);
}
