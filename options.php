<style>
.leftsettings{
	width: 73.5%;
	float: left;
}
.rightsettings{
	width: 25%;
	float: right;
}
.upgrade {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:15px;
	font-weight:bold;
	padding:9px 12px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.upgrade:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.upgrade:active {
	position:relative;
	top:1px;
}
</style>
<div class="wrap">
	<div class="postbox leftsettings">
		<h2>AdSense In-Post Options</h2>
		<p>You can enter up to three different sets of AdSense code to use in your pages and posts. You can create a number of different styled image or text based ads. For help deciding which styles or sizes will work best for you, please visit Google's <a href="https://support.google.com/adsense/topic/1307421?hl=en&ref_topic=3384747">AdSense Help page</a>.</p>
		<form method='post' action='options.php'>
			<?php wp_nonce_field( 'update-options' ); ?>
			<?php settings_fields( 'oizuled-adsense-option-group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Enter the AdSense code provided to you from your <a href="https://www.google.com/adsense" target="_blank">Google AdSense account</a>.</th>
					<td><textarea rows="5" cols="36" name="oizuled-adsense-unit-a"><?php echo get_option('oizuled-adsense-unit-a'); ?></textarea><br />Use <strong>[AdSense-A]</strong> to display this ad.</td>
				</tr>
				<tr valign="top">
					<th scope="row">Enter the AdSense code provided to you from your <a href="https://www.google.com/adsense" target="_blank">Google AdSense account</a>.</th>
					<td><textarea rows="5" cols="36" name="oizuled-adsense-unit-b"><?php echo get_option('oizuled-adsense-unit-b'); ?></textarea><br />Use <strong>[AdSense-B]</strong> to display this ad.</td>
				</tr>
				<tr valign="top">
					<th scope="row">Enter the AdSense code provided to you from your <a href="https://www.google.com/adsense" target="_blank">Google AdSense account</a>.</th>
					<td><textarea rows="5" cols="36" name="oizuled-adsense-unit-c"><?php echo get_option('oizuled-adsense-unit-c'); ?></textarea><br />Use <strong>[AdSense-C]</strong> to display this ad.</td>
				</tr>
				<tr valign="top">
					<td colspan="2"><input type="hidden" name="action" value="update" /><?php submit_button(); ?></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="postbox rightsettings">
		<table>
			<tr valign="top">
				<th>
					<h3>Want to Boost Revenue?</h3>
				</th>
			</tr>
			<tr valign="top">
				<td>
					Allow authors on your site to earn revenue from ads in their posts. Authors can use a shortcode the same way you use the AdSense shortcodes in this plugin.<br /><br />
					Give your authors an incentive to write posts that will get visitors coming back to your site and be able to increase your own ad revenue!<br /><br />
					<a href="https://surpriseazwebservices.com/plugins/revenue-share-ad-manager/" target="_blank" class="upgrade">Get Revenue Share Ad Manager Now!</a>
				</td>
			</tr>
			<tr valign="top">
				<th>
					<h3>Support</h3>
				</th>
			</tr>
			<tr valign="top">
				<td>
					If this plugin has helped you out at all, please consider making a donation to encourage future updates.<br /><br />Your generosity is appreciated!<br /><br />
					<a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UHZNUWTHW9W2');">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47"></a><br />
				</td>
			</tr>
			<tr valign="top">
				<td>
					To report any issues with <strong>this plugin</strong>, please visit the <a href="http://wordpress.org/support/plugin/adsense-in-post-ads-by-oizuled">support page on WordPress.org</a>.<br /><br />
					<a href="https://twitter.com/SurpriseWebSvc" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @SurpriseWebSvc</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</td>
			</tr>
			<?php if (class_exists('Woocommerce')) { ?>
			<tr valign="top">
				<th>
					<h3>Use WooCommerce?</h3>
				</th>
			</tr>
			<tr valign="top">
				<td>
					Collect information from customers at checkout depending on the products they are purchasing. Use this to get information like a custom engraving, add a note to a gift item, choose a delivery date, and more!<br /><br />
					<a href="https://surpriseazwebservices.com/plugins/conditional-woo-checkout-field-pro/" target="_blank" class="upgrade">Get Conditional Woo Checkout Field Now!</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>