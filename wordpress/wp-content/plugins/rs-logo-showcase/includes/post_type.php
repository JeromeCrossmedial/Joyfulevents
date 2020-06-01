<?php

function rstlogo_logoshowcase_register_post_type() {
	$labels = array(
		'name'               => esc_html__( 'RS Logo Showcase', 'rst-logo' ),
		'singular_name'      => esc_html__( 'RS Logo Showcase', 'rst-logo' ),
		'add_new'            => esc_html__( 'Add New Logo', 'rst-logo', 'rst-logo' ),
		'add_new_item'       => esc_html__( 'Add New Logo', 'rst-logo' ),
		'edit_item'          => esc_html__( 'Edit Logo', 'rst-logo' ),
		'new_item'           => esc_html__( 'New Logo', 'rst-logo' ),
		'all_items'          => esc_html__( 'All Logos', 'rst-logo' ),
		'view_item'          => esc_html__( 'View Logos', 'rst-logo' ),
		'search_items'       => esc_html__( 'Search Logos', 'rst-logo' ),
		'not_found'          => esc_html__( 'No Logos found', 'rst-logo' ),
		'not_found_in_trash' => esc_html__( 'No Logos found in Trash', 'rst-logo' ),
		'parent_item_colon'  => esc_html__( 'Parent Logo:', 'rst-logo' ),
		'menu_name'          => esc_html__( 'Logo Showcase', 'rst-logo' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_in_menu'       => true,
		'show_in_admin_bar'  => true,
		'can_export'         => true,
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          =>  plugins_url( '../lib/images/icon-admin.png', __FILE__ ),
		'supports'           => array( 'title', 'thumbnail','editor' )
	);

	register_post_type( 'rst-logo', $args );
}
add_action( 'init', 'rstlogo_logoshowcase_register_post_type' );


//create custom post type for shortcode
function rstlogo_custom_post_create_settings_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Shortcodes', 'Post Type General Name', 'rst-logo' ),
			'singular_name'       => _x( 'Shortcode', 'Post Type Singular Name', 'rst-logo' ),
			'menu_name'           => __( 'Shortcodes', 'rst-logo' ),
			'parent_item_colon'   => __( 'Parent Shortcode', 'rst-logo' ),
			'all_items'           => __( 'All Shortcodes', 'rst-logo' ),
			'view_item'           => __( 'View Shortcode', 'rs-team-settingse' ),
			'add_new_item'        => __( 'Create New Shortcode', 'rst-logo' ),
			'add_new'             => __( 'Add New Shortcode', 'rst-logo' ),
			'edit_item'           => __( 'Edit Shortcode', 'rst-logo' ),
			'update_item'         => __( 'Update Shortcode', 'rst-logo' ),
			'search_items'        => __( 'Search Shortcode', 'rst-logo' ),
			'not_found'           => __( 'Not Found', 'rst-logo' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'rst-logo' ),
		);

	// Set other options for Custom Post Type
		$args = array(
			'label'               => __( 'Shortcodes', 'rst-logo' ),
			'description'         => __( 'Shortcode news and reviews', 'rst-logo' ),
			'labels'              => $labels,
			'supports'            => array( 'title'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu' 		  => 'edit.php?post_type=rst-logo',
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => false,
			'capability_type'     => 'page',
		);

		// Registering your Custom Post Type
		register_post_type( 'rst_logo_settings', $args );

	}

add_action( 'init', 'rstlogo_custom_post_create_settings_type');	


function rstlogo_create_category() {	
	register_taxonomy(
		'logo-category',
		'rst-logo',
		array(
			'label' => __( 'Categories','cl_team'),
			'rewrite' => array( 'slug' => 'logo-category'),
			'hierarchical' => true,
			'show_admin_column' => true,
		)
	);
}
add_action( 'init', 'rstlogo_create_category' );	



/*--------------------------------------------------------------
*add submenu
*-------------------------------------------------------------*/

function rstlogo_add_menu(){

 add_submenu_page('edit.php?post_type=rst-logo', __('Create Shortcode','cl_team'), __('Create Shortcode','cl_team'), 'manage_options',             'post-new.php?post_type=rst_logo_settings');
}

add_action('admin_menu','rstlogo_add_menu');


/*-----------------------------------
Settings text for title and save etc
-------------------------------------*/

function rstlogo_settings_admin_enter_title( $input ) {
global $post_type;

if ( 'rst_logo_settings' == $post_type )
	return __( 'Enter Shortcode Name', 'rst-logo' );

return $input;
}
add_filter( 'enter_title_here', 'rstlogo_settings_admin_enter_title' );


function rstlogo_settings_admin_updated_messages( $messages ) {
global $post, $post_id;
$messages['rst_logo_settings'] = array( 
	1 => __('Shortcode updated.', 'rst-logo'),
	2 => $messages['post'][2],
	3 => $messages['post'][3],
	4 => __('Shortcode updated.', 'rst-logo'),
	5 => isset($_GET['revision']) ? sprintf( __('Shortcode restored to revision from %s', 'rst-logo'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	6 => __('Shortcode published.', 'rst-logo'),
	7 => __('Shortcode saved.', 'rst-logo'),
	8 => __('Shortcode submitted.', 'tcl_team_settings'),
	9 => sprintf( __('Shortcode scheduled for: <strong>%1$s</strong>.', 'rst-logo'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
	10 => __('Shortcode draft updated.', 'rst-logo'),
);
return $messages;
}
add_filter( 'post_updated_messages', 'rstlogo_settings_admin_updated_messages' );


/*------------------------------------------
Extra column make for shotcode custom post
-------------------------------------------*/


function rstlogo_settings_add_shortcode_column( $columns ) {
return array_merge( $columns,
	array( 'shortcode' => __( 'Shortcode', 'rst-logo' ) ) 
	
	);
}
add_filter( 'manage_rst_logo_settings_posts_columns' , 'rstlogo_settings_add_shortcode_column' );


/*------------------------------------------
Dynamic Shortcode generator
-------------------------------------------*/

function rstlogo_settings_add_posts_shortcode_display( $column, $post_id ) {
if ($column == 'shortcode'){
	?>
<input style="background:#ccc; width:250px" type="text" onClick="this.select();" value="[rslogoshortcode <?php echo 'id=&quot;'.$post_id.'&quot;';?>]" />
<br />
<textarea cols="50" rows="3" style="background:#ddd" onClick="this.select();" ><?php echo '<?php echo do_shortcode("[rslogoshortcode id='; echo "'".$post_id."']"; echo '"); ?>'; ?></textarea>
<?php
}
}

add_action( 'manage_rst_logo_settings_posts_custom_column' , 'rstlogo_settings_add_posts_shortcode_display', 10, 2 );



//added option for free verison 
add_action( 'edit_form_after_title',  'rst_logo_after_title' );

 function rst_logo_after_title($screen){
 	$screen = get_current_screen();
 	if($screen->post_type == 'rst-logo'){
 		echo '<div class="pro-verison"><a href="http://rstheme.com/portfolio/rs-logo-showcase-pro-wordpress-plugin/" target="_blank">Check Pro Version Features</a></div>';
 	}
 }

