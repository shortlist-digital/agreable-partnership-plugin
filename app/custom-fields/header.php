<?php
use AgreableLongformPlugin\CustomFields\HeaderDefinition;

$key = 'partnership_header';

$header_acf = HeaderDefinition::get($key);

$header_acf = apply_filters('agreable_partnership_plugin_header_acf', $header_acf);
register_field_group($header_acf);