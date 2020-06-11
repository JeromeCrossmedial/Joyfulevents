<?php 

/*-----------------------------------------------------------------------------------*/
/* Initializing Widgetized Areas (Sidebars)																			 */
/*-----------------------------------------------------------------------------------*/

function photoframe_widgets_init() {

	register_sidebar(array(
		'name' => __('Sidebar (UNUSED)','photoframe'),
		'id' => 'sidebar',
		'description' => __('Widgets added to this widgetized area are NOT displayed anywhere. This area is defined for the purpose of capturing the default widgets that are automatically added on new WordPress installations.','photoframe'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage section 1', 'photoframe' ),
		'id'            => 'section1',
		'description' => __('This is a full width widgetized area that appears on the homepage in section 1. Intended for event information.','photoframe'),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<p class="widget-title"><span class="page-title-span">',
		'after_title'   => '</span></p>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage section 2', 'photoframe' ),
		'id'            => 'section2',
		'description' => __('This is a full width widgetized area that appears on the homepage in section 2. Intended for event information.','photoframe'),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<p class="widget-title"><span class="page-title-span">',
		'after_title'   => '</span></p>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage section 3', 'photoframe' ),
		'id'            => 'section3',
		'description' => __('This is a full width widgetized area that appears on the homepage in section 3. Intended for event information.','photoframe'),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<p class="widget-title"><span class="page-title-span">',
		'after_title'   => '</span></p>',
	) );

} 

add_action( 'widgets_init', 'photoframe_widgets_init' );