<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'woodworking_carpenter_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'woodworking-carpenter' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'woodworking-carpenter' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'woodworking-carpenter' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'woodworking_carpenter_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'woodworking-carpenter' ),
	) );

	// POST SECTION

	Kirki::add_section( 'woodworking_carpenter_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'woodworking-carpenter' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'woodworking-carpenter' ),
	    'panel'          => 'woodworking_carpenter_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_enable_post_heading',
		'section'     => 'woodworking_carpenter_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'woodworking_carpenter_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'woodworking_carpenter_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'woodworking-carpenter' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'woodworking-carpenter' ),
	    'panel'          => 'woodworking_carpenter_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_enable_socail_link',
		'section'     => 'woodworking_carpenter_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'woodworking_carpenter_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'woodworking-carpenter' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'woodworking-carpenter' ),
		'settings'     => 'woodworking_carpenter_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'woodworking-carpenter' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'woodworking-carpenter' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'woodworking-carpenter' ),
				'description' => esc_html__( 'Add the social icon url here.', 'woodworking-carpenter' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_myaccount_link_heading',
		'section'     => 'woodworking_carpenter_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'My Account URL', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'settings' => 'woodworking_carpenter_myaccount_link',
		'section'  => 'woodworking_carpenter_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_features_heading',
		'section'     => 'woodworking_carpenter_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Features', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'woodworking_carpenter_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'woodworking-carpenter' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'woodworking-carpenter' ),
        'panel'          => 'woodworking_carpenter_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_enable_heading',
		'section'     => 'woodworking_carpenter_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_slider_heading',
		'section'     => 'woodworking_carpenter_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'woodworking_carpenter_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'woodworking_carpenter_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'woodworking-carpenter' ),
		'priority'    => 10,
		'choices'     => woodworking_carpenter_get_categories_select(),
	] );

	// OUR CATEGORY SECTION

	Kirki::add_section( 'woodworking_carpenter_our_category_section', array(
        'title'          => esc_html__( 'Our Category Settings', 'woodworking-carpenter' ),
        'description'    => esc_html__( 'You have to add the content to show category section.', 'woodworking-carpenter' ),
        'panel'          => 'woodworking_carpenter_panel_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_enable_heading',
		'section'     => 'woodworking_carpenter_our_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Category',  'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_our_category_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_our_category_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable',  'woodworking-carpenter' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_our_category_heading',
		'section'     => 'woodworking_carpenter_our_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Category Section ',  'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'woodworking_carpenter_our_category_title',
		'label'    => esc_html__( 'Section Heading ', 'woodworking-carpenter' ),
		'section'  => 'woodworking_carpenter_our_category_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'woodworking_carpenter_our_category_text',
		'label'    => esc_html__( 'Content', 'woodworking-carpenter' ),
		'section'  => 'woodworking_carpenter_our_category_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'woodworking_carpenter_our_category_counter',
        'label'       => esc_html__( 'Our Category Counter Section',  'woodworking-carpenter' ),
        'section'     => 'woodworking_carpenter_our_category_section',
        'default'     => 0,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $category_image = get_theme_mod('woodworking_carpenter_our_category_counter','');
    for ( $i = 1; $i <= $category_image; $i++ ) :

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'image',
			'settings' => 'woodworking_carpenter_our_category_image'.$i,
			'label'    => esc_html__( 'Category Image ', 'woodworking-carpenter' ).$i,
			'section'  => 'woodworking_carpenter_our_category_section',
			'priority' => 10,
	    ] );

	    Kirki::add_field( 'theme_config_id', [
			'type'     => 'text',
			'settings' => 'woodworking_carpenter_our_category_box_title'.$i,
			'label'    => esc_html__( 'Title', 'woodworking-carpenter' ).$i,
			'section'  => 'woodworking_carpenter_our_category_section',
			'priority' => 10,
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'text',
			'settings' => 'woodworking_carpenter_our_category_text_hover'.$i,
			'label'    => esc_html__( 'Button Text', 'woodworking-carpenter' ).$i,
			'section'  => 'woodworking_carpenter_our_category_section',
			'priority' => 10,
	    ] );

	    Kirki::add_field( 'theme_config_id', [
			'type'     => 'link',
			'settings' => 'woodworking_carpenter_our_category_button_url'.$i,
			'label'    => esc_html__( 'Button Url', 'woodworking-carpenter' ).$i,
			'section'  => 'woodworking_carpenter_our_category_section',
			'priority' => 10,
	    ] );

    endfor;
    	
	// FOOTER SECTION

	Kirki::add_section( 'woodworking_carpenter_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'woodworking-carpenter' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'woodworking-carpenter' ),
        'panel'          => 'woodworking_carpenter_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_footer_text_heading',
		'section'     => 'woodworking_carpenter_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'woodworking_carpenter_footer_text',
		'section'  => 'woodworking_carpenter_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'woodworking_carpenter_footer_enable_heading',
		'section'     => 'woodworking_carpenter_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'woodworking-carpenter' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'woodworking_carpenter_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'woodworking-carpenter' ),
		'section'     => 'woodworking_carpenter_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'woodworking-carpenter' ),
			'off' => esc_html__( 'Disable', 'woodworking-carpenter' ),
		],
	] );
}