<?php namespace AgreablePartnershipPlugin\Hooks;

use add_action;
use TimberPost;
use Illuminate\Support\Collection;

class NavMigration {
  public function init() {
    add_action('template_redirect', array($this, 'handle_widget_load'));
  }

  public function handle_widget_load() {
    $this->post = new TimberPost;
    $this->rows = get_field('widgets');
    if ($this->rows[0]['acf_fc_layout'] == 'fixed-header') {
      $this->migrate_nav();
			array_shift($this->rows);
			update_field('widgets', $this->rows);
    }
		if ($this->rows[0]['acf_fc_layout'] == 'super-hero') {
			$this->migrate_super_hero();
			array_shift($this->rows);
			update_field('widgets', $this->rows);
		}
  }

	public function migrate_super_hero() {
		$old = get_post_meta($this->post->id);
		update_field(
			'partnership_header_text_colour',
			$old['widgets_1_super_hero_text_colour'][0]
		);
		update_field(
			'partnership_header_background_colour',
			$old['widgets_1_super_hero_background_colour'][0]
		);
		update_field(
			'partnership_header_line_colour',
			$old['widgets_1_super_hero_line_colour'][0]
		);
		update_field(
			'partnership_header_line_colour',
			$old['widgets_1_super_hero_line_colour'][0]
		);
		update_field(
			'partnership_header_other_options',
			$old['widgets_1_options'][0]
		);
		update_field(
			'partnership_header_brand',
			$old['widgets_1_brand'][0]
		);
		update_field(
			'partnership_header_brand_image',
			$old['widgets_1_brand_image'][0]
		);
	}

  public function migrate_nav() {
		$old = get_post_meta($this->post->id);
		update_field(
			'partnership_nav_logo_button_destination',
			$old['widgets_0_home_button_destination'][0]
		);
		update_field(
			'partnership_nav_sponsored_text',
			$old['widgets_0_sponsored_text'][0]
		);
		update_field(
			'partnership_nav_brand_image',
			$old['widgets_0_brand_image'][0]
		);
		update_field(
			'partnership_nav_brand_name',
			$old['widgets_0_brand_name'][0]
		);
		update_field(
			'partnership_nav_background_colour',
			$old['widgets_0_background_colour'][0]
		);
		update_field(
			'partnership_nav_text_colour',
			$old['widgets_0_text_colour'][0]
		);
		update_field(
			'partnership_nav_social_icons_background_colour',
			$old['widgets_0_social_icons_background_colour'][0]
		);

  }

  public function debug($name, $thing) {
    echo "<h1>$name</h1>";
    echo "<pre>";
    print_r($thing);
    echo "</pre></br></hr></br>";
  }
}

