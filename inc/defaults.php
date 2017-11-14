<?php

/**
 * Set the theme defaults.
 * @since: 1.0.0
 */
function memberlite_coffee_default_values() {
	global $memberlite_defaults;

	$memberlite_defaults['color_primary'] = '#FF0000';

		// 	'bgcolor_site_navigation' => '#FAFAFA',
		// 'color_site_navigation' => '#777777',
		// 'color_link' => '#2C3E50',
		// 'color_meta_link' => '#2C3E50',
		// 'color_primary' => '#2C3E50',
		// 'color_secondary' => '#18BC9C',
		// 'color_action' => '#F39C12',

	return $memberlite_defaults;
}

add_action( 'init', 'memberlite_coffee_default_values' );
