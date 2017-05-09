<?php

add_theme_support( 'post-thumbnails' );

// Add page excerpt (remove if you don't need)
add_action('init', 'rs_excerpt_init');
function rs_excerpt_init() {
	add_post_type_support( 'page', 'excerpt' );
}

//Add custom code to admin head
function rs_admin_head() { 
	echo '
	<style type="text/css">
		.acf-input .wp-editor-wrap iframe{
		    height: 150px !important;
		}
		tr[data-slug="advanced-custom-fields-pro"]{display: none !important;}
	</style>';
}
add_action('admin_head', 'rs_admin_head'); 


// Remove Empty Paragraphs
add_filter('the_content', 'shortcode_empty_paragraph_fix');
function shortcode_empty_paragraph_fix($content) {
	$array = array (
			'<p>['    => '[', 
			']</p>'   => ']', 
			']<br />' => ']'
	);
	$content = strtr($content, $array);
	return $content;
}