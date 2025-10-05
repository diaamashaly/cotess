<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_services' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),
	'desc_services'  => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Description', 'abrag' )
	),

	'services'       => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Items', 'abrag' ),
		'popup-title'   => esc_html__( 'Add/Edit Item', 'abrag' ),
		'desc'          => esc_html__( 'Create your Item', 'abrag' ),
		'template'      => '{{=title_box}}',
		'popup-options' => array(

			'image' => array(
				'type'         => 'multi-picker',
				'picker'       => array(
					'gadget' => array(
						'label'   => esc_html__( 'Icon', 'abrag' ),
						'type'    => 'radio',
						'choices' => array(
							'default_icon' => 'Default Icon',
							'icon_1'       => 'Custom Icon',
						),
						'desc'    => esc_html__( '', 'abrag' ),
					)
				),
				'choices'      => array(
					'default_icon' => array(
						'icon_text' => array(
							'type'  => 'hidden',
							'label' => esc_html__( 'Icon', 'abrag' )
						),
					),
					'icon_1'       => array(
						'icon_box' => array(
							'type'         => 'icon-v2',
							'preview_size' => 'medium',
							'modal_size'   => 'medium',
							'attr'         => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							'label'        => esc_html__( 'Icon', 'abrag' ),
						),
					),
				),
				'show_borders' => true,
			),
			'title_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'abrag' )
			),
			'link_box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Link', 'abrag' )
			),
			'desc_box'  => array(
				'type'  => 'textarea',
				'label' => esc_html__( 'Description', 'abrag' )
			),
		),
	)
);
