{var $href = get_permalink($post->id)}
{var $featuredImage = $post->imageUrl}
{var $title = $post->title}
{var $langLong = AitLangs::getCurrentLocale()}
{var $langShort = AitLangs::getCurrentLanguageCode()}

<div class="social-container">
	<div class="content">
	
		<div class="soc fb">
		
		{* FACEBOOK SOCIAL *}
		<div id="fb-root"></div>
		<script>(function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if(d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/{!$langLong}/sdk.js#xfbml=1&version=v2.0"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like" data-href="{!$href}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
		{* FACEBOOK SOCIAL *}
		
		</div>		
		
		<div class="soc twitter">
		
		{* TWITTER SOCIAL *}
		<script>!function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if(!d.getElementById(id)){ js = d.createElement(s); js.id = id; js.src = "https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);}}(document, "script", "twitter-wjs");</script>
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="{!$href}" data-lang="{!$langShort}">Tweet</a>
		{* TWITTER SOCIAL *}
			
		</div>	
		
		<div class="soc pinterest">
			
		{* PINTEREST SOCIAL *}
		<a data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url={!$href}&media={!$featuredImage}&description={!$title}"></a>
		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
		{* PINTEREST SOCIAL *}
			
		</div>	
			
	</div>
</div>

