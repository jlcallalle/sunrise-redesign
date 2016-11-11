<?php 
function my_custom_post_banner() {
	$labels = array(
		'name'               => _x( 'Banners', 'post type general name' ),
		'singular_name'      => _x( 'Banner', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Banner' ),
		'edit_item'          => __( 'Edit Banner' ),
		'new_item'           => __( 'New Banner' ),
		'all_items'          => __( 'All Banners' ),
		'view_item'          => __( 'View Banner' ),
		'search_items'       => __( 'Search Banners' ),
		'not_found'          => __( 'No Banner found' ),
		'not_found_in_trash' => __( 'No Banner found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Banners'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Banners',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'post-formats' ),
		'has_archive'   => true,
	);
	register_post_type( 'banner', $args );	
}
add_action( 'init', 'my_custom_post_banner' );


function my_updated_messages( $messages ) {
	global $post, $post_ID;
	$messages['product'] = array(
		0 => '', 
		1 => sprintf( __('Banner updated. <a href="%s">View Banner</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('Product updated.'),
		5 => isset($_GET['revision']) ? sprintf( __('Banner restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Banner published. <a href="%s">View product</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Banner saved.'),
		8 => sprintf( __('Banner submitted. <a target="_blank" href="%s">Preview product</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('Banner scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview product</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('Banner draft updated. <a target="_blank" href="%s">Preview Banner</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
	return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );

function my_contextual_help( $contextual_help, $screen_id, $screen ) { 
	if ( 'product' == $screen->id ) {

		$contextual_help = '<h2>Banners</h2>
		<p>Banners show the details of the items that we sell on the website. You can see a list of them on this page in reverse chronological order - the latest one we added is first.</p> 
		<p>You can view/edit the details of each product by clicking on its name, or you can perform bulk actions using the dropdown menu and selecting multiple items.</p>';

	} elseif ( 'edit-product' == $screen->id ) {

		$contextual_help = '<h2>Editing products</h2>
		<p>This page allows you to view/modify product details. Please make sure to fill out the available boxes with the appropriate details (product image, price, brand) and <strong>not</strong> add these details to the product description.</p>';

	}
	return $contextual_help;
}
add_action( 'contextual_help', 'my_contextual_help', 10, 3 );

function my_taxonomies_banner() {
	$labels = array(
		'name'              => _x( 'Banner Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Banner Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Banner Categories' ),
		'all_items'         => __( 'All Banner Categories' ),
		'parent_item'       => __( 'Parent Banner Category' ),
		'parent_item_colon' => __( 'Parent Banner Category:' ),
		'edit_item'         => __( 'Edit Banner Category' ), 
		'update_item'       => __( 'Update Banner Category' ),
		'add_new_item'      => __( 'Add New Banner Category' ),
		'new_item_name'     => __( 'New Banner Category' ),
		'menu_name'         => __( 'Banner Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'banner_category', 'banner', $args );
}
add_action( 'init', 'my_taxonomies_banner', 0 );


?>