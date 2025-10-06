<?php
add_action( 'init', 'create_post_types' );
function create_post_types() {

	register_post_type( 'portfolio',
		array(
			'labels'        => array(
				'name'               => esc_html__( 'Portfolio' , 'abrag' ),
				'singular_name'      => esc_html__( 'Portfolio', 'abrag' ),
				'add_new'            => esc_html__( 'Add', 'abrag' ),
				'add_new_item'       => esc_html__( 'Add', 'abrag' ),
				'edit_item'          => esc_html__( 'Edit', 'abrag' ),
				'new_item'           => esc_html__( 'Add', 'abrag' ),
				'view_item'          => esc_html__( 'View', 'abrag' ),
				'search_items'       => esc_html__( 'Search', 'abrag' ),
				'not_found'          => esc_html__( 'Not Found', 'abrag' ),
				'not_found_in_trash' => esc_html__( 'not found in rash', 'abrag' ),
				'parent_item_colon'  => esc_html__( '' )

			),
			'menu_icon'     => 'dashicons-portfolio',
			'public'        => true,
			'has_archive'   => true,
			'menu_position' => 5,
			'supports'      => array(
				'thumbnail',
				'title',
				'editor'
			),
			'query_var'     => true,
			'rewrite'       => array( 'slug' => 'portfolio' ),
		)
	);
}

function create_custom_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy( 'portfolio_type', 'portfolio', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels'       => array(
			'name'              => esc_html__( 'Type', 'abrag' ),
			'singular_name'     => esc_html__( 'Type', 'abrag' ),
			'search_items'      => esc_html__( 'Search Type', 'abrag' ),
			'all_items'         => esc_html__( 'All Types', 'abrag' ),
			'parent_item'       => esc_html__( 'Parent Types', 'abrag' ),
			'parent_item_colon' => esc_html__( 'Parent Types', 'abrag' ),
			'edit_item'         => esc_html__( 'Edit' ),
			'update_item'       => esc_html__( 'Update', 'abrag' ),
			'add_new_item'      => esc_html__( 'Add', 'abrag' ),
			'new_item_name'     => esc_html__( 'Name Type', 'abrag' ),
			'menu_name'         => esc_html__( 'Type', 'abrag' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite'      => array(
			'slug'         => 'portfolio_type', // This controls the base slug that will display before each term
			'with_front'   => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	) );
	// Add new "Locations" taxonomy to Posts
	// register_taxonomy( 'post_type', 'post', array(
	// 	// Hierarchical taxonomy (like categories)
	// 	'hierarchical' => true,
	// 	// This array of options controls the labels displayed in the WordPress Admin UI
	// 	'labels'       => array(
	// 		'name'              => esc_html__( 'Type', 'abrag' ),
	// 		'singular_name'     => esc_html__( 'Type', 'abrag' ),
	// 		'search_items'      => esc_html__( 'Search Type', 'abrag' ),
	// 		'all_items'         => esc_html__( 'All Types', 'abrag' ),
	// 		'parent_item'       => esc_html__( 'Parent Types', 'abrag' ),
	// 		'parent_item_colon' => esc_html__( 'Parent Types', 'abrag' ),
	// 		'edit_item'         => esc_html__( 'Edit' ),
	// 		'update_item'       => esc_html__( 'Update', 'abrag' ),
	// 		'add_new_item'      => esc_html__( 'Add', 'abrag' ),
	// 		'new_item_name'     => esc_html__( 'Name Type', 'abrag' ),
	// 		'menu_name'         => esc_html__( 'Type', 'abrag' ),
	// 	),
	// 	// Control the slugs used for this taxonomy
	// 	'rewrite'      => array(
	// 		'slug'         => 'post_type', // This controls the base slug that will display before each term
	// 		'with_front'   => false, // Don't display the category base before "/locations/"
	// 		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	// 	),
	// ) );
	// register_taxonomy( 'services_type', 'services', array(
	// 	// Hierarchical taxonomy (like categories)
	// 	'hierarchical' => true,
	// 	// This array of options controls the labels displayed in the WordPress Admin UI
	// 	'labels'       => array(
	// 		'name'              => esc_html__( 'Type', 'abrag' ),
	// 		'singular_name'     => esc_html__( 'Type', 'abrag' ),
	// 		'search_items'      => esc_html__( 'Search Type', 'abrag' ),
	// 		'all_items'         => esc_html__( 'All Types', 'abrag' ),
	// 		'parent_item'       => esc_html__( 'Parent Types', 'abrag' ),
	// 		'parent_item_colon' => esc_html__( 'Parent Types', 'abrag' ),
	// 		'edit_item'         => esc_html__( 'Edit' ),
	// 		'update_item'       => esc_html__( 'Update', 'abrag' ),
	// 		'add_new_item'      => esc_html__( 'Add', 'abrag' ),
	// 		'new_item_name'     => esc_html__( 'Name Type', 'abrag' ),
	// 		'menu_name'         => esc_html__( 'Type', 'abrag' ),
	// 	),
	// 	// Control the slugs used for this taxonomy
	// 	'rewrite'      => array(
	// 		'slug'         => 'services_type', // This controls the base slug that will display before each term
	// 		'with_front'   => false, // Don't display the category base before "/locations/"
	// 		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	// 	),
	// ) );
	// register_taxonomy( 'solution_type', 'solutions', array(
	// 	// Hierarchical taxonomy (like categories)
	// 	'hierarchical' => true,
	// 	// This array of options controls the labels displayed in the WordPress Admin UI
	// 	'labels'       => array(
	// 		'name'              => esc_html__( 'Type', 'abrag' ),
	// 		'singular_name'     => esc_html__( 'Type', 'abrag' ),
	// 		'search_items'      => esc_html__( 'Search Type', 'abrag' ),
	// 		'all_items'         => esc_html__( 'All Types', 'abrag' ),
	// 		'parent_item'       => esc_html__( 'Parent Types', 'abrag' ),
	// 		'parent_item_colon' => esc_html__( 'Parent Types', 'abrag' ),
	// 		'edit_item'         => esc_html__( 'Edit' ),
	// 		'update_item'       => esc_html__( 'Update', 'abrag' ),
	// 		'add_new_item'      => esc_html__( 'Add', 'abrag' ),
	// 		'new_item_name'     => esc_html__( 'Name Type', 'abrag' ),
	// 		'menu_name'         => esc_html__( 'Type', 'abrag' ),
	// 	),
	// 	// Control the slugs used for this taxonomy
	// 	'rewrite'      => array(
	// 		'slug'         => 'solution_type', // This controls the base slug that will display before each term
	// 		'with_front'   => false, // Don't display the category base before "/locations/"
	// 		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	// 	),
	// ) );

	// register_taxonomy( 'branch_type', 'our_branches', array(
	// 	// Hierarchical taxonomy (like categories)
	// 	'hierarchical' => true,
	// 	// This array of options controls the labels displayed in the WordPress Admin UI
	// 	'labels'       => array(
	// 		'name'              => esc_html__( 'Type', 'abrag' ),
	// 		'singular_name'     => esc_html__( 'Type', 'abrag' ),
	// 		'search_items'      => esc_html__( 'Search Type', 'abrag' ),
	// 		'all_items'         => esc_html__( 'All Types', 'abrag' ),
	// 		'parent_item'       => esc_html__( 'Parent Types', 'abrag' ),
	// 		'parent_item_colon' => esc_html__( 'Parent Types', 'abrag' ),
	// 		'edit_item'         => esc_html__( 'Edit' ),
	// 		'update_item'       => esc_html__( 'Update', 'abrag' ),
	// 		'add_new_item'      => esc_html__( 'Add', 'abrag' ),
	// 		'new_item_name'     => esc_html__( 'Name Type', 'abrag' ),
	// 		'menu_name'         => esc_html__( 'Type', 'abrag' ),
	// 	),
	// 	// Control the slugs used for this taxonomy
	// 	'rewrite'      => array(
	// 		'slug'         => 'branch_type', // This controls the base slug that will display before each term
	// 		'with_front'   => false, // Don't display the category base before "/locations/"
	// 		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	// 	),
	// ) );
}

add_action( 'init', 'create_custom_taxonomies', 0 );