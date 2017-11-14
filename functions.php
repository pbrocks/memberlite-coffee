<?php
/**
 * Memberlite [Coffee] Child Theme functions and definitions
 *
 * @package Memberlite 2.0
 * @subpackage Memberlite Words 1.0
 */

//Define constants
define( 'MEMBERLITE_COFFEE_DIR', get_stylesheet_directory() );

//Enqueue scripts and styles.
function memberlite_coffee_enqueue_styles() {

    wp_enqueue_style( 'memberlite', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'memberlite_coffee_enqueue_styles' );


/**
  * Register color schemes for Memberlite.
  * Based on code from the Twentyfifteen theme. (https://themes.svn.wordpress.org/twentyfifteen/1.2/inc/customizer.php)
  *
  * Can be filtered with {@see 'memberlite_color_schemes'}.
  *
  * The order of colors in a colors array:
  * 1. Header Text Color
  * 2. Background Color
  * 3. Primary Navigation Background Color
  * 4. Primary Navigation Link Color
  * 5. Link Color
  * 6. Meta Link Color
  * 7. Primary Color
  * 8. Secondary Color
  * 9. Action Color
  *
  * @since Twenty Fifteen 1.0
  *
  * @return array An associative array of color scheme options.
*/
function memberlite_coffee_color_schemes( $color_schemes ) {

	// Remove all schemes except for default and custom.
	unset( $color_schemes['education'] );
	unset( $color_schemes['modern_teal'] );
	unset( $color_schemes['mono_blue'] );
	unset( $color_schemes['mono_green'] );
	unset( $color_schemes['mono_orange'] );
	unset( $color_schemes['mono_pink'] );
	unset( $color_schemes['pop'] );
	unset( $color_schemes['primary'] );
	unset( $color_schemes['raspberry_lime'] );
	unset( $color_schemes['slate_blue'] );
	unset( $color_schemes['watermelon'] );

	// Default color scheme.
	$color_schemes['default'] = array(
		'label' => __( 'Default', 'memberlite-coffee' ),
		'colors' => array(
			'#A4978E',
			'#132226',
			'#040c0e',
			'#A4978E',
			'#A4978E',
			'#A4978E',
			'#525B56',
			'#132226',
			'#BE9063',
		)
	);

	// Cappuccino color scheme.
	$color_schemes['cappuccino'] = array(
		'label' => __( 'Cappuccino', 'memberlite-coffee' ),
		'colors' => array(
			'#FFF',
			'#BB9966',
			'#996633',
			'#FFF',
			'#FFF',
			'#FFF',
			'#663300',
			'#663300',
			'#BB9966',
		)
	);

	// Just Black color scheme.
	$color_schemes['just_black'] = array(
		'label' => __( 'Just Black', 'memberlite-coffee' ),
		'colors' => array(
			'#3B444B',
			'#000',
			'#1B1B1B',
			'#3B444B',
			'#3B444B',
			'#3B444B',
			'#3B444B',
			'#000',
			'#FFF',
		)
	);

	// Latte color scheme.
	$color_schemes['latte'] = array(
		'label' => __( 'Latte', 'memberlite-coffee' ),
		'colors' => array(
			'#A39274',
			'#DFD8C8',
			'#252523',
			'#A39274',
			'#252523',
			'#252523',
			'#A39274',
			'#DFD8C8',
			'#252523',
		)
	);

	// Pumpkin Spice color scheme.
	$color_schemes['pumpkin_spice'] = array(
		'label' => __( 'Pumpkin Spice', 'memberlite-coffee' ),
		'colors' => array(
			'#A26448',
			'#49392b',
			'#774F3E',
			'#C76644',
			'#C76644',
			'#C76644',
			'#A26448',
			'#000',
			'#000',
		)
	);

	// Mocha color scheme.
	$color_schemes['mocha'] = array(
		'label' => __( 'Mocha', 'memberlite-coffee' ),
		'colors' => array(
			'#6B3F3A',
			'#90645D',
			'#2E1915',
			'#6B3F3A',
			'#6B3F3A',
			'#6B3F3A',
			'#6b3F3A',
			'#000',
			'#000',
		)
	);

	return $color_schemes;
}

add_filter( 'memberlite_color_schemes', 'memberlite_coffee_color_schemes' );

