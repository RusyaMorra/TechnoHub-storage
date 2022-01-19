<?php
/**
* Liquid Themes Theme Framework
* The Liquid_Admin_Dashboard base class
*/

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

if ( !class_exists( 'Liquid_Elementor_Addons' ) && !defined( 'ELEMENTOR_VERSION' ) ){
	return;
}

class Liqıid_Admin_Elementor_Settings extends Liquid_Admin_Page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id = 'liquid-elementor';
		$this->page_title = esc_html__( 'Site Settings', 'hub' );
		$this->menu_title = esc_html__( 'Site Settings', 'hub' );
		$this->parent = 'liquid';
		$this->position = '45';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {

		if ($kit_id = get_option('elementor_active_kit')){
			wp_redirect(\Elementor\Plugin::$instance->documents->get( $kit_id )->get_edit_url());
		} else {
			printf('<p>Cannot found Elementor Kit. Please create or import kit.</p>');
		}
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Liqıid_Admin_Elementor_Settings;
