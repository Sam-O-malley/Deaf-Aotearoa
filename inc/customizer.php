<?php

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

   $wp_customize->add_section( 'custom_theme_colour_section' , array(
       'title'      => __( 'Colours', 'Deaf Aotearoa' ),
       'priority'   => 30,
   ) );

   $wp_customize->add_setting( 'custom_background_colour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_control', array(
   	'label'      => __( 'Background Colour', 'Deaf Aotearoa' ),
   	'section'    => 'custom_theme_colour_section',
   	'settings'   => 'custom_background_colour',
   ) ) );




   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_header_background_colour', array(
   	'label'      => __( 'Header Colour', 'Deaf Aotearoa' ),
   	'section'    => 'custom_theme_colour_section',
   	'settings'   => 'navigation_background',
   ) ) );

   $wp_customize->add_section( 'layout_section' , array(
       'title'      => __( 'Layout Section', 'Deaf Aotearoa' ),
       'priority'   => 30,
   ) );

// 
   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_sidebar_control', array(
   	'label'      => __( 'Sidebar Position', 'Deaf Aotearoa' ),
   	'section'    => 'layout_section',
   	'settings'   => 'sidebar_position',
    'type' => 'radio',
    'choices' => array(
        'left' => 'Left Side',
        'right' => 'Right Side'
    )
   ) ) );



   $wp_customize->add_section( 'front_page_section' , array(
       'title'      => __( 'Front Page Info', 'Deaf Aotearoa' ),
       'priority'   => 30,
   ) );

   $wp_customize->add_setting( 'featured_post_setting' , array(
       'default'   => '',
       'transport' => 'refresh',
   ) );

   $args = array(
       'posts_per_page' => -1
   );
   $allPosts = get_posts($args);

   $options = array();
   $options[''] = 'Please select a featured post';
   foreach ($allPosts as $singlePost) {
       $options[$singlePost->ID] = $singlePost->post_title;
   }

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_post_control', array(
   	'label'      => __( 'Featured Post', 'Deaf Aotearoa' ),
   	'section'    => 'front_page_section',
   	'settings'   => 'featured_post_setting',
    'type'       => 'select',
    'choices' => $options
   ) ) );


}
add_action( 'customize_register', 'mytheme_customize_register' );


add_action( 'wp_head', 'mytheme_customize_css');
