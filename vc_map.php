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
// require_once('vc_templates/sh-slider.php');
require_once('vc_templates/sh-section.php');
// require_once('vc_templates/sh-post-link.php');
// require_once('vc_templates/sh-term-link.php');
// require_once('vc_templates/sh-promo-block.php');
// require_once('vc_templates/sh-promo-block-list.php');
// require_once('vc_templates/sh-promo-block-text.php');
// require_once('vc_templates/sh-masonry.php');
// require_once('vc_templates/sh-masonry-text-block.php');
// require_once('vc_templates/sh-masonry-image-block.php');
// require_once('vc_templates/sh-social-icons.php');
// require_once('vc_templates/sh-social-button.php');
// require_once('vc_templates/sh-presentation-slide-content-container.php');
// require_once('vc_templates/sh-feature-container.php');
// require_once('vc_templates/sh-feature.php');
require_once('vc_templates/sh-store-locator-form.php');
// require_once('vc_templates/sh-store-locator.php');
require_once('vc_templates/sh-block.php');
// require_once('vc_templates/sh-heading.php');
// require_once('vc_templates/sh-paragraph.php');
// require_once('vc_templates/sh-division.php');
// require_once('vc_templates/sh-image.php');
// require_once('vc_templates/sh-video.php');
// require_once('vc_templates/sh-video-background.php');
// require_once('vc_templates/sh-image-background.php');
// require_once('vc_templates/sh-parallax-background.php');
// require_once('vc_templates/sh-snap-scroll-panels.php');
// require_once('vc_templates/sh-sticky-block.php');
// require_once('vc_templates/sh-icon.php');
require_once('vc_templates/sh-grid.php');
// require_once('vc_templates/sh-multi-banners.php');
// require_once('vc_templates/sh-banner.php');
