=== Listify ===
Contributors: Astoundify
Requires at least: WordPress 4.9.0
Tested up to: WordPress 5.2.1
Version: 2.13.4
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Tags: white, two-columns, one-column, right-sidebar, left-sidebar, responsive-layout, custom-background, custom-header, theme-options, full-width-template, featured-images, flexible-header, custom-menu, translation-ready

== Copyright ==

Listify Theme, Copyright 2014-2017 Astoundify - Listify is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

The Listify theme bundles the following third-party resources:

Bootstrap v3.0.3
Copyright 2013 Twitter, Inc
Licensed under the Apache License v2.0
http://www.apache.org/licenses/LICENSE-2.0

Slick.js v1.5.7, Copyright 2015 Ken Wheeler
Licenses: MIT/GPL2
Source: https://github.com/kenwheeler/slick/

salvattore.js Copyright (c) 2013-2015 Rolando Murillo and Giorgio Leveroni
License: MIT/GPL2
Source: https://github.com/rnmp/salvattore/

Magnific-Popup Copyright (c) 2014-2015 Dmitry Semenov, http://dimsemenov.com
Licenses: MIT
Source: https://github.com/dimsemenov/Magnific-Popup

Ionicons icon font, Copyright (c) 2014 Drifty (http://drifty.com/)
License: MIT
Source: https://github.com/driftyco/ionicons

== Changelog ==

To ensure there is no downtime or incompatibles with your website you should always install theme updates on a staging server first. This will allow you to make the necessary adjustments and then migrate them to a production website.

= 2.13.4: October 19, 2020 =

* New: WP Job Manager 1.34.3 compatibility.
* New: WooCommerce 3.6.0 compatibility.
* New: Wordpress 5.5.1 compatibility.
* New: PHP 7.4.1 compatibility. 
* New: MariaDB 10.4.10 compatibility.
* Update: Mapbox library to latest version 3.3.1.
* Update: Bootstrap grid  library to latest version 4.5.0.

= 2.13.3: October 8, 2020 =
* Fix: Duplicate map and contact widget issue fix.

= 2.13.2:  September 28, 2020 =

* Add: Captions added on photos are display on frontend in "Listing: Photo Gallery" Widgets.
* Update: Author contact popup style to fixed on scroll.
* Fix: Listing: Author contact email popup content display issue.
* Fix: PHP warnings on search category when query not passed as an array.

= 2.13.1:  July 7, 2020 =

* Compatibility with Elementify

= 2.13.0:  April 9, 2020 =

* Update: Updated markup and styling of the package selection page.
* Update: Listing: Map & Contact Details Mobile device enhancement.
* Fix: Listings Page Loading issue.
* Fix: Specific Location filter bug fixes.

= 2.12.1:  October 5, 2019 =

* Fix: A Fatal error in the Tertiary menu, only when WooCoomerce was not active.

= 2.12.0:  October 1, 2019 =

* Update: Compatibility with the next version of WP Job Manager 1.34.0 (beta).
* Update: Checked Compatibility with WooCommerce 3.7.0.
* Add: A tooltip on the Review submission form to inform the user when he tries to submit a zero star rating.
* Add: Option to filter listings by label in the Listings Widget.
* Add: Option to edit the "View more" link and label in the "Page: Recent Posts" widget.
* Add: A new Product style in the WooCommerce Product List widget.
* Add: New options in the Page: Recent Posts widget, to filter posts by post IDs and category IDs.
* Fix: A better anchor jump for the Reviews and Bookings submission.
* Fix: Add Polylang translation support for widgets options and Customizer options.
* Fix: The bottom arrow for the sub-items in the Tertiary Menu.
* Fix: Avoid adding backslashes to the keyword field, while searching listings.
* Fix: Facet WP Location filter Icon on RTL has a better position.
* Fix: A PHP warning when the Bookings widget was used without the WP Job Manager Products plugin.
* Fix: A PHP warning, which was appearing when the cached listings filtered by location was not initialized yet.
* Fix: Remove usage of WooCommerce Social Login instance deprecated in 1.6.0.
* Fix: Remove usage of WooCommerce deprecated function used to fetch terms.

= 2.11.0: May 25, 2019 =

Sorry for the recent lack of updates, we will resume regular updates from now on and also start introducing up to date features.

* New: WooCommerce 3.6.3 support.
* Fix: Ensure that home page settings meta boxes are compatible with Gutenberg.
* Fix: Ensure that hours of operation time zone drop-down inside of the editor displays correctly.
* Fix: Update support link inside of Listify setup guide.
* Fix: Correct login button position on sign in / register windows.
* Fix: Removed Social Login from the recommended plugins until plugin is updated.
* Fix: Correct Breadcrumbs PHP Notice warning on some installs.
* Fix: Update content importer as it was crashing due to lack of vendor classes.
* Fix: Update HelpSout beacon JS inside of getting started guide.
* Fix: Update screenshot size inside of getting started guide.
* Fix: Add SVG loading spinner on results pages.
* Fix: Ensure Console Notice Google Maps API Warning is removed.
* Fix: Update related listings widget to that its settings are saved.
* Fix: Ensure map icons aren't cut off on some browser types.

= 2.10.1: January 29, 2019 =

* Fix: More WP Job Manager support.

= 2.10.0: January 23, 2019 =

* New: WP Job Manager 1.32.0 support.

= 2.9.1: November 6, 2018 =

* Fix: Sync version numbers.

= 2.9.0: November 2, 2018 =

* New: WooCommerce 3.5 support.
* Fix: Mapbox on single listing pages.
* Fix: Ensure marker title does not overlap on Mapbox infobubbles.
* Fix: Respect Listing Payments `choose_package` automatic redirect.
* Fix: Do not include current listing in "Related Listings" widget.
* Fix: Attachment linking in "Gallery Slider" widget.
* Fix: Ensure "Related Listings" widget is available when categories are disabled.
* Fix: Ensure all widgetized pages appear when using Polylang.
* Fix: Ensure "Call to Action" widget colors apply.
* Fix: hatom `updated` tag.
* Fix: Enable "Autofit" option for Google Maps and avoid zooming errors.
* Fix: Ensure Listing Types can be saved on the "Listings" widget.

= 2.8.2: August 30, 2018 =

* Fix: Ensure secondary dropdown menus are visible on large devices.

= 2.8.1: August 28, 2018 =

* Fix: Update to Google Maps 3.33 to reduce control size.
* Fix: Zoom controls on single listing map reversed.
* Fix: Ensure the CTA widget spans full width.
* Fix: Tertiary navigation background.

= 2.8.0: August 23, 2018 =

* New: Support FacetWP "Advanced" mode by default.
* New: Better RTL support.
* Fix: Blog post alignment.
* Fix: Margins before/after feature callout widgets.
* Fix: Header, navigation, and search bar improvements in Bootstrap 4.
* Fix: Hidden quantity field in WooCommerce shop.
* Fix: WooCommerce column layouts.

= 2.7.0: August 15, 2018 =

* New: Upgrade to Bootstrap 4.1 grid framework.
* New: Cache geolocation search results.
* New: Add `listify_sort_listings_query_args` filter.
* New: Add `listify_map_service_settings` filter.
* Fix: Use mapbox.js to create clearer Mapbox maps. See http://listify.astoundify.com/article/1070-creating-a-mapbox-tileset to update settings.
* Fix: Update gallery previous/next direction.
* Fix: Do not output "Favorite" link on preview.
* Fix: Ensure Autofit is available when using Mapbox.
* Fix: Allow page-level widgets to appear in Beaver Builder.
* Fix: When using WordPress SEO respect the media redirect setting.
* Fix: Remove minimum count on a few widgets.
* Fix: Ensure Products plugin exists before outputting imported items.
* Fix: Use base language for generating widgetized pages in Polylang.
* Fix: Avoid PHP error when Products plugin is not active.
* Fix: Correct "results found" string in FacetWP.
* Fix: Ensure expired listings can still be queried in search results.

= 2.6.0: May 1, 2018 =

* New: WP Job Manager 1.31.0 compatibility.
* New: WooCommerce 3.4.0 compatibility.
* New: Use same package-selection UI when claiming a listing.
* New: Recenter Google Maps when viewing single listing mini map in fullscreen mode.
* New: Output breadcrumbs, sorting options, and stock notes in WooCommerce.
* New: Choose to filter specific Listing Types in the Listing widget.
* Fix: Add an .entry-title class to the single blog post title.
* Fix: Wrap commenet author name in a .vcard class.
* Fix: Update WP Job Manager string overrides.
* Fix: More FacetWP category archive compatibility.

= 2.5.0: April 9, 2018 =

* New: Update cart count when adding an item to the cart.
* New: Add listify_is_job_manager_archive_tax filter.
* New: Add listify_the_listing_secondary_image_args filter.
* New: Add enhanced dropdown to timezone selector when submitting a listing.
* New: Match FacetWP's result_count text to match default filters.
* New: Allow listify_comment() to be overriden.
* New: RTL support for listing breadcrumbs.
* Fix: Ensure proper results are returned when visiting a listing archive directly with FacetWP enabled.
* Fix: Tweak block hcard markup.
* Fix: Update styles for noUi-slider.
* Fix: Use localized settings for timepicker.
* Fix: Ensure default map view remains when switching tabs on mobile.
* Fix: Avoid PHP error in outputting star counts.
* Fix: Avoid PHP error when an orphaned product is attached to a listing.
* Fix: Remove facetwp_template_use_archive filter override.

= 2.4.7: March 14, 2018 =

* New: Further WooCommere 3.3.0 improvements.
* New: Display more helpful result counts on listing page. 47 Results Found (Showing 1-25)
* New: Enhanced timezone select for business hours timezone.
* Fix: Only use parallax scrolling on large devices.
* Fix: Update blog author card microdata.
* Fix: Do not show bookable product booking form on listing preview.
* Fix: Update blog author microdata.

= 2.4.6: February 21, 2018 =

* Fix: Use same rounding on listing card and listing page.
* Fix: Always recalculate listing ratings when a new review is added.
* Fix: Company logo RTL support.
* Fix: OpenTable booking iFrame.
* Fix: Add microdata back to listing breadcrumbs.
* Fix: Remove limit on author recent listings widget.
* Fix: Fill all location fields during autolocation.
* Fix: Disable autopan on mobile devices.
* Fix: select2 max-height when no options are available.
* Fix: Do not show irrelevant listings on Related Listings widget.
* Fix: Company logo overflow on Safari.

= 2.4.5: January 22, 2017 =

* New: WooCommerce 3.3.0 compatibility.
* Fix: Ensure marker clustering works with FacetWP.
* Fix: Avoid marker overlaying on each other in Safari.
* Fix: Use the same layout for blog index, archives, and search.
* Fix: More consistent appearance for secondary images on listing page.
* Fix: Ensure Register link shows below WooCommerce login form.
* Fix: Ensure image grid widget can show image for all taxonomy types.

= 2.4.4: December 28, 2017 =

* Fix: Update jQuery deprecated .isResolved() function.
* Fix: Ensure Image Grid widget only picks images from active listings.
* Fix: Logo markup for JSON-LD.
* Fix: Avoid using login popup on irrelevant links.
* Fix: Do not escape HTML in Feature Callout widget.
* Fix: Adjust logic for outputting the seconday image upload on submission form depending on customizer settings.

= 2.4.3: December 7, 2017 =

* Fix: Allow HTML in Features widget description.

= 2.4.2: December 5, 2017 =

* Fix: WordPress coding standards.
* Fix: Open/Close date calculation edge-cases.
* Fix: Polylang support for homepage search filters.
* Fix: Always bump asset file versions.
* Fix: Ensure timepicker library is enqueued in admin.
* Fix: Automatic ThemeForest updater PHP error.

= 2.4.1: October 30, 2017 =

* Fix: Avoid loading FacetWP assets when not needed.
* Fix: Ensure WooCommerce Social Login appears when needed.
* Fix: Ensure Reset link resets region and sorting.

= 2.4.0: October 25, 2017 =

* New: Choose how many columns to display Listing Cards in. Visit Appearance > Customize > Search Page.
* New: Choose how many columns to display Listing Cards in individual widgets. Visit Appearance > Widgets.
* New: Beaver Builder page template. Allow page to be designed with Beaver Builder modules (does not include any custom modules).
* New: Limit "Listings" widget to a specific region.
* New: Limit "Listings" widget to specific listings.
* New: Embed a listing using oEmbed on oEmebed-consuming websites.
* New: Separate "Autofit" setting to set a default loading center but still show all active pins.
* New: Private Message support on author archives.
* Fix: Listing gallery navigation on mobile.
* Fix: Properly reset location field when clicking "Reset" on filters.
* Fix: Page header height on blog and shop.
* Fix: Do not ouput gallery widget if there are no images and current user cannot upload.
* Fix: Do not show "Locate Me" option when map is hidden, using Mapbox, or site does not have SSL.
* Fix: FacetWP 3.x support and optimizations.
* Fix: Do not round ratings to whole numbers.
* Fix: FacetWP + Map Hero homepage appearance.
* Fix: Remove wordbreaks in iOS Safari.
* Fix: Correctly calculate open/close status for next-day business hours.

= 2.3.4: October 3, 2017 =

* Fix: Avoid PHP error in customizer when updating search filters.
* Fix: Listing author avatar size.
* Fix: Outline button style when choosing a package.
* Fix: Ensure "Region" can only be selected as a filter if plugin is still active.

= 2.3.3: September 21, 2017 =

* Fix: Best/Worst rating filter.
* Fix: Show listing as open when set to 24 hours.
* Fix: Secondary image overflow on single listing.
* Fix: Remove display restrictions on the Call to Action widget.
* Fix: Remove invalid ::selection CSS.

= 2.3.2: September 13, 2017 =

* Fix: Check for registration setting when overriding registration URL.
* Fix: Do not rely on javascript to set the default star rating.
* Fix: Force default to numbered pagination on [jobs] shortcode.
* Fix: Sign In button during submission when using "Outline" button style.
* Fix: Widget description output on widgetized pages.
* Fix: Update secondary image display for small/non-square images.

= 2.3.1: September 1, 2017 =

* Fix: Ensure homepage hero content is output.
* Fix: Improve map marker active pin trigger.
* Fix: Do not output an application button if no application method is available.

= 2.3.0: August 31, 2017 =

* New: Use popup login form for all login links.
* New: Private Message popup support for "Contact" button.
* New: Animate marker for listing card on hover.
* New: Show dropdown area on multiselect fields.
* New: Social profiles no longer require WooCommerce.
* Fix: "Search this Location" radius amount.
* Fix: Valid HTML for homepage widget descriptions.
* Fix: Show "No Results Found" with no results in FacetWP.
* Fix: Ensure no HTML is output in "Get Directions" form.
* Fix: "Sign In" link on WPJM sign in form.
* Fix: Lock Google Maps script to version 3.28.

= 2.2.2: August 15, 2017 =

* Fix: Checks for invalid time objects in Business hours.
* Fix: Update rating average when deleting a comment.
* Fix: Ensure "Avatar" is the default secondary image type.
* Fix: Check package ID on pricing template.
* Fix: Avoid outputting "0 Favorites" in OpenGraph tags.

= 2.2.1: August 14, 2017 =

* Fix: Page 2 results when using "Search This Location"
* Fix: Hide "Search This Location" when using Region filter.
* Fix: Listing Paymens 2.2.1 compatibility.
* Fix: Move Reviews widget title to top.
* Fix: Do not output comments widget when no comments exist.
* Fix: Ensure "Reset" and "RSS" links output when enabled.
* Fix: Use `jetpack_is_mobile()` when available.
* Fix: Do not show all favorites on author profile when no favorites exist.

= 2.2.0: August 8, 2017 =

* New: "Search this Location" button when browsing the results map.
* New: Better "No CAPTCHA reCAPTCHA for WooCommerce" support.
* New: Display rating stars on marker informational popup.
* New: Display open/close status on marker informational popup.
* New: Update initial submission package selection step to match Pricing page template.
* Fix: Show "Results Found" when using FacetWP.
* Fix: JSON-LD improvements.
* Fix: Ensure autosuggest returns only addresses.
* Fix: Ensure homepage hero map is not hidden on mobile.
* Fix: Allow Social Profiles widget to be added to author archive widget areas.
* Fix: Allow unsetting of default center coordinate in map settings.
* Fix: Reviews for WP Job Manager JSON-LD.
* Fix: Open/Close status when close time is the next day.

= 2.1.1: July 20, 2017 =

* Fix: Default center location on map.
* Fix: Remove sort by rating when using Reviews. Will be added when Reviews 2.0 is released.
* Fix: Use Chosen dropdown on category filter.
* Fix: Margin on location/region filter when multiple categories are enabled.
* Fix: Open/Close status when using 24 hour format.

= 2.1.0: July 19, 2017 =

* New: Listify now requires PHP version 5.3 or above. Please contact your web host if you need to upgrade.
* New: The "Business Hours" widget now shows if the business is closed or open.
* New: Additional settings for the "Page: Listings" widget.
* New: Add sorting options for results. Sort by date, rating, and more.
* New: Remove business names from location autocomplete suggestions.
* New: Add listify_get_google_maps_api_key() function for filterable API key options.
* New: Add Listify version number to page source.
* New: Allow Listing Labels to be used in the Image Grid widget.
* New: Attempt to validate the default center coordinate for map settings.
* New: More stable Content Importer.
* Fix: Favorite and review icon colors when no featured image is set on a single listing.
* Fix: Only display rating on map marker popup if enabled.
* Fix: Output social login buttons on all login forms.
* Fix: Gallery comments background color.
* Fix: Potential issue parsing video shortcode for the homepage.
* Fix: Ensure blog with no sidebar displays 3 columns of posts.
* Fix: Always show review count on single listing hero.
* Fix: Respect the default mobile view for the search page.
* Fix: "Filter by Region" dropdown arrow. Update to Regions 1.14.0
* Fix: Mega menu toggle on mobile devices.

= 2.0.5: June 30, 2017 =

* Fix: Ensure multiple "Recent Listing" widgets can be used on the same page.
* Fix: Add filter to JSON+LD data.
* Fix: Missing closing HTML tag on single blog posts.
* Fix: Minimum canvas height for listing map.
* Fix: Update address format for Brasil.
* Fix: Respect "Open in new window/tab" for listings.

= 2.0.4: June 29, 2017 =

* Fix: Ensure reviews do not try to divide by 0.
* Fix: Restore legacy WooCommerce filter for address formats.
* Fix: Ensure comments have an anchor for the page jump.
* Fix: Restore avatar functionality for WP User Avatar plugin.
* Fix: Ensure Reviews can be output on a single listing.
* Fix: Fix widget names (regression in 2.0.3)
* Fix: Resizing issues when viewing the map with a fixed header.

= 2.0.3: June 28, 2017 =

* Fix: Restrictions on "Page" widgets -- can appear on any page.
* Fix: Ensure Gravatar URL properly locates avatar.
* Fix: New "Parent ID" allows a setting of 0 to show only top level terms in Image Grid widget.
* Fix: Ensure FacetWP sorting options are output.
* Fix: Ensure map bounds are properly reset when updating search filters so all pins are visible.
* Fix: Ensure all listings are returned in proper proximity order under all circumustances.
* Fix: Avoid PHP error in listing card avatar.
* Fix: Recent listings widget can now be randomized to avoid having ot use the [jobs] shortcode.
* Fix: String updates for WP Job Manager 1.26+
* Fix: Ensure Listing Label icons can be set in the customizer.
* Fix: Ensure "Recent Listings" widget on author profile only includes current author.
* Fix: Ensure category dropdown on homepage uses "Chosen" dropdown when available.
* Fix: Avoid polluting the global query when using the Related Listings widget.
* Fix: Send short country format to address formatting function.
* Fix: Allow set categories to be chosen in the "Recent Listings" widget.

= 2.0.2: June 27, 2017 =

* Fix: Ensure "Locate Me" always appears on the homepage.
* Fix: Do not restrict "Listing Search" to homepage only.
* Fix: Ensure selected categories properly save in "Category Tabs" widget.
* Fix: Ensure "Category Tabs" widget is populated with all relevant listings.
* Fix: Ensure listing stars appear properly when no cover image is availble.
* Fix: Remove unneeded WooCommerce dependency for address formats.
* Fix: Avoid PHP error with JSON+LD data for items that are not listings.
* Fix: Do not automatically output Listing Labels in the listing description.
* Fix: Avoid division by 0 error for ratings.
* Fix: Ensure cover image filter is always run when searching for a featured image.

= 2.0.1: June 21, 2017 =

* Fix: Ensure "Author: Social" widget can appear during a submission preivew.
* Fix: Fallback to WP Job Manager Google Maps API key if available.

= 2.0.0: June 21, 2017 =

Version 2.0.0 marks **breaking** changes in the Listify codebase. Make a full site backup, update all of your plugins to the latest version, and review update best practices http://listify.astoundify.com/article/1071-upgrading-to-listify-2-0 before upgrading.

* New: Major code optimization, performance enhancements, and security updates.
* New: Support for Astoundify Favorites. https://astoundify.com/products/favorites
* New: Support for Listing Labels for WP Job Manager. https://astoundify.com/products/wp-job-manager-listing-labels/
* New: Support for Listing Payments for WP Job Manager. https://astoundify.com/products/wp-job-manager-listing-payments/
* New: Support Yoast SEO's "Primary Category".
* New: Use JSON-LD to manage context of content in Listify. https://developers.google.com/schemas/formats/json-ld
* New: Rewritten mapping for better performance.
* New: Use javascript-based templating for listing results.
* New: Option to use Mapbox instead of Google Maps to plot results.
* New: Rewrite built in listing ratings.
* New: Show a message when a widget is added to the incorrect location.
* New: Show login form when clicking "Add Photos" as a guest.
* New: Parallax style option for homepage hero.
* Fix: Private Messages style updates.
* Fix: Update list of available Google Fonts.
* Fix: RTL support for single listing hero gallery.
* Fix: Do not round ratings to nearest half until visual output.
* Deprecated: WP Job Manager Paid Listings support.
* Removed: WP Job Manager Tags support. Use https://astoundify.com/products/wp-job-manager-listing-labels/
* Removed: WP Job Manager Bookmarks support. Use https://astoundify.com/products/favorites/ -- replace shortcode with [astoundify-favorites-dashboard]
* Template: Removed `content-job_listing.php`. See: https://listify.astoundify.com/

= 1.14.0: May 10, 2017 =

* New: Fix Google structured data and SERP errors for ratings and images.
* New: Tell Google to ignore listing gallery pages to avoid potential duplicate content.
* Fix: Use two items per row in the blog grid when a sidebar is enabled.
* Fix: Ensure user's biography can be saved when editing their account.
* Fix: Ensure homepage cover elements appear over standard listing cards.
* Fix: Ensure mobile mega menu dropdown redirects to correct term archive page.
* Fix: Avoid PHP error using WP Job Manager - Bookmarks.
* Fix: Avoid PHP error when editing a comment.
* Fix: Avoid PHP error when disabling rating integration.
* Fix: Ensure numeric restaurant table ID works with Open Table.

= 1.13.0: April 17, 2017 =

* Fix: WooCommerce Bookings + WooCommerce Product Addons + WooCommerce 3.0.x support.
* Fix: Do not use deprecated methods from WP Job Manager - Reviews.
* Fix: WP Job Manager - Claim Listing 3.2.x support.
* Fix: WP Job Manager - Reviews 1.9.x support.
* Fix: WooCommerce 3.0.x support for Pricing Table widget.

= 1.12.0: April 12, 2017 =

* New: WooCommerce 3.0.2+ support.

= 1.11.0: April 12, 2017 =

* New: WooCommerce 3.0 support.
* New: Alert user of a page's widget support when editing the content.
* New: Allow a list of defined listings in the "Recent Listings" widget.
* New: Hide image title on singular image views in the gallery.
* Fix: Update text domains and strings.
* Fix: Remove unused widget caching.
* Fix: Avoid error on Recent Listings widget when no title is set.
* Fix: Plans & Pricing redirect to listing submission page improvements.
* Fix: Display hero gallery slider dots on mobile devices.
* Fix: Disable input zooming on iOS.
* Fix: Don't output map/contact widget if no data exists.
* Fix: Search icon hidden on mobile when toggled off.
* Fix: Author page widgets not respecting settings.

= 1.10.0: March 6, 2017 =

* New: Favorites support. Releasing soon. Follow us https://twitter.com/@astoundify/
* New: Listing Tags support. Releasing soon. https://twitter.com/@astoundify/
* New: WC Advanced Paid Listing support. Releasing soon. https://twitter.com/@astoundify/
* New: WooCommerce 2.7 compatibility.
* Fix: Always show the biography on "Edit Profile" page.
* Fix: FacetWP header search facet choice.
* Fix: Display half stars when a rating requires it.
* Fix: Respect blog sidebar position (or none) on category archives.

= 1.9.1: February 2, 2017 =

* Fix: FacetWP filters not appearing on the homepage.
* Fix: New WP Job Manager "search results" string available for translation.
* Fix: Default menu dropdown color on "Classic" color scheme.
* Fix: Product "Sale" tag overflow on listing pages.
* Fix: Add-ons page generating PHP errors.

= 1.9.0: January 25, 2017 =

* New: More integrated support with WordPress 4.7's "Visible Shortcut" buttons in the Customizer.
       Visit Appearance ??? Customize and easily see which elements of your site can be updated visually.
* New: Update translations. Pull up-to-date translations from https://astoundify.com/glotpress/projects/
       Contact us at https://astoundify.com/support/ to become a translator reviewer!
* New: Choose how the listing owner's name is displayed in the Author widget.
* New: Separate color control for submenu link colors.
* New: Enable High Accuracy option in the HTML5 geolocation implementation.
* Fix: Ensure better hero video performance by utilizing techniques introduced in WordPress 4.7.
* Fix: Submenu items in secondary and tertiary menu now flyout to the right to avoid opening off-screen.
* Fix: Use WordPress "Custom Logo" functionality for the logo instead of the Header Image control.
* Fix: Add missing textdomain to search page title string.
* Fix: WP Job Manager - Field Editor compatibility.
* Fix: Default color scheme color tweaks.
* Fix: Ensure TimePicker options load in WordPress admin when selecting Business Hours.
* Fix: Ensure Blog title is not displayed when viewing a listing's gallery image.
* Fix: Open listings in a new window if option is checked when clicking in the marker infobubble.

= 1.8.2: December 12, 2016 =

* Fix: Better checking if WooCommerce is active or not. The plugin should always be active but the theme should not error if it is not.
* Fix: Only output aggregate rating data when ratings have been made.
* Fix: Remove whitespace at start of file to avoid an error with some server configurations.
* Fix: Default to output all information in the "Map + Contact" widget.
* Fix: Ensure stars for WP Job Manager - Reviews properly output in moderation dashboard.
* Fix: select2 styling tweaks.
* Fix: Remove unneeded margins on certain search filter configurations.
* Fix: Avoid extra HTTP requests on non-Setup Guide pages.

= 1.8.1: November 17, 2016 =

* Fix: Ensure all listing results default to grid style when no alternative is set.
* Fix: Ensure custom shortcode attributes are respected on custom listing results pages.
* Fix: Avoid PHP error when WooCommerce is inactivte.
* Fix: Avoid PHP error when WooCommerce Social Login is inactive.

= 1.8.0: November 16, 2016 =

* New: "Rentals" site content pack. Automatically set up your site for taking online bookings (with WooCommerce Bookings enabled).
* New: Allow default search filters to be reordered or removed. Visit Customize ??? Listings ??? Search Filters.
* New: Add option to change the color of the Cart menu item count. Visit Customize ??? Colors ??? Header/Navigation.
* New: Add option to disable "Update Results" button on listing results. Visit Customize ??? Listings ??? Search Filters.
* New: Add option to disable ratings and enable normal comments on listings. Visit Customize ??? Listings ??? Labels & Behavior.
* New: Add option to change the color of the Ratings icon on listings. Visit Customize ??? Colors ??? Listing.
* New: Add option to change the color of the Bookmark icon on listings. Visit Customize ??? Colors ??? Listing.
* New: Add option to toggle off all listing card information. Visit Customize ??? Listings ??? Listing Card.
* New: Add option to change address format. Visit Customize ??? Listings ??? Labels & Behavior.
* New: Add option to set full width menus. Visit Customize ??? Menus ??? Settings.
* New: Simplify single blog post layout to avoid duplicate hero areas.
* New: Updated Listing Author widget UI with clearer action buttons.
* New: Update UI integration for WP User Avatar.
* Fix: WooCommerce Social Login 2.0 support.
* Fix: WooCommerce Simple Registration 1.3.0 support.
* Fix: Hide listing packages from WooCommerce Recent Products widget.
* Fix: Ensure stars are output when submitting a rating for a guest listing.
* Template: Actions in `content-job_listing.php` template added. Please update your child theme.
* Deprecated: Soft disable "List" display view. Enable via `add_filter( "listify_listings_display_style_switcher", "__return_true" );`.

= 1.7.1: September 28, 2016 =

* Fix: Bump asset version numbers to help caches move on.
* Fix: Revert "sticky footer" implementation due to issues with Internet Explorer.
* Fix: Avoid conflicts with Google PageSpeed and custom header images.
* Fix: Restore rotation CSS for loading icons.
* Fix: Invalid `box-shadow` CSS syntax on primary header.

= 1.7.0: September 12, 2016 =

* New: Add live-reload for style and typography changes.
* New: Updated design for the Login and Register pages/modals.
* New: Updated design for the Bookmarks count in grid results.
* New: Updated design for WooCommerce Bookings widget.
* New: Widgetized Author profile pages. Manage widgets in Appearance > Widgets
* New: Recent Blog posts by author on profile pages.
* New: Add WP Job Manager - Stats to content importer.
* New: Add WP Job Manager - Claim Listing to content importer.
* New: Initial suggestions when adding a color or icon to a category in the Customizer.
* New: Allow limitations based on location or category to the "Related Listings" widget.
* New: Option to open the Call to Action link in a popup.
* New: Sticky footer on short screens.
* New: Option to disable location autocomplete on search filters.
* New: Use FacetWP search field when searching in the site header.
* New: Display full address instead of coordinates when requesting directions.
* Fix: Center map on FacetWP location with no results.
* Fix: FacetWP mega menu sorting.
* Fix: WooCommerce redirect to shop page on certain author profiles.
* Fix: German translation on account-signin.php template.
* Fix: Update input heights to be consistent across all types.

= 1.6.3: September 7, 2016 =

* Fix: Force version 3 of the Google Maps API. Allow arguments to be filtered.

= 1.6.2: August 19, 2016 =

* Fix: Add hardening to gallery file uploads to prevent unexpected file types. Previously, other WP-allowed types were sometimes accepted.

= 1.6.1: August 11, 2016 =

* Fix: Potentially disappearing map on homepage or mobile device sizes.
* Fix: Javascript error in Theme Customizer on Map Appearance control.
* Fix: Remove background color on filters when using "Boxless" display style.

= 1.6.0: August 1, 2016 =

* New: Automatic content importer: quickly and easily install demo menus, pages, widgets, settings, and more. Get up in running in minutes.
* New: Child theme creator: create a child theme while maintaining any customized options.
* New: Automatic updates: one-click automatic theme updates directly from ThemeForest.net.
* New: Transparent fixed header for the Homepage hero area in Customize ??? Content ??? Home
* New: Choose the size of a page's title area from the Edit Page screen.
* New: Allow listing map to appear on the right side of the screen in Customize ??? Listings ??? Search Page
* New: Allow default mobile view to be changed in Customize ??? Listings ??? Search Page
* New: Allow listing filter content box style to be set in Customize ??? Listings ??? Search Filters
* New: Allow listing filter meta information to be toggled in Customize ??? Listings ??? Search Filters
* Fix: WooCommerce 2.6.4 compatibility.
* Fix: PHP7 compatibility.
* Fix: Do not scroll map on mobile until focused.
* Fix: Button colors when using the Outline button style.
* Fix: Avoid extra clusters when using FacetWP.
* Fix: Customizer javascript error in Safari.
* Fix: Ensure cover image can be removed from Edit Listing page.
* Fix: Image aspect ratios on Single Listing Hero Gallery.
* Fix: Don't output Autocomplete and Locate Me functions with no Google Maps API key.
* Fix: Don't output single listing map with no Google Maps API key.
* Fix: Remove nested <h2> tag in Homepage Hero area.
* Fix: Full width pricing table on mobile.
* Fix: Let the Google Maps API server key be set separately.
* Fix: Respect "Disable Comments" customizer option in galleries.
* Fix: Disable Jetpack Mobile Theme module.
* Fix: Disable Jetpack Photon module. https://github.com/Automattic/WP-Job-Manager/issues/576
* Fix: Exclude company logo from gallery images.

= 1.5.4: July 6, 2016 =

* Fix: Update support for WP User Avatar plugin.
* Fix: Update PHP Interface to match class method usage.
* Fix: Pass arguments to mega menu dropdown.
* Fix: Only force WooCommerce tertiary nav menu items when logged out.
* Fix: Pass current site language to any term query.
* Fix: Switch tag icons to term ID instead of slug to avoid inconsistencies.
* Fix: Respect gallery comments customizer option on gallery images.
* Fix: Update map zoom control description to match labels.
* Fix: Allow default center point to always show as this coordinate is returned when no results are found.
* Fix: Use correct class name when checking for the Contact Listing plugin.
* Fix: Don't redirect to the submit page from Plans & Pricing if there is an error on the page.

= 1.5.3: June 27, 2016 =

Google has updated their Google Maps API requirements. All websites *must* enter a valid API key.
For more information on setting up your key please visit: http://listify.astoundify.com/article/856-create-a-google-maps-api-key

* Fix: Alert if no Google Maps API key is set.
* Fix: Ensure the Claimed badge is always shown on the listing grid.
* Fix: Default Author widget icon output.
* Fix: Comment rating display logic.
* Fix: Load terms based on current language in mega menu.
* Fix: Avoid PHP error in Tags widget.
* Fix: FacetWP fSelect facet type UI updates.

= 1.5.2: June 22, 2016 =

* Fix: Register Google Maps script earlier to help avoid potential plugin conflicts.
* Fix: Revert secondary menu output deftault to true.
* Fix: Avoid PHP notice when no facets are set on the homepage.
* Fix: FacetWP dropdown style in Firefox.
* Fix: Tags should not be wider than the containing widget.
* Fix: Only load load homepage facets when using the Home template.
* Fix: Restore `listify_control_group_{group-id}` filters.
* Fix: Avoid PHP error in Polylang term shim.

= 1.5.1: June 22, 2016 =

* Fix: Do not output Featured badge on single listing page.
* Fix: Respect Call to Action widget color settings.
* Fix: Respect As Seen On background color setting.
* Fix: Bump asset version numbers to help caches.
* Fix: Ensure the Listify-specific select2 scripts and styles are always used in the Customizer.
* Fix: Ensure the blog sidebar shows on a fresh install.
* Fix: Ensure the customizer can be closed.

= 1.5.0: June 22, 2016 =

* New: Improved FacetWP integration.

       - Update FacetWP filter styles. Homepage facets now appear on a single line.
       - Results page now appear more visually appealing.
       - Support for new fSelect facet type.
       - Facet display can now easily be managed in "Customize > Listings > Facets".
       - Display extra filters under a "More Filters" area.
       - Register default facets and templates for seamless activation.

       For more information please review: http://listify.astoundify.com/category/314-facetwp

* New: Improved Map Marker Color and Icon Selection. Greatly improve Customizer performance.

       For more information please review:
       http://listify.astoundify.com/article/1008-listings-choose-the-map-marker-colors
       http://listify.astoundify.com/article/1009-listings-choose-the-map-marker-icons

* New: Convert "Call to Action" to widgetized area.

       For more information please review: http://listify.astoundify.com/article/1004-widgetized-page-call-to-action

* New: New featured listing style options.

       For more information please review: http://listify.astoundify.com/article/242-listings-listing-results

* New: Alternate blog layout options

       For more information please review: http://listify.astoundify.com/article/931-content-blog

* New: Option to output contact email in Map Widget.

       For more information please review: http://listify.astoundify.com/article/298-listing-map-location

* New: Choose Listing and Homepage hero overlay styles.

       For more information please review:
       http://listify.astoundify.com/article/1011-content-home
       http://listify.astoundify.com/article/1012-listings-listing-layout

* New: "Classic" style kit to match https://listify-demos.astoundify.com/classic
* New: WC Social Login 1.8+ compatibility.
* New: WooCommerce 2.6.1 compatibility.
* New: Improved customizer experience.
* New: Selective Refresh for Customizer widgets.
* New: Allow contact author icon to be disabled in the Author widget.
* New: Change style and position of "Claimed" listing icon.
* Fix: Listing by Category widget respect category selections.
* Fix: WP_Widget compatibility for WordPress 4.6.
* Fix: Properly hash listify_cover() transient when using multiple object IDs.
* Fix: Enable/Disable Map Marker autopan.
* Fix: Audit and improve Google structured data.
* Fix: Locally hosted videos appearing 100% width.
* Fix: Remove "Apply" references left over from WP Job Manager.
* Fix: Listing owners cannot review their own listings.
* Fix: Chosen dropdown color in Ultra Dark color scheme.
* Fix: RTL support for Listing Gallery slider.
* Fix: HTML validation errors.
* Fix: Hide autolocation on Chrome and non-SSL websites.
* Fix: Only load Google Map scripts when needed.

= 1.4.3: June 10, 2016 =

* Fix: WooCommerce 2.6+ compatibility.

       The new My Account tabs will be shown automatically on the My Account page if no tertiary menu is set.

       Tertiary menus containing a URL to the My Account page will not be modified and menu items
       should be managed manually.

= 1.4.2: May 26, 2016 =

* Fix: Only show selected categories in Category Tabs widget.
* Fix: Avoid PHP notice when Company Image is enabled.
* Fix: Avoid PHP notice when no term is set for the listing.
* Fix: Call get_avatar() for Company Images so plugins can still filter it.
* Fix: Remove default Tag widget in sidebar.
* Fix: Remove any empty term items that may be returned.
* Fix: Update submission form strings.

= 1.4.1: May 25, 2016 =

* Fix: Various speed and performance improvements.
* Fix: Avoid 404 error when loading map cluster images.
* Fix: Extra arrow on region drop down in submission form.

= 1.4.0: May 24, 2016 =

* New: Various speed and performance improvements.
* New: Company Logo field. Listings can have a separate company logo image uploaded to be displayed on the listing card.
* New: Listing Card image customizer option. Display the Company Logo or Listing Author avatar.
* New: Single Listing Hero Styles: Standard (featured image) or Gallery Slider.
* New: Recent Posts widget for the homepage.
* New: Option to disable infobubble autopan on map.
* New: Automatically move to the next submission step coming from the Pricing page.
* New: Listing grid design tweaks: move "Favorite" heart to the top right of the card.
* Fix: Tab and term list widgets.
* Fix: Comment sorting.
* Fix: When a location is cleared from search on the homepage do not use radius search when redirected.
* Fix: Only pull images from the current listing on the map popup.
* Fix: Only show "Listing Owner" on comments if the listing is not posted by a guest.
* Fix: Allow icons to be deselected in the customizer.
* Fix: Allow magnific popup library to be translated.
* Fix: Setup Guide redirection on initial activation.
* Fix: Calculate map offset dynamically to avoid a gap in certain instances.
* Fix: Remove link from listing package tags.
* Fix: Center radio bullets.
* Fix: Update TGMPA library.
* Fix: Turn off POI for the Mapbox color scheme.

= 1.3.2: February 4, 2016 =

* Fix: Output correct colors for map markers.
* Fix: Remove limit on mega menu dropdown.
* Fix: Add back default marker color and icons.

= 1.3.1: February 1, 2016 =

* Fix: Skip fallback check for old set icons. Sites with hundreds of categories could slow down.
* Fix: Cache terms where possible for sites with many categories.
* Fix: Make sure FacetWP controls are still available in the customizer.
* Fix: Proper filter for parsing shortcodes in listing descriptions.
* Fix: WPJM 1.24.0 compatibility.
* Fix: Listing Packages not displaying without Claim Listing plugin active.

= 1.3.0: January 30, 2016 =

* New: "Style Kits" visit "Appearance > Customize > Style Kits" and make your Listify website unique to you!
* New: "Font Packs" visit "Appearance > Customize > Typography" and adjust the typography of your website.
* New: "Color Schemes" visit "Appearance > Customize > Colors" to see the newly available color schemes.
* New: "Content" options visit "Appearance > Customize > Content" to adjust content layout and display options.
* New: "Listings" options visit "Appearance > Customize > Listings" to adjust new listing options.
* New: "Tags" widget design updates. Visit "Appearance > Customize > Listings > Listing Tags" to set icons for assigned tags.
* New: Show gallery image descriptions if available.
* New: Browse Astoundify WP Job Manager add-ons in "Listings > Add-ons".
* New: Dynamically register FacetWP template.
* New: More helpful placeholders for inputs.
* New: Setup Guide improvements.
* Fix: Date internationalization for Business Hours widget.
* Fix: FacetWP internationalization options.
* Fix: Revert to standard `the_content()` call so shortcodes are parsed.
* Fix: Social Login on checkout causing toggle issues on login form.
* Fix: Use `https` to request geolocation information when using an API key.

= 1.2.1: January 19, 2016 =

* Fix: WooCommerce 2.5 compatibility.

= 1.2.0: November 27, 2015 =

* New: "Image Grid" widget can now use square boxes instead of random tiles.
* New: Support for tag archives.
* New: Full support for Chosen RTL.
* Fix: WooCommerce Terms of Service checkbox position.
* Fix: More checks for plotting on the map with FacetWP.
* Fix: FacetWP address formatting.
* Fix: Claim Listing plugin compatibility.
* Fix: Make sure the WordPress Image API files are loaded before uploading images.

= 1.1.2: November 23, 2015 =

* Fix: Indexing FacetWP proximity facet.
* Fix: Map controls at the top right of the map.
* Fix: Page settings not saving Hero style.

= 1.1.1: November 18, 2015 =

* Fix: Show the correct featured image on pages.

= 1.1.0: November 18, 2015 =

* Fix: Google Maps not displaying.
* Fix: "Not Found" message when using FacetWP.
* Fix: Can hide Search icon in the Primary Menu when using FacetWP.
* Fix: Order mega menu and filters the same.
* Fix: Properly reflect radius default value when set via URL.
* Fix: Only show Tags widget when the Tag plugin is active.
* Fix: Tag count tooltip.
* Fix: Expland gallery images to fill the widget.
* Fix: Show the author's first name if available.
* Fix: Cache rating counts.
* Fix: Don't fatal error when WooCommerce is not activated.
* Fix: Hide expired content.
* Fix: More specific loop inclusions to avoid title rewriting.
* Fix: Allow locations to be properly cleared.
* Fix: Polylang tweaks.
* Fix: Remove built in Proximity filter.
* Fix: Pad counts on mobile mega menu selector.
* Fix: Update Resurva. Now only requires the Resurva URL.

= 1.0.7: September 15, 2015

* New: Display category dropdown when searching from the homepage. Canonical category archives still do not allow switching (intentional).
* New: Parse shortcodes on Feature Callout widget.
* New: Added future support for core FacetWP proximity facet.
* Fix: String updates.
* Fix: FacetWP tweaks to match plugin defaults.
* Fix: Only show categories when enabled.
* Fix: Display "Locate Me" icon after 1.0.6 update.
* Fix: Only output address schema markup if necessary.
* Fix: Encode translated slugs.

= 1.0.6: August 20, 2015 =

* New: Extra support for Polylang. See: http://listify.astoundify.com/article/826-use-polylang-to-create-a-multilingual-website
* New: Max Zoom Out option for Google Maps
* Fix: If you are using WP Job Manager - Regions, please update: https://wordpress.org/plugins/wp-job-manager-locations/
* Fix: Undefined variable check for selected package.
* Fix: Only limit login form width in popup if registration or social login is enabled.
* Fix: Update to PHP5 style constructor.
* Fix: Page gallery styles.
* Fix: WooCommerce template version numbers.
* Fix: Use a standard form for searching from the homepage. Improves performance.
* Fix: Show correct location on map widget with Extended Location disabled.
* Fix: "Get Started" on Plans & Pricing always links to Submit Listing.
* Fix: Remove types from RSS feed URL if not in use.
* Fix: Disable header search if FacetWP is enabled.
* Fix: FacetWP timing to avoid empty maps.
* Fix: FacetWP megamenu mobile links.

= 1.0.5: July 1, 2015 =

* New: Add tertiary navigation menu label on mobile.
* New: "Business Hours" in its own meta box in the admin.
* New: Link address to directions in the Map widget on a single listing.
* Fix: Ensure Points of Interest are hidden on the default map scheme.
* Fix: WooCommerce product search.
* Fix: Add WooCommerce error output on VC Homepage.
* Fix: Allow the /listing/ and /listings/ slugs to be hardcoded in a translation file for Polylang.
* Fix: Add listify-child admin-texts configuration to wpml-config.xml for the default child theme.
* Fix: Carry over the selected package when coming from the Plans and Pricing page.
* Fix: Prepend http:// to social links if missing.
* Fix: Make sure the biography is always editable in the profile.
* Fix: Change h1 to h3 on default widgets.
* Fix: Only show comments on published listings.
* Fix: Update WCPL Strings for 2.5.4+
* Fix: When searching a second time for a previously searched location make sure results are updated again.
* Fix: Remove "Mark Filled" and "Mark Unfilled" by default.
* Fix: Allow gallery images to be fully removed  when editing a listing.

= 1.0.4: May 27, 2015 =

* New: Add comments to inline gallery viewer.
* Fix: Stars appearance in Firefox and Internet Explorer.
* Fix: Respect slider gallery limit widget settings.
* Fix: Gallery next/previous arrow colors on focus.
* Fix: Instagram social icon hover color and spacing.
* Fix: Only show map on contact widget when location data exists.
* Fix: Only show top level taxonomy terms on the mobile navigation select.
* Fix: Click once and enter once to submit search on the homepage.
* Fix: Show "0 Results" before switching to found number.
* Fix: Social links open in a new window/tab.
* Fix: Remove WPJM widgets that do not apply to the theme.
* Fix: Comment sorting by rating.
* Fix: Allow custom map color schemes to always be loaded.
* Fix: Long category overflow on homepage search box.
* Fix: Avoid error when gallery slider is set with no images.
* Fix: Alert icon priority.
* Fix: Improve check for calculating the span on the last row for the image grid.
* Fix: Tertiary navigation z-index on the homepage.
* Fix: Display styles for more than 3 pricing options.
* Fix: Google Address Structured Data.
* Fix: Pass language to get_terms for Polylang
* Fix: Simplify wpml-config.xml
* Fix: If radius is manually shown on FacetWP have the select refresh the results.
* Fix: Continued translation and i18n improvements.

= 1.0.3: May 8, 2015 =

* New: Map color schemes. Read about creating your own: http://listify.astoundify.com/article/805-create-a-custom-map-color-scheme
* New: Inline gallery widget for the listing page.
* New: Developers - Distance for each listing is passed to the WP_Query instance when searching by location.
* New: Add Instagram to default social profile fields.
* New: Support for WP Job Manager - Alerts
* New: Update FacetWP Proximity facet to allow for miles/kilometers to be used.
* New: Add autolocation to FacetWP Proximity facet.
* Fix: Pressing Enter on the header search now submits the form.
* Fix: Avoid endless "searching" on map when no results around found.
* Fix: Move map templates (pin and popup) to actual template files.
* Fix: Use WordPress' Underscore.js template interpolation to avoid problems with asp_tags.
* Fix: Refresh FacetWP when a location is chosen from the autosuggestions.
* Fix: Wrap address directly with schema data to avoid errors with Google.
* Fix: Social Login positioning on certain pages.
* Fix: Don't show gallery widget when previewing.
* Fix: Remove VC page template by default. `add_filter( 'listify_use_vc', '__return_true' );` to turn it back on.
* Fix: Rename page templates to provide better organization to select box.
* Fix: List style overflow on certain pages.
* Fix: Make sure lat/lng is properly cleared when clearing an autosuggested location.
* Fix: More accurate filling of last row in the image grid.
* Fix: Icon display in submenu items.
* Fix: Dark color scheme tertiary navigation menu item color.
* Fix: Remove extra whitespace when "None" is set to the Reviews widget icon.
* Fix: Don't output non-formatted location in unnecessary places.
* Fix: Order listing packages in ascending menu order.
* Fix: Use "Listings" dynamically on author profile page.
* Fix: Update Ionicons source.

= 1.0.2.12: April 21, 2015 =

* Fix: Update TGM Plugin Actiation class (again).
* Fix: esc_url_raw() update.

= 1.0.2.11: April 21, 2015 =

* Fix: Update TGM Plugin Activation class.
* Fix: Escape a few instances of add_query_arg().

= 1.0.2.10: April 17, 2015 =

* Fix: Check for WC Paid Listings existence with constant instead of class name.

= 1.0.2.9: April 7, 2015 =

* Fix: Avoid error on cover when no featured image is set but gallery images are. Use gallery as featured image.
* Fix: Only modify the subscription Add to Cart URL on the Plans & Pricing + Homepage.
* Fix: Only adjust the post class on the frontend.
* Fix: Reset homepage query after displaying Facets to avoid stopping the video outut.
* Fix: Avoid endless spinning if autolocation cannot retrieve the address.
* Fix: FacetWP responsive styling on homepage.
* Fix: If the comment author is not registered then do not try to link to their profile.

= 1.0.2.8: March 31, 2015 =

* Fix: Continue returning proper results for the image grid images.
* Fix: String updates for WP Job Manager.

= 1.0.2.7: March 30, 2015 (Unreleased) =

* New: Link the map widget directly to Google Maps on small devices.
* New: Refresh facets on the homepage instead of directing straight to the results page.
* New: Exclude listing packages from the shop archive by default.
* New: Use a gallery image on the map popup if no featured image is set.
* Fix: Make sure Social Login shows on standard pages.
* Fix: Standard searching should only return blog posts.
* Fix: Make sure pressing enter submits the homepage search form.
* Fix: Don't override WP Job Manager's category field type on the submission form.
* Fix: Fix cover regression introduced in 1.0.2.6 causing errors in some instances.
* Fix: Remove #more- link on "Continue Reading" links in the blog.
* Fix: Don't error when 0 images are uploaded to the gallery.
* Fix: Minimum width for gallery images in the gallery overview.

= 1.0.2.6: March 23, 2015 =

* New: Filterable zoom level for single listing map widget.
* Fix: Escape all data passed to map to avoid encoding errors.
* Fix: Turn off "Points of Interest" on map.
* Fix: Use "click" trigger for mobile devices (based on screen size).
* Fix: String update for "unlimited" job listings.
* Fix: Avoid PHP errors on unset variables for covers.
* Fix: When "Contact Listing" has a previously assigned "Claim Listing" form and is deactivated while
       "Claim Listing" is active, do not error.

= 1.0.2.5: March 19, 2015 =

* New: Add "None" option for icons on widgets.
* Fix: Style conflict with WP Job Manager - Reviews. Please update WP Job Manager - Reviews
* Fix: Pass the full state to WooCommerce when formatting a location.
* Fix: Default to 5 stars if no interaction with the stars when submitting a review.
* Fix: When no featured image is set fall back to a gallery image.
* Fix: Use WPJM upload core functions to upload images.
* Fix: Don't append an extra Social Login output to the body when using the popup.
* Fix: When previewing a listing ensure the proper coordinates are loaded for the map.

= 1.0.2.4: March 17, 2015 =

* New: Pass the language to the geolocation request. If your site is Italian a "Rome" address will return "Roma".
* Fix: Don't remove types from the query when using the map on the homepage.
* Fix: Don't let WP Job Manager ever override the FacetWP results.
* Fix: GB instead of UK country code for miles vs kilometers.
* Fix: Don't resize the homepage map incorrectly.
* Fix: Make sure the homepage map search returns relevant results (not malformed by other widgets).
* Fix: Regions dropdown not appearing on mobile devices. Requires WP Job Manager - Regions v1.7.2

= 1.0.2.3: March 16, 2015 =

* Fix: The UK uses miles on the map.
* Fix: Don't restrict Jetpacks output of sharing, but remove it from the listing description.
* Fix: Don't apply radius when viewing a region archive.
* Fix: Homepage map filter width should match the container on large devices.
* Fix: Always refresh the FacetWP template when the facets change.

= 1.0.2.2: March 13, 2015 =

* Fix: Don't pass the Google Maps API key to the geocode endpoint unless it exists.
* Fix: Display the social profiles in the admin when associated with a listing.
* Fix: Make sure stars are always selectable and the selection is properly recorded.

= 1.0.2.1: March 11, 2015 =

* Fix: WCPL String Updates.
* Fix: Link formatted location using geocoded coordinates.
* Fix: Avoid PHP notice when saving a Claim.
* Fix: Send Google Maps API key when geocoding via WP Job Manager.
* Fix: 3 Column WooCommerce shop archive.
* Fix: Display an error when no images are selected for uploading.
* Fix: Time format display when using French.

= 1.0.2: March 10, 2015 =

* New: Mapping improvements: searching based on location, miles/kilometers, speed, accuracy, extensibility.
* New: Support for updated Extended Locations and Claim Listing plugins.
* New: Update Ionicon library to the latest version.
* New: Allow a sidebarless shop and product page.
* New: Add star base count class to HTML output.
* New: Support for select2 (WooCommerce).
* New: Add Tumblr icon support for Social menu.
* New: Add a "None" option to the region bias.
* New: Social fields can be associated with a listing (and output on the submission form) instead of a user.
* Fix: More consistency with the single listing map widget.
* Fix: Don't link the tags/ammenities in the widget output.
* Fix: Optimize translation loading.
* Fix: Output accurate results found count when map is turned off.
* Fix: Respect all FacetWP link settings (including on homepage).
* Fix: Pass current language to Google Maps.
* Fix: More dynamic map height to avoid cutting off canvas.
* Fix: Do not adjust position of the social login items on the My Account page.
* Fix: Remove "Completed" text on setup items that do not require it.
* Fix: Ratings default to 5 stars with a required minimum of 1.
* Fix: Show pending comment to author but do not count it in average.
* Fix: Don't allow WooCommerce to override tertiary navigation link titles.
* Fix: Address format updates (Spain, Ireland, Ireland, Dutch
* Fix: Street Address can not be positioned in formats.
* Fix: Remove conflict with plugins using a CSS @import.
* Fix: Firefox text selection background color.
* Fix: Many stability and user experience improvements.
* Fix: Continued translation and i18n improvements.

= 1.0.1.7: February 10, 2015 =

* New: Ability to set specific terms on the Image Grid widget.
* Fix: Respect FacetWP settings better.
* Fix: Gallery loading properly with translated 'gallery' slug.
* Fix: Link comment author to author's public profile on the website.
* Fix: Add title of product over booking widget.
* Fix: Make sure grid image heights are always equal.
* Fix: Add a full clickbox hit area to the image grid.
* Fix: Don't try to save fields that have been disabled.
* Fix: Make sure the first category of the mobile megamenu is clickable.
* Fix: FacetWP layout and style tweaks.
* Fix: Don't stretch gallery images that are smaller than the recommended width.
* Fix: Make sure the link to the gallery URL has a separator.
* Fix: Continued translation and i18n improvements.

= 1.0.1.6: January 21, 2015 =

* New: Add a default search radius value to the customizer.
* New: Page Template: Page with sidebar on the left.
* New: Add Envato WordPress Toolkit to recommended plugins.
* New: If WC Paid Listing package selection is set to "before" have the pricing table link to the submission page.
* New: If FacetWP is active the mega menu will respect the archive links.
* Fix: Secondary and Tertiary submenus should open to the right.
* Fix: Dark color scheme tertiary submenu link color.
* Fix: Always show the "Map & Contact" widget even if no map data exists.
* Fix: Don't show the "Add Photos" link when previewing a listing.
* Fix: Update Listing > Add New input title string.
* Fix: When sorting by location make sure WP Job Manager does not interfere with distance sorting.
* Fix: Load Google Maps JS slightly earlier to avoid being overwritten by other plugins.
* Fix: Only show approved comments/reviews.
* Fix: Plans & Pricing responsive tweaks.
* Fix: Maximum height and overflow on mega menu to avoid the loss of scrolling.
* Fix: Clean up what is shown in the preview listing so the remaining is more accurate.

= 1.0.1.5.1: January 19, 2015 =

* Fix: Only call upgrade routine when available.

= 1.0.1.5: January 19, 2015 =

* New: Add the ability to set the region bias in the theme customizer.
* Fix: Use a standard uploader for adding images to listings.
* Fix: Continued translation and i18n improvements.
* Fix: Undefined variable in Homepage Image Grid
* Fix: Styling improvements for various WooCommerce parts.
* Fix: Check for translations stored in the WPLANG directory.
* Fix: Allow the Listing page template to override the [jobs] shortcode.
* Fix: Make sure unformatted addresses are properly wrapped.
* Fix: Add a filter around the default [jobs] shortcode.

= 1.0.1.4: January 8, 2015 =

* Fix: Improve auto-formatted locations. Properly formatted based on country now (using WooCommerce).
* Fix: Don't show the social profile widget if no methods have been added.
* Fix: Allow the images in the "Image Grid" widget to be manipulated via the listify_cover_image filter.
* Fix: Allow "%s Results Found" string to be properly translated.
* Fix: Allow "%s Review/s" string to be properly translated.
* Fix: Add a filter around the comment_form() call.
* Fix: Business Hours widget/input respects WordPress' day of week setting.
* Fix: Continued translation and i18n improvements.

= 1.0.1.3: January 7, 2015 =

* Fix: PHP 5.2 compatibility for Homepage Features widget.
* Fix: Add a filter to control the output attributes of the mega menu.
* Fix: Only output the "Claim Listing" link when a form is assigned.
* Fix: ACF compatibility fixes for gallery management.
* Fix: Add a filter to control who can add photos to the current listing.
* Fix: Make sure pins can still be plotted with formatted addresses turned off.
* Fix: Don't duplicate the address with formatted addresses turned off.
* Fix: Add basic schema data around unformatted addresses.
* Fix: Open a listing's associated website URL in a new window.
* Fix: Make the header searchform strings translatable.
* Fix: Allow the translation of the "Filter by tag:" string.
* Fix: Continued translation and i18n improvements.

= 1.0.1.2: January 5, 2015 =

* Fix: Properly load translations only from Listify. You only need to translate listify.pot (and your language may
       already be included). Make sure you have the latest version of the files from
       https://www.transifex.com/projects/p/listify/
* Fix: Don't show category multi select on home or other widgetized pages.
* Fix: Hide WP Job Manager Add-ons from the menu.
* Fix: Offset listing filters on page when using [jobs] shortcode.
* Fix: Don't show the tags widget if no tags were assigned to the listing.
* Fix: Completely hide the title/description when blank to avoid scrolling on mobile.

= 1.0.1.1: December 22, 2014 =

* Fix: Make the widgetized page resembles standard pages, not homepage.

= 1.0.1: December 22, 2014 =

* New: Any page can be assigned a "Widgetized" page template that will have its unique widgetized area.
* New: Homepage (Slider) Page template to load a slider at the top of the homepage instead of default functionality.
* New: Radius searching is now on by default.
* New: Show a "Book Now" button in the hero when a bookable product is attached.
* New: If multiple categories are assigned and the same level, output them all.
* New: Autocomplete searching accepts the same region bias as geocoding.
* Fix: Make the widget caching unique to the current listing.
* Fix: Improve Jetpack Subscribe widget styling.
* Fix: Make "Appearance > Header" reflect reality better.
* Fix: Don't count replies as ratings.
* Fix: Output the correct star count on listings.
* Tweak: WP Job Manager strings mapped to Listify to avoid translation confusion.

= 1.0.0.6: December 9, 2014 =

* Fix: Don't output the header search form path.

= 1.0.0.5: December 9, 2014 =

* New: Add the ability to hide the "Claim Listing" link by marking as claimed.
* New: Formatted addresses link to Google Maps.
* New: "Listing" string support for WP Job Manager - Alerts.
* Fix: Properly check if a day's hours are set to Closed.
* Fix: Header search form searches listings instead of posts/pages.
* Fix: Make sure no PHP notices appear when adding new listings with no hours.

= 1.0.0.4: December 4, 2014 =

* New: Option to disable secondary navigation mega menu.
* Fix: Update tertiary navigation background color for Dark color scheme.
* Fix: Print WooCommerce notices on all pages.
* Fix: Update default widgets to better match our demo.
* Fix: Properly update the amount of listings found.
* Fix: Update/Search button label based on context.
* Fix: Use set noun for listing tags slug.
* Fix: Fix pagination styles for listings when using numbers.
* Fix: Address widget alignment in IE11.
* Fix: Login/Register popup submission error handling.

= 1.0.0.3: December 1, 2014 =

* New: Add animated .gif images to setup page.
* New: Location-based searches can now be keyword based (radius is optional).
* New: Use the "Primary" menu label to label the mobile menu.
* New: Link {{account}} avatar to author's public profile page.
* Fix: PHP 5.2 compatibility with round().
* Fix: Make sure taxonomy is passed to tag field on submission form.
* Fix: Round the top corners of blog images
* Fix: Account for larger headers and navigation items when laying out the page.
* Tweak: Only redirect to setup guide on brand new installs.

= 1.0.0.2: November 28, 2014 =

* Fix: Make sure page templates load the full size cover image.

= 1.0.0.1: November 25, 2014 =

* Fix: Properly set close (x) button on search overlay in the header.
* Fix: WP Job Manager - Regions is not a required plugin.
* Fix: "Features" widget import data type.
* Fix: On author archives make sure only correct cover images are shown.

= 1.0.0: November 24, 2014 =

First release!
