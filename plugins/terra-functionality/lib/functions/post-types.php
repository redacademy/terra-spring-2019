<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function terra_testimony_post_type() {

	$labels = array(
		'name'                  => 'Testimonies',
		'singular_name'         => 'Testimony',
		'menu_name'             => 'Testimony Types',
		'name_admin_bar'        => 'Testimony Type',
		'archives'              => 'Testimony Archives',
		'attributes'            => 'Testimony Attributes',
		'parent_item_colon'     => 'Parent Testimony:',
		'all_items'             => 'All Testimonies',
		'add_new_item'          => 'Add New Testimony',
		'add_new'               => 'Add New',
		'new_item'              => 'New Testimony',
		'edit_item'             => 'Edit Testimony',
		'update_item'           => 'Update Testimony',
		'view_item'             => 'View Testimony',
		'view_items'            => 'View Testimonies',
		'search_items'          => 'Search Testimony',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Testimony Image',
		'set_featured_image'    => 'Set Testimony image',
		'remove_featured_image' => 'Remove Testimony image',
		'use_featured_image'    => 'Use as Testimony image',
		'insert_into_item'      => 'Insert into Testimony',
		'uploaded_to_this_item' => 'Uploaded to this Testimony',
		'items_list'            => 'Testimonies list',
		'items_list_navigation' => 'Testimonies list navigation',
		'filter_items_list'     => 'Filter Testimonies list',
	);
	$args = array(
		'label'                 => 'Testimony',
		'description'           => 'A testimony post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-album',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'testimony', $args );

}
add_action( 'init', 'terra_testimony_post_type', 0 );


function terra_partner_post_type() {

	$labels = array(
		'name'                  => 'Partners',
		'singular_name'         => 'Partner',
		'menu_name'             => 'Partner Types',
		'name_admin_bar'        => 'Partner Type',
		'archives'              => 'Partner Archives',
		'attributes'            => 'Partner Attributes',
		'parent_item_colon'     => 'Parent Partner:',
		'all_items'             => 'All Partners',
		'add_new_item'          => 'Add New Partner',
		'add_new'               => 'Add New',
		'new_item'              => 'New Partner',
		'edit_item'             => 'Edit Partner',
		'update_item'           => 'Update Partner',
		'view_item'             => 'View Partner',
		'view_items'            => 'View Partners',
		'search_items'          => 'Search Partner',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Partner Image',
		'set_featured_image'    => 'Set Partner image',
		'remove_featured_image' => 'Remove Partner image',
		'use_featured_image'    => 'Use as Partner image',
		'insert_into_item'      => 'Insert into Partner',
		'uploaded_to_this_item' => 'Uploaded to this Partner',
		'items_list'            => 'Partners list',
		'items_list_navigation' => 'Partners list navigation',
		'filter_items_list'     => 'Filter Partners list',
	);
	$args = array(
		'label'                 => 'Partner',
		'description'           => 'A partner post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-album',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'partner', $args );
}
add_action( 'init', 'terra_partner_post_type', 0 );


function terra_Member_post_type() {

	$labels = array(
		'name'                  => 'Members',
		'singular_name'         => 'Member',
		'menu_name'             => 'Member Types',
		'name_admin_bar'        => 'Member Type',
		'archives'              => 'Member Archives',
		'attributes'            => 'Member Attributes',
		'parent_item_colon'     => 'Parent Member:',
		'all_items'             => 'All Members',
		'add_new_item'          => 'Add New Member',
		'add_new'               => 'Add New',
		'new_item'              => 'New Member',
		'edit_item'             => 'Edit Member',
		'update_item'           => 'Update Member',
		'view_item'             => 'View Member',
		'view_items'            => 'View Members',
		'search_items'          => 'Search Member',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Member Image',
		'set_featured_image'    => 'Set Member image',
		'remove_featured_image' => 'Remove Member image',
		'use_featured_image'    => 'Use as Member image',
		'insert_into_item'      => 'Insert into Member',
		'uploaded_to_this_item' => 'Uploaded to this Member',
		'items_list'            => 'Members list',
		'items_list_navigation' => 'Members list navigation',
		'filter_items_list'     => 'Filter Members list',
	);
	$args = array(
		'label'                 => 'Member',
		'description'           => 'A member post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-album',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'member', $args );
}
add_action( 'init', 'terra_member_post_type', 0 );