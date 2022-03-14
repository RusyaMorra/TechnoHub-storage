<?php
/*
 * Export options
*/

$this->sections[] = array(
	'title' => esc_html__( 'Import/Export', 'hub' ),
	'desc' => esc_html__( 'Import/Export options', 'hub' ),
	'icon' => 'el-icon-arrow-down',
	'fields' => array(		

		array(
			'id'            => 'opt-import-export',
			'type'          => 'import_export',
			'title'         => esc_html__( 'Import / Export', 'hub' ),
			'full_width'    => false,
		),
	),
);
