(function($) {
	'use strict';

	var listifyFacetWP = {
		cache: {
			$document: $(document),
			$window: $(window),
			$body: $( 'body' ),
		},

		init: function() {
			this.bindEvents();
		},

		bindEvents: function() {
			var self = this;

			$(function() {
				self.sorting();
				self.moreFilters();
			});
		},

		sorting: function() {
			var self = this;

			this.cache.$document.on( 'facetwp-loaded facetwp-refresh', function() {
				$( '.facetwp-sort-select' ).wrap( '<span class="select"></span>' );
			});
		},

		moreFilters: function() {
			this.cache.$document.on( 'click', '.js-toggle-more-filters', function() {
				var hideText = $(this).data( 'label-hide' );
				var showText = $(this).data( 'label-show' );

				var $button = $(this);
				var $filters = $( '.more-filters__filters' );

				$filters.slideToggle( 'fast', function() {
					$button.text( $filters.is( ':visible' ) ? hideText : showText );
				}	);
			});
		}
	};

	listifyFacetWP.init();

	listifyFacetWP.cache.$document.on( 'facetwp-loaded', function() {
		if ( ! listifyFacetWP.cache.$body.hasClass( 'job-manager-archive' ) ) {
			return;
		}

		$( 'html, body' ).animate( {
			scrollTop: 0
		}, 500 );
	} );

})(jQuery);
