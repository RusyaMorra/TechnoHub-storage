<?php
/*
 * GDPR
*/

if ( !class_exists ( 'Liquid_Gdpr' ) ){
	$gdpr_desc = sprintf(
		wp_kses_post( '<div class="notice-red"> To use this feature, you need to install and activate the <strong>Liquid GDPR</strong> plugin. <a href="%1$s" target="_blank"> Install Plugin</a></div>', 'hub' ),
		admin_url( 'admin.php?page=liquid-plugins' )
	);
	$gdpr_fields = array();

} else {
	$gdpr_desc = '';
	$gdpr_fields = array(


		array(
			'id' => 'enable-gdpr',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Enable GDPR', 'hub' ),
			'subtitle' => esc_html__( 'Switch off to disable the GDPR Box', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'on'
		),
		array(
			'id'       => 'gdpr-button',
			'type'     => 'text',
			'title'    => esc_html__( 'Accept Button Text', 'hub' ),
			'subtitle' => '',
			'default'  => esc_html__( 'Accept', 'hub' ),
			'placeholder' => esc_html__( 'Accept', 'hub' ),
			'required' => array(
				'enable-gdpr',
				'=',
				'on'
			),
		),
		array(
			'id'       => 'gdpr-content',
			'type'     => 'textarea',
			'title'    => esc_html__( 'Content', 'hub' ),
			'subtitle' => '',
			'default'  => esc_html__( '🍪 This website uses cookies to improve your web experience.', 'hub' ),
			'placeholder' => esc_html__( '🍪 This website uses cookies to improve your web experience.', 'hub' ),
			'required' => array(
				'enable-gdpr',
				'=',
				'on'
			),
		),
	
	);
}

$this->sections[] = array(
	'title' => esc_html__( 'GDPR Alert', 'hub' ),
	'icon' => 'el-icon-lock',
	'desc' => $gdpr_desc,
	'fields' => $gdpr_fields
);
