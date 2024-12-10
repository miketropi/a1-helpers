<?php
/**
 * Static
 */

add_action( 'wp_enqueue_scripts', 'a1h_enqueue_scripts' );

function a1h_enqueue_scripts() {
  wp_enqueue_style( 'a1h-css', A1H_URI . 'dist/css/a1-helpers.bundle.css', false, A1H_VERSION );
  wp_enqueue_script( 'a1h-js', A1H_URI . 'dist/a1-helpers.bundle.js', ['jquery'], A1H_VERSION, true );

  wp_localize_script( 'a1h-js', 'A1H_PHP_DATA', [
    'ajax-url' => admin_url( 'admin-ajax.php' ),
    'lang' => []
  ] );
}