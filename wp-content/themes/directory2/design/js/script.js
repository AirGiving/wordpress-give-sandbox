/*
 * AIT WordPress Theme
 *
 * Copyright (c) 2012, Affinity Information Technology, s.r.o. (http://ait-themes.com)
 */
var burgerMenuData = [{selectors: ['.header-container'], reservedSelectors: ['li.menu-item-wrapper']}, {selectors: ['.sticky-menu .grid-main'], reservedSelectors: ['li.menu-item-wrapper', '.sticky-menu .site-logo']}];

/* Main Initialization Hook */
jQuery(document).ready(function(){
	window.isFirstLoad640 = isResponsive(640);

	gm_authFailure = function(){
		var apiBanner = document.createElement('div');
		var a = document.createElement('a');
		var linkText = document.createTextNode("Read more");
		a.appendChild(linkText);
		a.title = "Read more";
		a.href = "https://www.ait-themes.club/knowledge-base/google-maps-api-error/";
		a.target = "_blank";

		apiBanner.className = "alert alert-info";
		var bannerText = document.createTextNode("Please check Google API key settings");
		apiBanner.appendChild(bannerText);
		apiBanner.appendChild(document.createElement('br'));
		apiBanner.appendChild(a);

		jQuery(".google-map-container").html(apiBanner);
	};

	/* menu.js initialization */
	desktopMenu();
	responsiveMenu();
	relocateMenuTools();

	setTimeout(() => {
		prepareBurgerMenus(burgerMenuData, function() {
			burgerMenus(burgerMenuData)
		});
	}, isFirstLoad640 ? '0' : 1000);

	/* menu.js initialization */

	/* portfolio-item.js initialization */
	portfolioSingleToggles();
	/* portfolio-item.js initialization */

	/* custom.js initialization */
	touchFriendlyHover();

	enableResponsiveToggleAreas(true);

	renameUiClasses();
	removeUnwantedClasses();

	initWPGallery();
	initColorbox();
	initRatings();
	initInfieldLabels();
	initSelectBox();

	notificationClose();
	/* custom.js initialization */

	/* Theme Dependent Functions */
	// telAnchorMobile();
	headerLayoutSize();

	jQuery(document).on("toggle-search-top", function(e) {
		setTimeout(function() {
			var $el = jQuery(".header-search-wrap").parent();
			if (isScrolledIntoView($el[0])) return;
			jQuery("html, body").animate({ scrollTop: $el.offset().top}, 300);
		}, 100);
	});

	/* Theme Dependent Functions */
});
/* Main Initialization Hook */

jQuery(window).load(function(){
	//prepareFitMenu();
	//fitMenu();
	updateSelectboxesOnWoocommerce();
});

/* Window Resize Hook */
jQuery(window).resize(function(){
	headerLayoutSize();
	relocateMenuTools();

	burgerMenus(burgerMenuData);
	//fitMenu();
});
/* Window Resize Hook */

/* Theme Dependenent Functions */


function getLatLngFromAddress(address){
	var geocoder = new google.maps.Geocoder();
	geocoder.geocode({'address': address}, function(results, status){
		console.log(status);
		console.log(results[0].geometry.location);
		return results[0].geometry.location;
	});

}

// function telAnchorMobile(){
// 	if (isUserAgent('mobile')) {
// 		jQuery("a.phone").each(function() {
// 			this.href = this.href.replace(/^callto/, "tel");
// 		});
// 	}
// }

function headerLayoutSize(){
	// check for search form version
	if(jQuery('body').hasClass('search-form-type-3')){
		var $container = jQuery('.header-layout');
		var $elementWrap = $container.find('.header-element-wrap');
		var $searchWrap = $container.find('.header-search-wrap');

		if($searchWrap.height() > $elementWrap.height()){
			$container.addClass('search-collapsed');
		} else {
			$container.removeClass('search-collapsed');
		}
	}
}

function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;

    return (elemTop >= 0) && (elemBottom <= window.innerHeight);
}

function updateSelectboxesOnWoocommerce(){

	jQuery('.woocommerce.widget_product_categories select').selectbox('detach');

}
/* Theme Dependenent Function */
