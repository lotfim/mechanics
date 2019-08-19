<?php
function mechanics_custom_footer($wp_customize){
	$wp_customize->add_panel('mechanics_footer', array(
		'priority' => 500,
		'capability' => 'edit_theme_options',
		'title' => __('Footer Settings', 'mechanics'),
	) );
	$wp_customize->add_section('footer_section_one', array(
        'title' => __('Footer Settings','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_footer',
    ) );
	//ABOUT US footer
	$wp_customize->add_section('footer_about_us', array(
        'title' => __('ABOUT US','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_footer',
    ) );
	$wp_customize->add_setting('footer_about_us', array(
        
    ) );
	$wp_customize->add_control('footer_about_us', array(
        'label' => __('ABOUT US','mechanics'),
        'section' => 'footer_about_us',
        'type' => 'textarea',
    ) );
	
	//Footer social links 
	$wp_customize->add_section('copyright_social_icon', array(
        'title' => __('Social Links','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_footer',
    ) );

	// Facebook link
	$wp_customize->add_setting('social_link_facebook', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('social_link_facebook', array(
        'label' => __('Facebook URL','mechanics'),
        'section' => 'copyright_social_icon',
        'type' => 'text',
    ) );
	// Twitter link
	$wp_customize->add_setting('social_link_twitter', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('social_link_twitter', array(
        'label' => __('Twitter URL','mechanics'),
        'section' => 'copyright_social_icon',
        'type' => 'text',
    ) );
	// Google Plus link
	$wp_customize->add_setting('social_link_google_plus', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('social_link_google_plus', array(
        'label' => __('Google Plus URL','mechanics'),
        'section' => 'copyright_social_icon',
        'type' => 'text',
    ) );
	// LinkedIn link
	$wp_customize->add_setting('social_link_linkedIn', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('social_link_linkedIn', array(
        'label' => __('LinkedIn URL','mechanics'),
        'section' => 'copyright_social_icon',
        'type' => 'text',
    ) );
	//CONTACT US footer
	$wp_customize->add_section('footer_contact', array(
        'title' => __('CONTACT US','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_footer',
    ) );
	$wp_customize->add_setting('footer_address', array() );
	$wp_customize->add_control('footer_address', array(
        'label' => __('Address','mechanics'),
        'section' => 'footer_contact',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('footer_phone', array());
	$wp_customize->add_control('footer_phone', array(
        'label' => __('Phone number','mechanics'),
        'section' => 'footer_contact',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('footer_email', array());
	$wp_customize->add_control('footer_email', array(
        'label' => __('Email Address','mechanics'),
        'section' => 'footer_contact',
        'type' => 'text',
    ) );
	//QUICK LINKS footer
	$wp_customize->add_section('footer_quick_links', array(
        'title' => __('QUICK LINKS','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_footer',
    ) );
	$wp_customize->add_setting('footer_quick_link_1', array() );
	$wp_customize->add_control('footer_quick_link_1', array(
        'label' => __('Quick Link 1','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('footer_quick_link_1_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('footer_quick_link_1_url', array(
        'label' => __('Quick Link 1 URL','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	
	$wp_customize->add_setting('footer_quick_link_2', array());
	$wp_customize->add_control('footer_quick_link_2', array(
        'label' => __('Quick Link 2','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('footer_quick_link_2_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('footer_quick_link_2_url', array(
        'label' => __('Quick Link 2 URL','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	
	$wp_customize->add_setting('footer_quick_link_3', array());
	$wp_customize->add_control('footer_quick_link_3', array(
        'label' => __('Quick Link 3','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('footer_quick_link_3_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('footer_quick_link_3_url', array(
        'label' => __('Quick Link 3 URL','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	
	$wp_customize->add_setting('footer_quick_link_4', array());
	$wp_customize->add_control('footer_quick_link_4', array(
        'label' => __('Quick Link 4','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('footer_quick_link_4_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control('footer_quick_link_4_url', array(
        'label' => __('Quick Link 4 URL','mechanics'),
        'section' => 'footer_quick_links',
        'type' => 'text',
    ));
	$wp_customize->add_section('footer_colors', array(
        'title' => __('FOOTER COLORS','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_footer',
    ) );
	$wp_customize->add_setting( 'footer_background_color' , array(
    'default'   => '#0c345f',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
	'label'      => __( 'Footer Background Color', 'mechanics' ),
	'section'    => 'footer_colors',
	'settings'   => 'footer_background_color',
	) ) );
	$wp_customize->add_setting( 'footer_text_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
	'label'      => __( 'Footer Text Color', 'mechanics' ),
	'section'    => 'footer_colors',
	'settings'   => 'footer_text_color',
	) ) );
	$wp_customize->add_setting( 'footer_titles_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_titles_color', array(
	'label'      => __( 'Footer Titles Color', 'mechanics' ),
	'section'    => 'footer_colors',
	'settings'   => 'footer_titles_color',
	) ) );
	
}
add_action( 'customize_register', 'mechanics_custom_footer' );
function mechanics_customize_footer_css(){
	?>
	<style type="text/css">
		#footer{background-color: <?php echo get_theme_mod('footer_background_color', '#0c345f'); ?>;
		       color: <?php echo get_theme_mod('footer_text_color', '#ffffff'); ?>;}
		#footer .fa, #footer .footer-link {color: <?php echo get_theme_mod('footer_text_color', '#ffffff'); ?>;}
		#footer .fa {border-color: <?php echo get_theme_mod('footer_text_color', '#ffffff'); ?>;}
		#footer h4 {color: <?php echo get_theme_mod('footer_titles_color', '#ffffff'); ?>;}
		#footer .fa:hover{color:<?php echo get_theme_mod('footer_background_color', '#0c345f'); ?>;
                         background-color:<?php echo get_theme_mod('footer_text_color', '#ffffff'); ?>;}
	</style>
	<?php
}
add_action( 'wp_head', 'mechanics_customize_footer_css' );
?>