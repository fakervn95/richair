<?php
/*
	
@package sunsettheme
	
	========================
		THEME CUSTOM POST TYPES
	========================
*/
			add_action( 'init', 'tg_contact_custom_post_type_adv' );
	add_filter('manage_adv_posts_columns','sunset_set_contact_columns_adv');
	add_action('manage_adv_posts_custom_column','sunset_contact_custom_column_adv',10,2);

/* ADV */
function tg_contact_custom_post_type_adv() {
	$labels = array(
		'name' 				=> 'Slide Về Richair',
		'singular_name' 	=> 'Slide Về Richair',
		'menu_name'			=> 'Slide Về Richair',
		'name_admin_bar'	=> 'Slide Về Richair'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 25,
		'menu_icon'			=> 'dashicons-images-alt2',
		'supports'			=> array( 'title', 'thumbnail' , 'excerpt' ),
	);

	// register_taxonomy(
	// 	'adv_category',
	// 	'adv',
	// 	array(
	// 		'label' => __( 'Chuyên mục' ),
	// 		'rewrite' => array( 'slug' => 'category_adv' ),
	// 		'hierarchical' => true,
	// 	)
	// );

	register_post_type( 'adv', $args );
	
}

function sunset_set_contact_columns_adv($columns){
	$newColumns = array();
	$newColums['title'] = 'Title';
	$newColums['avatar'] = 'Avatar';
	return $newColums;
}

function sunset_contact_custom_column_adv($column,$post_id){
	switch ($column) {
		case 'avatar':
			echo get_the_post_thumbnail();
		break;
	}
}

 
