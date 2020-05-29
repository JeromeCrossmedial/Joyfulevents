<?php

function ilovewp_customizer_define_general_sections( $sections ) {
    $panel           = 'ilovewp' . '_general';
    $general_sections = array();

    $theme_header_style = array(
        'default' => esc_html__('Default', 'photoframe'),
        'centered' => esc_html__('Centered', 'photoframe')
    );

    $general_sections['general'] = array(
        'title'     => esc_html__( 'Theme Settings', 'photoframe' ),
        'priority'  => 4900,
        'options'   => array(

            'theme-header-style'     => array(
                'setting' => array(
                    'default' => 'default',
                    'sanitize_callback' => 'ilovewp_sanitize_text'
                ),
                'control' => array(
                    'label' => esc_html__( 'Header Layout', 'photoframe' ),
                    'type'  => 'radio',
                    'choices' => $theme_header_style
                ),
            ),
        ),
    );

    return array_merge( $sections, $general_sections );
}

$wp_customize->add_setting( 
    'theme-logo-white', 
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Upload_Control(
        $wp_customize,
        'file-upload-footer-logo',
        array(
            'label' => esc_html__( 'Alternative Logo', 'photoframe' ),
            'description' => esc_html__( 'This logo will appear when the slideshow contains dark images, so the logo will be automatically switched to the Alternative version.', 'photoframe' ),
            'section' => 'ilovewp_general',
            'settings' => 'theme-logo-white'
        )
    )
);

add_filter( 'ilovewp_customizer_sections', 'ilovewp_customizer_define_general_sections' );