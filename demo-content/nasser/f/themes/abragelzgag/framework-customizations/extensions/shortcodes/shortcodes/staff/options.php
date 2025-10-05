<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_staff' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),
	'background_cover'     => array(
		'title'     => esc_html__( 'Background Cover', 'abrag' ),
		'type'      => 'upload',
		'files_ext' => array( 'png', 'jpg', 'jpeg' ),
	),
	'slide'          => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Items', 'abrag' ),
		'popup-title'   => esc_html__( 'Add/Edit Item', 'abrag' ),
		'desc'          => esc_html__( 'Create your Item', 'abrag' ),
		'template'      => '{{=title_box}}',
		'popup-options' => array(
			'image'     => array(
				'title'     => esc_html__( 'Image', 'abrag' ),
				'type'      => 'upload',
				'files_ext' => array( 'png', 'jpg', 'jpeg' ),
			),
			'title_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'desc_box'  => array(
				'type'  => 'text',
				'label' => esc_html__( 'Description', 'abrag' )
			),
		),
	)
);
