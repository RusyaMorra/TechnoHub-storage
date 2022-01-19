<?php

/*
 * Header Layout Section
*/
$this->sections[] = array(
	'title'      => esc_html__( 'Select the header', 'hub' ),
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'header-enable-switch',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Header', 'hub' ),
			'subtitle' => esc_html__( 'Switch off to hide the header on your website.', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'on'
		),		
		array(
			'id'=>'header-template',
			'type' => 'select',
			'title' => esc_html__('Header', 'hub'),
			'subtitle'=> esc_html__('Select a header template for your website', 'hub'),
			'data' => 'post',
			'args' => array( 'post_type' => 'liquid-header', 'posts_per_page' => -1 )
		),
		array(
			'id'      => 'header-overlay',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Overlay?', 'hub' ),
			'options' => array(
				''    => esc_html__( 'No', 'hub' ),
				'main-header-overlay' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => ''
		),
	)
);
