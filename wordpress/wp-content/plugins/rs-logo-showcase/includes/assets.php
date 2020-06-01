<?php
	function rstlogo_front_scripts() {		
		wp_enqueue_style( 'owl-carousel', plugins_url('../assets/css/owl.carousel.css', __FILE__), array(), null, 'all' );
		wp_enqueue_style( 'rs-logo-gird', plugins_url('../assets/css/rs-logo-grid.css', __FILE__), array(), null, 'all' );			
		wp_enqueue_style( 'rslogo-main', plugins_url('../assets/css/logo.css', __FILE__), array(), null, 'all' );		
		wp_enqueue_script( 'owl-carousel', plugins_url('../assets/js/owl.carousel.js', __FILE__) , array('jquery'), 3.0, true );		
		wp_enqueue_script( 'rslogo-main', plugins_url('../assets/js/main.js', __FILE__) , array('jquery'), time(), true );	
	}
	add_action('wp_enqueue_scripts', 'rstlogo_front_scripts' );

	add_action( 'admin_enqueue_scripts', 'rstlogo_add_color_picker' );
	function rstlogo_add_color_picker( $hook ) {	 
	    if( is_admin() ) {       
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_style( 'rs-logo-gird', plugins_url('../assets/admin/css/admin-logo.css', __FILE__), array(), null, 'all' );	
			wp_enqueue_script( 'custom-script-handle', plugins_url( '../assets/admin/js/custom-script.js', __FILE__ ), array( 'wp-color-picker','jquery-ui-tabs' ), false, true ); 
	    }
	}