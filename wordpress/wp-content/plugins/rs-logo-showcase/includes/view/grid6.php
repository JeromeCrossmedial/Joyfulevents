<?php
/*Grid Style 5*/
$grid6 = '<div class="logo-style post_'.$post_id.'">
	<div class="logo-grid-style">
		<div class="rstlogo-row grid-style-1 '.$align_div.'">';			
			if ( $que->have_posts() ) {
				while ( $que->have_posts() ) : $que->the_post();				
								
					$logo_image    = get_the_post_thumbnail_url( get_the_ID() );
					$link          = get_the_permalink();
					$title         = get_the_title();
					$rstlogo_link  = get_post_meta( get_the_ID(), 'rstlogo_link', true ); 
					$content_logo = get_the_content();     
					$show_title   = get_post_meta( $post_id, 'show_title', true); 
					$show_content = get_post_meta( $post_id, 'show_content', true); 

					$show_title = ($show_title == 'show') ? '<h3 class="logo-name">	<a data-onhovercolor="'.$title_hover_color.'"  data-onleavecolor="'.$normal_color.' "href="'.esc_url($rstlogo_link).'" '.$title_color.'>'.$title.'</a> </h3>': '';  			
                   
                   
					$grid6 .= '<div class="rstlogo-lg-'.$grid_logo_column.' rstlogo-sm-6 no-padding">
				        <div class="logo-item-wrap mb-0">
				            <div class="logo-img">';
				               if ( has_post_thumbnail() ) {
									$grid6 .= '<a href="'.esc_url($rstlogo_link).'" target="_blank" style="padding:'.wp_kses_post($logo_padding).'"><img src="' . $logo_image . '" alt="' .get_the_title(). '"></a>';
								}
				               	$grid6 .= '<div class="normal-text">
				                   '.$show_title.'';		               			                      

				                $grid6 .='</div>
				            </div>				            
				        </div>
				    </div>';		   
					
				endwhile;
				wp_reset_query();			

				$grid6 .= $pagination;
			}
		$grid6 .='</div>
	</div>
</div>';