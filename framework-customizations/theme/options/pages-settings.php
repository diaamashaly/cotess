<?php

if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
	'pages' => array(
		'title' => esc_html__('Page settings', 'abrag'),
		'type' => 'tab',
		'options' => array(

			'pages-type' => array(
				'title' => esc_html__('Pages', 'abrag'),
				'type' => 'tab',
				'options' => array(

					'page-search' => array(
						'type' => 'multi-select',
						'label' => esc_html__('Page Search', 'abrag'),
						'population' => 'posts',
						'source' => 'page',
						'prepopulate' => 20,
						'limit' => 1,
					),
					'page-portfolio' => array(
						'type' => 'multi-select',
						'label' => esc_html__('Page Portfolio', 'abrag'),
						'population' => 'posts',
						'source' => 'page',
						'prepopulate' => 20,
						'limit' => 1,
					),
				)
			),

			/*'categories' => array(
				'title' => esc_html__('Categories', 'kr'),
				'type' => 'tab',
				'options' => array(

					'page-categories' => array(
						'type' => 'multi-select',
						'label' => esc_html__('Select Page', 'kr'),
						'desc' => false,
						'population' => 'posts',
						'source' => 'page',
						'prepopulate' => 10,
						'limit' => 100,
					),
				)
			),*/

		)
	)
);
