<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'statistic_box_1' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box Statistic 1', 'abrag' ),
		'popup-title'   => esc_html__( 'Box Statistic 1', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(


			'title_statistic' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),

			'counter_statistic' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),

			'icon_statistic' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
			),


		),
	),
	'statistic_box_2' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box Statistic 2', 'abrag' ),
		'popup-title'   => esc_html__( 'Box Statistic 2', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'title_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'counter_statistic' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
			),

		),
	),
	'statistic_box_3' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box Statistic 3', 'abrag' ),
		'popup-title'   => esc_html__( 'Box Statistic 3', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'title_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'counter_statistic' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
			),

		),
	),
	'statistic_box_4' => array(
		'type'          => 'popup',
		'label'         => esc_html__( 'Box Statistic 4', 'abrag' ),
		'popup-title'   => esc_html__( 'Box Statistic 4', 'abrag' ),
		'button'        => esc_html__( 'Edit', 'abrag' ),
		'size'          => 'small',
		'popup-options' => array(

			'title_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'counter_statistic' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'icon_box' => array(
				'type'         => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size'   => 'medium',
				'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label'        => esc_html__( 'Icon', 'abrag' ),
			),

		),
	),
);
