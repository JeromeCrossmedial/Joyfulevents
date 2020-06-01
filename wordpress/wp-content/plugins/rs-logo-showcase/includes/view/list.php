<?php
/*list style*/

$list = '<div class="list-style post_'.$post_id.'">
	<div class="logo-list-style">
		<div class="list-style-1">
    		';
    		if ( $que->have_posts() ) {
				while ( $que->have_posts() ) : $que->the_post();
					$logo_image   = get_the_post_thumbnail_url( get_the_ID() );					
					$title        = get_the_title();					
					$rstlogo_link = get_post_meta( get_the_ID(), 'rstlogo_link', true );  
					$content_logo = !empty(get_the_content()) ? get_the_content() : '';
					$show_title   = get_post_meta( $post_id, 'show_title', true); 
					$show_content = get_post_meta( $post_id, 'show_content', true);

					$show_title = ($show_title == 'show') ? '<h3 class="logo-name">	<a data-onhovercolor="'.$title_hover_color.'"  data-onleavecolor="'.$normal_color.' "href="'.esc_url($rstlogo_link).'" '.$title_color.'>'.$title.'</a> </h3>': '';	

	    			$list .='<div class="list-full rstlogo-row"><div class="rstlogo-lg-3">';
					if ( has_post_thumbnail() ) {
						$list .= '<div class="image">
							<a href="'.esc_url( $rstlogo_link ).'" target="_blank" style="padding:'.wp_kses_post($logo_padding).'"><img src="' . $logo_image . '" alt="' .get_the_title(). '"></a>
						</div></div>';
					} 			
    				
    				$list .='<div class="rstlogo-lg-9"><div class="list-text">';
    				if($title):
		    			$list .='<div class="name">
		    				'.$show_title .'
		    				'.$content_logo.'
		    			</div>';
		    		endif;    			
	    			   
    			$list .='</div></div>
    			</div>';
    		endwhile;
    		wp_reset_query();
    		};
    	$list .='</div>
	</div>
</div>';