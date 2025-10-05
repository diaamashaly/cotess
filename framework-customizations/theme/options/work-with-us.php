<?php

if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
	'workWithUs' => array(
		'title' => esc_html__('work with us', 'abrag'),
		'type' => 'tab',
		'options' => array(

			'work-with-us' => array(
				'title' => esc_html__('work us', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'work-with-img' => array(
                        'label' => esc_html__('image', 'abrag'),
                        'desc' => esc_html__('Upload a image', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'work-with-small-title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('work with small title', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('Enter work with small Title', 'abrag'),
                    ),
                    'work-with-big-title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('work with big title', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('Enter work with big Title', 'abrag'),
                    ),
                    'work-with-phone' => array(
                        'type' => 'number',
                        'value' => '',
                        'label' => esc_html__('work with phon number', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('Enter work with phon number', 'abrag'),
                    ),

					// 'page-search' => array(
					// 	'type' => 'multi-select',
					// 	'label' => esc_html__('Page Search', 'abrag'),
					// 	'population' => 'posts',
					// 	'source' => 'page',
					// 	'prepopulate' => 20,
					// 	'limit' => 1,
					// ),
					// 'page-portfolio' => array(
					// 	'type' => 'multi-select',
					// 	'label' => esc_html__('Page Portfolio', 'abrag'),
					// 	'population' => 'posts',
					// 	'source' => 'page',
					// 	'prepopulate' => 20,
					// 	'limit' => 1,
					// ),
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
