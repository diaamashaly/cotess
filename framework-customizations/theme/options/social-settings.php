<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'social' => array(
		'title'   => esc_html__( 'social media', 'kr' ),
		'type'    => 'tab',
		'options' => array(
			'social-box' => array(
				'title'   => esc_html__( 'social media', 'kr' ),
				'type'    => 'tab',
				'options' => array(
					'social_icon' => array(
						'type'            => 'addable-box',
						'attr'            => array( 'class' => 'box-width' ),
						'label'           => esc_html__( 'social media', 'kr' ),
						'box-options'     => array(
							'title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'Title', 'kr' ),
							),
							'url'   => array(
								'type'  => 'text',
								'label' => esc_html__( 'URL', 'kr' ),
							),
							'icon'  => array(
								'type'  => 'icon',
								'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								'label' => esc_html__( 'Icon', 'kr' ),
							),
							'tab'   => array(
								'type'  => 'checkbox',
								'value' => true,
								'label' => esc_html__( 'Open in new tab', 'kr' )
							)
						),
						'template'        => '<i class="fa {{- icon }}"></i> {{- title }}', // box title
						'add-button-text' => esc_html__( 'Add', 'kr' ),
						'sortable'        => true,
					)
				)
			)
		)
	)
);