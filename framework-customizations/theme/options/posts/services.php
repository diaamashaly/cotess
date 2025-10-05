<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
	'serviceAddinitional' => array(
		'title' => esc_html__('البيانات الاضافية للخدمة', 'abrag'),
		'type' => 'box',
		'options' => array(

			'service-video' => array(
				'title' => esc_html__('فيديو اعرف اكتر عن الخدمة', 'abrag'),
				'type' => 'tab',
				'options' => array(
					'service_video' => array(
						'type' => 'upload',
						'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
						'label' => esc_html__( 'اعرف اكتر عن الخدمة' , 'abrag' ),
						'images_only' => false,
						'files_ext' => array('mp4')
						),
				)
			),
			'service-features' => array(
				'title' => esc_html__('مميزات الخدمة', 'abrag'),
				'type' => 'tab',
				'options' => array(
                'main_service_features_title' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('العنوان', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل العنوان', 'abrag'),
                ),
				'service_image' => array(
					'type' => 'upload',
					'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
					'label' => esc_html__( 'الصورة' , 'abrag' ),
					'images_only' => true,
					),
                'service_features' => array(
                    'type'            => 'addable-box',
                    'attr'            => array( 'class' => 'box-width' ),
                    'label'           => esc_html__( 'مميزات الخدمة', 'kr' ),
                    'box-options'     => array(
                        'service_feature_title' => array(
                            'type'  => 'text',
                            'label' => esc_html__( 'عنوان مميزات الخدمة', 'kr' ),
                        ),
                        // 'icon'  => array(
                        //     'type'  => 'icon',
                        //     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        //     'label' => esc_html__( 'Icon', 'kr' ),
                        // ),
                        'tab'   => array(
                            'type'  => 'checkbox',
                            'value' => true,
                            'label' => esc_html__( 'Open in new tab', 'kr' )
                        )
                    ),
                    'template'        => '{{- service_feature_title }}', // box title
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
			'why-choose-us' => array(
				'title' => esc_html__('لماذا تختار العالمية', 'abrag'),
				'type' => 'tab',
				'options' => array(

                'main_why_choose_us_title' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('العنوان', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل العنوان', 'abrag'),
                ),

                'why_choose_us' => array(
                    'type'            => 'addable-box',
                    'attr'            => array( 'class' => 'box-width' ),
                    'label'           => esc_html__( 'لماذا تختار العالمية', 'kr' ),
                    'box-options'     => array(
                        'why_choose_us_title' => array(
                            'type'  => 'text',
                            'label' => esc_html__( 'عنوان لماذا تختار العالمية', 'kr' ),
                        ),
                        'why_choose_us_desc' => array(
                            'type'  => 'textarea',
                            'label' => esc_html__( 'وصف لماذا تختار العالمية', 'kr' ),
                        ),
                        // 'icon'  => array(
                        //     'type'  => 'icon',
                        //     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        //     'label' => esc_html__( 'Icon', 'kr' ),
                        // ),
                        'tab'   => array(
                            'type'  => 'checkbox',
                            'value' => true,
                            'label' => esc_html__( 'Open in new tab', 'kr' )
                        )
                    ),
                    'template'        => '{{- why_choose_us_title }}', // box title
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

			'programming-lang-used' => array(
				'title' => esc_html__('لغات البرمجة المستخدمة', 'abrag'),
				'type' => 'tab',
				'options' => array(

                'main_programming_lang_used_title' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('العنوان', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل العنوان', 'abrag'),
                ),

                'programming_lang_used' => array(
                    'type'            => 'addable-box',
                    'attr'            => array( 'class' => 'box-width' ),
                    'label'           => esc_html__( 'لغات البرمجة المستخدمة', 'kr' ),
                    'box-options'     => array(
                        'programming_lang_used_title' => array(
                            'type'  => 'text',
                            'label' => esc_html__( 'عنوان لغات البرمجة المستخدمة', 'kr' ),
                        ),
                        'programming_lang_used_icon'  => array(
                            'type'  => 'upload',
                            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                            'label' => esc_html__( 'اللوجو', 'kr' ),
							'images_only' => true,
							'files_ext' => array('png', 'jpg', 'gif','jpeg')
                        ),
                        'tab'   => array(
                            'type'  => 'checkbox',
                            'value' => true,
                            'label' => esc_html__( 'Open in new tab', 'kr' )
                        )
                    ),
                    'template'        => '{{- programming_lang_used_title }}', // box title
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

			'create-service-steps' => array(
				'title' => esc_html__('خطوات انشاء الخدمة', 'abrag'),
				'type' => 'tab',
				'options' => array(

                'main_create_service_steps_title' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('العنوان', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل العنوان', 'abrag'),
                ),

                'create_service_steps' => array(
                    'type'            => 'addable-box',
                    'attr'            => array( 'class' => 'box-width' ),
                    'label'           => esc_html__( 'خطوات انشاء الخدمة', 'kr' ),
                    'box-options'     => array(
                        'create_service_steps_title' => array(
                            'type'  => 'text',
                            'label' => esc_html__( 'عنوان خطوات انشاء الخدمة', 'kr' ),
                        ),
                        'create_service_steps_desc' => array(
                            'type'  => 'textarea',
                            'label' => esc_html__( 'وصف خطوات انشاء الخدمة', 'kr' ),
                        ),
                        // 'icon'  => array(
                        //     'type'  => 'icon',
                        //     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        //     'label' => esc_html__( 'Icon', 'kr' ),
                        // ),
                        'tab'   => array(
                            'type'  => 'checkbox',
                            'value' => true,
                            'label' => esc_html__( 'Open in new tab', 'kr' )
                        )
                    ),
                    'template'        => '{{- create_service_steps_title }}', // box title
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
