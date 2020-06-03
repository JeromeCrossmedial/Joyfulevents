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

	register_sidebar(array(
		'name' => __('Homepage: Welcome Widgets (Left)','photoframe'),
		'id' => 'homepage-welcome-widgets-left',
		'description' => __('Recommended widgets: An image widget, social icons widget, subscribe banners, etc.','photoframe'),
		'before_widget' => '<div class="widget widget-welcome %2$s clearfix" id="%1$s">',
		'after_widget' => '</div>',
		'before_title'  => '<p class="widget-title"><span class="page-title-span">',
		'after_title'   => '</span></p>',
	));

	register_sidebar(array(
		'name' => __('Homepage: Welcome Widgets (Right)','photoframe'),
		'id' => 'homepage-welcome-widgets-right',
		'description' => __('We recommend adding a single [Text Widget].','photoframe'),
		'before_widget' => '<div class="widget widget-welcome %2$s clearfix" id="%1$s">',
		'after_widget' => '</div>',
		'before_title'  => '<p class="widget-title"><span class="page-title-span">',
		'after_title'   => '</span></p>',
	));

	register_sidebar(array(
		'name' => __('Homepage: Above Recent Posts','photoframe'),
		'id' => 'homepage-welcome-above-recent-posts',
		'description' => __('By default this area is 1100px wide and appears between the Featured Pages block and the Recent Posts block.','photoframe'),
		'before_widget' => '<div class="widget widget-welcome %2$s clearfix" id="%1$s">',
		'after_widget' => '</div>',
		'before_title'  => '<p class="widget-title"><span class="page-title-span">',
		'after_title'   => '</span></p>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage koptekst', 'photoframe' ),
		'id'            => 'koptekst',
		'description' => __('Dit is de tekst die op de homepage komt te staan.','photoframe'),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Column 1', 'photoframe' ),
		'id'            => 'box-col-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Column 2', 'photoframe' ),
		'id'            => 'box-col-2',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Column 1', 'photoframe' ),
		'id'            => 'box-col-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Column 3', 'photoframe' ),
		'id'            => 'box-col-3',
		'name'          => esc_html__( 'Box: Column 2', 'photoframe' ),
		'id'            => 'box-col-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Gallery text top', 'photoframe' ),
		'id'            => 'homepage-gallery-text-top',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Gallery text bottom', 'photoframe' ),
		'id'            => 'homepage-gallery-text-bottom',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Column 3', 'photoframe' ),
		'id'            => 'box-col-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

} 

add_action( 'widgets_init', 'photoframe_widgets_init' );