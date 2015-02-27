<?php
// Store Locator Form
// https://strangehouse.zendesk.com/hc/en-us/articles/202051802-Store-Locator-Form

add_action( 'vc_before_init', 'map_sh_store_locator_form' );
function map_sh_store_locator_form() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-store-locator-form';
  $name = 'Store Locator Form';
  $desc = 'Displays store finder form.';


  // Settings
  $show_settings   = true;
  $content_element = true;


  // Params
  $params = array();




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
