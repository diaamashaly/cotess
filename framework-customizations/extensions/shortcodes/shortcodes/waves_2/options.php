<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'waves_select' => array(
		'type'  => 'select',
		'value' => 'color-2',
		'label' => __('Label', '{domain}'),
		'choices' => array(
			'color-1' => esc_html__('white', 'abrag'),
			'color-2' => esc_html__('blue', 'abrag')
		),
		'no-validate' => false,
	)
);
?>

