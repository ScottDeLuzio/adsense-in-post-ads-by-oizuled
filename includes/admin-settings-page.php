<?php
/* Prevent direct access to the plugin */
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}

/* Settings Page */

// Hook for adding admin menus
add_action('admin_menu', 'adsense_inpost_ads_add_pages');

// action function for above hook
function adsense_inpost_ads_add_pages() {
	// Add a new submenu under Settings:
	global $aipa_settings_page;
	$aipa_settings_page = add_options_page('AdSense In-Post Options','AdSense In-Post', 'manage_options', 'inpost-ads', 'adsense_inpost_ads_settings_page');
}

function adsense_inpost_ads_enqueues() {
	// Add the admin style if on the settings page
	global $aipa_settings_page;
	$current_screen = get_current_screen();
	if ( $current_screen->id == $aipa_settings_page ) {
		wp_enqueue_style( 'adsense_inpost_ads_style', ADSENSE_INPOST_ADS_PLUGIN_URL . '/includes/css/styles.css', '', ADSENSE_INPOST_ADS_VERSION );
	}
}
add_action( 'admin_enqueue_scripts', 'adsense_inpost_ads_enqueues' );

// Display the page content for the AdSense submenu
function adsense_inpost_ads_settings_page() {
	global $aip_options; ?>
	<div class="wrap">
		<h2><?php _e( 'In-Post Ads Options', 'adsense-inpost-ads' ); ?></h2>
		<div class="aipa-settings-container">
			<div class="aipa-settings-left">
				<p><?php _e( 'You can enter up to three different sets of ad codes to use in your pages and posts.<br />You can create a number of different styled image or text based ads.', 'adsense-inpost-ads' ); ?></strong></p>
				<form method='post' action='options.php'>
					<?php wp_nonce_field( 'update-options' ); ?>
					<?php settings_fields( 'adsense_inpost_ads_settings_group' ); ?>
					<table class="form-table">
						<tbody>
							<?php do_action( 'aip_settings' ); ?>
							
							<tr valign="top">
								<td colspan="2"><input type="hidden" name="action" value="update" /><?php submit_button(); ?></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="aipa-settings-right">
				<div class="aipa-upgrade-box">
					<h3><?php _e( 'WP In-Post Ads Premium Plugin', 'adsense-inpost-ads' ); ?></h3>
					<p><?php _e( 'This plugin has a premium version, which has a number of upgrades to make managing your ads much easier.', 'adsense-inpost-ads' ); ?></p>
					<ul>
						<li><?php _e( 'Unlimited ad units!', 'adsense-inpost-ads' ); ?></li>
						<li><?php _e( 'Ads are inserted into your posts where you want them, automatically - including custom post types. No more shortcodes!', 'adsense-inpost-ads' ); ?></li>
						<li><?php _e( 'Each author can have their own ad - great for multi-author blogs!', 'adsense-inpost-ads' ); ?></li>
						<li><?php _e( 'Never forget to insert an ad again!', 'adsense-inpost-ads' ); ?></li>
					</ul>
					<p><a href="https://wpinpostads.com/?utm_source=wp-plugin&utm_medium=adsense-inpost-ads&utm_campaign=upgrade-box"><?php _e( 'Find out more about WP In-Post Ads', 'adsense-inpost-ads' );?></a></p>
				</div>
				<hr class="aipa-divider" />
				<div class="aipa-settings-email-signup">
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//wpinpostads.us15.list-manage.com/subscribe/post?u=a66530c7bb203bbb4f0dbf7c3&amp;id=5455f68193&amp;SIGNUP=PluginSignup" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
						<h2><?php _e( 'Maximize your site\'s ad revenue', 'adsense-inpost-ads' ); ?></h2>
						<p><?php _e( 'Get tips on how to increase your blog\'s ad revenue by subscribing to our newsletter. No spam, promise!', 'adsense-inpost-ads' ); ?></p>
					<div class="mc-field-group">
						<label for="mce-EMAIL"><?php _e( 'Email Address', 'adsense-inpost-ads' ); ?></label><br />
						<?php
							$current_user 	= wp_get_current_user();
							$user_email 	= $current_user->user_email;
							$user_firstname	= $current_user->user_firstname;
							$user_lastname	= $current_user->user_lastname;
						?>
						<input type="email" value="<?php echo $user_email; ?>" name="EMAIL" class="required email" id="mce-EMAIL">
						<input type="hidden" value="<?php echo $user_firstname; ?>" name="FNAME">
						<input type="hidden" value="<?php echo $user_lastname; ?>" name="LNAME">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a66530c7bb203bbb4f0dbf7c3_5455f68193" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div>

					<!--End mc_embed_signup-->
				</div>
			</div>
		</div>
	</div> 
	<?php
}

add_action( 'aip_settings', 'adsense_ad_blocks' );
function adsense_ad_blocks(){ 
	global $aip_options; ?>
	<tr valign="top">
		<th scope="row"><?php _e( 'Enter the ad code provided to you from your <a href="https://www.google.com/adsense" target="_blank">Google AdSense account</a> or other ad network.', 'adsense-inpost-ads' ); ?></th>
		<td>
			<textarea rows="5" cols="36" name="aip_settings[unit_a]"><?php echo $aip_options[ 'unit_a' ]; ?></textarea><br /><?php _e( 'Use <strong>[AdSense-A]</strong> to display this ad.', 'adsense-inpost-ads' ); ?>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Enter the ad code provided to you from your <a href="https://www.google.com/adsense" target="_blank">Google AdSense account</a> or other ad network.', 'adsense-inpost-ads' ); ?></th>
		<td>
			<textarea rows="5" cols="36" name="aip_settings[unit_b]"><?php echo $aip_options[ 'unit_b' ]; ?></textarea><br /><?php _e( 'Use <strong>[AdSense-B]</strong> to display this ad.', 'adsense-inpost-ads' ); ?>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Enter the ad code provided to you from your <a href="https://www.google.com/adsense" target="_blank">Google AdSense account</a> or other ad network.', 'adsense-inpost-ads' ); ?></th>
		<td>
			<textarea rows="5" cols="36" name="aip_settings[unit_c]"><?php echo $aip_options[ 'unit_c' ]; ?></textarea><br /><?php _e( 'Use <strong>[AdSense-C]</strong> to display this ad.', 'adsense-inpost-ads' ); ?>
		</td>
	</tr>
	<?php
}

function adsense_inpost_ads_register_settings() {
	// creates our settings in the options table
	register_setting( 'adsense_inpost_ads_settings_group', 'aip_settings' );
}
add_action( 'admin_init', 'adsense_inpost_ads_register_settings' );