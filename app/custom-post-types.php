<?php

/** @var  \Herbert\Framework\Application $container */
\add_action( 'init', function() {

  $labels = array(
    'name'                => _x('Partnerships', 'Post Type General Name', 'text_domain'),
    'singular_name'       => _x('Partnership', 'Post Type Singular Name', 'text_domain'),
    'menu_name'           => __('Partnership', 'text_domain'),
    'parent_item_colon'   => __('Parent Item:', 'text_domain'),
    'all_items'           => __('All Partnerships', 'text_domain'),
    'view_item'           => __('View Partnership', 'text_domain'),
    'add_new_item'        => __('Add New Partnership', 'text_domain'),
    'add_new'             => __('Add New', 'text_domain'),
    'edit_item'           => __('Edit Partnership', 'text_domain'),
    'update_item'         => __('Update Partnership', 'text_domain'),
    'search_items'        => __('Search Partnerships', 'text_domain'),
    'not_found'           => __('Not found', 'text_domain'),
    'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
  );

  $args = array(
    'label'               => __('partnership post', 'text_domain'),
    'description'         => __('Sponsored content creator', 'text_domain'),
    'labels'              => $labels,
    'supports'            => array('title','thumbnail','revisions','author'),
    'taxonomies'          => array('category','post_tag'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-awards',
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type' => 'partnership',
    'capabilities' => array(
      'publish_posts' => 'publish_partnerships',
      'edit_posts' => 'edit_partnerships',
      'edit_others_posts' => 'edit_others_partnerships',
      'delete_posts' => 'delete_partnerships',
      'delete_private_posts' => 'delete_private_partnerships',
      'delete_others_posts' => 'delete_others_partnerships',
      'read_private_posts' => 'read_private_partnerships',
      'edit_post' => 'edit_partnership',
      'delete_post' => 'delete_partnership',
      'read_post' => 'read_partnership',
    ),
    'map_meta_cap' => true,
    'rewrite' => false
  );

  \register_post_type('partnership', $args);
}
,0);
