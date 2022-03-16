<?php
/*
 * Page 404
*/

$this->sections[] = array (
	'title'  => esc_html__( '404 Page', 'hub' ),
	'subsection' => true,
	'fields' => array(
		array(
			'id'       => 'error-404-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Title', 'hub' ),
			'subtitle' => '',
			'default' => '404'
		),
		array(
			'id'       => 'error-404-subtitle',
			'type'     => 'text',
			'title'    => esc_html__( 'Heading', 'hub' ),
			'subtitle' => '',
			'default' => 'Looks like you are lost.'
		),
		array(
			'id'       => 'error-404-content',
			'type'     => 'editor',
			'title'    => esc_html__( 'Content', 'hub' ),
			'subtitle' => '',
			'default' => '<p>We can’t seem to find the page you’re looking for.</p>'
		),
		array(
			'id' => 'error-404-enable-btn',
			'type'	 => 'button_set',
			'title' => esc_html__('Button', 'hub'),
			'subtitle' => esc_html__('Switch on to display the "back to home" button.', 'hub'),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default' => 'on'
		),

		array(
			'id'       => 'error-404-btn-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Button Title', 'hub' ),
			'subtitle' => '',
			'default' => 'Back to home',
			'required' => array(
				'error-404-enable-btn',
				'equals',
				'on'
			)
		),
	)
);
