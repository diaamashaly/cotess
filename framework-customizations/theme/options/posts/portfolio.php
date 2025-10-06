<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(

    'main' => array(
        'title' => esc_html__('Additional settings', 'abrag'),
        'type' => 'box',
        'options' => array(
            'portfolio_tech_stack' => array(
                'type'            => 'addable-box',
                'attr'            => array( 'class' => 'box-width' ),
                'label'           => esc_html__( 'التقنيات المستخدمة', 'kr' ),
                'box-options'     => array(
                    'portfolio_tech_stack_title' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('اسم التقنية', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('يرجى ادخال اسم التقنية', 'abrag'),
                    ),
                ),
                'template'        => '{{- portfolio_tech_stack_title }}', // box title
                'add-button-text' => esc_html__( 'Add', 'kr' ),
                'sortable'        => true,
            ),
        ),
    ),

    

);