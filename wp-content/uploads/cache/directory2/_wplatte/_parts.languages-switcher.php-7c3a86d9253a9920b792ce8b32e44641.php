<?php //netteCache[01]000602a:2:{s:4:"time";s:21:"0.56987700 1608561953";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:113:"/home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/parts/languages-switcher.php";i:2;i:1607214400;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.2";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:6:"4.0.19";}}}?><?php

// source file: /home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/parts/languages-switcher.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, 'a4dkxh6vxw')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($languages && count($languages) > 1) { ?>
	<div class="language-switcher">
		<div class="language-icons">
			<a href="#" role="button" class="language-icons__icon language-icons__icon_main <?php echo NTemplateHelpers::escapeHtml($lang->htmlClass, ENT_COMPAT) ?>">
				<svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
			</a>

			<ul class="language-icons__list">
<?php $iterations = 0; foreach ($languages as $lang) { ?>
				<li>
					<a hreflang="<?php echo NTemplateHelpers::escapeHtml($lang->slug, ENT_COMPAT) ?>
" href="<?php echo NTemplateHelpers::escapeHtml($lang->url, ENT_COMPAT) ?>" class="language-icons__icon <?php echo NTemplateHelpers::escapeHtml($lang->htmlClass, ENT_COMPAT) ?>
 <?php echo NTemplateHelpers::escapeHtml($lang->isCurrent ? 'current':null, ENT_COMPAT) ?>">
						<?php echo $lang->flag ?>

						<?php echo NTemplateHelpers::escapeHtml($lang->name, ENT_NOQUOTES) ?>

					</a>
				</li>
<?php $iterations++; } ?>
			</ul>
		</div>
	</div>
<?php } 