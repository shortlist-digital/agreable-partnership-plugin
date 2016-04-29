<?php
add_action('admin_init', function() {

remove_role('partnerships_editor');

if (!get_role('partnerships_editor')) {
    // Add Partnerships editor role
    add_role('partnerships_editor',
      'Partnerships Editor',
      array(
        'read' => true,
        'edit_posts' => false,
        'delete_posts' => false,
        'publish_posts' => false,
        'upload_files' => true,
      )
    );
  }
  // Add the roles you'd like to administer the custom post types
  $roles = array('partnerships_editor','administrator');

  // Loop through each role and assign capabilities
  foreach($roles as $the_role) {
    $role = get_role($the_role);
    $role->add_cap('read_partnership');
    $role->add_cap('read_private_partnerships');
    $role->add_cap('edit_partnership');
    $role->add_cap('edit_partnerships');
    $role->add_cap('edit_others_partnerships');
    $role->add_cap('edit_published_partnerships');
    $role->add_cap('publish_partnerships');
    $role->add_cap('delete_others_partnerships');
    $role->add_cap('delete_private_partnerships');
    $role->add_cap('delete_published_partnerships');

  }
});
