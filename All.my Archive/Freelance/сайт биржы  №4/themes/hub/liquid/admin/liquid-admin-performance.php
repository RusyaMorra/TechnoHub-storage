<?php
/**
* Liquid Themes Theme Framework
* The Liquid_Admin_Dashboard base class
*/

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	return;
}

class Liquid_Admin_Performances extends Liquid_Admin_Page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id = 'liquid-performances';
		$this->page_title = esc_html__( 'Performance', 'hub' );
		$this->menu_title = esc_html__( 'Performance', 'hub' );
		$this->parent = 'liquid';
		$this->position = '60';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
		wp_redirect(admin_url( 'customize.php?autofocus[panel]=optimization&autofocus[section]=optimization' ));
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Liquid_Admin_Performances;
