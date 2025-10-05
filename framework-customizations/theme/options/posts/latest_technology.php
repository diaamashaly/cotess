<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(

    'main' => array(
        'title' => esc_html__('اعدادات اضافية', 'abrag'),
        'type' => 'box',
        'options' => array(
            'latest_technologies_link' => array(
            'type' => 'text',
            'value' => '',
            'label' => esc_html__('الرابط', 'abrag'),
            'desc' => false,
            'help' => esc_html__('يرجى ادخال الرابط', 'abrag'),
            ),
        ),
    ),

    

);