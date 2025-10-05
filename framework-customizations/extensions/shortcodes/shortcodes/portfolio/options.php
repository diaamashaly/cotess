<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array (
    'title_portfolio' => array (
        'type'  => 'text' ,
        'label' => esc_html__('Title' , 'abrag')
    ) ,
    'portfolio_url'   => array(
	    'type'        => 'multi-select',
	    'title'       => esc_html__( 'Url Portfolio more', 'abrag' ),
	    'population'  => 'posts',
	    'source'      => 'page',
	    'prepopulate' => 20,
	    'limit'       => 1
    ),
);
