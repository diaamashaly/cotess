<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'general' => array(
        'title' => esc_html__('General', 'abrag'),
        'type' => 'tab',
        'options' => array(

            'general-box' => array(
                'title' => esc_html__('General Settings', 'abrag'),
                'type' => 'tab',
                'options' => array(

                    'favicon' => array(
                        'label' => esc_html__('Favicon', 'abrag'),
                        'desc' => esc_html__('Upload a favicon image', 'abrag'),
                        'type' => 'upload'
                    ),

                    'phone-website' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('Phone Website', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write number the Phone website.', 'abrag'),
                    ),

                    'email-website' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('Emial Website', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write name the Emial website.', 'abrag'),
                    ),
                    'html' => array(
                        'type' => 'html',
                        'value' => 'default hidden value',
                        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                        'label' => __('SEO', 'abrag'),
                        'html' => 'ارشفة موقعك',
                    ),


                    'home-map' => array(
                        'type' => 'map',
                        'value' => array(
                            'coordinates' => array(
                                'lat' => 24.7651873,
                                'lng' => 46.8831209,
                            )
                        ),
                        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                        'label' => 'خريطة الموقع'
                    ),
                    'author-website' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('Author Website', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write name the author website.', 'abrag'),
                    ),
                    'keywords-website' => array(
                        'type' => 'textarea',
                        'value' => '',
                        'label' => esc_html__('Keywords Website', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write name the keywords website.', 'abrag'),
                    ),
                    'description-website' => array(
                        'type' => 'textarea',
                        'value' => '',
                        'label' => esc_html__('Description Website', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write name the description website.', 'abrag'),
                    ),


                )
            ),

            'header-box' => array(
                'title' => esc_html__('Header', 'abrag'),
                'type' => 'tab',
                'options' => array(
                    'logo' => array(
                        'type' => 'upload',
                        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                        'label' => esc_html__('Logo Website', 'abrag'),
                        'help' => esc_html__('Upload Logo Website', 'abrag'),
                        'images_only' => true,
                        'files_ext' => array('jpeg', 'png', 'jpg'),
                        'extra_mime_types' => array('audio/x-aiff, aif aiff')
                    ),

                    'alternative_logo' => array(
                        'type' => 'text',
                        'label' => esc_html__('alternative text for Logo', 'abrag'),
                        'help' => esc_html__('Upload Logo Website', 'abrag'),
                        'value' => ''
                    ),


                )
            ),

            'footer-box' => array(
                'title' => esc_html__('Footer', 'abrag'),
                'type' => 'tab',
                'options' => array(

	                'logo-footer' => array(
		                'label' => esc_html__('Logo Footer', 'abrag'),
		                'desc' => esc_html__('Upload a Logo Footer image', 'abrag'),
		                'type' => 'upload'
	                ),

	                'description-footer' => array(
		                'value' => '',
		                'label' => esc_html__('Description Footer', 'abrag'),
		                'desc' => false,
		                'type' => 'wp-editor',
		                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		                'size' => 'large',
		                'editor_height' => 400,
		                'wpautop' => true,
		                'editor_type' => false,
	                ),

	                'copyrights-footer' => array(
                        'value' => '',
                        'label' => esc_html__('Copyrights website', 'abrag'),
                        'desc' => false,
                        'help' => esc_html__('write name the Copyrights website.', 'abrag'),
                        'type' => 'wp-editor',
                        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                        'size' => 'large',
                        'editor_height' => 400,
                        'wpautop' => true,
                        'editor_type' => false,
                    ),



                )
            ),


        )
    )
);
