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
		'name'          => esc_html__( 'Homepage koptekst', 'photoframe' ),
		'id'            => 'koptekst',
		'description' => __('Dit is de tekst die op de homepage komt te staan.','photoframe'),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Info 1', 'photoframe' ),
		'id'            => 'box-info-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Info 2', 'photoframe' ),
		'id'            => 'box-info-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Box: Info 3', 'photoframe' ),
		'id'            => 'box-info-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Box: Link 1', 'photoframe' ),
		'id'            => 'box-link-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Box: Link 2', 'photoframe' ),
		'id'            => 'box-link-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Box: Link 3', 'photoframe' ),
		'id'            => 'box-link-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Box: content', 'photoframe' ),
		'id'            => 'box-content',
		'before_widget' => '<div id="%1$s" class="widget %2$s content-box"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Bottom form', 'photoframe' ),
		'id'            => 'bottom-form',
		'before_widget' => '<div id="%1$s" class="widget %2$s bottom-form"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	

} 

add_action( 'widgets_init', 'photoframe_widgets_init' );