<?php //netteCache[01]000596a:2:{s:4:"time";s:21:"0.53637800 1608561953";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:107:"/home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/parts/social-icons.php";i:2;i:1607214400;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.2";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:6:"4.0.19";}}}?><?php

// source file: /home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/parts/social-icons.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '3lgrhp5v15')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($options->theme->social->enableSocialIcons) { ?>
<div class="social-icons <?php echo NTemplateHelpers::escapeHtml(isset($class) ? $class : '', ENT_COMPAT) ?>">
	<a href="#" class="social-icons-toggle ait-toggle-hover"><i class="icon-share"><svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i></a>

	<ul><!--
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator(array_filter((array) $options->theme->social->socIcons)) as $icon) { ?>
			--><li>
				<a href="<?php echo NTemplateHelpers::escapeHtml($icon->url, ENT_COMPAT) ?>" <?php if ($options->theme->social->socIconsNewWindow) { ?>
target="_blank"<?php } ?> class="icon-<?php echo NTemplateHelpers::escapeHtml($iterator->getCounter(), ENT_COMPAT) ?>
" onmouseover="this.style.backgroundColor='<?php echo $icon->iconColor ?>'" onmouseout="this.style.backgroundColor=''">
					<?php if ($icon->icon) { ?><i class="fa <?php echo NTemplateHelpers::escapeHtml($icon->icon, ENT_COMPAT) ?>
"></i><?php } ?>

					<span class="s-title"><?php echo NTemplateHelpers::escapeHtml($icon->title, ENT_NOQUOTES) ?></span>
				</a>
			</li><!--
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	--></ul>
</div>
<?php } 