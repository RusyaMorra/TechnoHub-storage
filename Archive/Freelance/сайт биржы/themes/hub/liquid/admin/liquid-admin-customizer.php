<?php
/**
* Liquid Themes Theme Framework
* The Liquid_Admin_Dashboard base class
*/

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

class Liquid_Admin_Live_Customizer extends Liquid_Admin_Page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id = 'liquid-live-customizer';
		$this->page_title = esc_html__( 'Live Customizer', 'hub' );
		$this->menu_title = esc_html__( 'Live Customizer', 'hub' );
		$this->parent = 'liquid';
		$this->position = '50';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
		wp_redirect(admin_url( 'customize.php' ));
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Liquid_Admin_Live_Customizer;
