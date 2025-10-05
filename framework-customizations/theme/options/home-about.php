<?php

if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
	'homeAbout' => array(
		'title' => esc_html__('home about', 'abrag'),
		'type' => 'tab',
		'options' => array(

			'home-about-input' => array(
				'title' => esc_html__('about', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'about-img1' => array(
                        'label' => esc_html__('About Image1', 'abrag'),
                        'desc' => esc_html__('Upload a About image1', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'about-img2' => array(
                        'label' => esc_html__('About Image2', 'abrag'),
                        'desc' => esc_html__('Upload a About image2', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'home-about-small-title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('home about small title', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('Enter home about small Title', 'abrag'),
                    ),
                    'home-about-big-title1' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('home about big title', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('Enter home about Big Title', 'abrag'),
                    ),
                    'home-about-desc' => array(
                        'type' => 'textarea',
                        'value' => '',
                        'label' => esc_html__('home about Description', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write the home about desc', 'abrag'),
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
