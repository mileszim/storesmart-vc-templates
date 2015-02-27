<?php
// Products Brochure
// https://strangehouse.zendesk.com/hc/en-us/articles/202217241-Products-Brochure

add_action( 'vc_before_init', 'map_sh_product_brochure' );
function map_sh_product_brochure() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-product-brochure';
  $name = 'Products Brochure';
  $desc = 'Used to display grid of WooCommerce products.';


  // Settings
  $show_settings   = true;
  $content_element = true;


  // Params
  $params = array(
    array(
      "type"        => "dropdown",
      "param_name"  => "filter_by",
      "holder"      => "div",
      "value"       => array('latest','product_id','taxonomy'),
      "heading"     => "Filter by",
      "description" => "Type of filter",
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
