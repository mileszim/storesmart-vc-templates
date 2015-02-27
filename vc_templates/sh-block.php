<?php
// Block
// https://strangehouse.zendesk.com/hc/en-us/articles/202154491-Block

add_action( 'vc_before_init', 'map_sh_block' );
function map_sh_block() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-block';
  $name = 'Block';
  $desc = 'Single row responsive grid.';


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
      "description" => "Block content",
      "dependency"  => array()
    )
  );




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
