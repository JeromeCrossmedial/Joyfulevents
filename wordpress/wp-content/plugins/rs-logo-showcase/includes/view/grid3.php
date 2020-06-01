<?php
/*Grid Style 3*/
$grid3 = '<div class="logo-style post_'.$post_id.'">
	<div class="logo-grid-style">
		<div class="rstlogo-row grid-style-1 '.$align_div.'">';			
			if ( $que->have_posts() ) {
				$num     = $que->post_count;
				$row_num = $num/$logo_per_row;
				$i       = 0;
				while ( $que->have_posts() ) : $que->the_post();				
					$i++;
					if( ( $i%$logo_per_row ) == 0 ){
						$last = 'last_item';
					}else{
						$last = '';
					}
					if($i>($row_num-1)*$logo_per_row ){
						$last_row = 'last-row';
					}else{
						$last_row = '';
					}

					$logo_image    = get_the_post_thumbnail_url( get_the_ID() );
					$link          = get_the_permalink();
					$title         = get_the_title();
					$content_logo = get_the_content();
					$rstlogo_link  = get_post_meta( get_the_ID(), 'rstlogo_link', true ); 
					$content_logo = get_the_content();    
					$show_title   = get_post_meta( $post_id, 'show_title', true); 
					$show_content = get_post_meta( $post_id, 'show_content', true); 

					$show_title = ($show_title == 'show') ? '<h3 class="logo-name">	<a data-onhovercolor="'.$title_hover_color.'"  data-onleavecolor="'.$normal_color.' "href="'.esc_url($rstlogo_link).'" '.$title_color.'>'.$title.'</a> </h3>': '';  
			              
                   
					$grid3 .= '<div class="rstlogo-lg-'.$grid_logo_column.' rstlogo-sm-6 border-style '.$last.' '.$last_row.' ">
				        <div class="logo-item-wrap">
				            <div class="logo-img">';
				               if ( has_post_thumbnail() ) {
									$grid3 .= '<a href="'.esc_url($rstlogo_link).'" target="_blank" style="padding:'.wp_kses_post($logo_padding).'"><img src="' . $logo_image . '" alt="' .get_the_title(). '"></a>';
								}
				               $grid3 .= '<div class="normal-text">
				                    '.$show_title.'';               
				                                           
				                $grid3 .='</div>
				            </div>
				            
				        </div>
				    </div>';		   
					
				endwhile;
				wp_reset_query();

				
			}
		$grid3 .='</div>
	</div>
</div>';