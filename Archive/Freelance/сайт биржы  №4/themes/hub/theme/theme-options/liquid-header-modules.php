<?php
/*
 * Header Modules Section
*/

$this->sections[] = array(
	'title'      => esc_html__( 'Modules', 'hub' ),
	'subsection' => true,
	'fields'     => array(
		
		array(
			'id'       => 'header-enable-social',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Header Social', 'hub' ),
			'subtitle' => esc_html__( 'If on, will display social links in header.', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
		),
		
		array(
			'id' => 'header-social-links',
			'type' => 'repeater',
			'title'    => esc_html__( 'Social Links', 'hub' ),
			'subtitle' => esc_html__( 'Add social links to display in header', 'hub' ),
			'sortable' => true,
			'group_values' => false,
			'required'  => array(
				'header-enable-social', 
				'equals', 
				'on'
			),
			'fields' => array(

				array(
					'id'    => 'social_label',
					'type'  => 'text',	
					'title' => esc_html__( 'Label', 'hub' ),
					'placeholder' => esc_html__( 'Link text', 'hub' ),
				),
				
				array(
					'id' => 'social_icon',
					'type' => 'iconpicker',
					'title'    => esc_html__( 'Icon', 'hub' ),
					'placeholder' => esc_html__( 'Select an icon', 'hub' ),
					'data'  => 'social-icons',
				),
				
				array(
					'id'    => 'social_url',
					'type'  => 'text',	
					'title' => esc_html__( 'URL', 'hub' ),
				),
				
			)
		),		
		
		array(
			'id'       => 'header-enable-button',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Header Button', 'hub' ),
			'subtitle' => esc_html__( 'If on, will display buttons in header.', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
		),
		
		array(
			'id' => 'header-button',
			'type' => 'repeater',
			'title'    => esc_html__( 'Buttons', 'hub' ),
			'subtitle' => esc_html__( 'Add buttons to display in header', 'hub' ),
			'sortable' => true,
			'group_values' => false,
			'required'  => array(
				'header-enable-button', 
				'equals', 
				'on'
			),
			'fields' => array(

				array(
					'id'    => 'button_label',
					'type'  => 'text',	
					'title' => esc_html__( 'Label', 'hub' ),
					'placeholder' => esc_html__( 'Button text', 'hub' ),
				),
				
				array(
					'id' => 'button_icon',
					'type' => 'iconpicker',
					'title'    => esc_html__( 'Icon', 'hub' ),
					'placeholder' => esc_html__( 'Select an icon', 'hub' ),
				),
				
				array(
					'id'    => 'button_url',
					'type'  => 'text',	
					'title' => esc_html__( 'URL', 'hub' ),
				),
				
			)
		),
		
		array(
			'id'       => 'header-enable-text',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Header Text', 'hub' ),
			'subtitle' => esc_html__( 'If on, will display text in header.', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
		),
		
		array(
			'id'       => 'header-text',
			'type'	   => 'textarea',
			'title'    => esc_html__( 'Header Text', 'hub' ),
			'required'  => array(
				'header-enable-text', 
				'equals', 
				'on'
			),
		),
		
	)
);	
