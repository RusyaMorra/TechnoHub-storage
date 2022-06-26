<?php
/*
 * Optimization Section
*/


$this->sections[] = array(
    'title'  => esc_html__('Performance', 'hub'),
    'icon'   => 'el el-dashboard'  
);
if ( !class_exists( 'Liquid_Elementor_Addons' ) && !defined( 'ELEMENTOR_VERSION' )){
$this->sections[] = array(
    'title'  => esc_html__( 'Optimization', 'hub' ),
    'subsection' => true,
    'desc' => esc_html__( 'We recommend keeping the optimization options disabled while developing the website. You can enable this option to boost the performance once you are done with the development.', 'hub' ),  
    'fields' => array(
        array(
            'id' => 'enable-hub-optimization',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Hub Optimization', 'hub' ),
            'subtitle' => esc_html__( 'Switch on to enable the Hub Optimization', 'hub' ),
            'options'  => array(
                'on'   => esc_html__( 'On', 'hub' ),
                'off'  => esc_html__( 'Off', 'hub' ),
            ),
            'default' => 'off'
        ),
        array(
            'id' => 'enable-hub-header-cache',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Hub Header Cache', 'hub' ),
            'subtitle' => esc_html__( 'Switch on to enable the Hub Header Cache', 'hub' ),
            'options'  => array(
                'on'   => esc_html__( 'On', 'hub' ),
                'off'  => esc_html__( 'Off', 'hub' ),
            ),
            'default' => 'off',
            'required' => array(
                'enable-hub-optimization',
                '=',
                'on'
            ),
        ),

    )
);

}

$this->sections[] = array(
    'title'  => esc_html__( 'CSS', 'hub' ),
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'disable_css',
            'type'     => 'select',
            'multi'    => true,
            'title'    => __('Disable Styles', 'hub'), 
            'subtitle' => __('Selected styles will be removed from all pages.', 'hub'),
            'options'  => array(
                'wp-block-library' => 'Gutenberg Library',
                'wp-block-library-theme' => 'Gutenberg Library Theme',
                'wc-block-style' => 'Gutenberg Woocommerce',
                'contact-form-7' => 'Contact Form 7'
            ),
        )
    )
);

$js_options[] =  array(
    'id' => 'disable_liquid_animations_on_mobile',
    'type'     => 'button_set',
    'title'    => esc_html__( 'Disable Liquid Animations on Mobile', 'hub' ),
    'options'  => array(
        'on'   => esc_html__( 'On', 'hub' ),
        'off'  => esc_html__( 'Off', 'hub' ),
    ),
    'default' => 'off'
);

$this->sections[] = array(
    'title'  => esc_html__( 'JS', 'hub' ),
    'subsection' => true, 
    'fields' => $js_options
);