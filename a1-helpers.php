<?php 
/**
 * Plugin Name: A1 Helpers
 * Plugin URI: #
 * Description: A1 helpers functional custom
 * Author: Mike
 * Author URI: #
 * Version: 1.0.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

{
  /**
   * Define
   */
  define('A1H_VERSION', '1.0.1');
  define('A1H_URI', plugin_dir_url(__FILE__));
  define('A1H_DIR', plugin_dir_path(__FILE__));
}

{
  /**
   * Inc
   */
  import(A1H_DIR . '/inc/static.php');
  import(A1H_DIR . '/inc/helpers.php');
  import(A1H_DIR . '/inc/hooks.php');
  import(A1H_DIR . '/inc/ajax.php');
  import(A1H_DIR . '/inc/shortcode.php');
}