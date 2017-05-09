<?php

//Create simple space shortcode usage in admin [space height="30"]

function rs_space_func($attr){
	return '<span class="empty-space" style="height:'.$attr["height"].'px"></span>';
}
add_shortcode('space','rs_space_func');
