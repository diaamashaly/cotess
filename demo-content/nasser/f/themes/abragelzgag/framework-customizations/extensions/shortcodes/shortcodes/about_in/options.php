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
	'image_box' => array(
		'title'     => esc_html__( 'Image cover', 'abrag' ),
		'type'      => 'upload',
		'files_ext' => array( 'png', 'jpg', 'jpeg' ),
	),
);
