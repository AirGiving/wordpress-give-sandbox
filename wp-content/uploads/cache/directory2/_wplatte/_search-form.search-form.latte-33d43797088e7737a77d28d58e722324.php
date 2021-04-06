<?php //netteCache[01]000622a:2:{s:4:"time";s:21:"0.60054600 1608561953";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:133:"/home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/ait-theme/elements/search-form/search-form.latte";i:2;i:1607214400;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.2";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:6:"4.0.19";}}}?><?php

// source file: /home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/ait-theme/elements/search-form/search-form.latte

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, 'cs1y5qsryp')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$headerMapEnabled = $elements->unsortable['header-map']->options['@display'] ;$headerMapLoadType = $elements->unsortable['header-map']->options['mapLoadType'] ?>

<?php if ($wp->isSingular('item')) { $headerLayoutType = $post->meta('item-data')->headerType ;} elseif ($wp->isSingular('event-pro')) { $headerLayoutType = $post->meta('event-pro-data')->headerType ;} elseif ($wp->isTax('items') or $wp->isTax('locations') or $wp->isTax('ait-events-pro')) { $meta = (object) get_option("{$taxonomyTerm->taxonomy}_category_{$taxonomyTerm->id}") ;$headerLayoutType = isset($meta->header_type) ? $meta->header_type : '' ;} else { $headerLayoutType = $options->layout->general->headerType ;} ?>

<?php if ($headerLayoutType == 'map') { $headerLayoutType = $elements->unsortable['header-map']->display ? $headerLayoutType : '' ;} elseif ($headerLayoutType == 'video') { $headerLayoutType = $elements->unsortable['header-video']->display ? $headerLayoutType : '' ;} elseif ($headerLayoutType == 'revslider') { $headerLayoutType = $elements->unsortable['revolution-slider']->display ? $headerLayoutType : '' ;} ?>

<?php $type = $el->option('type') != "" ? $el->option('type') : 1 ?>

<?php $radiusEnabled = $el->option('enableRadiusSearch') ? 'enabled' : 'disabled' ?>

<?php $selectedKey = isset($_REQUEST['s']) && $_REQUEST['s'] != "" ? $_REQUEST['s'] : '' ;$selectedCat = isset($_REQUEST['category']) && $_REQUEST['category'] != "" ? $_REQUEST['category'] : '' ;$selectedLoc = isset($_REQUEST['location']) && $_REQUEST['location'] != "" ? $_REQUEST['location'] : '' ;$selectedRad = isset($_REQUEST['rad']) && $_REQUEST['rad'] != "" ? $_REQUEST['rad'] : '' ?>

<?php $selectedLocationAddress = isset($_REQUEST['location-address']) && $_REQUEST['location-address'] != "" ? $_REQUEST['location-address'] : '' ;$selectedLat = isset($_REQUEST['lat']) && $_REQUEST['lat'] != "" ? $_REQUEST['lat'] : '' ;$selectedLon = isset($_REQUEST['lon']) && $_REQUEST['lon'] != "" ? $_REQUEST['lon'] : '' ?>

<?php if (defined('AIT_ADVANCED_SEARCH_ENABLED') and !isset($_REQUEST['a'])) { $advancedSearchOptions = aitOptions()->getOptionsByType('ait-advanced-search') ;$advancedSearchOptions = $advancedSearchOptions['general'] ;if ($advancedSearchOptions['useDefaults']) { $selectedLocationAddress = $selectedLocationAddress != "" ? $selectedLocationAddress : $advancedSearchOptions['defaultLocation']['address'] ;$selectedRad = $selectedRad != "" ? $selectedRad : $advancedSearchOptions['defaultRadius'] ;$selectedLat = $advancedSearchOptions['defaultLocation']['latitude'] ;$selectedLon = $advancedSearchOptions['defaultLocation']['longitude'] ;} } ?>

<?php ob_start() ;if ($type == 2) { ?>
	<span class="searchinput-wrap"><input type="text" name="s" id="searchinput-text" placeholder="<?php echo NTemplateHelpers::escapeHtml(__('Search keyword', 'wplatte'), ENT_COMPAT) ?>
" class="searchinput" value="<?php echo NTemplateHelpers::escapeHtml($selectedKey, ENT_COMPAT) ?>" /></span>
<?php } else { ?>
	<span class="searchinput-wrap"><?php if ($type == 3) { ?><i class="icon-search"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i><?php } ?>
<input type="text" name="s" id="searchinput-text" placeholder="<?php echo NTemplateHelpers::escapeHtml(__('Search keyword', 'wplatte'), ENT_COMPAT) ?>
" class="searchinput" value="<?php echo NTemplateHelpers::escapeHtml($selectedKey, ENT_COMPAT) ?>" /></span>
<?php } $searchKeyword = ob_get_clean() ?>

<?php ob_start() ;$categories = get_categories(array('taxonomy' => 'ait-items', 'hide_empty' => 0, 'parent' => 0)) ;if (isset($categories) && count($categories) > 0) { $optionSelectedClass = $selectedCat != '' ? 'option-selected' : '' ?>

		<div class="category-search-wrap <?php echo NTemplateHelpers::escapeHtml($optionSelectedClass, ENT_COMPAT) ?>" data-position="first">
<?php if ($type == 3) { ?>
				<span class="category-icon"><i class="icon-folder"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg></i></span>
<?php } ?>
			<span class="category-clear"><i class="fa fa-times"></i></span>

<?php if ($type == 3) { ?>
			<select name="category" class="category-search default-disabled" style="display: none;">
<?php } else { ?>
			<select data-placeholder="<?php echo NTemplateHelpers::escapeHtml(__('Category', 'wplatte'), ENT_COMPAT) ?>" name="category" class="category-search default-disabled" style="display: none;">
<?php } ?>
			<option label="-"></option>
			<?php echo recursiveCategory($categories, $selectedCat, 'ait-items', "") ?>

			</select>
		</div>
<?php } $searchCategory = ob_get_clean() ?>

<?php ob_start() ;if (defined('AIT_ADVANCED_SEARCH_ENABLED')) { ?>
		<div class="location-search-wrap advanced-search" data-position="last">
<?php if ($type == 3) { ?>
				<span class="location-icon"><i class="icon-marker"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></i></span>
				<span class="location-clear"><i class="fa fa-times"></i></span>
				<div class="advanced-search-location">
					<input name="location-address" class="location-search" type="text" id=location-address placeholder="<?php echo NTemplateHelpers::escapeHtml(__('Location', 'wplatte'), ENT_COMPAT) ?>
" value="<?php echo NTemplateHelpers::escapeHtml(stripslashes($selectedLocationAddress), ENT_COMPAT) ?>" />
					<i class="fa fa-spin loader"></i>
				</div>
<?php } else { ?>
				<input name="location-address" class="location-search searchinput" type="text" id=location-address placeholder="<?php echo NTemplateHelpers::escapeHtml(__('Location', 'wplatte'), ENT_COMPAT) ?>
" value="<?php echo NTemplateHelpers::escapeHtml(stripslashes($selectedLocationAddress), ENT_COMPAT) ?>" />
<?php if ($type == 1) { ?>
					<i class="icon-marker"><svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></i>

					<i class="fa fa-spin loader"></i>
<?php } ?>

<?php if ($type == 2) { ?>
					<i class="fa fa-circle-o-notch fa-spin loader"></i>
<?php } } ?>
		</div>
<?php } else { $locations = get_categories(array('taxonomy' => 'ait-locations', 'hide_empty' => 0, 'parent' => 0)) ;if (isset($locations) && count($locations) > 0) { $optionSelectedClass = $selectedLoc != '' ? 'option-selected' : '' ?>

			<div class="location-search-wrap <?php echo NTemplateHelpers::escapeHtml($optionSelectedClass, ENT_COMPAT) ?>" data-position="last">
<?php if ($type == 3) { ?>
					<span class="location-icon"><i class="icon-marker"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></i></span>
<?php } ?>
				<span class="location-clear"><i class="fa fa-times"></i></span>

<?php if ($type == 3) { ?>
				<select name="location" class="location-search default-disabled" style="display: none;">
<?php } else { ?>
				<select data-placeholder="<?php echo NTemplateHelpers::escapeHtml(__('Location', 'wplatte'), ENT_COMPAT) ?>" name="location" class="location-search default-disabled" style="display: none;">
<?php } ?>
				<option label="-"></option>
				<?php echo recursiveCategory($locations, $selectedLoc, 'ait-locations', "") ?>

				</select>
			</div>
<?php } } $searchLocation = ob_get_clean() ?>

<?php ob_start() ;$radiusSet = $selectedRad != "" ? 'radius-set' : '' ?>
	<div class="radius <?php echo NTemplateHelpers::escapeHtml($radiusSet, ENT_COMPAT) ?>">
		<div class="radius-toggle radius-input-visible">
<?php if ($type != 2) { ?>
				<span class="radius-icon"><i class="icon-target"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg></i></span>
<?php } if ($type != 2 && $type != 3) { ?>
				<?php echo NTemplateHelpers::escapeHtml(__('Radius:', 'wplatte'), ENT_NOQUOTES) ?>
 <?php echo NTemplateHelpers::escapeHtml(__('Off', 'wplatte'), ENT_NOQUOTES) ?>

<?php } else { ?>
				x <?php echo NTemplateHelpers::escapeHtml($el->radiusUnitLabel(), ENT_NOQUOTES) ?>

<?php } ?>
		</div>
		<input type="hidden" name="lat" value="<?php echo NTemplateHelpers::escapeHtml($selectedLat, ENT_COMPAT) ?>" id="latitude-search" class="latitude-search" disabled />
		<input type="hidden" name="lon" value="<?php echo NTemplateHelpers::escapeHtml($selectedLon, ENT_COMPAT) ?>" id="longitude-search" class="longitude-search" disabled />
		<input type="hidden" name="runits" value="<?php echo NTemplateHelpers::escapeHtml($el->option('radiusUnits'), ENT_COMPAT) ?>" disabled />

		<div class="radius-display radius-input-hidden">
<?php if ($type != 2) { ?>
				<span class="radius-icon"><i class="icon-target"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg></i></span>
<?php } ?>

			<span class="radius-clear"><i class="fa fa-times"></i></span>
			<?php if ($type != 2 && $type != 3) { ?><span class="radius-text"><?php echo NTemplateHelpers::escapeHtml(__('Radius:', 'wplatte'), ENT_NOQUOTES) ?>
</span><?php } ?>

<?php if ($type == 2 || $type == 3) { ?>
			<span class="radius-value"></span>
			<span class="radius-units"><?php echo NTemplateHelpers::escapeHtml($el->radiusUnitLabel(), ENT_NOQUOTES) ?></span>
<?php } ?>
		</div>

		<div class="radius-popup-container radius-input-hidden">
			<span class="radius-popup-close"><i class="fa fa-times"></i></span>
<?php if ($type != 2 && $type != 3) { ?>
			<span class="radius-value"></span>
			<span class="radius-units"><?php echo NTemplateHelpers::escapeHtml($el->radiusUnitLabel(), ENT_NOQUOTES) ?></span>
<?php } ?>
			<input type="range" name="rad" class="radius-search" value="<?php if ($selectedRad) { echo NTemplateHelpers::escapeHtml($selectedRad, ENT_COMPAT) ;} else { ?>
0.1<?php } ?>" min="0.1" step="0.1" max="100" disabled />
			<span class="radius-popup-help"><?php echo NTemplateHelpers::escapeHtml($el->option('radiusHelp'), ENT_NOQUOTES) ?></span>
		</div>


	</div>
<?php $searchRadius = ob_get_clean() ?>

<div id="<?php echo NTemplateHelpers::escapeHtml($htmlId, ENT_COMPAT) ?>-main" class="<?php echo NTemplateHelpers::escapeHtml($htmlClass, ENT_COMPAT) ?>
-main <?php echo NTemplateHelpers::escapeHtml($element->option->customClass, ENT_COMPAT) ?>">
<?php if ($options->layout->custom->layout == 'half' && $headerLayoutType != '' && $headerLayoutType != 'none' && $headerLayoutType != 'revslider') { $layoutType = 'half' ;} elseif ($options->layout->custom->layout == 'full') { $layoutType = 'full' ;} else { $layoutType = 'collapsed' ;} ?>

<?php $toggleButton = true ;$togglableMap = false ?>

<?php if ($wp->isTax('items') or $wp->isTax('locations') or $wp->isSingular('item') or $wp->isTax('ait-events-pro') or $wp->isSingular('ait-event-pro') or $wp->isSearch) { if (($headerLayoutType == 'map')) { $togglableMap = true ;} } ?>

<?php if ($layoutType != 'full' and $headerLayoutType == 'map') { $togglableMap = true ;} ?>

<?php if ($toggleButton and $type != 3) { ?>
<div class="ait-toggle-area-group-container toggle-group-search-container toggle-search <?php if ($togglableMap) { ?>
has-toggle-map<?php } ?>">
	<div class="grid-main">
		<div class="ait-toggle-area-group toggle-group-search">
				<a href="#" class="ait-toggle-area-btn" data-toggle=".<?php echo NTemplateHelpers::escapeHtml($htmlClass, ENT_COMPAT) ?>
"><i class="fa fa-search"></i> <?php echo NTemplateHelpers::escapeHtml(__('Toggle Search', 'wplatte'), ENT_NOQUOTES) ?></a>
			</div>
		</div>
	</div>
<?php } ?>

<div id="<?php echo NTemplateHelpers::escapeHtml($htmlId, ENT_COMPAT) ?>" class="<?php echo NTemplateHelpers::escapeHtml($htmlClass, ENT_COMPAT) ?>
 <?php if ($type != 3) { ?>ait-toggle-area<?php } ?> radius-<?php echo NTemplateHelpers::escapeHtml($radiusEnabled, ENT_COMPAT) ?>">

<?php if ($type == 3 && $headerLayoutType == "map" && $headerMapEnabled == "1") { ?>
	<div class="close-search-form-request-map"></div>
<?php } ?>

<?php if ($el->option('type') == 3) { if (($el->hasOption('title') and $el->option->title)) { ?>

			<div<?php if ($_l->tmp = array_filter(array('elm-mainheader', $el->hasOption('headAlign') ? $el->option->headAlign:null))) echo ' class="' . NTemplateHelpers::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT) . '"' ?>>
<?php if ($el->option->title) { ?>
					<h2 class="elm-maintitle"><?php echo $el->option->title ?></h2>
<?php } ?>
			</div>

<?php } } ?>

	<div id="<?php echo NTemplateHelpers::escapeHtml($htmlId, ENT_COMPAT) ?>-container"<?php if ($_l->tmp = array_filter(array('search-form-container', "search-type-{$type}"))) echo ' class="' . NTemplateHelpers::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT) . '"' ?>>
		<form action="<?php echo NTemplateHelpers::escapeHtml($searchUrl, ENT_COMPAT) ?>" method="get" class="main-search-form">

			<div class="elm-wrapper">
				<div class="inputs-container">
					<div class="search-shadow"></div>
					<div class="search-content">
<?php if ($type == 2) { ?>

<?php $sentence = '<span class="label">'.$el->option('sentence').'</span>' ;$sentence = '<span class="label">'.$el->option('sentence').'</span>' ;$sentence = str_replace('{', '</span>{', $sentence) ;$sentence = str_replace('}', '}<span class="label">', $sentence) ?>

<?php if (strpos($sentence, '{search-keyword}') !== false) { $sentence = str_replace('{search-keyword}', $searchKeyword, $sentence) ;} else { ?>
								<input type="hidden" name="s" value="" />
<?php } ?>

<?php $sentence = str_replace('{search-category}', $searchCategory, $sentence) ;$sentence = str_replace('{search-location}', $searchLocation, $sentence) ?>

<?php $sentence = str_replace('{search-radius}', $searchRadius, $sentence) ?>

							<?php echo $sentence ?>


<?php } elseif ($type == 3) { ?>

							<div class="search-inputs-wrap">
<?php if ($el->option('enableKeywordSearch')) { ?>
									<?php echo $searchKeyword ?>

<?php } else { ?>
									<input type="hidden" name="s" value="" />
<?php } ?>

								<!--<div class="searchsubmit-wrapper">-->
									<div class="submit-main-button">
										<div class="searchsubmit2"><?php echo NTemplateHelpers::escapeHtml(__('Search', 'wplatte'), ENT_NOQUOTES) ?></div>
										<input type="submit" value="<?php echo NTemplateHelpers::escapeHtml(__('Search', 'wplatte'), ENT_COMPAT) ?>" class="searchsubmit" />
									</div>
								<!--</div>-->
							</div>

<?php if ($el->option('type') == 3) { if (($el->hasOption('description') and $el->option->description)) { if ($el->option->description) { ?>
										<p class="elm-maindesc"><?php echo $el->option->description ?></p>
<?php } } } ?>


							<div class="search-inputs-buttons">
								<div class="search-inputs-buttons-wrap">

<?php if ($el->option('enableCategorySearch')) { ?>
										<?php echo $searchCategory ?>

<?php } ?>

<?php if ($el->option('enableLocationSearch')) { ?>
										<?php echo $searchLocation ?>

<?php } ?>

<?php if ($el->option('enableRadiusSearch')) { ?>
										<?php echo $searchRadius ?>

<?php } ?>

								</div>
							</div>

<?php } else { ?>
							<div class="search-inputs-wrap">
<?php if ($el->option('enableKeywordSearch')) { ?>
									<?php echo $searchKeyword ?>

<?php } else { ?>
									<input type="hidden" name="s" value="" />
<?php } ?>

<?php if ($el->option('enableCategorySearch')) { ?>
									<?php echo $searchCategory ?>

<?php } ?>

<?php if ($el->option('enableLocationSearch')) { ?>
									<?php echo $searchLocation ?>

<?php } ?>
							</div>

<?php if ($el->option('enableRadiusSearch')) { ?>
								<?php echo $searchRadius ?>

<?php } ?>

<?php } ?>

						<input type="hidden" name="a" value="true" /> <!-- Advanced search -->
						<!-- <input type="hidden" name="lang" value="<?php echo NTemplateHelpers::escapeHtmlComment(AitLangs::getCurrentLanguageCode()) ?>"> --> <!-- Advanced search -->

<?php if ($selectedKey) { ?>
						<div class="searchinput search-input-width-hack" style="position: fixed; z-index: 99999; visibility: hidden" data-defaulttext="<?php echo NTemplateHelpers::escapeHtml(__('Search keyword', 'wplatte'), ENT_COMPAT) ?>
"><?php echo NTemplateHelpers::escapeHtml($selectedKey, ENT_NOQUOTES) ?></div>
<?php } else { ?>
						<div class="searchinput search-input-width-hack" style="position: fixed; z-index: 99999; visibility: hidden" data-defaulttext="<?php echo NTemplateHelpers::escapeHtml(__('Search keyword', 'wplatte'), ENT_COMPAT) ?>
"><?php echo NTemplateHelpers::escapeHtml(__('Search keyword', 'wplatte'), ENT_NOQUOTES) ?></div>
<?php } ?>
					</div>
<?php if ($type != 3) { ?>
					<div class="searchsubmit-wrapper">
						<div class="submit-main-button">
							<div class="searchsubmit2">
								<i class="icon-search"><svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i>
								<?php echo NTemplateHelpers::escapeHtml(__('Search', 'wplatte'), ENT_NOQUOTES) ?>

							</div>
							<input type="submit" value="<?php echo NTemplateHelpers::escapeHtml(__('Search', 'wplatte'), ENT_COMPAT) ?>" class="searchsubmit" />
						</div>
					</div>
<?php } ?>

				</div>
			</div>

		</form>
	</div>

</div>

<?php NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("ait-theme/elements/search-form/javascript", ""), array() + get_defined_vars(), $_l->templates['cs1y5qsryp'])->render() ?>

</div>
