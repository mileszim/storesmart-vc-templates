<?php

function map_params($p) {
  $theme_info = wp_get_theme();
  $params = array(
     "type"        => $p["type"],
     "param_name"  => $p["param_name"],
     "holder"      => $p["holder"],
     "value"       => __( $p["value"],       $theme_info->get( 'TextDomain' ) ),
     "heading"     => __( $p["heading"],     $theme_info->get( 'TextDomain' ) ),
     "description" => __( $p["description"], $theme_info->get( 'TextDomain' ) ),
     "dependency"  => $p["dependency"]
  );
  return $params;
}


function map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params) {
  $theme_info = wp_get_theme();
  vc_map(
    array(
      "category"        => __( $category, $theme_info->get( 'TextDomain' ) ),
      "name"            => __( $name,     $theme_info->get( 'TextDomain' ) ),
      "description"     => __( $desc,     $theme_info->get( 'TextDomain' ) ),
      "base"            => $base,
      "params"          => array_map('map_params', $params),

      "content_element"         => $content_element,
      "show_settings_on_create" => $show_settings,
    )
  );
}


// Shortcodes
require_once('vc_templates/sh-twitter.php');
require_once('vc_templates/sh-product-brochure.php');
require_once('vc_templates/sh-grid.php');
