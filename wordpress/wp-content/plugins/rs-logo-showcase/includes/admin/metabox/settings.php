<?php

/*--------------------------------------------
*     Create custom metabox settings 
*---------------------------------------------*/

function rstlogo_shortcode_settings_meta_box() {
	add_meta_box( 'logoshowcase_settings_custom_metabox', esc_html__( 'Logo Showcase General Settings', 'rst-logo'), 'rstlogo_settings_metabox_callback', 'rst_logo_settings', 'advanced', 'high', 2 );
}
add_action( 'add_meta_boxes', 'rstlogo_shortcode_settings_meta_box' );



//for pro featueres

function rstlogo_pro_features() {
	add_meta_box( 'logoshowcase_pro_custom_metabox', esc_html__( 'Logo Showcase Pro Features', 'rst-logo'), 'rstlogo_pro_style_meta_box_callback', 'rst_logo_settings', 'side', 'high', 7 );
}
add_action( 'add_meta_boxes', 'rstlogo_pro_features' );


function rstlogo_pro_style_meta_box_callback(){
	echo '<ul class="pro-features">
			<li>Total 5 Layouts (Grid, List, Slider, Isotope, Popup).</li>
            <li>36+ Layout variations.</li>
            <li>Unlimited Shortcode Generator.</li>
            <li>Visual Composer compatibility.</li>
            <li>Drag & Drop ordering.</li>
            <li>Unlimited color.</li>
            <li>All fields control show/hide.</li>
            <li>All text size, color and text align control.</li>            
            <li>Tooltip Available For All Style.</li>
            <li>Pagination Style Included</li>
            <li>Logo Showcase With Title & Description</li>
            <li>Popup Style Inluded</li>
			<li>100+ Animation Effect.</li>
			<li><a href="http://rstheme.com/portfolio/rs-logo-showcase-pro-wordpress-plugin/" target="_blank">Get Premium Version</a></li>
	</ul>';
}



/*--------------------------------------------
*     Settings metabox call back
*---------------------------------------------*/
function rstlogo_settings_metabox_callback( $logo_data ) {	

	wp_nonce_field( 'rst_data_custom_save_metabox', 'rst_data_custom_save_metabox_nonce' ); 
	$dir = plugin_dir_path( __FILE__ );
	?>	

	<div class="wrap-meta-group" id="rs-logo-tabs">

		<ul>
		    <li><a href="#tabs-1"><?php echo esc_html__('Default Settings', 'rst-logo');?></a></li>
		    <li><a href="#tabs-2"><?php echo esc_html__('Grid Settings', 'rst-logo');?></a></li>
		    <li><a href="#tabs-3"><?php echo esc_html__('Slider Settings', 'rst-logo');?></a></li>
		    <li><a href="#tabs-4"><?php echo esc_html__('Style', 'rst-logo');?></a></li>
  		</ul>

  		<div id="tabs-1">
  		   <?php require  $dir.'tab/general-tab.php';?>	
  		 </div> <!-- end general style -->

  		<!-- Start Grid Settings -->
  		<div id="tabs-2">
  			 <?php require  $dir.'tab/grid-tab.php';?>  		    
  		</div> <!-- end grid style -->


  		<!-- Start Slider Settings -->
  		<div id="tabs-3">
  			<?php require  $dir.'tab/slider-tab.php';?>	
  		  
  		</div><!-- end slider style -->

  		<!-- start style for logoshowcase -->
  		<div id="tabs-4">
  			<?php require  $dir.'tab/style-tab.php';?>		
		</div>
	</div>
<?php }







/*--------------------------------------------------------------
 *			Save metabox data
*-------------------------------------------------------------*/
function save_rstlogo_custom_metabox( $post_id ) {
	if ( ! isset( $_POST['rst_data_custom_save_metabox_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['rst_data_custom_save_metabox_nonce'], 'rst_data_custom_save_metabox' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( isset( $_POST['post_type'] ) && 'rst_logo_settings' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

   if(isset($_POST['logo_category'])){
   	$mymeta = array( 'logo_column','grid_style', 'logo_style', 'per_page','logo_category', 'show_title', 'show_content', 'title_color', 'title_hover_color','content_color', 'filter_logo_column', 'filter_text', 'filter_align', 'title_size', 'content_size', 'light_style', 'light_logo_column', 'show_tooltip', 'logo_animation', 'slider_style', 'cl_lg', 'cl_md', 'cl_sm', 'cl_xs', 'cl_mobile', 'slider_dots', 'slider_nav', 'slider_autoplay', 'slider_stop_on_hover', 'slider_interval', 'slider_loop', 'logo_padding', 'align_div');
   }
   else{
	$mymeta = array( 'logo_column','grid_style', 'logo_style', 'per_page', 'show_title', 'show_content', 'title_color', 'title_hover_color','content_color', 'filter_logo_column', 'filter_text', 'filter_align', 'title_size', 'content_size', 'light_style', 'light_logo_column', 'show_tooltip', 'logo_animation', 'slider_style', 'cl_lg', 'cl_md', 'cl_sm', 'cl_xs', 'cl_mobile', 'slider_dots', 'slider_nav', 'slider_autoplay', 'slider_stop_on_hover', 'slider_interval', 'slider_loop', 'logo_padding', 'align_div');
   }

	

	foreach ( $mymeta as $keys ) {
		if ( is_array( $_POST[ $keys ] ) ) {
			$data = array();

			foreach ( $_POST[ $keys ] as $key => $value ) {
				$data[] = $value;
			}
		} else {
			$data = sanitize_text_field( $_POST[ $keys ] );
		}
		update_post_meta( $post_id, $keys, $data );
	}
}
add_action( 'save_post', 'save_rstlogo_custom_metabox' );