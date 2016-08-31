<?php namespace AgreablePartnershipPlugin\Hooks;

class RelatedContentAcf {
  public function init() {
    \add_filter('agreable_base_theme_related_acf', array($this, 'related_acf'), 10);
  }

  public function related_acf($acf_definition) {
    $acf_definition['location'][] = [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'partnership',
      ]
    ];

    return $acf_definition;
  }
}
