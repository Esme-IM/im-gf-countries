<?php 
/**
 * Plugin Name: Innermedia Gravity Form Edits - Countries
	Plugin URI: https://innermedia.co.uk
 * Description: Updating the gravity forms country field for Dukes international sites
 * Version: 1.0
 * Author: Innermedia
 * Author URI: https://innermedia.co.uk
*/

register_activation_hook(__FILE__, 'imgformedits_activation_logic');

function imgformedits_activation_logic() {
    //if dependent plugin is not active
    if (!is_plugin_active('gravityforms/gravityforms.php') )
    {
        deactivate_plugins(plugin_basename(__FILE__));
    }
}
function detect_plugin_deactivation( $plugin, $network_activation ) {
    if ($plugin=='gravityforms/gravityforms.php')
    {
        deactivate_plugins(plugin_basename(__FILE__));
    }
}
add_action( 'deactivated_plugin', 'detect_plugin_deactivation', 10, 2 );
if (is_plugin_active('gravityforms/gravityforms.php') ) {
	include('includes/countries.php');
}

?>