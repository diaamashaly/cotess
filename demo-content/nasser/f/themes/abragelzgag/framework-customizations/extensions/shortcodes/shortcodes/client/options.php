<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_client' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Heading', 'abrag' )
	),

	'clients'        => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Items', 'abrag' ),
		'popup-title'   => esc_html__( 'Add/Edit Item', 'abrag' ),
		'desc'          => esc_html__( 'Create your Item', 'abrag' ),
		'template'      => '{{=alt}}',
		'popup-options' => array(
			'image_client' => array(
				'title'     => esc_html__( 'Image', 'abrag' ),
				'type'      => 'upload',
				'files_ext' => array( 'png', 'jpg', 'jpeg' ),
			),
			'alternative' => array(
				'type'  => 'text',
				'label' => esc_html__( 'alternative', 'abrag' )
			),
			'url_client' => array(
				'type'  => 'text',
				'label' => esc_html__( 'URL', 'abrag' )
			),
		),
	),

);
