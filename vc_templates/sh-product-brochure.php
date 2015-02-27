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
      "type"        => "textfield",
      "param_name"  => "posts",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Comma separated product ids",
      "description" => "",
      "dependency"  => array(
        array(
          "element" => 'filter_by',
          "value"   => 'product_id'
        )
      )
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "taxonomy",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Taxonomy id",
      "description" => "",
      "dependency"  => array(
        array(
          "element" => 'filter_by',
          "value"   => 'taxonomy'
        )
      )
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "terms",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Comma separated product terms",
      "description" => "Terms of \"taxonomy\" attribute value taxonomy.",
      "dependency"  => array(
        array(
          "element" => 'filter_by',
          "value"   => 'taxonomy'
        )
      )
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "number_products",
      "holder"      => "div",
      "value"       => "",
      "heading"     => "Number of products.",
      "description" => "A number. \"-1\" - all slides.",
      "dependency"  => array()
    )
  );




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
