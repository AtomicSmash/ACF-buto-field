<?php
/*
Plugin Name: Advanced Custom Fields: Buto API field
Plugin URI: https://atomicsmash.co.uk
Description: ACF field to grab from the Buto API
Version: 0.0.2
Author: @atomicsmash
Author URI: https://atomicsmash.co.uk
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

function include_field_types_buto_field( $version ) {

  include_once('buto_field-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_buto_field'); 





?>