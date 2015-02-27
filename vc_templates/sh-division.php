<?php
// Division
// https://strangehouse.zendesk.com/hc/en-us/articles/202154471-Division

add_action( 'vc_before_init', 'map_sh_division' );
function map_sh_division() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-division';
  $name = 'Division';
  $desc = 'Displays html division (<div>) element';


  // Settings
  $show_settings   = true;
  $content_element = true;


  // Params
  $params = array(
    array(
      "type"        => "textarea_html",
      "param_name"  => "content",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Content",
      "description" => "Div content",
      "dependency"  => array()
    )
  );




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
