<?php

if ( ! class_exists( 'ILOVEWP_Customizer' ) ) :
    class ILOVEWP_Customizer {
        public function __construct() {
            add_action( 'after_setup_theme', array( $this, 'init' ) );
            add_action( 'customize_register', array( $this, 'panels' ) );
            add_action( 'customize_register', array( $this, 'sections' ) );
        }

        public function init() {
            require_once get_template_directory() . '/customizer/helpers.php';
            require_once get_template_directory() . '/customizer/helpers-defaults.php';
        }

        /**
         * Register Customizer panels.
         *
         * @param  WP_Customize_Manager $wp_customize
         *
         * @return void
         */
        public function panels( $wp_customize ) {
            $priority = 1000;
            foreach ( $this->get_panels() as $panel => $data ) {
                if (!isset($data['priority'])) {
                    $data['priority'] = $priority += 100;
                }

                $wp_customize->add_panel( $this->get_prefix() . $panel, $data );
            }

            // Re-prioritize and rename the Widgets panel
            if ( ! isset( $wp_customize->get_panel( 'widgets' )->priority ) ) {
                $wp_customize->add_panel( 'widgets' );
            }
            $wp_customize->get_panel( 'widgets' )->priority = $priority += 100;
        }

        /**
         * Add sections and controls to the customizer.
         *
         * @param  WP_Customize_Manager $wp_customize
         *
         * @return void
         */
        public function sections( $wp_customize ) {
            $default_path = get_template_directory() . '/customizer/sections';
            // Load built-in section mods
            $builtin_mods = array(
                'background',
                'navigation',
                'static-front-page',
            );

            foreach ( $builtin_mods as $slug ) {
                $file = trailingslashit( $default_path ) . $slug . '.php';

                if ( file_exists( $file ) ) {
                    require_once( $file );
                }
            }

            foreach ( $this->get_panels() as $panel => $data ) {
                $file = trailingslashit( $default_path ) . $panel . '.php';

                if ( file_exists( $file ) ) {
                    require_once( $file );
                }
            }

            $sections = $this->get_sections();

            $priority = array();
            foreach ( $sections as $section => $data ) {
                $options = null;

                if ( isset( $data['options'] ) ) {
                    $options = $data['options'];
                    unset( $data['options'] );
                }

                if ( ! isset( $data['priority'] ) ) {
                    $panel_priority = ( 'none' !== $panel && isset( $panels[ $panel ]['priority'] ) ) ? $panels[ $panel ]['priority'] : 1000;

                    if ( ! isset( $priority[ $panel ] ) ) {
                        $priority[ $panel ] = $panel_priority;
                    }

                    $data['priority'] = $priority[ $panel ] += 10;
                }

                $wp_customize->add_section( $this->get_prefix() . $section, $data );

                // Add options to the section
                $this->add_sections_options( $wp_customize, $this->get_prefix() . $section, $options );
            }
        }

        /**
         * Register settings and controls for a section.
         *
         * @param WP_Customize_Manager $wp_customize
         * @param string $section
         * @param array $args
         */
        private function add_sections_options( $wp_customize, $section, $args ) {
            foreach ( $args as $setting_id => $option ) {
                // Add setting
                $wp_customize->remove_section( 'colors' );  //Delete default colors tab 
                if ( isset( $option['setting'] ) ) {
                    $defaults = array(
                        'type'                 => 'theme_mod',
                        'capability'           => 'edit_theme_options',
                        'theme_supports'       => '',
                        'default'              => ilovewp_get_default( $setting_id ),
                        'transport'            => 'refresh',
                        'sanitize_callback'    => '',
                        'sanitize_js_callback' => '',
                    );

                    $setting = wp_parse_args( $option['setting'], $defaults );

                    // Add the setting arguments inline so Theme Check can verify the presence of sanitize_callback
                    $wp_customize->add_setting( $setting_id, array(
                        'type'                 => $setting['type'],
                        'capability'           => $setting['capability'],
                        'theme_supports'       => $setting['theme_supports'],
                        'default'              => $setting['default'],
                        'transport'            => $setting['transport'],
                        'sanitize_callback'    => $setting['sanitize_callback'],
                        'sanitize_js_callback' => $setting['sanitize_js_callback'],
                    ) );
                }

                // Add control
                if ( isset( $option['control'] ) ) {
                    $control_id = $this->get_prefix() . $setting_id;

                    $defaults = array(
                        'settings' => $setting_id,
                        'section'  => $section,
                    );

                    if ( ! isset( $option['setting'] ) ) {
                        unset( $defaults['settings'] );
                    }

                    $control = wp_parse_args( $option['control'], $defaults );

                    // Check for a specialized control class
                    if ( isset( $control['control_type'] ) ) {
                        $class = $control['control_type'];

                        if ( class_exists( $class ) ) {
                            unset( $control['control_type'] );

                            // Dynamically generate a new class instance
                            $reflection     = new ReflectionClass( $class );
                            $class_instance = $reflection->newInstanceArgs( array(
                                $wp_customize,
                                $control_id,
                                $control
                            ) );

                            $wp_customize->add_control( $class_instance );
                        }
                    } else {
                        $wp_customize->add_control( $control_id, $control );
                    }
                }
            }
        }

        private function get_panels() {
            return apply_filters( 'ilovewp_customizer_panels', array(
                'general'      => array( 'title' => esc_html__( 'General', 'photoframe' ) ),
                'footer'       => array( 'title' => esc_html__( 'Footer', 'photoframe' ) ),
            ) );
        }

        /**
         * @return array Customizer sections
         */
        private function get_sections() {
            return apply_filters( 'ilovewp_customizer_sections', array() );
        }

        /**
         * @return string Theme prefix
         */
        private function get_prefix() {
            // $theme_data = wp_get_theme();
			return 'ilovewp' . '_';
        }

    }
endif;

new ILOVEWP_Customizer();

// Extra styles
function photoframe_customizer_stylesheet() {
    
    // Stylesheet
    wp_enqueue_style( 'photoframe-customizer-css', get_template_directory_uri().'/ilovewp-admin/css/customizer-styles.css', NULL, NULL, 'all' );
    
}

add_action( 'customize_controls_print_styles', 'photoframe_customizer_stylesheet' );

/**
 * Add pageSection support for site homepage.
 *
 */

function photoframe_customize_pagesections( $wp_customize ) {
	
	//remove old homepage section
    $wp_customize->remove_section('static_front_page');

    // Create custom panel.
	$wp_customize->add_panel( 'homepage_sections', array(
		'priority'       => 70,
		'theme_supports' => '',
		'title'          => __( 'Homepage sections', 'photoframe' ),
		'description'    => __( 'Set background images for sections on your homepage', 'photoframe' ),
	) );
	
	// Add section 1.
	$wp_customize->add_section( 'homepage_section_1' , array(
		'title'      => __( 'Section 1','photoframe' ),
		'panel'      => 'homepage_sections',
		'priority'   => 1,
	) );
	
	// Add section 2.
	$wp_customize->add_section( 'homepage_section_2' , array(
		'title'      => __( 'Section 2','photoframe' ),
		'panel'      => 'homepage_sections',
		'priority'   => 2,
	) );
	
	// Add section 3.
	$wp_customize->add_section( 'homepage_section_3' , array(
		'title'      => __( 'Section 3','photoframe' ),
		'panel'      => 'homepage_sections',
		'priority'   => 3,
	) );

	// Add setting section 1.
	$wp_customize->add_setting( 'section1_bg', array(
		'default'     => get_stylesheet_directory_uri() . '/images/foto-pettine-IfjHaIoAoqE-unsplash.jpg',
	) );
	
	// Add setting section 2.
	$wp_customize->add_setting( 'section2_bg', array(
		'default'     => get_stylesheet_directory_uri() . '/images/tristan-gassert-IRzq8sDxb7w-unsplash.jpg',
	) );
	
	// Add setting section 3.
	$wp_customize->add_setting( 'section3_bg', array(
		'default'     => get_stylesheet_directory_uri() . '/images/foto-pettine-IfjHaIoAoqE-unsplash.jpg',
	) );

	// Add control section 1.
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'section1_background_image', array(
			  'label'      => __( 'Add section Background Here, the width should be approx 1400px', 'photoframe' ),
			  'section'    => 'homepage_section_1',
			  'settings'   => 'section1_bg',
			  )
	) );
	
	// Add control section 2.
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'section2_background_image', array(
			  'label'      => __( 'Add section Background Here, the width should be approx 1400px', 'photoframe' ),
			  'section'    => 'homepage_section_2',
			  'settings'   => 'section2_bg',
			  )
	) );
	
	// Add control section 3.
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'section3_background_image', array(
			  'label'      => __( 'Add section Background Here, the width should be approx 1400px', 'photoframe' ),
			  'section'    => 'homepage_section_3',
			  'settings'   => 'section3_bg',
			  )
	) );

    return $wp_customize;

}
add_action( 'customize_register', 'photoframe_customize_pagesections' );

// Customize Appearance Options
function photoframe_customize_colors( $wp_customize ) {

	$wp_customize->add_setting('lwp_site_color', array(
		'default' => '#D48F40',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('lwp_logo_color', array(
		'default' => '#D48F40',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('lwp_standard_colors', array(
		'title' => __('Standaard Kleuren', 'photoframe'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_site_color_control', array(
		'label' => __('Website Color', 'photoframe'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_site_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_logo_color_control', array(
		'label' => __('Logo Color', 'photoframe'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_logo_color',
	) ) );

}

add_action('customize_register', 'photoframe_customize_colors');


// Output Customize CSS
function learningWordPress_customize_css() { ?>

	<style type="text/css">

		a:hover {
			color: <?php echo get_theme_mod('lwp_site_color'); ?>;
		}

		input[type=submit]{
			background: <?php echo get_theme_mod('lwp_site_color'); ?>;
		}

		.page-title-span:after {
			border:3px solid <?php echo get_theme_mod('lwp_site_color'); ?>!important;
		}
		
		input[type=radio]:checked {
        	background-color: <?php echo get_theme_mod('lwp_site_color'); ?>;
    	}
		
		.large-nav .current-menu-item > a {
			color:<?php echo get_theme_mod('lwp_site_color'); ?>;
			text-decoration: none;
		}
		
		.large-nav a:hover, .large-nav a:focus {
			color:<?php echo get_theme_mod('lwp_site_color'); ?>!important;
			text-decoration: none!important;
		}

	</style>

<?php }

add_action('wp_head', 'learningWordPress_customize_css');


