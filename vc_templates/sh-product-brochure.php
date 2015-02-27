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
      "description" => "Works only if filter_by=\"product_id\"",
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
      "description" => ". Works only if filter_by=\"taxonomy\"",
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
      "description" => "Terms of \"taxonomy\" attribute value taxonomy. Works only if filter_by=\"taxonomy\"",
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
      "value"       => "-1",
      "heading"     => "Number of products.",
      "description" => "A number. \"-1\" - all slides.",
      "dependency"  => array()
    ),
    array(
      "type"        => "dropdown",
      "param_name"  => "order_by",
      "holder"      => "div",
      "value"       => array('date','ID','author','title','type','rand'),
      "heading"     => "Order by",
      "description" => "",
      "dependency"  => array()
    ),
    array(
      "type"        => "dropdown",
      "param_name"  => "order",
      "holder"      => "div",
      "value"       => array('ASC', 'DESC'),
      "heading"     => "Order direction",
      "description" => "ASC - ascending. DESC - descending.",
      "dependency"  => array()
    ),
    array(
      "type"        => "dropdown",
      "param_name"  => "entry_show_animation",
      "holder"      => "div",
      "value"       => array('yes', 'no'),
      "heading"     => "Entry animation on show.",
      "description" => "",
      "dependency"  => array()
    ),
    array(
      "type"        => "dropdown",
      "param_name"  => "image_show_animation",
      "holder"      => "div",
      "value"       => array('no', 'yes'),
      "heading"     => "Image animation on show.",
      "description" => "",
      "dependency"  => array()
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "alpha_column_show_animation",
      "holder"      => "div",
      "value"       => "none",
      "heading"     => "Alpha Column: Show Animation",
      "description" => "",
      "dependency"  => array()
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "alpha_column_show_animation_duration",
      "holder"      => "div",
      "value"       => "2s",
      "heading"     => "Alpha Column: Show Animation Duration",
      "description" => "",
      "dependency"  => array()
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "omega_column_show_animation",
      "holder"      => "div",
      "value"       => "none",
      "heading"     => "Omega Column: Show Animation",
      "description" => "",
      "dependency"  => array()
    ),
    array(
      "type"        => "textfield",
      "param_name"  => "omega_column_show_animation_duration",
      "holder"      => "div",
      "value"       => "2s",
      "heading"     => "Omega Column: Show Animation Duration",
      "description" => "",
      "dependency"  => array()
    )
  );




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
