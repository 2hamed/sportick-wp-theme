<?php
/**
 * Created by PhpStorm.
 * User: hamed
 * Date: 5/21/16
 * Time: 3:25 PM
 */
function sportick_theme_setup()
{
	add_theme_support('post-thumbnails');

	add_image_size('index-club', 350, 180, true);
}

add_action('after_setup_theme', 'sportick_theme_setup');
function sportick_register_post_types()
{
	$labels = array(
		'name' => _x('Clubs', 'Post Type General Name', 'sportick'),
		'singular_name' => _x('Club', 'Post Type Singular Name', 'sportick'),
		'menu_name' => __('Clubs', 'sportick'),
		'name_admin_bar' => __('Post Type', 'sportick'),
		'archives' => __('Item Archives', 'sportick'),
		'parent_item_colon' => __('Parent Item:', 'sportick'),
		'all_items' => __('All Items', 'sportick'),
		'add_new_item' => __('Add New Item', 'sportick'),
		'add_new' => __('Add New', 'sportick'),
		'new_item' => __('New Item', 'sportick'),
		'edit_item' => __('Edit Item', 'sportick'),
		'update_item' => __('Update Item', 'sportick'),
		'view_item' => __('View Item', 'sportick'),
		'search_items' => __('Search Item', 'sportick'),
		'not_found' => __('Not found', 'sportick'),
		'not_found_in_trash' => __('Not found in Trash', 'sportick'),
		'featured_image' => __('Featured Image', 'sportick'),
		'set_featured_image' => __('Set featured image', 'sportick'),
		'remove_featured_image' => __('Remove featured image', 'sportick'),
		'use_featured_image' => __('Use as featured image', 'sportick'),
		'insert_into_item' => __('Insert into item', 'sportick'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'sportick'),
		'items_list' => __('Items list', 'sportick'),
		'items_list_navigation' => __('Items list navigation', 'sportick'),
		'filter_items_list' => __('Filter items list', 'sportick'),
	);
	$args = array(
		'label' => __('Club', 'sportick'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields',),
		'taxonomies' => array('post_tag'),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type('club', $args);
}

add_action('init', 'sportick_register_post_types');