<?php 
/*
Plugin Name: ALT Lab Check If User Is Logged In 
Plugin URI:  https://github.com/
Description: Simple check to see if user is logged in and then do stuff
Version:     1.0
Author:      ALT Lab (matt roberts)
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action('wp_enqueue_scripts', 'prefix_load_scripts');

function prefix_load_scripts() {                           
    $deps = array('jquery');
    $version= '1.0'; 
    $in_footer = true;    
    wp_enqueue_script('check-if-logged-in-main-js', plugin_dir_url( __FILE__) . 'js/check-if-logged-in-main.js', $deps, $version, $in_footer); 
    wp_enqueue_style( 'check-if-logged-in-main-css', plugin_dir_url( __FILE__) . 'css/check-if-logged-in-main.css');
}




//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
