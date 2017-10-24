<?php
function foo_customize_register( WP_Customize_Manager $wp_customize ) {

	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options' ),
	) );


	$wp_customize->add_setting( 'custom_image', array(
		'default' => get_parent_theme_file_uri( '/images/slide_1.jpg' ),
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_image', array(
				'label'   => __( 'Custom Image' ),
				'section' => 'theme_options',
			)
		)
	);

	$wp_customize->add_setting( 'custom_cropped_image', array(
		'default' => get_parent_theme_file_uri( '/images/slide_2.jpg' ),
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'custom_cropped_image', array(
				'label'   => __( 'Custom Cropped Image' ),
				'section' => 'theme_options',
				'width'              => 600,
				'height'             => 300,
			)
		)
	);
}

add_action( 'customize_register', 'foo_customize_register' );