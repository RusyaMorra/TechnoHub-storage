<?php
/*
 * Slider Section
*/

$sections[] = array(
	'post_types' => array( 'post', 'page' ),
	'title' => esc_html__('Sliders', 'hub'),
	'icon' => 'el-icon-adjust-alt',
	'fields' => array(

		array(
 			'id'=>'slider-type',
 			'type' => 'select',
 			'title' => esc_html__('Slider Type', 'hub'),
 			'subtitle'=> esc_html__('Select the type of slider that displays.', 'hub'),
			'options' => array(
				'no' => esc_html__( 'No Slider', 'hub' ),
				'liquid' => esc_html__( 'liquid Slider', 'hub' ),
				'rev' => esc_html__( 'Revolution Slider', 'hub' )
			),
			'default' => 'no'
		),

		array(
 			'id'=>'slider-liquid',
 			'type' => 'select',
 			'title' => esc_html__('Select liquid Slider', 'hub'),
 			'subtitle'=> esc_html__('Select the unique name of the slider.', 'hub'),
			'options' => array(
				'no' => esc_html__( 'Select a slider', 'hub' )
			),
			'required' => array(
				'slider-type',
				'equals',
				'liquid'
			),
			'default' => 'no'
		),

		array(
 			'id'=>'slider-rev',
 			'type' => 'select',
 			'title' => esc_html__('Select Revolution Slider', 'hub'),
 			'subtitle'=> esc_html__('Select the unique name of the slider.', 'hub'),
			'options' => array(
				'no' => esc_html__( 'Select a slider', 'hub' )
			),
			'required' => array(
				'slider-type',
				'equals',
				'rev'
			),
			'default' => 'no'
		),

		array(
 			'id'=>'slider-position',
 			'type' => 'button_set',
 			'title' => esc_html__('Slider Position', 'hub'),
 			'subtitle'=> esc_html__('Select if the slider shows below or above the header.', 'hub'),
			'options' => array(
				'default' => esc_html__( 'Default', 'hub' ),
				'below' => esc_html__( 'Below', 'hub' ),
				'above' => esc_html__( 'Above', 'hub' )
			),
			'required' => array(
				'slider-type',
				'not',
				'no'
			),
			'default' => 'default'
		)
	)
);
