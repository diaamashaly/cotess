<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'accordion_heading' => array(
		'type'  => 'map',
		'value' => array(
			'coordinates' => array(
				'lat'   => 51.5217265,
				'lng'   => -0.1299769,
			)
		),
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('map', 'abrag')
	)
);
