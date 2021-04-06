<?php //netteCache[01]000607a:2:{s:4:"time";s:21:"0.55450200 1608561953";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:118:"/home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/portal/parts/header-resources.php";i:2;i:1607214400;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.2";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:6:"4.0.19";}}}?><?php

// source file: /home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/portal/parts/header-resources.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '2wbwzryy7u')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($options->theme->header->displayHeaderResources) { $args = array(
	'lang'           => AitLangs::getCurrentLanguageCode(),
	'post_type'      => 'ait-item',
	'post_status'	 => 'publish',
	'posts_per_page' => -1,
	'fields'		 => 'ids',
) ?>

<?php $resources = get_posts($args) ;$url = $options->theme->header->headerResourcesButtonLink ;$link = is_user_logged_in() ? admin_url('post-new.php?post_type=ait-item') : get_permalink( function_exists('pll_get_post') ? pll_get_post( $url ) : $url ) ?>

<div class="header-resources">
	<a href="<?php echo $link ?>" class="resources-wrap">
		<span class="resources-data">
			<span class="resources-count" title="<?php echo NTemplateHelpers::escapeHtml(__('Resources', 'wplatte'), ENT_COMPAT) ?>
"><?php echo NTemplateHelpers::escapeHtml(count($resources), ENT_NOQUOTES) ?></span>
		</span>

		<span href="<?php echo $link ?>" class="resources-button ait-sc-button"><?php echo NTemplateHelpers::escapeHtml(__('Add', 'wplatte'), ENT_NOQUOTES) ?></span>
	</a>
</div>
<?php } 