<?php
function mechanics_custom_homepage($wp_customize){
	$wp_customize->add_panel('mechanics_homepage', array(
		'priority' => 500,
		'capability' => 'edit_theme_options',
		'title' => __('Homepage Settings', 'mechanics'),
	));
	//Banner Image
	$wp_customize->add_section('homepage_banner_image', array(
        'title' => __('Banner Image','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ));
	
	$wp_customize->add_setting('homepage_banner_image', array( 'default' => '' ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'homepage_banner_image',
           array(
               'label'      => __( 'HomePage Banner Image', 'mechanics' ),
               'section'    => 'homepage_banner_image',
               'settings'   => 'homepage_banner_image' 
           )
       )
	);

	//Banner Title
	$wp_customize->add_section('homepage_banner_title', array(
        'title' => __('Banner Title','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ) );
	$wp_customize->add_setting('homepage_banner_title',array());
	$wp_customize->add_control('homepage_banner_title',array(
			'type'	=> 'text',
			'label'	=> __('Banner Title:','mechanics'),
			'section'	=> 'homepage_banner_title'
	));	
	$wp_customize->add_setting( 'homepage_banner_title_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_banner_title_color', array(
	'label'      => __( 'Banner Title Color', 'mechanics' ),
	'section'    => 'homepage_banner_title',
	'settings'   => 'homepage_banner_title_color',
	) ) );
	//Banner Catchphrase
	$wp_customize->add_section('homepage_banner_catchphrase', array(
        'title' => __('Banner Catchphrase','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ) );
	$wp_customize->add_setting('homepage_banner_catchphrase',array());
	$wp_customize->add_control('homepage_banner_catchphrase',array(
			'type'	=> 'textarea',
			'label'	=> __('Banner catchphrase:','mechanics'),
			'section'	=> 'homepage_banner_catchphrase'
	));
	$wp_customize->add_setting( 'homepage_banner_catchphrase_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_banner_catchphrase_color', array(
	'label'      => __( 'Banner Catchphrase Color', 'mechanics' ),
	'section'    => 'homepage_banner_catchphrase',
	'settings'   => 'homepage_banner_catchphrase_color',
	) ) );
	//Banner Button
	$wp_customize->add_section('homepage_banner_button', array(
        'title' => __('Banner Button','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ) );
   $wp_customize->add_setting('homepage_banner_button_link',array(
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	$wp_customize->add_control('homepage_banner_button_link',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select "Learn More" page pointer:','mechanics'),
			'section'	=> 'homepage_banner_button'
	));	
	$wp_customize->add_setting('homepage_banner_button_text',array('default' => 'Learn More'));
	
	$wp_customize->add_control('homepage_banner_button_text',array(
			'type'	=> 'text',
			'label'	=> __('Banner button text','mechanics'),
			'section'	=> 'homepage_banner_button'
	));
	$wp_customize->add_setting( 'homepage_banner_button_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_button_color', array(
	'label'      => __( 'Banner Button  Color', 'mechanics' ),
	'section'    => 'homepage_banner_button',
	'settings'   => 'homepage_banner_button_color',
	) ) );
	$wp_customize->add_setting( 'homepage_banner_button_background_color_hover' , array(
    'default'   => '#fb606c',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_button_background_color_hover', array(
	'label'      => __( 'Banner Button Background Color On Hover', 'mechanics' ),
	'section'    => 'homepage_banner_button',
	'settings'   => 'homepage_banner_button_background_color_hover',
	) ) );
	//Banner information
	$wp_customize->add_section('homepage_banner_information', array(
        'title' => __('Banner Information','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ) );
	$wp_customize->add_setting('homepage_banner_information_arg_1',array());
	$wp_customize->add_control('homepage_banner_information_arg_1',array(
			'type'	=> 'text',
			'label'	=> __('Why Us Argument 1:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));	
	$wp_customize->add_setting('homepage_banner_information_arg_2',array());
	$wp_customize->add_control('homepage_banner_information_arg_2',array(
			'type'	=> 'text',
			'label'	=> __('Why Us Argument 2:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_arg_3',array());
	$wp_customize->add_control('homepage_banner_information_arg_3',array(
			'type'	=> 'text',
			'label'	=> __('Why Us Argument 3:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_opening_weekdays',array());
	$wp_customize->add_control('homepage_banner_information_opening_weekdays',array(
			'type'	=> 'text',
			'label'	=> __('Opening Hours On Weekdays:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_opening_saturday',array());
	$wp_customize->add_control('homepage_banner_information_opening_saturday',array(
			'type'	=> 'text',
			'label'	=> __('Opening Hours On Saturday:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_opening_sunday',array());
	$wp_customize->add_control('homepage_banner_information_opening_sunday',array(
			'type'	=> 'text',
			'label'	=> __('Opening Hours On Sunday:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_opening_sunday',array());
	$wp_customize->add_control('homepage_banner_information_opening_sunday',array(
			'type'	=> 'text',
			'label'	=> __('Opening Hours On Sunday:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_phone',array());
	$wp_customize->add_control('homepage_banner_information_phone',array(
			'type'	=> 'text',
			'label'	=> __('Phone Number:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_mobile',array());
	$wp_customize->add_control('homepage_banner_information_mobile',array(
			'type'	=> 'text',
			'label'	=> __('Mobile:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting('homepage_banner_information_fax',array());
	$wp_customize->add_control('homepage_banner_information_fax',array(
			'type'	=> 'text',
			'label'	=> __('Fax:','mechanics'),
			'section'	=> 'homepage_banner_information'
	));
	$wp_customize->add_setting( 'homepage_banner_information_title_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_banner_information_title_color', array(
	'label'      => __( 'Banner Titles Color', 'mechanics' ),
	'section'    => 'homepage_banner_information',
	'settings'   => 'homepage_banner_information_title_color',
	) ) );
	$wp_customize->add_setting( 'homepage_banner_information_title_background_color' , array(
    'default'   => '#0c345f',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_banner_information_title_background_color', array(
	'label'      => __( 'Banner Titles Background Color', 'mechanics' ),
	'section'    => 'homepage_banner_information',
	'settings'   => 'homepage_banner_information_title_background_color',
	) ) );
	//Services settings
	$wp_customize->add_section('homepage_services_one', array(
        'title' => __('Services Part One','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ) );
	$wp_customize->add_setting('homepage_services_side_image', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image',
           array(
               'label'      => __( 'Side Image', 'mechanics' ),
               'section'    => 'homepage_services_one',
               'settings'   => 'homepage_services_side_image' 
           )
       )
	);
	$wp_customize->add_setting('homepage_services_title_text',array('default' => 'Our Services'));
	
	$wp_customize->add_control('homepage_services_title_text',array(
			'type'	=> 'text',
			'label'	=> __('Our Services Title','mechanics'),
			'section'	=> 'homepage_services_one'
	));
	$wp_customize->add_setting( 'homepage_services_title_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_services_title_color', array(
	'label'      => __( 'Services Title Color', 'mechanics' ),
	'section'    => 'homepage_services_one',
	'settings'   => 'homepage_services_title_color',
	) ) );
	$wp_customize->add_setting( 'homepage_services_icones_color' , array(
    'default'   => '#0c345f',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_services_icones_color', array(
	'label'      => __( 'Icones Color', 'mechanics' ),
	'section'    => 'homepage_services_one',
	'settings'   => 'homepage_services_icones_color',
	) ) );
	$wp_customize->add_setting('homepage_all_services_button_link',array(
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	$wp_customize->add_control('homepage_all_services_button_link',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('View All services Button page Link:','mechanics'),
			'section'	=> 'homepage_services_one'
	));	
	$wp_customize->add_setting('homepage_services_button_text',array(
						'default'	=> __('View alll','mechanics'),
						'sanitize_callback'	=> 'sanitize_text_field'));
	$wp_customize->add_control('homepage_services_button_text',array(
			'settings' => 'homepage_services_button_text',
			'type'	=> 'text',
			'label'	=> __('Services Button Text:','mechanics'),
			'section'	=> 'homepage_services_one'
	));
	$wp_customize->add_setting( 'homepage_services_button_text_color' , array(
    'default'   => '#757575',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_services_button_text_color', array(
	'label'      => __( 'Services button text color', 'mechanics' ),
	'section'    => 'homepage_services_one',
	'settings'   => 'homepage_services_button_text_color',
	) ) );
	$wp_customize->add_setting( 'homepage_services_button_background_color_hover' , array(
    'default'   => '#fb606c',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_services_button_background_color_hover', array(
	'label'      => __( 'Services button text color', 'mechanics' ),
	'section'    => 'homepage_services_one',
	'settings'   => 'homepage_services_button_background_color_hover',
	) ) );
	//SERVICES ICONS
	$wp_customize->add_section('homepage_services_two', array(
        'title' => __('Services Icons Display','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ) );
	$wp_customize->add_setting('air_filtration_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));	 
	$wp_customize->add_control( 'air_filtration_icon_display', array(
		   'settings' => 'air_filtration_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display air filtration icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('air_filtration_icon_text',array('default'	=> __('Air Filtration','mechanics')));
	$wp_customize->add_control('air_filtration_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Display air filtration icon:','mechanics'),
			'section'	=> 'homepage_services_two'
	));
	$wp_customize->add_setting('air_filtration_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));	 
	$wp_customize->add_control( 'air_filtration_icon_display', array(
		   'settings' => 'air_filtration_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display air filtration icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('air_filtration_icon_text',array('default'	=> __('Air Filtration','mechanics')));
	$wp_customize->add_control('air_filtration_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Air filtration icon text:','mechanics'),
			'section'	=> 'homepage_services_two'
	));	
	$wp_customize->add_setting('oil_change_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));
	$wp_customize->add_control( 'oil_change_icon_display', array(
		   'settings' => 'oil_change_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display oil change icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('oil_change_icon_text',array('default'	=> __('Oil Change','mechanics')));
	$wp_customize->add_control('oil_change_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Oil change icon text:','mechanics'),
			'section'	=> 'homepage_services_two'
	));
	$wp_customize->add_setting('tires_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));
	$wp_customize->add_control( 'tires_icon_display', array(
		   'settings' => 'tires_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display tires icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('tires_icon_text',array('default'	=> __('Tires','mechanics')));
	$wp_customize->add_control('tires_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Tires icon text:','mechanics'),
			'section'	=> 'homepage_services_two'
	));
	$wp_customize->add_setting('maintenance_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));
	$wp_customize->add_control( 'maintenance_icon_display', array(
		   'settings' => 'maintenance_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display maintenance icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('maintenance_icon_text',array('default'	=> __('Maintenance','mechanics')));
	$wp_customize->add_control('maintenance_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Maintenance icon text:','mechanics'),
			'section'	=> 'homepage_services_two'
	));
	$wp_customize->add_setting('tow_truck_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));
	$wp_customize->add_control( 'tow_truck_icon_display', array(
		   'settings' => 'tow_truck_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display tow truck icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('tow_truck_icon_text',array('default'	=> __('Tow Truck','mechanics')));
	$wp_customize->add_control('tow_truck_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Tow Truck icon text:','mechanics'),
			'section'	=> 'homepage_services_two'
	));
	$wp_customize->add_setting('batteries_icon_display',array(
			'default' => true,
			'capability' => 'edit_theme_options'
	));
	$wp_customize->add_control( 'batteries_icon_display', array(
		   'settings' => 'batteries_icon_display',
    	   'section'   => 'homepage_services_two',
    	   'label'     => __('Display batteries icon','mechanics'),
    	   'type'      => 'checkbox'
     ));
	$wp_customize->add_setting('batteries_icon_text',array('default'	=> __('Batteries','mechanics')));
	$wp_customize->add_control('batteries_icon_text',array(
			'type'	=> 'text',
			'label'	=> __('Batteries icon text:','mechanics'),
			'section'	=> 'homepage_services_two'
	));
	
	//Our Team
	$wp_customize->add_section('homepage_team', array(
        'title' => __('Team Members','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ));
	$wp_customize->add_setting('homepage_team_title_text',array('default' => 'Our Team'));
	
	$wp_customize->add_control('homepage_team_title_text',array(
			'type'	=> 'text',
			'label'	=> __('Our Team Title','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting( 'homepage_team_title_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_team_title_color', array(
	'label'      => __( 'Team Title Color', 'mechanics' ),
	'section'    => 'homepage_team',
	'settings'   => 'homepage_team_title_color',
	) ) );
	$wp_customize->add_setting('homepage_team_member_1_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-1',
           array(
               'label'      => __( 'Team member 1 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_1_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_1_name',array());
	$wp_customize->add_control('homepage_team_member_1_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 1 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_1_function',array());
	$wp_customize->add_control('homepage_team_member_1_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 1 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_2_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-2',
           array(
               'label'      => __( 'Team member 2 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_2_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_2_name',array());
	$wp_customize->add_control('homepage_team_member_2_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 2 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_2_function',array());
	$wp_customize->add_control('homepage_team_member_2_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 2 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_3_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-3',
           array(
               'label'      => __( 'Team member 3 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_3_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_3_name',array());
	$wp_customize->add_control('homepage_team_member_3_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 3 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_3_function',array());
	$wp_customize->add_control('homepage_team_member_3_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 3 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_4_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-4',
           array(
               'label'      => __( 'Team member 4 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_4_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_4_name',array());
	$wp_customize->add_control('homepage_team_member_4_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 4 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_4_function',array());
	$wp_customize->add_control('homepage_team_member_4_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 4 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_5_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-5',
           array(
               'label'      => __( 'Team member 5 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_5_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_5_name',array());
	$wp_customize->add_control('homepage_team_member_5_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 5 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_5_function',array());
	$wp_customize->add_control('homepage_team_member_5_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 5 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_6_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-6',
           array(
               'label'      => __( 'Team member 6 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_6_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_6_name',array());
	$wp_customize->add_control('homepage_team_member_6_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 6 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_6_function',array());
	$wp_customize->add_control('homepage_team_member_6_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 6 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_7_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-7',
           array(
               'label'      => __( 'Team member 7 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_7_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_7_name',array());
	$wp_customize->add_control('homepage_team_member_7_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 7 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_7_function',array());
	$wp_customize->add_control('homepage_team_member_7_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 7 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_8_picture', array( ) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image-8',
           array(
               'label'      => __( 'Team member 8 picture', 'mechanics' ),
               'section'    => 'homepage_team',
               'settings'   => 'homepage_team_member_8_picture' 
           )
       )
	);
	$wp_customize->add_setting('homepage_team_member_8_name',array());
	$wp_customize->add_control('homepage_team_member_8_name',array(
			'type'	=> 'text',
			'label'	=> __('Team member 8 name:','mechanics'),
			'section'	=> 'homepage_team'
	));
	$wp_customize->add_setting('homepage_team_member_8_function',array());
	$wp_customize->add_control('homepage_team_member_8_function',array(
			'type'	=> 'text',
			'label'	=> __('Team member 8 function:','mechanics'),
			'section'	=> 'homepage_team'
	));
	//OUR PRODUCTS
	$wp_customize->add_section('homepage_products', array(
        'title' => __('Products','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_homepage',
    ));
	$wp_customize->add_setting('homepage_products_title_text',array('default' => 'Our Latest Procucts'));
	
	$wp_customize->add_control('homepage_products_title_text',array(
			'type'	=> 'text',
			'label'	=> __('Products Title','mechanics'),
			'section'	=> 'homepage_products'
	));
	$wp_customize->add_setting( 'homepage_products_title_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_products_title_color', array(
	'label'      => __( 'Products Title Color', 'mechanics' ),
	'section'    => 'homepage_products',
	'settings'   => 'homepage_products_title_color',
	) ) );
	$wp_customize->add_setting( 'homepage_products_button_text_color' , array(
    'default'   => '#757575',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_products_button_text_color', array(
	'label'      => __( 'Product button text color', 'mechanics' ),
	'section'    => 'homepage_products',
	'settings'   => 'homepage_products_button_text_color',
	) ) );
	$wp_customize->add_setting( 'homepage_products_button_background_color_hover' , array(
    'default'   => '#fb606c',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_products_button_background_color_hover', array(
	'label'      => __( 'Product button background color on hover', 'mechanics' ),
	'section'    => 'homepage_products',
	'settings'   => 'homepage_products_button_background_color_hover',
	) ) );
	
}
add_action( 'customize_register', 'mechanics_custom_homepage' );
function mechanics_customize_homepage_css(){
	?>
	<style type="text/css">
		.banner{background-image: url('<?php echo get_theme_mod('homepage_banner_image');?>');}
		.banner h2{color: <?php echo get_theme_mod('homepage_banner_title_color');?>;}
		.banner p{color: <?php echo get_theme_mod('homepage_banner_catchphrase_color');?>;}
		.banner a{color: <?php echo get_theme_mod('homepage_banner_button_color');?>;
				  border-color: <?php echo get_theme_mod('homepage_banner_button_color');?>;}
		.banner a:hover{background-color: <?php echo get_theme_mod('homepage_banner_button_background_color_hover');?>;
				  border-color: <?php echo get_theme_mod('homepage_banner_button_background_color_hover');?>;}	
		.infos div h3{color:<?php echo get_theme_mod('homepage_banner_information_title_color');?>;
					  background-color: <?php echo get_theme_mod('homepage_banner_information_title_background_color');?>;}
		.icon{color: <?php echo get_theme_mod('homepage_services_icones_color');?>;
			  border-color: <?php echo get_theme_mod('homepage_services_icones_color');?>;}
		.icon:hover, .icon:focus{color: #ffffff;
			  background-color:<?php echo get_theme_mod('homepage_services_icones_color');?>;}
		.services .button{color: <?php echo get_theme_mod('homepage_services_button_text_color');?>;
						  border-color: <?php echo get_theme_mod('homepage_services_button_text_color');?>;}
		.services .button:hover{background-color: <?php echo get_theme_mod('homepage_services_button_background_color_hover');?>;
						  border-color: <?php echo get_theme_mod('homepage_services_button_background_color_hover');?>;}
		.services-title{color: <?php echo get_theme_mod('homepage_services_title_color');?>;}
		.team-title{color: <?php echo get_theme_mod('homepage_team_title_color');?>;}
		.products-title{color: <?php echo get_theme_mod('homepage_products_title_color');?>;}	
		.product .button{color: <?php echo get_theme_mod('homepage_products_button_text_color');?>;
						  border-color: <?php echo get_theme_mod('homepage_products_button_text_color');?>;}
		.product .button:hover{background-color: <?php echo get_theme_mod('homepage_products_button_background_color_hover');?>;
						  border-color: <?php echo get_theme_mod('homepage_products_button_background_color_hover');?>;}		
	</style>
	<?php
	
}
add_action( 'wp_head', 'mechanics_customize_homepage_css' );
?>