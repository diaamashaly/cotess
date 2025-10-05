<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title_about' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'abrag' )
	),
	'shortcode'   => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'shortcode', 'abrag' )
	)
);
