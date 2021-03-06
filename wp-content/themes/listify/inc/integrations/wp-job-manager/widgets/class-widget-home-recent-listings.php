<?php
/**
 * Home: Recent Listings
 *
 * @since Listify 1.0.0
 */
class Listify_Widget_Recent_Listings extends Listify_Widget {

	public function __construct() {
		$this->widget_description = __( 'Display a grid of recent or featured listings', 'listify' );
		$this->widget_id          = 'listify_widget_recent_listings';
		$this->widget_name        = __( 'Listify - Page: Listings', 'listify' );
		$settings                 = array(
			'title'       => array(
				'type'  => 'text',
				'std'   => 'Listings',
				'label' => __( 'Title:', 'listify' ),
			),
			'description' => array(
				'type'  => 'text',
				'std'   => 'Discover some of our best listings',
				'label' => __( 'Description:', 'listify' ),
			),
			'featured'    => array(
				'type'  => 'checkbox',
				'std'   => 0,
				'label' => __( 'Show only featured listings', 'listify' ),
			),
			'sort'        => array(
				'type'    => 'select',
				'std'     => 'date-desc',
				'label'   => __( 'Sort listings:', 'listify' ),
				'options' => listify_get_sort_options(),
			),
			'categories'  => array(
				'label'   => __( 'Show listings in these categories:', 'listify' ),
				'type'    => 'multiselect-term',
				'std'     => '',
				'options' => 'job_listing_category',
			),
			'regions'     => array(
				'label'   => __( 'Show listings in these regions:', 'listify' ),
				'type'    => 'multiselect-term',
				'std'     => '',
				'options' => 'job_listing_region',
			),
			'labels'     => array(
				'label'   => __( 'Show listings with these labels:', 'listify' ),
				'type'    => 'multiselect-term',
				'std'     => '',
				'options' => 'job_listing_tag',
			),
			'types'       => array(
				'label'   => __( 'Show listings in these types:', 'listify' ),
				'type'    => 'multiselect-term',
				'std'     => '',
				'options' => 'job_listing_type',
				'value'   => 'slug',
			),
			'keywords'    => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Search Keywords:', 'listify' ),
			),
			'ids'         => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Listing IDs:', 'listify' ),
			),
			'limit'       => array(
				'type'  => 'number',
				'std'   => 3,
				'min'   => 3,
				'max'   => 30,
				'step'  => 3,
				'label' => __( 'Number to show:', 'listify' ),
			),
			'columns'     => array(
				'type'    => 'select',
				'std'     => '3',
				'label'   => __( 'Display Columns:', 'listify' ),
				'options' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
				),
			),
		);

		// Remove Regions options if not active.
		if ( ! listify_has_integration( 'wp-job-manager-regions' ) ) {
			unset( $settings['regions'] );
		}

		// Remove Labels option if not active.
		if ( ! listify_has_integration( 'wp-job-manager-listing-labels' ) ) {
			unset( $settings['labels'] );
		}

		// Remove Type options if not active.
		if ( 'job_listing_category' == listify_get_top_level_taxonomy() ) {
			unset( $settings['types'] );
		}

		$this->settings = $settings;

		parent::__construct();
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title             = apply_filters( 'widget_title', isset( $instance['title'] ) ? $instance['title'] : '', $instance, $this->id_base );
		$description       = isset( $instance['description'] ) ? esc_attr( $instance['description'] ) : false;
		$featured          = isset( $instance['featured'] ) && '1' === $instance['featured'] ? true : null;
		$sort_default      = isset( $instance['random'] ) && '1' === $instance['random'] ? 'rand' : 'date-desc'; // Back compat.
		$this->sort_option = isset( $instance['sort'] ) && array_key_exists( $instance['sort'], listify_get_sort_options() ) ? $instance['sort'] : $sort_default;
		$limit             = isset( $instance['limit'] ) ? absint( $instance['limit'] ) : 3;
		$categories        = isset( $instance['categories'] ) ? maybe_unserialize( $instance['categories'] ) : false;
		$types             = isset( $instance['types'] ) ? maybe_unserialize( $instance['types'] ) : false;
		$keywords          = isset( $instance['keywords'] ) ? esc_attr( $instance['keywords'] ) : '';
		$ids               = isset( $instance['ids'] ) ? array_filter( wp_parse_id_list( $instance['ids'] ) ) : '';
		$this->regions     = isset( $instance['regions'] ) ? maybe_unserialize( $instance['regions'] ) : false;
		$this->labels      = isset( $instance['labels'] ) ? maybe_unserialize( $instance['labels'] ) : false;
		$columns           = isset( $instance['columns'] ) ? absint( $instance['columns'] ) : 3;

		if ( $description && strpos( $after_title, '</div>' ) ) {
			$after_title = str_replace( '</div>', '', $after_title ) . '<p class="home-widget-description">' . $description . '</p></div>';
		}

		if ( 'job_listing_category' == listify_get_top_level_taxonomy() ) {
			$types = false;
		}

		if ( $ids ) {
			$listing_args = array(
				'posts_per_page' => -1,
				'post__in'       => $ids,
				'order'          => 'ASC',
				'orderby'        => 'post__in',
			);
			$listings     = listify_get_listings(
				array(
					'anchor'     => '#' . $this->id . ' ul.job_listings',
					'query_args' => $listing_args,
					'columns'    => $columns,
				)
			);
		} else {
			$listing_args = array(
				'posts_per_page'         => $limit,
				'featured'               => $featured,
				'no_found_rows'          => true,
				'update_post_term_cache' => false,
				'orderby'                => array(
					'menu_order' => 'ASC',
					'date'       => 'DESC',
				),
				'order'                  => 'DESC',
				'search_categories'      => $categories,
				'search_keywords'        => $keywords,
				'job_types'              => $types,
			);

			// Get listings.
			add_filter( 'job_manager_get_listings', array( $this, 'get_listings_query' ), 10, 2 );
			$listings = listify_get_listings(
				array(
					'anchor'     => '#' . $this->id . ' ul.job_listings',
					'query_args' => $listing_args,
					'columns'    => $columns,
				)
			);
			remove_filter( 'job_manager_get_listings', array( $this, 'get_listings_query' ), 10, 2 );
		}

		if ( ! $listings ) {
			return;
		}

		ob_start();

		echo $before_widget; // WPCS: XSS ok.

		if ( $title ) {
			echo $before_title . $title . $after_title; // WPCS: XSS ok.
		}

		echo '<div id="' . $this->id . '"><ul class="job_listings"></ul></div>'; // WPCS: XSS ok.

		echo $after_widget; // WPCS: XSS ok.

		wp_reset_postdata();

		echo apply_filters( $this->widget_id, ob_get_clean() ); // WPCS: XSS ok.
	}

	/**
	 * Filter Job Query Based on Selected Sort Option and other queries.
	 *
	 * @since 2.1.0
	 *
	 * @param array $query_args WP_Query Args.
	 * @param array $args       Get Job Listing Args.
	 * @return array WP_Query Args.
	 */
	public function get_listings_query( $query_args, $args ) {
		// Query by sort options.
		$query_args = listify_sort_listings_query( $query_args, $this->sort_option );

		// Query by regions.
		if ( listify_has_integration( 'wp-job-manager-regions' ) && is_array( $this->regions ) ) {
			$operator = 'all' === get_option( 'job_manager_category_filter_type', 'all' ) && count( $this->regions ) > 1 ? 'AND' : 'IN';
			$query_args['tax_query'][] = array(
				'taxonomy' => 'job_listing_region',
				'field'    => 'term_id',
				'terms'    => $this->regions,
				'operator' => $operator,
			);
		}

		// Query by labels.
		if ( listify_has_integration( 'wp-job-manager-listing-labels' ) && is_array( $this->labels ) ) {
			$operator = 'all' === get_option( 'job_manager_category_filter_type', 'all' ) && count( $this->labels ) > 1 ? 'AND' : 'IN';
			$query_args['tax_query'][] = array(
				'taxonomy' => 'job_listing_tag',
				'field'    => 'term_id',
				'terms'    => $this->labels,
				'operator' => $operator,
			);
		}

		return $query_args;
	}

}
