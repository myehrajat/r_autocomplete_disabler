<?php
/**
 * @package RentIt_Autocomplete_Disabler
 * @version 1.0
 */
/*
Plugin Name: RentIt Autocomplete Disabler
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make renit theme completely jalali compatible
Version: 1.0
Author URI: https://ma.tt/
Text Domain: RentIt_Autocomplete_Disabler
*/
/*
Note: The strategy is that we send all date for storing and processing by gregorian and only showing by custom date that we need. this strategy is the best method for preventing multiple process of calculation and storing data and even we can use the same database in future for multiple lang

*/
include_once('customizer.php');
add_action( 'wp_head', 'RentIt_Autocomplete_Disabler_disable_autocomplete',PHP_INT_MAX );
function RentIt_Autocomplete_Disabler_disable_autocomplete() {
	if(get_theme_mod('autocomplete_disabler_status','')){
		echo '<script type="text/javascript">';?>
		jQuery( document ).ready( function( $ ) {
			jQuery('input[type=text]').each(function() {
				//alert(jQuery(this).value);
				$(this).attr('autocomplete', 'off');
			})
		});
		<?php
		echo '</script>';
	}
}

