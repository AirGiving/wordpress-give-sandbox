<?php
/**
 * Page settings.
 *
 * @since 1.0.0.3
 *
 * @package Listify
 * @category Admin
 * @author Astoundify
 */
class Listify_Page_Settings {

	/**
	 * Hook in to WordPress
	 *
	 * @since 1.0.0.3
	 */
	public function __construct() {
		add_filter( 'listify_cover', array( $this, 'cover_header_height' ), 5 );
		add_action( 'init', array( $this, 'register_meta' ) );

		if ( ! is_admin() ) {
			return;
		}

		add_action( 'admin_menu', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Add the header height to the cover class.
	 *
	 * @since 1.6.0
	 *
	 * @param string $class Current CSS class for header images.
	 * @return string $class
	 */
	public function cover_header_height( $class ) {
		if ( false === strpos( $class, 'page-cover' ) ) {
			return $class;
		}

		$setting = false;
		$post    = get_queried_object();

		// @todo: Move it to WooCommerce integrations.
		if ( function_exists( 'is_shop' ) && is_shop() ) {
			$setting = get_post_meta( wc_get_page_id( 'shop' ), 'header_height', true );
		}

		// If not previously set by another object.
		if ( ! $setting && is_a( $post, 'WP_Post' ) ) {
			$setting = $post->header_height;
		}

		if ( ! $setting ) {
			return $class;
		}

		return $class . ' page-cover--' . esc_attr( $setting );
	}

	/**
	 * Make WordPress aware of custom meta keys.
	 *
	 * This is for use with WordPress's various APIs as well as the custom post fields box.
	 *
	 * @since 1.6.0
	 */
	public function register_meta() {
		register_meta(
			'post',
			'enable_tertiary_navigation',
			array(
				'sanitize_callback' => 'absint',
				'type'              => 'integer',
			)
		);

		register_meta(
			'post',
			'hero_style',
			array(
				'sanitize_callback' => 'esc_attr',
				'type'              => 'string',
			)
		);

		register_meta(
			'post',
			'video_url',
			array(
				'sanitize_callback' => 'esc_url',
				'type'              => 'string',
			)
		);

		register_meta(
			'post',
			'header_height',
			array(
				'sanitize_callback' => 'esc_attr',
				'type'              => 'string',
			)
		);
	}

	/**
	 * Create a UI for the page settings.
	 *
	 * @since 1.0.0.3
	 */
	public function add_meta_box() {
		add_meta_box( 'listify-settings', __( 'Page Settings', 'listify' ), array( $this, 'meta_box_settings' ), 'page', 'side' );
	}

	/**
	 * Output the metabox content
	 *
	 * @since 1.0.0.3
	 */
	public function meta_box_settings() {
		$post = get_post();

		$tertiary      = $post->enable_tertiary_navigation;
		$hero          = $post->hero_style ? $post->hero_style : 'image';
		$video_url     = $post->video_url;
		$header_height = $post->header_height;

		$blacklist = array(
			get_option( 'page_for_posts' ),
			get_option( 'page_on_front' ),
			get_option( 'woocommerce_shop_page_id' ),
			get_option( 'job_manager_jobs_page_id' ),
		);

		if (
			! in_array( $post->ID, $blacklist, true ) &&
			'page-templates/template-archive-job_listing.php' !== $post->_wp_page_template
		) : ?>

<p>
<strong><?php esc_html_e( 'Header Height', 'listify' ); ?></strong>
</p>

<p>
<label for="header_height" class="screen-reader-text"><?php esc_html_e( 'Header Height', 'listify' ); ?></label>
<select name="header_height">
<option value="default" <?php selected( 'default', $header_height ); ?>><?php esc_html_e( 'Default', 'listify' ); ?></option>
<option value="large" <?php selected( 'large', $header_height ); ?>><?php esc_html_e( 'Large', 'listify' ); ?></option>
<option value="extra-large" <?php selected( 'extra-large', $header_height ); ?>><?php esc_html_e( 'Extra Large', 'listify' ); ?></option>
</select>
</p>

<?php endif; ?>

<p>
	<label for="enable_tertiary_navigation">
		<input type="checkbox" name="enable_tertiary_navigation" id="enable_tertiary_navigation" value="1" <?php checked( 1, $tertiary ); ?>>
		<?php esc_html_e( 'Show tertiary navigation bar', 'listify' ); ?>
	</label>
</p>

<p class="homepage-hero-style"><strong><?php esc_html_e( 'Hero Style', 'listify' ); ?></strong></p>

<p class="homepage-hero-style">
	<label for="hero-style-none">
		<input type="radio" name="hero_style" id="hero-style-none" value="none" <?php checked( 'none', $hero ); ?>>
		<?php esc_html_e( 'None', 'listify' ); ?>
	</label><br />

	<label for="hero-style-image">
		<input type="radio" name="hero_style" id="hero-style-image" value="image" <?php checked( 'image', $hero ); ?>>
		<?php esc_html_e( 'Featured Image', 'listify' ); ?>
	</label><br />

	<label for="hero-style-video">
		<input type="radio" name="hero_style" id="hero-style-video" value="video" <?php checked( 'video', $hero ); ?>>
		<?php esc_html_e( 'Video', 'listify' ); ?>
	</label><br />

	<label for="hero-style-map">
		<input type="radio" name="hero_style" id="hero-style-map" value="map" <?php checked( 'map', $hero ); ?>>
		<?php esc_html_e( 'Map', 'listify' ); ?>
	</label>
</p>

		<script>
		jQuery(document).ready(function($) {
			setTimeout(function(){

				var home = 'page-templates/template-home.php';
				var toHide = $( '.homepage-hero-style' );
				var templateVal = $( '.editor-page-attributes__template .components-select-control__input option:selected' ).val();
				var valSelector = $( '.editor-page-attributes__template .components-select-control__input' );

				if ( typeof templateVal === 'undefined' ) {
					templateVal = $( '#page_template option:selected' ).val();
					valSelector = $( '#page_template' );
				}

				valSelector.on( 'change', function() {

					if ( this.value != home ) {
						toHide.hide();
					} else {
						toHide.show();
					}
				});

				if ( templateVal != home ) {
					toHide.hide();
				}

			}, 1000);
		});
		</script>

		<?php
	}

	/**
	 * Save settings.
	 *
	 * @since 1.0.0.3
	 *
	 * @param int $post_id Current post ID.
	 */
	public function save_post( $post_id ) {
		global $post;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! is_object( $post ) ) {
			return;
		}

		if ( 'page' !== $post->post_type ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post->ID ) ) {
			return;
		}

		$tertiary = isset( $_POST['enable_tertiary_navigation'] ) ? 1 : 0;
		$hero     = isset( $_POST['hero_style'] ) ? esc_attr( $_POST['hero_style'] ) : '';
		$header   = isset( $_POST['header_height'] ) ? esc_attr( $_POST['header_height'] ) : 'default';

		update_post_meta( $post->ID, 'enable_tertiary_navigation', $tertiary );
		update_post_meta( $post->ID, 'hero_style', $hero );
		update_post_meta( $post->ID, 'header_height', $header );
	}

}

new Listify_Page_Settings();
