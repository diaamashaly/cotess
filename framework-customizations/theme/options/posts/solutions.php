<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(

    'main' => array(
        'title' => esc_html__('Additional settings', 'abrag'),
        'type' => 'box',
        'options' => array(
            'solution_small_title' => array(
            'type' => 'text',
            'value' => '',
            'label' => esc_html__('header small title', 'abrag'),
            'desc' => false,
            'help' => esc_html__('Enter Header small Title', 'abrag'),
            ),
			'solution-section-one' => array(
				'title' => esc_html__('سكشن الحلول الاول', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'solution_section_one_image' => array(
                        'label' => esc_html__('الصورة الرئيسية', 'abrag'),
                        'desc' => esc_html__('يرجى رفع الصورة', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'solution_section_one_video' => array(
                        'label' => esc_html__('الفيديو', 'abrag'),
                        'desc' => esc_html__('يرجى رفع الفيديو', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'solution_section_one_small_title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الفرعي', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الفرعي', 'abrag'),
                    ),
                    'solution_section_one_big_title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الرئيسي', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
                    ),
                    'solution_section_one_desc' => array(
                        'type' => 'wp-editor',
                        'value' => '',
                        'label' => esc_html__('الوصف', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال الوصف', 'abrag'),
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
			'solution-general-features' => array(
				'title' => esc_html__('المميزات العامة للحلول', 'abrag'),
				'type' => 'tab',
				'options' => array(

                'solution_general_features' => array(
                    'type'            => 'addable-box',
                    'attr'            => array( 'class' => 'box-width' ),
                    'label'           => esc_html__( 'المميزات العامة للحلول', 'kr' ),
                    'box-options'     => array(
                    'solution_general_features_img' => array(
                        'label' => esc_html__('الصورة', 'abrag'),
                        'desc' => esc_html__('يرجى رفع الصورة', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                        'files_ext' => array('png', 'jpg', 'gif','jpeg', 'svg')
                    ),
                    'solution_general_features_title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الرئيسي', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الرئيسي', 'abrag'),
                    ),
                    'solution_general_features_desc' => array(
                        'type' => 'textarea',
                        'value' => '',
                        'label' => esc_html__('الوصف', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال الوصف', 'abrag'),
                    ),
                    ),
                    'template'        => '{{- solution_general_features_title }}', // box title
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
        ),
    ),

    'main2' => array(
        'title' => esc_html__('اقسام الحلول', 'abrag'),
        'type' => 'box',
        'options' => array(
            'the_solution_dparmants_sub_title' => array(
            'type' => 'text',
            'value' => '',
            'label' => esc_html__('العنوان الفرعي', 'abrag'),
            'desc' => false,
            'help' => esc_html__('العنوان الفرعي', 'abrag'),
            ),
            'the_solution_dparmants_main_title' => array(
            'type' => 'text',
            'value' => '',
            'label' => esc_html__('العنوان الرئيسي', 'abrag'),
            'desc' => false,
            'help' => esc_html__('العنوان الرئيسي', 'abrag'),
            ),
            'the_solution_dparmants_main_desc' => array(
            'type' => 'textarea',
            'value' => '',
            'label' => esc_html__('الوصف', 'abrag'),
            'desc' => false,
            'help' => esc_html__('الوصف', 'abrag'),
            ),
            'mobile-app-solution' => array(
                'type'      => 'box',
                'title'     => esc_html__('تطبيق جوال', 'abrag'),
                'options'   => array(
                    'mobile-app-solution-features' => array(
                        'title' => esc_html__('مميزات الخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(
                        'mobile_app_solution_main_image1' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة الرئيسية الاولى' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'mobile_app_solution_main_image2' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة الرئيسية الثانية' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'main_solution_features_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),
                        'mobile_app_solution_image' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'mobile_app_solution_features' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'مميزات الخدمة', 'kr' ),
                            'box-options'     => array(
                                'mobile_app_solution_feature_title' => array(
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
                            'template'        => '{{- mobile_app_solution_feature_title }}', // box title
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
                    'mobile-app-solution-why-choose-us' => array(
                        'title' => esc_html__('لماذا تختار العالمية', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'mobile_app_solution_main_why_choose_us_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'mobile_app_solution_why_choose_us' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'لماذا تختار العالمية', 'kr' ),
                            'box-options'     => array(
                                'mobile_app_solution_why_choose_us_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان لماذا تختار العالمية', 'kr' ),
                                ),
                                'mobile_app_solution_why_choose_us_desc' => array(
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
                            'template'        => '{{- mobile_app_solution_why_choose_us_title }}', // box title
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

                    'mobile_app_solution_programming-lang-used' => array(
                        'title' => esc_html__('لغات البرمجة المستخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'mobile_app_solution_main_programming_lang_used_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'mobile_app_solution_programming_lang_used' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'لغات البرمجة المستخدمة', 'kr' ),
                            'box-options'     => array(
                                'mobile_app_solution_programming_lang_used_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان لغات البرمجة المستخدمة', 'kr' ),
                                ),
                                'mobile_app_solution_programming_lang_used_icon'  => array(
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
                            'template'        => '{{- mobile_app_solution_programming_lang_used_title }}', // box title
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

                    'mobile-app-solution-create-service-steps' => array(
                        'title' => esc_html__('خطوات انشاء الخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'mobile_app_solution_main_create_service_steps_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'mobile_app_solution_create_service_steps' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'خطوات انشاء الخدمة', 'kr' ),
                            'box-options'     => array(
                                'mobile_app_solution_create_service_steps_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان خطوات انشاء الخدمة', 'kr' ),
                                ),
                                'mobile_app_solution_create_service_steps_desc' => array(
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
                            'template'        => '{{- mobile_app_solution_create_service_steps_title }}', // box title
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
            ),
            'web-app-solution' => array(
                'type'      => 'box',
                'title'     => esc_html__('موقع الكتروني', 'abrag'),
                'options'   => array(
                    'web-app-solution-features' => array(
                        'title' => esc_html__('مميزات الخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(
                        'web_app_solution_main_image1' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة الرئيسية الاولى' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'web_app_solution_main_image2' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة الرئيسية الثانية' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'main_web_app_solution_features_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),
                        'web_app_solution_image' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'web_app_solution_features' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'مميزات الخدمة', 'kr' ),
                            'box-options'     => array(
                                'web_app_solution_feature_title' => array(
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
                            'template'        => '{{- web_app_solution_feature_title }}', // box title
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
                    'web-app-solution-why-choose-us' => array(
                        'title' => esc_html__('لماذا تختار العالمية', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'web_app_solution_main_why_choose_us_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'web_app_solution_why_choose_us' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'لماذا تختار العالمية', 'kr' ),
                            'box-options'     => array(
                                'web_app_solution_why_choose_us_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان لماذا تختار العالمية', 'kr' ),
                                ),
                                'web_app_solution_why_choose_us_desc' => array(
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
                            'template'        => '{{- web_app_solution_why_choose_us_title }}', // box title
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

                    'web_app_solution_programming-lang-used' => array(
                        'title' => esc_html__('لغات البرمجة المستخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'web_app_solution_main_programming_lang_used_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'web_app_solution_programming_lang_used' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'لغات البرمجة المستخدمة', 'kr' ),
                            'box-options'     => array(
                                'web_app_solution_programming_lang_used_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان لغات البرمجة المستخدمة', 'kr' ),
                                ),
                                'web_app_solution_programming_lang_used_icon'  => array(
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
                            'template'        => '{{- web_app_solution_programming_lang_used_title }}', // box title
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

                    'web-app-solution-create-service-steps' => array(
                        'title' => esc_html__('خطوات انشاء الخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'web_app_solution_main_create_service_steps_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'web_app_solution_create_service_steps' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'خطوات انشاء الخدمة', 'kr' ),
                            'box-options'     => array(
                                'web_app_solution_create_service_steps_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان خطوات انشاء الخدمة', 'kr' ),
                                ),
                                'web_app_solution_create_service_steps_desc' => array(
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
                            'template'        => '{{- web_app_solution_create_service_steps_title }}', // box title
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
            ),
            'dashboard-solution' => array(
                'type'      => 'box',
                'title'     => esc_html__('لوحة تحكم', 'abrag'),
                'options'   => array(
                    'dashboard-solution-features' => array(
                        'title' => esc_html__('مميزات الخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(
                        'main_dashboard__solution_main_image1' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة الرئيسية الاولى' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'main_dashboard_solution_main_image2' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة الرئيسية الثانية' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'main_dashboard_solution_features_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),
                        'dashboard_solution_image' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'الصورة' , 'abrag' ),
                            'images_only' => true,
                            ),
                        'dashboard_solution_features' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'مميزات الخدمة', 'kr' ),
                            'box-options'     => array(
                                'dashboard_solution_feature_title' => array(
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
                            'template'        => '{{- dashboard_solution_feature_title }}', // box title
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
                    'dashboard-solution-why-choose-us' => array(
                        'title' => esc_html__('لماذا تختار العالمية', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'dashboard_solution_main_why_choose_us_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'dashboard_solution_why_choose_us' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'لماذا تختار العالمية', 'kr' ),
                            'box-options'     => array(
                                'dashboard_solution_why_choose_us_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان لماذا تختار العالمية', 'kr' ),
                                ),
                                'dashboard_solution_why_choose_us_desc' => array(
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
                            'template'        => '{{- dashboard_solution_why_choose_us_title }}', // box title
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

                    'dashboard_solution_programming-lang-used' => array(
                        'title' => esc_html__('لغات البرمجة المستخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'dashboard_solution_main_programming_lang_used_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'dashboard_solution_programming_lang_used' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'لغات البرمجة المستخدمة', 'kr' ),
                            'box-options'     => array(
                                'dashboard_solution_programming_lang_used_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان لغات البرمجة المستخدمة', 'kr' ),
                                ),
                                'dashboard_solution_programming_lang_used_icon'  => array(
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
                            'template'        => '{{- dashboard_solution_programming_lang_used_title }}', // box title
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

                    'dashboard-solution-create-service-steps' => array(
                        'title' => esc_html__('خطوات انشاء الخدمة', 'abrag'),
                        'type' => 'tab',
                        'options' => array(

                        'dashboard_solution_main_create_service_steps_title' => array(
                            'type' => 'text',
                            'value' => '',
                            'label' => esc_html__('العنوان', 'abrag'),
                            'desc' => false,
                            'help' => esc_html__('ادخل العنوان', 'abrag'),
                        ),

                        'dashboard_solution_create_service_steps' => array(
                            'type'            => 'addable-box',
                            'attr'            => array( 'class' => 'box-width' ),
                            'label'           => esc_html__( 'خطوات انشاء الخدمة', 'kr' ),
                            'box-options'     => array(
                                'dashboard_solution_create_service_steps_title' => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'عنوان خطوات انشاء الخدمة', 'kr' ),
                                ),
                                'dashboard_solution_create_service_steps_desc' => array(
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
                            'template'        => '{{- dashboard_solution_create_service_steps_title }}', // box title
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
            ),
        ),
    ),    

);