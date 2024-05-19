<?php 

// fintech theme options
new \Kirki\Panel(
    'fintech_theme_options',
    [
        'priority'      => 10,
        'title'         => esc_html__( 'Theme Options', 'fintech' ),
        'description'   => esc_html__( 'Fintech Options Panel', 'fintech' ),
    ]
);

// fintech header logo section
function fintech_header_logo() {

    new \Kirki\Section(
        'fintech_header_logo',
        [
            'title'       => esc_html__( 'Header Info', 'fintech' ),
            'description' => esc_html__( 'Header change option', 'fintech' ),
            'panel'       => 'fintech_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' 		=> 'fintech_logo',
            'label'    		=> esc_html__( 'Header Logo', 'fintech' ),
			'description' 	=> esc_html__( 'The saved photo will be your logo', 'fintech' ),
            'section'  		=> 'fintech_header_logo',
            'default'  		=> get_template_directory_uri() . '/assets/images/logo2.png',
			'priority'    	=> 10,
        ]
    );
}
fintech_header_logo();

// fintech right sidebar info section
function fintech_right_sidebar_info_section() {

    new \Kirki\Section(
        'fintech_right_sidebar_info_section',
        [
            'title'       => esc_html__( 'Right Sidebar Info', 'fintech' ),
            'description' => esc_html__( 'Sidebar info option panel', 'fintech' ),
            'panel'       => 'fintech_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_logo_switch',
            'label'       => esc_html__( 'Display Logo', 'fintech' ),
            'section'     => 'fintech_right_sidebar_info_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' 		=> 'fintech_right_sidebar_logo',
            'label'    		=> esc_html__( 'Top Logo', 'fintech' ),
			'description' 	=> esc_html__( 'The saved photo will be your logo', 'fintech' ),
            'section'  		=> 'fintech_right_sidebar_info_section',
            'default'  		=> get_template_directory_uri() . '/assets/images/logo2.png',
			'priority'    	=> 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'fintech_right_sidebar_textarea',
            'label'       => esc_html__( 'Right sidebar text', 'fintech' ),
            'section'     => 'fintech_right_sidebar_info_section',
            'default'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', 'fintech' ),
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_button_switch',
            'label'       => esc_html__( 'Display Button', 'fintech' ),
            'section'     => 'fintech_right_sidebar_info_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_right_sidebar_button_text',
            'label'    => esc_html__( 'Button text', 'fintech' ),
            'section'  => 'fintech_right_sidebar_info_section',
            'default'  => esc_html__( 'Discover More', 'fintech' ),
            'priority' => 10,
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_button_URL',
			'label'    => esc_html__( 'Button URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_info_section',
			'default'  => '#',
			'priority' => 10,
		]
	);
}
fintech_right_sidebar_info_section();

// fintech right sidebar contact section
function fintech_right_sidebar_contact_section() {

    new \Kirki\Section(
        'fintech_right_sidebar_contact_section',
        [
            'title'       => esc_html__( 'Right Sidebar Contact', 'fintech' ),
            'description' => esc_html__( 'Sidebar contact option panel', 'fintech' ),
            'panel'       => 'fintech_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_right_sidebar_contact_heading',
            'label'    => esc_html__( 'Headings', 'fintech' ),
            'section'  => 'fintech_right_sidebar_contact_section',
            'default'  => esc_html__( 'Discover More', 'fintech' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_right_sidebar_contact_phone',
            'label'    => esc_html__( 'Phone Number', 'fintech' ),
            'section'  => 'fintech_right_sidebar_contact_section',
            'default'  => esc_html__( '+123-456-7890', 'fintech' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_right_sidebar_contact_email',
            'label'    => esc_html__( 'Email Address', 'fintech' ),
            'section'  => 'fintech_right_sidebar_contact_section',
            'default'  => esc_html__( 'yourname@email.com', 'fintech' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_right_sidebar_contact_hours',
            'label'    => esc_html__( 'Office Hours', 'fintech' ),
            'section'  => 'fintech_right_sidebar_contact_section',
            'default'  => esc_html__( 'Discover More', 'fintech' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_facebook_switch',
            'label'       => esc_html__( 'Facebook', 'fintech' ),
            'section'     => 'fintech_right_sidebar_contact_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_facebook_URL',
			'label'    => esc_html__( 'Facebook URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_contact_section',
			'default'  => '#',
			'priority' => 10,
		]
	);

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_twitter_switch',
            'label'       => esc_html__( 'Twitter', 'fintech' ),
            'section'     => 'fintech_right_sidebar_contact_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_twitter_URL',
			'label'    => esc_html__( 'Twitter URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_contact_section',
			'default'  => '#',
			'priority' => 10,
		]
	);

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_instagram_switch',
            'label'       => esc_html__( 'Instagram', 'fintech' ),
            'section'     => 'fintech_right_sidebar_contact_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_instagram_URL',
			'label'    => esc_html__( 'Instagram URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_contact_section',
			'default'  => '#',
			'priority' => 10,
		]
	);

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_linkedin_switch',
            'label'       => esc_html__( 'LinkedIn', 'fintech' ),
            'section'     => 'fintech_right_sidebar_contact_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_linkedin_URL',
			'label'    => esc_html__( 'LinkedIn URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_contact_section',
			'default'  => '#',
			'priority' => 10,
		]
	);

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_youtube_switch',
            'label'       => esc_html__( 'YouTube', 'fintech' ),
            'section'     => 'fintech_right_sidebar_contact_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_youtube_URL',
			'label'    => esc_html__( 'YouTube URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_contact_section',
			'default'  => '#',
			'priority' => 10,
		]
	);

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'fintech_right_sidebar_others_switch',
            'label'       => esc_html__( 'Others', 'fintech' ),
            'section'     => 'fintech_right_sidebar_contact_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'fintech' ),
                'off' => esc_html__( 'Hide', 'fintech' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_right_sidebar_other_URL',
			'label'    => esc_html__( 'Others URL', 'fintech' ),
			'section'  => 'fintech_right_sidebar_contact_section',
			'default'  => '',
			'priority' => 10,
		]
	);
}
fintech_right_sidebar_contact_section();

// Fintech copyright section
function fintech_copyright_section() {

    new \Kirki\Section(
        'fintech_copyright_section',
        [
            'title'       => esc_html__( 'Copyright', 'fintech' ),
            'description' => esc_html__( 'Error page content update panel', 'fintech' ),
            'panel'       => 'fintech_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_left_copyright',
            'label'    => esc_html__( 'Left Copyright Message', 'fintech' ),
            'section'  => 'fintech_copyright_section',
            'default'  => esc_html__( 'Copyright © 2024 Paypath by Evonicmedia. All Right Reserved.', 'fintech' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_right_copyright',
            'label'    => esc_html__( 'Right Copyright Message', 'fintech' ),
            'section'  => 'fintech_copyright_section',
            'default'  => esc_html__( 'Powered by Evonicsoft', 'fintech' ),
            'priority' => 10,
        ]
    );
}
fintech_copyright_section();

// Fintech 404 error page
function fintech_error_page() {

    new \Kirki\Section(
        'fintech_error_page',
        [
            'title'       => esc_html__( '404 Page', 'fintech' ),
            'description' => esc_html__( 'Error page content update panel', 'fintech' ),
            'panel'       => 'fintech_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' 		=> 'fintech_error_page_bg',
            'label'    		=> esc_html__( 'Header Logo', 'fintech' ),
			'description' 	=> esc_html__( 'The saved photo will be your logo', 'fintech' ),
            'section'  		=> 'fintech_error_page',
            'default'  		=> get_template_directory_uri() . '/assets/images/bg/404bg.png',
			'priority'    	=> 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fintech_error_page_heading',
            'label'    => esc_html__( 'Headings', 'fintech' ),
            'section'  => 'fintech_error_page',
            'default'  => esc_html__( 'Ops! PAGE NOT FOUND...', 'fintech' ),
            'priority' => 10,
        ]
    );

        new \Kirki\Field\Text(
        [
            'settings' => 'fintech_error_page_sub_heading',
            'label'    => esc_html__( 'Headings', 'fintech' ),
            'section'  => 'fintech_error_page',
            'default'  => esc_html__( 'ERROR 404', 'fintech' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'fintech_error_page_description',
            'label'       => esc_html__( 'Right sidebar text', 'fintech' ),
            'section'     => 'fintech_error_page',
            'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor voluptatum dolores veritatis provident reiciendis doloremque non autem soluta qui? Repudiandae, vel.', 'fintech' ),
        ]
    );

        new \Kirki\Field\Text(
        [
            'settings' => 'fintech_error_page_btn_text',
            'label'    => esc_html__( 'Headings', 'fintech' ),
            'section'  => 'fintech_error_page',
            'default'  => esc_html__( 'Back to Home', 'fintech' ),
            'priority' => 10,
        ]
    );

    	new \Kirki\Field\URL(
		[
			'settings' => 'fintech_error_page_btn_URL',
			'label'    => esc_html__( 'Others URL', 'fintech' ),
			'section'  => 'fintech_error_page',
			'default'  => '#',
			'priority' => 10,
		]
	);
}
fintech_error_page();