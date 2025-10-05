<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(

    'main' => array(
        'title' => esc_html__('Additional settings', 'abrag'),
        'type' => 'tab',
            'options' => array(
                'project_sub_title' => array(
                'type' => 'text',
                'value' => '',
                'label' => esc_html__('العنوان الفرعي', 'abrag'),
                'desc' => false,
                'help' => esc_html__('ادخل العنوان الفرعي', 'abrag'),
                ),
                'platform_icon' => array(
                    'type'            => 'addable-box',
                    'attr'            => array( 'class' => 'box-width' ),
                    'label'           => esc_html__( 'منصات العمل', 'kr' ),
                    'box-options'     => array(
                        'platform_title' => array(
                            'type'  => 'text',
                            'label' => esc_html__( 'Title', 'kr' ),
                        ),
                        'platform_url'   => array(
                            'type'  => 'text',
                            'label' => esc_html__( 'URL', 'kr' ),
                        ),
                        'platform_icon_image' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => esc_html__( 'صورة ايقونة المنصة' , 'abrag' ),
                            'images_only' => true,
                            'files_ext' => array('png', 'jpg', 'gif','jpeg')
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
                    'template'        => '{{- platform_title }}', // box title
                    'add-button-text' => esc_html__( 'Add', 'kr' ),
                    'sortable'        => true,
                ),
                'platform_client_title' => array(
                'type' => 'text',
                'value' => '',
                'label' => esc_html__('العميل', 'abrag'),
                'desc' => false,
                'help' => esc_html__('ادخل اسم العميل', 'abrag'),
                ),
                'platform_country_title' => array(
                'type' => 'text',
                'value' => '',
                'label' => esc_html__('الدولة', 'abrag'),
                'desc' => false,
                'help' => esc_html__('ادخل اسم الدولة', 'abrag'),
                ),
                'platform_services' => array(
                'type' => 'text',
                'value' => '',
                'label' => esc_html__('الخدمات', 'abrag'),
                'desc' => false,
                'help' => esc_html__('ادخل الخدمات', 'abrag'),
                ),
                'platform_downloads' => array(
                'type' => 'text',
                'value' => '',
                'label' => esc_html__('التحميلات', 'abrag'),
                'desc' => false,
                'help' => esc_html__('ادخل عدد التحميلات', 'abrag'),
                ),
            )
    ),

    

);