<?php

add_action('agreable_app_theme_init', function() {

  $key = 'partnership_nav';

  register_field_group(array(
      'key' => $key,
      'title' => 'Partnership Nav',
      'fields' => array(
          array(
              'key' => $key . '_logo_button_destination',
              'label' => 'Logo button destination',
              'name' => 'logo_button_destination',
              'type' => 'url',
              'instructions' => 'What URL do you want the logo to go to? (http://)',
              'required' => 1,
              'wrapper' => array(
                  'width' => '50%',
                  'class' => '',
                  'id' => ''
              ),
              'placeholder' => 'http://shortlist.com',
              'default_value' => ''
          ),
          array(
              'key' => $key . '_options',
              'label' => 'Options',
              'name' => 'nav_options',
              'type' => 'checkbox',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                  'width' => '50%',
                  'class' => '',
                  'id' => ''
              ),
              'choices' => array(
                  '' => ''
              ),
              'default_value' => array(
                  'false' => 'false'
              ),
              'layout' => 'vertical'
          ),
          array(
              'key' => $key . '_sponsored_text',
              'label' => 'Sponsored Text',
              'name' => 'sponsored_text',
              'prefix' => '',
              'type' => 'select',
              'instructions' => 'Select one of the three sponsored content labels',
              'required' => 1,
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              ),
              'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => ''
              ),
              'choices' => array(
                  'Sponsored By' => 'Sponsored By',
                  'Brought To You By' => 'Brought To You By',
                  'In Association With' => 'In Association With'
              ),
              'default_value' => array(
                  'sponsored_by' => 'Sponsored By'
              ),
              'allow_null' => 0,
              'multiple' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0
          ),
          array(
              'key' => $key . '_brand_image',
              'label' => 'Brand Image',
              'name' => 'brand_image',
              'type' => 'image',
              'instructions' => 'Add a brand logo',
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => ''
              ),
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              )
          ),
          array(
              'key' => $key . '_brand_name',
              'label' => 'Brand Name',
              'name' => 'brand_name',
              'type' => 'text',
              'instructions' => 'Add brand name',
              'width' => '50',
              'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => ''
              ),
              'default_value' => '',
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              )
          ),
          array(
              'key' => $key . '_custom-options',
              'label' => 'Custom options',
              'name' => 'options',
              'type' => 'checkbox',
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              ),
              'choices' => array(
                  'show_social' => 'Show social links',
                  'invert_logo' => 'Invert logo'
              ),
              'default_value' => array(
                  'show_social' => 'show_social',
                  'invert_logo' => ''
              ),
              'wrapper' => array(
                  'width' => 50,
                  'class' => '',
                  'id' => ''
              ),
              'layout' => 'vertical'
          ),
          array(
              'key' => $key . '_background_colour',
              'label' => 'Background Colour',
              'name' => 'background_colour',
              'type' => 'color_picker',
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              ),
              'wrapper' => array(
                  'width' => 33.333,
                  'class' => '',
                  'id' => ''
              ),
              'default_value' => ''
          ),
          array(
              'key' => $key . '_text_colour',
              'label' => 'Text Colour',
              'name' => 'text_colour',
              'type' => 'color_picker',
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              ),
              'wrapper' => array(
                  'width' => 33.333,
                  'class' => '',
                  'id' => ''
              ),
              'default_value' => ''
          ),
          array(
              'key' => $key . '_social_icons_background_colour',
              'label' => 'Social Icons Colour',
              'name' => 'social_icons_background_colour',
              'type' => 'color_picker',
              'conditional_logic' => array(
                  array(
                      array(
                          'field' => $key . '_options',
                          'operator' => '==',
                          'value' => ''
                      )
                  )
              ),
              'wrapper' => array(
                  'width' => 33.333,
                  'class' => '',
                  'id' => ''
              ),
              'default_value' => ''
          )
      ),
      'location' => array(
          array(
              array(
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'partnership'
              )
          )
      ),
      'menu_order' => 2,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => array(
          0 => 'the_content',
          1 => 'discussion',
          2 => 'comments'
      )
  ));
});
