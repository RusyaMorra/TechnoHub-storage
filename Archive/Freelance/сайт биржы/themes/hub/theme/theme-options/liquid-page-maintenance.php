<?php
/*
 * Page Maintenance
*/

// Hours
$hours = array();
for ($i = 0; $i <= 24; $i++){

	$hour = $i;
	if ($i < 10) {
		$hour = '0'.$i;
	}
	$hours[(string)$hour] = (string)$hour;
}

// Minutes
$minutes = array();
for ($i = 0; $i < 60; $i++){

	$min = $i;
	if ($i < 10) {
		$min = '0'.$i;
	}
	$minutes[(string)$min] = (string)$min;
}

$this->sections[] = array (
	'title'  => esc_html__( 'Maintenance Page', 'hub' ),
	'subsection' => true,
	'fields' => array(

		array(
			'id' => 'page-maintenance-enable',
			'type'	 => 'button_set',
			'title' => esc_html__('Enable Maintenance Mode', 'hub'),
			'subtitle' => esc_html__('If on, the frontend shows maintenance mode page only.', 'hub'),
			'desc' => esc_html__('Only administrator will be able to visit site. If you want to check if maintenance mode is enabled you have to logout.', 'hub'),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default' => 'on'
		),

		array(
			'id' => 'page-maintenance-mode-till',
			'type'	 => 'button_set',
			'title' => esc_html__('Enable Till', 'hub'),
			'subtitle' => esc_html__('If on, the frontend shows maintenance mode page only.', 'hub'),
			'desc' => esc_html__('Only administrator will be able to visit site. If you want to check if maintenance mode is enabled you have to logout.', 'hub'),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default' => 'on'
		),

		array(
			'id'        => 'page-maintenance-mode-till-date',
			'type'      => 'date',
			'title'     => esc_html__('Date (mm/dd/yyyy)', 'hub'),
			'default'   => date('m/d/Y'),
			'required' => array(
				'page-maintenance-mode-till',
				'equals',
				'on'
			)
		),

		array(
			'id'        => 'page-maintenance-mode-till-hour',
			'type'      => 'select',
			'title'     => esc_html__('Hour', 'hub'),
			'options' => $hours,
			'default'   => '00',
			'required' => array(
				'page-maintenance-mode-till',
				'equals',
				'on'
			)
		),

		array(
			'id'        => 'page-maintenance-mode-till-minutes',
			'type'      => 'select',
			'title'     => esc_html__('Minutes', 'hub'),
			'options' => $minutes,
			'default'   => '00',
			'required' => array(
				'page-maintenance-mode-till',
				'equals',
				'on'
			)
		),

		array(
			'id'       => 'page-maintenance-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Page Title', 'hub' ),
			'subtitle' => '',
			'default' => wp_kses_post( __( 'We&#39;ll Be Right Back.', 'hub') ),
		),

		array(
			'id'       => 'page-maintenance-content',
			'type'     => 'editor',
			'title'    => esc_html__( 'Page Content', 'hub' ),
			'subtitle' => '',
			'default' => wp_kses_post( __( '<p>Our team is working hard to be able to back in a couple hours. <br> Thanks for your patience.</p>', 'hub' ) ),
		),

		array(
			'id'       => 'page-maintenance-background-type',
			'type'     => 'select',
			'title'    => esc_html__( 'Background Type', 'hub' ),
			'options' => array(
				'solid'    => esc_html__( 'Solid', 'hub' ),
				'gradient' => esc_html__( 'Gradient', 'hub' ),
				'image'    => esc_html__( 'Image', 'hub' ),
			),
			'default' => 'image'
		),

		array(
			'id'=>'page-maintenance-bar-bg',
			'type' => 'media',
			'url' => true,
			'title' => esc_html__('Background', 'hub'),
			'required' => array(
				'page-maintenance-background-type',
				'equals',
				'image'
			),
		),

		array(
			'id'=>'page-maintenance-bar-solid',
			'type' => 'color',
			'url' => true,
			'title' => esc_html__('Background', 'hub'),
			'required' => array(
				'page-maintenance-background-type',
				'equals',
				'solid'
			),
		),

		array(
			'id'=>'page-maintenance-bar-gradient',
			'type' => 'gradient',
			'url' => true,
			'title' => esc_html__('Background', 'hub'),
			'required' => array(
				'page-maintenance-background-type',
				'equals',
				'gradient'
			),
		),

		array(
			'id' => 'page-maintenance-identities',
			'type' => 'repeater',
			'group_values' => true,
			'title' => esc_html__('Social identities', 'hub'),
			'fields' => array(

				array(
					'id'       => 'title',
					'type'     => 'text',
					'title'    => esc_html__( 'Title', 'hub' )
				),

				array(
					'id'       => 'url',
					'type'     => 'text',
					'title'    => esc_html__( 'Url', 'hub' )
				),
			)
		)
	)
);
