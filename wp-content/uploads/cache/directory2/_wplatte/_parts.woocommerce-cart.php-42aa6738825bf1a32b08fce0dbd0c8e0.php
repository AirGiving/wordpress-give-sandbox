<?php //netteCache[01]000600a:2:{s:4:"time";s:21:"0.57218700 1608561953";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:111:"/home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/parts/woocommerce-cart.php";i:2;i:1607214400;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.2";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:6:"4.0.19";}}}?><?php

// source file: /home/customer/www/evernewjia.com/public_html/airgiving/wp-content/themes/directory2/parts/woocommerce-cart.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, 'dg7f292nxm')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (AitWoocommerce::enabled() and !AitWoocommerce::currentPageIs('cart') and !AitWoocommerce::currentPageIs('checkout')) { ?>
<div class="ait-woocommerce-cart-widget">
	<div id="ait-woocommerce-cart-wrapper"<?php if ($_l->tmp = array_filter(array(AitWoocommerce::cartGetItemsCount() == 0 ? 'cart-empty':null, 'cart-wrapper'))) echo ' class="' . NTemplateHelpers::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT) . '"' ?>>
		<div id="ait-woocommerce-cart-header" class="cart-header">
			<svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>

			<span id="ait-woocommerce-cart-info" class="cart-header-info">
				<span id="ait-woocomerce-cart-items-count" class="cart-count"><?php echo NTemplateHelpers::escapeHtml(AitWoocommerce::cartGetItemsCount(), ENT_NOQUOTES) ?></span>
			</span>
		</div>
		<div id="ait-woocommerce-cart" class="cart-content" style="display: none">
			<?php echo AitWoocommerce::cartDisplay() ?>


<?php if (AitWoocommerce::cartGetItemsCount() == 0) { ?>
				<a href="<?php echo NTemplateHelpers::escapeHtml(get_permalink(AitWoocommerce::getPage('shop')), ENT_COMPAT) ?>
" class="ait-button shop"><?php echo NTemplateHelpers::escapeHtml(__  (('Shop'), 'wplatte'), ENT_NOQUOTES) ?></a>
<?php } ?>
		</div>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function() {
			var $cart = jQuery('#ait-woocommerce-cart-wrapper');

			if (!$cart.hasClass('cart-empty')) return

			jQuery(document.body).on('added_to_cart', function() {
				$cart.removeClass('cart-empty');
			});
		});
	</script>
</div>
<?php } 