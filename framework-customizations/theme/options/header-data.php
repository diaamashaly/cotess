<?php

if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
	'HomePage' => array(
		'title' => esc_html__('الصفحة الرئيسية', 'abrag'),
		'type' => 'tab',
		'options' => array(

			'header-input' => array(
				'title' => esc_html__('الهيدر', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'hero-img' => array(
                        'label' => esc_html__('صورة ال mockup', 'abrag'),
                        'desc' => esc_html__('يرجى رفع صورة ال mouckup', 'abrag'),
                        'type' => 'upload'
                    ),
                    'hero-title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الرئيسي', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
                    ),
                    'hero-desc' => array(
                        'type' => 'textarea',
                        'value' => '',
                        'label' => esc_html__('الوصف', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال الوصف', 'abrag'),
                    ),

					'hero_tech_info' => array(
						'type'            => 'addable-box',
						'attr'            => array( 'class' => 'box-width' ),
						'label'           => esc_html__( 'تفاصيل التقنية', 'kr' ),
						'box-options'     => array(
							'title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'عنوان التفاصيل التقنية', 'kr' ),
							),
							'icon'  => array(
								'type'  => 'icon',
								'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								'label' => esc_html__( 'أيقونة التفاصيل التقنية', 'kr' ),
							),
						),
						'template'        => '<i class="fa {{- icon }}"></i> {{- title }}',
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

		)
	)
);
