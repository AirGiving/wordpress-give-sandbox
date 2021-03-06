<?php
/**
 * Package Selection.
 * Shows packages selection to purchase.
 *
 * @version 2.2.0
 * @since 2.2.0
 *
 * @var array $packages      WC Products for Listing Payments/WP Post for Paid Listing.
 * @var array $user_packages User Packages.
 *
 * @package Listing Payments
 * @category Template
 * @author Astoundify
 */

if ( ! ( $packages || $user_packages ) ) {
	esc_html_e( 'No packages found', 'listify' );
	return;
}

$get_package = isset( $_GET['selected_package'] ) ? intval( $_GET['selected_package'] ) : 0;
$selected    = isset( $_POST['job_package'] ) ? esc_attr( $_POST['job_package'] ) : false;
$checked     = 1; ?>

<ul class="job_packages">

	<?php
	if ( $user_packages ) {
		$checked = $get_package ? 0 : 1; // Get package do not target user package. ?>

		<li class="package-section"><?php esc_html_e( 'Your Packages:', 'listify' ); ?></li>

		<?php
		foreach ( $user_packages as $key => $package ) {
			if ( listify_has_integration( 'wp-job-manager-listing-payments' ) ) {
				$package = astoundify_wpjmlp_get_package( $package );
			} else {
				$package = wc_paid_listings_get_package( $package );
			} ?>

			<li class="user-job-package">
				<input type="radio" <?php checked( esc_attr( $selected ), esc_attr( 'user-' . $key ) ); ?> name="job_package" value="user-<?php echo esc_attr( $key ); ?>" id="user-package-<?php echo esc_attr( $package->get_id() ); ?>" />
				<label for="user-package-<?php echo esc_attr( $package->get_id() ); ?>"><?php echo esc_html( $package->get_title() ); ?></label><br/>
				<?php
				if ( $package->get_limit() ) {
					printf( _n( '%1$s listing posted out of %2$d', '%1$s listings posted out of %2$d', $package->get_count(), 'listify' ), $package->get_count(), $package->get_limit() );
				} else {
					printf( _n( '%s listing posted', '%s listings posted', $package->get_count(), 'listify' ), $package->get_count() );
				}

				if ( $package->get_duration() ) {
					printf( ', ' . _n( 'listed for %s day', 'listed for %s days', $package->get_duration(), 'listify' ), $package->get_duration() );
				}

				$checked = 0; ?>
			</li>

		<?php }

		if ( $packages ) { // Section separation.
			$checked = $get_package ? $get_package : $checked; ?>
			<li class="package-section"><?php _e( 'Purchase Package:', 'listify' ); ?></li>
		<?php }

	} else { // Hide submit button, use button in the pricing table. ?>
		<style>
			.job_listing_packages_title input[type="submit"] {
				display: none !important;
			}
		</style>
	<?php } // End User Package. ?>

</ul>

<?php
if ( $packages ) {
	$stacked = apply_filters( 'listify_submit_listing_packages_stacked', false );
	$count   = count( $packages ) > 3 ? 3 : count( $packages ); ?>

	<ul class="job-packages <?php echo esc_attr( $stacked ? 'job-packages--stacked' : ( 'job-packages--inline job-packages--count-' . $count ) ); ?>">

		<?php foreach ( $packages as $package ) {
			// Get Product from WC Product/WP Post object by checking if WC method exists.
			$product    = wc_get_product( method_exists( $package, 'get_id' ) ? $package : $package->ID );
			$tags       = wc_get_product_tag_list( $product->get_id() );
			$action_url = add_query_arg( 'choose_package', $product->get_id(), job_manager_get_permalink( 'submit_job_form' ) ); ?>

			<li class="job-package <?php echo esc_attr( $stacked ? 'job-package--stacked' : null ); ?>">

				<?php if ( $tags ) { ?>
					<span class="job-package-tag <?php echo esc_attr( $stacked ? 'job-package-tag--stacked' : null ); ?>">
						<span class="job-package-tag__text"><?php echo esc_attr( strip_tags( $tags ) ); ?></span>
					</span>
				<?php } ?>

				<div class="job-package-header <?php echo esc_attr( $stacked ? 'job-package-header--stacked' : null ); ?>">

					<div class="job-package-title <?php echo esc_attr( $stacked ? 'job-package-title--stacked' : null ); ?>">
						<?php echo esc_attr( $product->get_title() ); ?>
					</div>

					<div class="job-package-price <?php echo esc_attr( $stacked ? 'job-package-price--stacked' : null ); ?>">
						<?php echo $product->get_price_html(); // WPCS: XSS ok. ?>
					</div>

					<div class="job-package-purchase <?php echo esc_attr( $stacked ? 'job-package-purchase--stacked' : null ); ?>">
						<button class="button" type="submit" name="job_package" value="<?php echo esc_attr( $product->get_id() ); ?>"><?php esc_html_e( 'Get Started Now &rarr;', 'listify' ); ?></button>
					</div>
				</div>

				<div class="job-package-includes <?php echo esc_attr( $stacked ? 'job-package-includes---stacked' : null ); ?>">
					<?php
					$content = $product->get_description();
					$content = (array) explode( "\n", $content ); ?>
					<ul>
						<li><?php echo implode( '</li><li>', $content ); // WPCS: XSS ok. ?></li>
					</ul>
				</div>

				<div class="job-package-purchase <?php echo esc_attr( $stacked ? 'job-package-purchase--stacked' : null ); ?>">
					<button class="button" type="submit" name="job_package" value="<?php echo esc_attr( $product->get_id() ); ?>"><?php esc_html_e( 'Get Started Now &rarr;', 'listify' ); ?></button>
				</div>
			</li>

		<?php } ?>

	</ul><!-- .job-packages -->

<?php } ?>
