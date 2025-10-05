<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(

    'main' => array(
        'title' => esc_html__('اعدادات اضافية', 'abrag'),
        'type' => 'box',
        'options' => array(
            'feedback_client_name' => array(
            'type' => 'text',
            'value' => '',
            'label' => esc_html__('اسم العميل', 'abrag'),
            'desc' => false,
            'help' => esc_html__('يرجى ادخال اسم العميل', 'abrag'),
            ),
            'feedback_client_job' => array(
            'type' => 'text',
            'value' => '',
            'label' => esc_html__('المسمى الوظيفي', 'abrag'),
            'desc' => false,
            'help' => esc_html__('ادخل المسمى الوظفي', 'abrag'),
            ),
        ),
    ),

    

);