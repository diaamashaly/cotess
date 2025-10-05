<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_cover'       => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),
	'desc_cover'        => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Description', 'abrag' )
	),
	'contact_us_button' => array(
		'type'        => 'multi-select',
		'title'       => esc_html__( 'Contact us button', 'abrag' ),
		'population'  => 'posts',
		'source'      => 'page',
		'prepopulate' => 20,
		'limit'       => 1
	),
	'image_cover'       => array(
		'title'     => esc_html__( 'Image cover', 'abrag' ),
		'type'      => 'upload',
		'files_ext' => array( 'png', 'jpg', 'jpeg' ),
	),
	'background_cover'  => array(
		'title'     => esc_html__( 'Background cover', 'abrag' ),
		'type'      => 'upload',
		'files_ext' => array( 'png', 'jpg', 'jpeg' ),
	),

);
