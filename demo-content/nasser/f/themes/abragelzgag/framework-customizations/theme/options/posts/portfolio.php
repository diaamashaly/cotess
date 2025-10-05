<?php
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(

    'main' => array(
        'title' => esc_html__('Additional settings', 'abrag'),
        'type' => 'box',
        'options' => array(
            'gallery' => array(
                'type' => 'multi-upload',
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                'label' => esc_html__( 'gallery' , 'abrag' ),
                'images_only' => true,
                'files_ext' => array('png', 'jpg', 'gif','jpeg')
            ),
            'image_home_page' => array(
	            'type' => 'upload',
	            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	            'label' => esc_html__( 'Image home page' , 'abrag' ),
	            'images_only' => true,
	            'files_ext' => array('png', 'jpg', 'gif','jpeg')
            ),
        ),
    ),

    

);