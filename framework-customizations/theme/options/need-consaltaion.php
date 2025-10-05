<?php

if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
	'need-consaltaion' => array(
		'title' => esc_html__('تريد استشارة', 'abrag'),
		'type' => 'tab',
				'options' => array(

                    'need-img' => array(
                        'label' => esc_html__('صورة الخلفية', 'abrag'),
                        'desc' => esc_html__('تحميل صورة الخلفية', 'abrag'),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'need-small-title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الاول', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الاول', 'abrag'),
                    ),
                    'need-big-title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('العنوان الثاني', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال العنوان الثاني', 'abrag'),
                    ),


		)
	)
);