<?php 
/**
 * Shortcode
 */

add_shortcode( 'a1-post-carousel', 'a1h_shortcode_post_carousel_func' );

function a1h_shortcode_post_carousel_func( $atts ) {
  $atts = shortcode_atts( [
    'slides_per_view' => 2,

    'items' => 4,
    'post__in' => '',
    'category__in' => '',
		'class' => ''
  ], $atts );

  $args = [
    'post_type' => 'post',
    'posts_per_page' => $atts['items'],
    'orderby' => 'date',
    'order' => 'DESC',
  ];

  if(!empty($atts['post__in'])) {
    $args['post__in'] = explode(',', $atts['post__in']);
  }

  if(!empty($atts['category__in'])) {
    $args['category__in'] = explode(',', $atts['category__in']);
  }

  $the_query = new WP_Query( $args );
  set_query_var( 'atts', $atts );
  set_query_var( 'the_query', $the_query );

  ob_start();
  load_template( A1H_DIR . 'templates/posts-carousel.php', false );
  return ob_get_clean();
}