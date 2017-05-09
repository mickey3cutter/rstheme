<?php

// Register custom post type

function rs_register_post_type_portfolio() {
	register_post_type( 'portfolio',
		array( 
				'label'             => 'Portfolio',
				'singular_label'    => 'portfolio',
				'_builtin'          => false,
				'public'            => true, 
				'show_ui'           => true,
				'show_in_nav_menus' => true,
				'hierarchical'      => true,
				'menu_icon'			=> 'dashicons-admin-site',
				'capability_type'   => 'page',
				'rewrite'           => array(
					'slug'       => 'portfolio',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt')
					) 
				);
	register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => "Categories", 'singular_name' => "Category", "rewrite" => true, "query_var" => true));
}
add_action('init', 'rs_register_post_type_portfolio');