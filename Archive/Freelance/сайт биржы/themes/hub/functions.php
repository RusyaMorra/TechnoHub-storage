<?php

/**
 * The Liquid Themes Hub Theme
 *
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Text Domain: 'hub'
 * Domain Path: /languages/
 */
update_option( 'hub_purchase_code', '**********' );
update_option( 'hub_purchase_code_status', 'valid' );
update_option( 'hub_register_email', '**********@mail.com' );
$messagelc = '<div class="lqd-dsd-confirmation success">
				<h4>Thanks for the verification!</h4>
				<p>You can now enjoy Hub and build great websites. Looking for help? Visit <a href="https://docs.liquid-themes.com/" target="_blank">our help center</a> or <a href="https://liquidthemes.freshdesk.com/support/home" target="_blank">submit a ticket</a>.</p>
			</div><!-- /.lqd-dsd-confirmation success -->';
set_transient( 'hub_license_message', $messagelc, ( 60 * 60 * 24 ) );
// Starting The Engine / Load the Liquid Framework ----------------
include_once( get_template_directory() . '/liquid/liquid-init.php' );