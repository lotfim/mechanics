<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Mechanics
 */

 
 function mechanics_custom_header($wp_customize){
	$wp_customize->add_panel('mechanics_header', array(
		'priority' => 500,
		'capability' => 'edit_theme_options',
		'title' => __('Header Settings', 'mechanics'),
	) );
	$wp_customize->add_section('header_section_one', array(
        'title' => __('Header Settings','mechanics'),
        'priority' => 35,
		'panel' => 'mechanics_header',
    ) );
	//Top header
	$wp_customize->add_section('top_header', array(
        'title' => __('TOP HEADER','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_header',
    ) );
	$wp_customize->add_setting('top_header_address', array(
        
    ) );
	$wp_customize->add_control('top_header_address', array(
        'label' => __('ADDRESS','mechanics'),
        'section' => 'top_header',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('top_header_phone', array(
        
    ) );
	$wp_customize->add_control('top_header_phone', array(
        'label' => __('PHONE NUMBER','mechanics'),
        'section' => 'top_header',
        'type' => 'text',
    ) );
	$wp_customize->add_setting('top_header_email', array(
        
    ) );
	$wp_customize->add_control('top_header_email', array(
        'label' => __('EMAIL ADDRESS','mechanics'),
        'section' => 'top_header',
        'type' => 'text',
    ) );
	$wp_customize->add_section('header_colors', array(
        'title' => __('HEADER COLORS','mechanics'),
        'priority' => 45,
		'panel' => 'mechanics_header',
    ) );
	$wp_customize->add_setting( 'header_background_color' , array(
    'default'   => '#efefef',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
	'label'      => __( 'Header Background Color', 'mechanics' ),
	'section'    => 'header_colors',
	'settings'   => 'header_background_color',
	) ) );
	$wp_customize->add_setting( 'top_header_text_color' , array(
    'default'   => '#080808',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_text_color', array(
	'label'      => __( 'Top Header Text Color', 'mechanics' ),
	'section'    => 'header_colors',
	'settings'   => 'top_header_text_color',
	) ) );
	$wp_customize->add_setting( 'menu_background_color_hover' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_background_color_hover', array(
	'label'      => __( 'Menu Background Color on Hover', 'mechanics' ),
	'section'    => 'header_colors',
	'settings'   => 'menu_background_color_hover',
	) ) );
	$wp_customize->add_setting( 'menu_text_color' , array(
    'default'   => '#080808',
    'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_text_color', array(
	'label'      => __( 'Menu Text Color', 'mechanics' ),
	'section'    => 'header_colors',
	'settings'   => 'menu_text_color',
	) ) );
	 
 }
 add_action( 'customize_register', 'mechanics_custom_header' );
 function mechanics_customize_header_css(){
	?>
	<style type="text/css">
		#header {background-color:<?php echo get_theme_mod('header_background_color', '#efefef'); ?>;
								 color:<?php echo get_theme_mod('top_header_text_color', '#080808');?>;}
		#header .navbar,.navbar-inverse .navbar-nav>li>a{background-color:<?php echo get_theme_mod('header_background_color', '#efefef'); ?>;
														color:<?php echo get_theme_mod('menu_text_color', '#080808');?>;}	
		.navbar-inverse .navbar-nav>li>a:focus{color:<?php echo get_theme_mod('menu_text_color', '#efefef');?>;}
		.navbar-inverse .navbar-nav>li>a:hover{background-color:<?php echo get_theme_mod('menu_background_color_hover', '#000000');?>;
		                                       color: <?php echo get_theme_mod('header_background_color', '#080808');?>;}
		.navbar-inverse .navbar-toggle .icon-bar{background-color: <?php echo get_theme_mod('header_background_color', '#080808');?>;}
		.navbar-inverse .navbar-toggle{background-color: <?php echo get_theme_mod('menu_background_color_hover', '#000000');?>;
		                               border-color: <?php echo get_theme_mod('menu_background_color_hover', '#000000');?>;}
		.navbar-inverse .navbar-toggle:hover{background-color:<?php echo get_theme_mod('header_background_color', '#080808'); ?>; }
		.navbar-inverse .navbar-toggle:hover .icon-bar{background-color:<?php echo get_theme_mod('menu_background_color_hover', '#000000'); ?>; }
	</style>
	<?php
}
add_action( 'wp_head', 'mechanics_customize_header_css' );
/**
 * Set up the WordPress core custom header feature.
 *
 * @uses mechanics_header_style()
 */
function mechanics_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'mechanics_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'mechanics_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'mechanics_custom_header_setup' );

if ( ! function_exists( 'mechanics_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see mechanics_custom_header_setup().
 */
function mechanics_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
