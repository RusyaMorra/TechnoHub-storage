<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 * @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
 * @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
 * @license   Licensed GPLv3 for Open Source Use
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */
$wizard = new Merlin(

	$config = array(
		'directory'            => 'merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'liquid-setup', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'liquid', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode'             => false, // Enable development mode for testing.
		'license_step'         => true, // EDD license activation step.
		'license_required'     => true, // Require the license activation step.
		'license_help_url'     => 'https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-', // URL for the 'license-tooltip'.
		'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
		'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
		'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Setup Wizard', 'hub' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'hub' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'hub' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'hub' ),

		'btn-skip'                 => esc_html__( 'Skip', 'hub' ),
		'btn-next'                 => esc_html__( 'Next', 'hub' ),
		'btn-start'                => esc_html__( 'Start', 'hub' ),
		'btn-no'                   => esc_html__( 'Cancel', 'hub' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'hub' ),
		'btn-child-install'        => esc_html__( 'Install', 'hub' ),
		'btn-content-install'      => esc_html__( 'Install', 'hub' ),
		'btn-import'               => esc_html__( 'Import', 'hub' ),
		'btn-license-activate'     => esc_html__( 'Activate', 'hub' ),
		'btn-license-skip'         => esc_html__( 'Later', 'hub' ),

		/* translators: Theme Name */
		'license-header'         => esc_html__( 'Activate Theme', 'hub' ),
		'license-header2'         => esc_html__( 'Activate Your Theme', 'hub' ),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__( '%s is Activated', 'hub' ),
		/* translators: Theme Name */
		'license%s'                => esc_html__( 'Please add your Envato purchase code along with your email address to confirm the purchase.', 'hub' ),
		'license-label'            => esc_html__( 'License key', 'hub' ),
		'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'hub' ),
		'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'hub' ),
		'license-tooltip'          => esc_html__( 'Need help?', 'hub' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Let\'s Get You Started', 'hub' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'hub' ),
		'welcome%s'                => esc_html__( 'Thanks for purchasing Hub! You can now register your product in 10 seconds to install plugins, import demos and unlock exlusive features.', 'hub' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'hub' ),

		'child-header'             => esc_html__( 'Install Child Theme', 'hub' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!', 'hub' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'hub' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'hub' ),
		'child-action-link'        => esc_html__( 'Learn about child themes', 'hub' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'hub' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'hub' ),

		'plugins-header'           => esc_html__( 'Install Plugins', 'hub' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'hub' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get you started.', 'hub' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'hub' ),
		'plugins-action-link'      => esc_html__( 'View Plugins', 'hub' ),

		'import-header'            => esc_html__( 'Import Content', 'hub' ),
		'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'hub' ),
		'import-action-link'       => esc_html__( 'Advanced', 'hub' ),

		'ready-header'             => esc_html__( 'You\'re Ready!', 'hub' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'hub' ),
		'ready-action-link'        => esc_html__( 'Extras', 'hub' ),
		'ready-big-button'         => esc_html__( 'View your website', 'hub' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.liquid-themes.com/', esc_html__( 'Help center', 'hub' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://liquidthemes.freshdesk.com/support/home', esc_html__( 'Get Theme Support', 'hub' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'hub' ) ),
	)
);