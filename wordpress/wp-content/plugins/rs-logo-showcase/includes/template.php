<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


 /*=====================================================================
	// RS Team ShortCode
  =======================================================================*/

	function rstlogo_shortcode( $atts ) {	


 /*=====================================================================
	//take shorcode ID
  =======================================================================*/
	
	$atts = shortcode_atts(
		array(
			'id' => "", 
		), $atts);
		global $post;
		$post_id = $atts['id'];		
		if($post_id!='xx'){		

 /*===========================================================
       //retrive settings value form settings page
   ============================================================*/
		
		$logo_type                  = get_post_meta($post_id, 'logo_style', true);
		$grid_style                 = get_post_meta($post_id, 'grid_style', true);
		$grid_logo_column           = get_post_meta($post_id, 'logo_column', true);	
		$align_div					= get_post_meta($post_id, 'align_div', true);		
		$per_page 					= get_post_meta($post_id, 'per_page', true);					
		$order_type                 = get_post_meta($post_id, 'team_order', true);
		$logo_category              = get_post_meta($post_id, 'logo_category', true);

		
		//setting for slider
		$slider_style 		   = get_post_meta($post_id, 'slider_style', true);
		$cl_lg                 = get_post_meta($post_id, 'cl_lg', true);
		$cl_md                 = get_post_meta($post_id, 'cl_md', true);
		$cl_sm                 = get_post_meta($post_id, 'cl_sm', true);
		$cl_xs                 = get_post_meta($post_id, 'cl_xs', true);
		$cl_mobile             = get_post_meta($post_id, 'cl_mobile', true);
		$slider_dots           = get_post_meta($post_id, 'slider_dots', true);
		$slider_nav            = get_post_meta($post_id, 'slider_nav', true);
		$slider_autoplay       = get_post_meta($post_id, 'slider_autoplay', true);
		$slider_stop_on_hover  = get_post_meta($post_id, 'slider_stop_on_hover', true);
		$slider_interval       = get_post_meta($post_id, 'slider_interval', true);
		$slider_loop           = get_post_meta($post_id, 'slider_loop', true);
		$slider_autoplay_speed = get_post_meta($post_id, 'slider_autoplay_speed', true);
		$pagination 		   = get_post_meta($post_id, 'team_pagination', true);

		$slider_dots_nav  = ($slider_dots == 'true') ? 'slider_dot_show' : '';		
		$slider_nav_arrow = ($slider_nav == 'true') ? 'slider_nav_show' : '';

		//filter settings

		$filter_align       = get_post_meta($post_id, 'filter_align', true);
		$filter_text        = get_post_meta($post_id, 'filter_text', true);
		$isotope_grid_colum = get_post_meta($post_id, 'filter_logo_column', true);

		//popup settings
		$light_style                 = get_post_meta($post_id, 'light_style', true);
		$light_logo_column           = get_post_meta($post_id, 'light_logo_column', true);

		//Logo Padding		
		$logo_padding   = get_post_meta( $post_id, 'logo_padding', true);

		//color and font settings

		$content_size = get_post_meta( $post_id, 'content_size', true);
		$title_size   = get_post_meta( $post_id, 'title_size', true);

		$title_color       = !empty(get_post_meta($post_id, 'title_color', true)) ? 'style="color:'.get_post_meta($post_id, 'title_color', true).'; font-size:'.$title_size.'"' : '';

		$title_hover_color = get_post_meta($post_id, 'title_hover_color', true);

		$content_color     = !empty(get_post_meta($post_id, 'content_color', true)) ? 'style="color:'.get_post_meta($post_id, 'content_color', true).';font-size:'.$content_size.'"': '';
		
		$normal_color      = !empty(get_post_meta($post_id, 'title_color', true)) ? get_post_meta($post_id, 'title_color', true) : '';

		$logo_animation   = get_post_meta($post_id, 'logo_animation', true);

	
		if( !empty($grid_logo_column )){

			if('2' == $grid_logo_column):
				$grid_logo_column = 6;
				$logo_per_row     = 2;

			elseif('3' == $grid_logo_column):
				$grid_logo_column = 4;
				$logo_per_row     = 3;

			elseif('4' == $grid_logo_column):
				$grid_logo_column = 3;
				$logo_per_row     = 4;			

			elseif('6' == $grid_logo_column):
				$grid_logo_column = 2;
				$logo_per_row     = 6;
			endif;

		}


		if( !empty($isotope_grid_colum )){

			if('2' == $isotope_grid_colum):
				$isotope_grid_colum = 6;				

			elseif('3' == $isotope_grid_colum):
				$isotope_grid_colum = 4;
				

			elseif('4' == $isotope_grid_colum):
				$isotope_grid_colum = 3;						

			elseif('6' == $isotope_grid_colum):
				$grid_logo_column = 2;				
			endif;

		}

		if( !empty($light_logo_column )){

			if('2' == $light_logo_column):
				$light_logo_column = 6;				

			elseif('3' == $light_logo_column):
				$light_logo_column = 4;
				

			elseif('4' == $light_logo_column):
				$light_logo_column = 3;						

			elseif('6' == $light_logo_column):
				$grid_logo_column = 2;				
			endif;

		}	

		//data for slider

		$owl_data = array( 
				'nav'                => ( $slider_nav === 'true' ) ? true : false,
				'navText'            => array( "<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>" ),				
				'dots'               => ( $slider_dots === 'true' ) ? true : false,
				'autoplay'           => ( $slider_autoplay === 'true' ) ? true : false,
				'autoplayTimeout'    => $slider_interval,
				'autoplaySpeed'      => $slider_autoplay_speed,
				'autoplayHoverPause' => ( $slider_stop_on_hover === 'true' ) ? true : false,
				'loop'               => ( $slider_loop === 'true' ) ? true : false,
				'margin'             => 20,				
				'responsive'         => array(
					'0'    => array( 'items' => $cl_mobile ),
					'576'  => array( 'items' => $cl_xs ),
					'768'  => array( 'items' => $cl_sm ),
					'992'  => array( 'items' => $cl_md ),
					'1200' => array( 'items' => $cl_lg ),
				)				
			);
			$owl_data = json_encode( $owl_data );


		//retrive category form settings
		if(!empty($logo_category)){
			for ($i=0; $i < count($logo_category) ; $i++) {        	
		       $arr_cats[]= $logo_category[$i];       
		    }
		}


		$dir = plugin_dir_path( __FILE__ );

		//retrive data form member post type

		global  $paged;
		$paged = get_query_var("paged") ? get_query_var("paged"): 1; 
		if(!empty($logo_category)){

			$args = array(
			'post_type'      => 'rst-logo',
			'orderby'        => 'date',
			'posts_per_page' => $per_page,
			/*'order'          => $order_type,
			
			'paged'			 => $paged,*/
			'tax_query' => array(
				    array(
			            'taxonomy' => 'logo-category',
			            'field' => 'ID', //can be set to ID
			            'terms' => $arr_cats//if field is ID you can reference by cat/term number
				    ),
				)
			);

		}else{
			$args = array(
			'post_type'      => 'rst-logo',
			'orderby'        => 'date',
			'posts_per_page' => $per_page,
			/*'order'          => $order_type,				
			'paged'			 => $paged,*/				
			);
		}	

			
	 $que = new WP_Query( $args );		

	 /*=====================================================================
		//Grid type check 
	  =======================================================================*/
	
		if($logo_type == "grid"){

		   	if( $grid_style == 'style1'){
				require  $dir.'view/grid1.php';
				return $grid1;		
			}

			if( $grid_style == 'style3'){
				require  $dir.'view/grid3.php';	
				return $grid3;		
			}

			if( $grid_style == 'style5'){
				require  $dir.'view/grid5.php';	
				return $grid5;		
			}

			if( $grid_style == 'style6'){
				require  $dir.'view/grid6.php';	
				return $grid6;		
			}			
			
		}

	  /*=====================================================================
		//List style check
	  =======================================================================*/
	
		if($logo_type == "list"){	
		   			
			require  $dir.'view/list.php';
			return $list;	
			
		}


		/*=====================================================================
		//Slider type check 
	 	 =======================================================================*/

		elseif($logo_type == "slider"){			

		   	if( $slider_style == 'style1'){				
				require  $dir.'view/slider1.php';	
				return $slider1;		
			}

			if( $slider_style == 'style3'){				
				require  $dir.'view/slider3.php';	
				return $slider3;		
			}

			if( $slider_style == 'style4'){				
				require  $dir.'view/slider4.php';	
				return $slider4;		
			}

			if( $slider_style == 'style5'){				
				require  $dir.'view/slider5.php';	
				return $slider5;		
			}	
		}
				
	
	}
}

add_shortcode( 'rslogoshortcode', 'rstlogo_shortcode' );