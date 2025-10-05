<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),

	'slides_right'          => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Items Right', 'abrag' ),
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
			'title_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'desc_box'  => array(
				'type'  => 'text',
				'label' => esc_html__( 'Description', 'abrag' )
			),
		),
	),
	'slides_left'          => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Items Left', 'abrag' ),
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
