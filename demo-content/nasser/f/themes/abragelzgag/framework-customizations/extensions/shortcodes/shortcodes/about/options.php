<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_about' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),
	'desc_about'  => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Description', 'abrag' )
	),
	'about_url'   => array(
		'type'        => 'multi-select',
		'title'       => esc_html__( 'Url About more', 'abrag' ),
		'population'  => 'posts',
		'source'      => 'page',
		'prepopulate' => 20,
		'limit'       => 1
	),
	'about_box_1' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box About 1', 'abrag' ),
		'popup-title'   => esc_html__( 'Box About 1', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
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
	),
	'about_box_2' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box About 2', 'abrag' ),
		'popup-title'   => esc_html__( 'Box About 2', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
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
	),
	'about_box_3' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box About 3', 'abrag' ),
		'popup-title'   => esc_html__( 'Box About 3', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
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
	),
	'about_box_4' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box About 4', 'abrag' ),
		'popup-title'   => esc_html__( 'Box About 4', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
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
	),
);
