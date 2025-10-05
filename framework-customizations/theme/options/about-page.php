<?php

if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
	'AboutUsPage' => array(
		'title' => esc_html__('سكشن من نحن', 'abrag'),
		'type' => 'tab',
		'options' => array(

			'more-about-us' => array(
				'title' => esc_html__('سكشن المزيد عنا', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'about_title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الرئيسي', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
                    ),
                    'about_desc' => array(
                        'type' => 'wp-editor',
                        'value' => '',
                        'label' => esc_html__('الوصف', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال الوصف', 'abrag'),
                    ),
					'facts_records' => array(
						'type'            => 'addable-box',
						'attr'            => array( 'class' => 'box-width' ),
						'label'           => esc_html__( 'سجلات الحقائق', 'kr' ),
						'box-options'     => array(
						'fact_record_number' => array(
							'type' => 'text',
							'value' => '',
							'label' => esc_html__('الرقم', 'abrag'),
							'desc' => false,
							'help' => esc_html__('يرجى ادخال الرقم', 'abrag'),
						),
						'fact_record_title' => array(
							'type' => 'text',
							'value' => '',
							'label' => esc_html__('العنوان الرئيسي', 'abrag'),
							'desc' => false,
							'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
						),
						),
						'template'        => '{{- fact_record_title }}', // box title
						'add-button-text' => esc_html__( 'Add', 'kr' ),
						'sortable'        => true,
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
			'our-features' => array(
				'title' => esc_html__('سكشن مميزاتنا', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'feature_title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الرئيسي', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
                    ),
					'features' => array(
						'type'            => 'addable-box',
						'attr'            => array( 'class' => 'box-width' ),
						'label'           => esc_html__( 'سجلات الحقائق', 'kr' ),
						'box-options'     => array(
						'feat_icon'  => array(
							'type'  => 'icon',
							'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							'label' => esc_html__( 'أيقونة المميزات', 'kr' ),
						),
						'feat_title' => array(
							'type' => 'text',
							'value' => '',
							'label' => esc_html__('العنوان الرئيسي', 'abrag'),
							'desc' => false,
							'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
						),
						'feat_desc' => array(
							'type' => 'wp-editor',
							'value' => '',
							'label' => esc_html__('الوصف', 'abrag'),
							'desc' => false,
							'help' => esc_html__('يرجى ادخال الوصف', 'abrag'),
						),
						),
						'template'        => '{{- feat_title }}', // box title
						'add-button-text' => esc_html__( 'Add', 'kr' ),
						'sortable'        => true,
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
