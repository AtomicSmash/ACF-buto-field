<?php
/*
Plugin Name: Advanced Custom Fields: Api field
Plugin URI: https://atomicsmash.co.uk
Description: ACF field to grab an API
Version: 1.0.0
Author: @atomicsmash
Author URI: https://atomicsmash.co.uk
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

function include_field_types_Api_field( $version ) {

  include_once('api_field-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_Api_field'); 





?>