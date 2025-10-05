<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
	'serviceAddinitional' => array(
		'title' => esc_html__('البيانات الاضافية للفروع', 'abrag'),
		'type' => 'box',
		'options' => array(
			'branch-contact-info' => array(
				'title' => esc_html__('مميزات الخدمة', 'abrag'),
				'type' => 'tab',
				'options' => array(
                'branch_contact_info_address' => array(
					'type' => 'textarea',
					'value' => '',
					'label' => esc_html__('العنوان', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل العنوان', 'abrag'),
                ),
                'branch_contact_info_phone' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('رقم الهاتف', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل رقم الهاتف', 'abrag'),
                ),
                'branch_contact_info_mail1' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('البريد الالكتروني الاول', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل البريد الالكتروني الاول', 'abrag'),
                ),
                'branch_contact_info_mail2' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_html__('البريد الالكتروني الثاني', 'abrag'),
					'desc' => false,
					'help' => esc_html__('ادخل البريد الالكتروني الثاني', 'abrag'),
                ),
				)
			),
			'branch-images' => array(
				'title' => esc_html__('صور الفروع', 'abrag'),
				'type' => 'tab',
				'options' => array(

                'branch_images' => array(
                    'type' => 'multi-upload',
                    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                    'label' => esc_html__( 'صور الفروع' , 'abrag' ),
                    'images_only' => true,
                    'files_ext' => array('png', 'jpg', 'gif','jpeg')
                ),
				)
			),
			'branch-map' => array(
				'title' => esc_html__('مكان الفرع', 'abrag'),
				'type' => 'tab',
				'options' => array(

                    'branch_map' => array(
                        'type' => 'map',
                        'value' => array(
                            'coordinates' => array(
                                'lat' => 24.7651873,
                                'lng' => 46.8831209,
							),
							'zoom' => 5, 
                        ),
                        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                        'label' => 'خريطة الموقع'
                    ),
				)
			),

		)
	)
);
