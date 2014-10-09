<div class="wrap">
	<div class="postbox">
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
	<div class="postbox">
		<p>If this plugin has helped you out at all, please consider making a donation to encourage future updates.<br />Your generosity is appreciated!</p>
			<a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6UHZNUWTHW9W2');">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47">
			</a>
		<p>To report any issues with <strong>this plugin</strong>, please visit the <a href="http://wordpress.org/support/plugin/adsense-in-post-ads-by-oizuled">support page on WordPress.org</a>.</p>
		<p>For all other WordPress support, please check out the following <a href="https://surpriseazwebservices.com/services/wordpress-site-install/">site set-up</a>, <a href="https://surpriseazwebservices.com/services/wordpress-maintenance-support/">WordPress Maintenance Support</a>, and other <a href="https://surpriseazwebservices.com/services/">WordPress services</a>.</p>
		<p><a href="https://twitter.com/SurpriseWebSvc" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @SurpriseWebSvc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
	</div>
</div>