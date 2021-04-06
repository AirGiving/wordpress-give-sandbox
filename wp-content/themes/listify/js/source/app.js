(function($) {
	'use strict';

	var listify = {
		cache: {
			$document: $(document),
			$window: $(window),
			$body: $( 'body' ),
			firefox: navigator.userAgent.toLowerCase().indexOf( 'firefox' ) > -1
		},

		init: function() {
			this.bindEvents();
		},

		bindEvents: function() {
			var self = this;

			$(function() {
				self.initMenu();
				self.initPopups();
				self.initVideos();
				self.initTables();
				self.initForms();

				self.initSelects();

				self.cache.$document.on( 'facetwp-loaded facetwp-refresh update_results', function() {
					self.initSelects();
				});
			});
		},

		initMenu: function() {
			$( '.navigation-bar-toggle, .js-toggle-area-trigger' ).click(function(e) {
				e.preventDefault();

				$(this)
					.toggleClass( 'active' )
					.next()
					.toggleClass( 'active' );
			});

			$( '.current-account-avatar' ).click(function(e) {
				e.preventDefault();

				var url = $(this).data( 'href' );

				window.location = url;
			});

			// Mega Menu toggle should be clickable on mobile devices.
			if ( listifySettings.isMobile ) {
				$( '#categories-mega-menu' ).click(function(e) {
					e.preventDefault();

					$(this)
						.find( '.category-list' )
						.toggleClass( 'category-list--open' )
						.toggle( $( '.category-list' ).hasClass( 'category-list--open' ) );
				} );
			}
		},

		initPopups: function() {
			var self = this;

			self.cache.$document.on( 'click', '.popup-trigger-ajax', function(e) {
				e.preventDefault();

				var className = $(this).attr( 'class' );

				className = className.replace( 'popup-trigger-ajax', '' );
				className = className.replace( 'button', '' );

				self.triggerPopup({
					items: {
						src: $(this).attr( 'href' ),
						type: 'ajax'
					},
					ajax: {
						tError: listifySettings.l10n.magnific.tError
					},
					callbacks: {
						parseAjax: function(mfpResponse) {
							mfpResponse.data = '<div class="popup ' + className + '"><h2 class="popup-title">' + $(mfpResponse.data).find( '.page-title' ).text() + '</h2>' + $(mfpResponse.data).find('#main').html();
						},
						ajaxContentAdded: function() {
							$( 'body' ).trigger( 'popup-trigger-ajax' );
							self.initForms();
							self.initRecaptcha();
						}
					}
				});
			});

			self.cache.$document.on( 'click', '.popup-trigger', function(e) {
				e.preventDefault();

				var source = $(this).data( 'mfp-src' );

				if ( typeof source === 'undefined' ) {
					source = $(this).attr( 'href' );
				}

				self.triggerPopup({
					items: {
						src: source
					},
					callbacks: {
						open: function() {
							self.cache.$document.trigger( 'listifyInlinePopupOpen' );
							self.initForms();
						}
					}
				});
			});

			if ( listifySettings.loginPopupLink.length > 0 ) {
				self.cache.$document.on( 'click', listifySettings.loginPopupLink.join(), function(e) {
					e.preventDefault();
					self.triggerPopup({
						items: {
							src: '#listify-login-popup',
							type: 'inline',
						},
						tClose: listifySettings.l10n.magnific.tClose,
						tLoading: listifySettings.l10n.magnific.tLoading,
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'scroll',
					});
				});
			}
		},

		initRecaptcha: function() {
			$( '.g-recaptcha' ).each( function( index, element ) {
				if( $( this ).is( ':empty' ) ) {
					var site_key = $( this ).attr( 'data-sitekey' );
					var theme = $( this ).attr( 'data-theme' );
					var element  = $( this ).get( 0 );

					grecaptcha.render( element, { 'sitekey': site_key, 'theme': theme } );
				}
			});
		},

		triggerPopup: function(args) {
			$.magnificPopup.close();

			return $.magnificPopup.open( $.extend( args, {
				tClose: listifySettings.l10n.magnific.tClose,
				tLoading: listifySettings.l10n.magnific.tLoading,
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'scroll'
			} ) );
		},

		initSelects: function() {
			var avoid = [
				'.feedFormField',
				'.job-manager-category-dropdown[multiple]',
				'.job-manager-multiselect',
				'.job-manager-chosen-select',
				'.intl-tel-mobile-select',
				'.state_select',
				'.country_select',
				'.fieldset-job_region #job_region',
				'.facetwp-type-fselect select',
				'#pm-recipient',
				'.business-hour-timezone'
			];

			$( 'select' ).each(function() {
				if ( $(this).parent().hasClass( 'select' ) ) {
					return;
				}

				if ( $(this).is( avoid.join( ',' ) ) ) {
					return;
				}

				var existingClass = null;

				if ( $(this).attr( 'class' ) ) {
					var existingClass = $(this).attr( 'class' ).split(' ')[0];
				}

				$(this).wrap( '<span class="select ' + existingClass + '-wrapper"></span>' );
			});

			var $mobileMegaMenu = $( '#job_listing_tax_mobile select' );

			$mobileMegaMenu.change(function(e) {
				e.preventDefault();

				window.location.href = $mobileMegaMenu.find( 'option:selected' ).val();
			});
		},

		initVideos: function() {
			$( '.site-content' ).fitVids();
		},

		initTables: function() {
			// $( 'table' ).addClass( 'responsive' );
		},

		initForms: function() {
			this.cache.$document.on( 'submit', '.popup form.login, .popup form.register', function(e) {
				var form = $(this);
				var error = false;

				var base = $(this).serialize();
				var button = $(this).find( 'input[type=submit]' );

				var data = base + '&' + button.attr("name") + "=" + button.val();

				var request = $.ajax({
					url: listifySettings.homeurl,
					data: data,
					type: 'POST',
					cache: false,
					async: false
				}).done(function(response) {
					form.find( $( '.woocommerce-error' ) ).remove();

					var $response = $( '#ajax-response' );
					var html = $.parseHTML(response);

					$response.append(html);
					error = $response.find( $( '.woocommerce-error' ) );

					if ( error.length > 0 ) {
						form.prepend( error.clone() );
						$response.html('');

						e.preventDefault();
					}
				});
			});
		}
	};

	listify.init();

})(jQuery);

(function($) {
	$('a[href="#wc-bookings-booking-form"]').on('click', function(event) {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top - 250
			}, 1000);
		}
	});

	$('a[href="#respond"]').on('click', function(event) {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top - 150
			}, 1000);
		}
	});
})(jQuery);

( function($) {
	var debounce = function (fn) {
		var timeout;
		return function () {
			var context = this;
			var args = arguments;
			if (timeout) {
				window.cancelAnimationFrame(timeout);
			}
			timeout = window.requestAnimationFrame(function () {
				fn.apply(context, args);
			});
		}
	};

	var mapMove = debounce( function() {
		var $mainListingSidebar = $('#main.site-main'),
			$rightListingSidebar = $('#secondary.widget-area'),
			$mapWidget = $('[id^=listify_widget_panel_listing_map]');

		if ( $( window ).width() < 575 ) {
			$rightListingSidebar.remove($mapWidget[0]);
			$mainListingSidebar.prepend($mapWidget[0]);
		} else {
			$rightListingSidebar.prepend($mapWidget[0]);
		}
	});

	mapMove();
	$(window).on( 'resize', function() {
		mapMove();
	});
})(jQuery);
