<?php
// Tweets Carousel
// https://strangehouse.zendesk.com/hc/en-us/articles/202207552-Tweets-Carousel

add_action( 'vc_before_init', 'map_sh_twitter' );
function map_sh_twitter() {

  // StoreSmart Category
  $category = 'StoreSmart';


  // Shortcode
  $base = 'sh-twitter';
  $name = 'Tweets Carousel';
  $desc = 'Latest Twitter tweets carousel.';


  // Settings
  $show_settings   = false;
  $content_element = true;


  // Params
  $params = array();




  /** Map Shortcode */
  map_shortcode($category, $name, $desc, $base, $content_element, $show_settings, $params);
}
