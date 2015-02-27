<?php
// Simple Grid
// https://strangehouse.zendesk.com/hc/en-us/articles/202051822-Simple-Grid

add_action( 'vc_before_init', 'map_sh_grid' );
function map_sh_grid() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-grid';
  $name = 'Simple Grid';
  $desc = 'Used to display responsive grid.';


  // Settings
  $show_settings   = true;
  $content_element = true;


  // Params
  $params = array(
    array(
      "type"        => "dropdown",
      "param_name"  => "columns",
      "holder"      => "div",
      "value"       => array(1,2,3,4),
      "heading"     => "Columns",
      "description" => "Number (from 1 to 4)",
      "dependency"  => array()
    ),
    array(
      "type"        => "textarea_html",
      "param_name"  => "content",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Content",
      "description" => "Grid content",
      "dependency"  => array()
    )
  );




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
