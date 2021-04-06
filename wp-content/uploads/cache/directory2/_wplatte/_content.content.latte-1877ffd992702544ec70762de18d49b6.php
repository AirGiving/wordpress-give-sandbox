<?php //netteCache[01]000614a:2:{s:4:"time";s:21:"0.64962500 1608561953";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:125:"/home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/ait-theme/elements/content/content.latte";i:2;i:1607214400;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.2";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:6:"4.0.19";}}}?><?php

// source file: /home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/ait-theme/elements/content/content.latte

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '8kycr5ro40')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div id="primary" class="content-area">
	<div id="content" class="content-wrap" role="main">

<?php NCoreMacros::includeTemplate($currentTemplate, array('opts' => $element->options) + $template->getParameters(), $_l->templates['8kycr5ro40'])->render() ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("ait-theme/elements/content/javascript", ""), array() + get_defined_vars(), $_l->templates['8kycr5ro40'])->render() ;