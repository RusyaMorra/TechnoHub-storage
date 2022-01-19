<?php
/*
 * Post
*/

// Audio
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Audio', 'hub' ),
	'post_types'   => array( 'post', 'liquid-portfolio' ),
	'post_format'  => array( 'audio' ),
	'icon'         => 'el-icon-screen',
	'fields' => array(

		array(
			'id' => 'post-audio',
			'type' => 'text',
			'title' => esc_html__( 'Audio URL', 'hub' ),
			'desc' => esc_html__( 'Audio file URL in format: mp3, ogg, wav.', 'hub' )
		)
	)
);

// Gallery
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Gallery', 'hub' ),
	'post_types'   => array( 'post', 'liquid-portfolio' ),
	'post_format'  => array( 'gallery' ),
	'icon'         => 'el-icon-screen',
	'fields' => array(

		array(
			'id'        => 'post-gallery-lightbox',
			'type'      => 'button_set',
			'title'     => esc_html__( 'Lightbox?', 'hub' ),
			'subtitle'  => esc_html__( 'Enable lightbox for gallery images', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off'
		),

		array(
			'id'        => 'post-gallery',
			'type'      => 'slides',
			'title'     => esc_html__( 'Gallery Slider', 'hub' ),
			'subtitle'  => esc_html__( 'Upload images or add from media library.', 'hub' ),
			'placeholder'   => array(
				'title'     => esc_html__( 'Title', 'hub' ),
			),
			'show' => array(
				'title' => true,
				'description' => false,
				'url' => false,
			)
		)
	)
);

// Link
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Link', 'hub' ),
	'post_types' => array( 'post' ),
	'post_format' => array( 'link' ),
	'icon' => 'el-icon-screen',
	'fields' => array(

		array(
			'id'        => 'post-link-url',
			'type'      => 'text',
			'title'     => esc_html__( 'URL', 'hub' )
		)
	)
);

// Quote
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Quote', 'hub' ),
	'post_types' => array( 'post' ),
	'post_format' => array( 'quote' ),
	'icon' => 'el-icon-screen',
	'fields' => array(
		array(
			'id'        => 'post-quote-url',
			'type'      => 'text',
			'title'     => esc_html__( 'Cite', 'hub' )
		)
	)
);

// Video
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Video', 'hub' ),
	'post_types' => array( 'post' ),
	'post_format' => array( 'video' ),
	'icon' => 'el-icon-screen',
	'fields' => array(

		array(
			'id'        => 'post-video-url',
			'type'      => 'text',
			'title'     => esc_html__( 'Video URL', 'hub' ),
			'desc'  => esc_html__( 'YouTube or Vimeo video URL', 'hub' )
		),

		array(
			'id'        => 'post-video-file',
			'type'      => 'editor',
			'title'     => esc_html__( 'Video Upload', 'hub' ),
			'desc'  => esc_html__( 'Upload video file', 'hub' )
		),

		array(
			'id'        => 'post-video-html',
			'type'      => 'textarea',
			'title'     => esc_html__( 'Embadded video', 'hub' ),
			'desc'  => esc_html__( 'Use this option when the video does not come from YouTube or Vimeo', 'hub' )
		)
	)
);

// Video
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Video', 'hub' ),
	'post_types' => array( 'liquid-portfolio' ),
	'post_format' => array( 'video' ),
	'icon' => 'el-icon-screen',
	'fields' => array(

		array(
			'id'    => 'post-video-url',
			'type'  => 'text',
			'title' => esc_html__( 'Video URL', 'hub' ),
			'desc'  => esc_html__( 'Local video URL that will be shown on Portfolio Listing. You can add the Youtube/Vimeo video that you want to show in the lightbox, from Portfolio Meta > External URL.', 'hub' )
		),
		array(
			'id'        => 'post-video-autoplay',
			'type'      => 'button_set',
			'title'     => esc_html__( 'Autoplay or Play on Hover', 'hub' ),
			'subtitle'  => esc_html__( 'Enable autoplay or play on hover', 'hub' ),
			'options' => array(
				'autoplay'      => esc_html__( 'Autoplay', 'hub' ),
				'play_on_hover' => esc_html__( 'Play On Hover', 'hub' ),
			),
			'default' => 'play_on_hover'
		)
	)
);