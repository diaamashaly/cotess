<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_services' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),
	'slide'          => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Items', 'abrag' ),
		'popup-title'   => esc_html__( 'Add/Edit Item', 'abrag' ),
		'desc'          => esc_html__( 'Create your Item', 'abrag' ),
		'template'      => '{{=title_box}}',
		'popup-options' => array(
			'icon_box'  => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', '{domain}' ),
			),
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
				'type'  => 'textarea',
				'label' => esc_html__( 'Description', 'abrag' )
			),
		),
	)
);
