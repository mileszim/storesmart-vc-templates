<?php
// Section
// https://strangehouse.zendesk.com/hc/en-us/articles/202051942-Section

add_action( 'vc_before_init', 'map_sh_section' );
function map_sh_section() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-section';
  $name = 'Section';
  $desc = 'Displays content of specific section. It helps you to manage your content by splitting it to sections.';


  // Settings
  $show_settings   = true;
  $content_element = true;


  // Params
  $params = array(
    array(
      "type"        => "textfield",
      "param_name"  => "id",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Section ID",
      "description" => "",
      "dependency"  => array()
    )
  );




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
