<?php
/*
 * Preheader Section
*/

$this->sections[] = array(
	'title' => esc_html__('Preheader', 'hub'),
	'desc' => esc_html__('Change the preheader section configuration.', 'hub'),
	'icon' => 'el-icon-cog',
	'fields' => array(

		array(
			'id' => 'preheader-enable-switch',
			'type' => 'switch', 
			'title' => esc_html__('Enable preheader', 'hub'),
			'subtitle' => esc_html__('If on, this layout part will be displayed.', 'hub'),
			'default' => 1,
		),
		
	), // #fields
);
