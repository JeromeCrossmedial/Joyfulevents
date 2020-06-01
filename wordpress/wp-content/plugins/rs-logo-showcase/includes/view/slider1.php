<?php
/*Slider Style 1*/

$slider1 = '<div class="logo-style post_'.$post_id.'">
	<div class="logo-slider-style">
		<div class="slider-style slider-style-1 grid-style-1 owl-carousel owl-theme '.$slider_dots_nav.' '.$slider_nav_arrow.'" data-carousel-options="'.esc_attr( $owl_data ).'">';			
			if ( $que->have_posts() ) {
				while ( $que->have_posts() ) : $que->the_post();															
					$logo_image   = get_the_post_thumbnail_url( get_the_ID() );
					$link         = get_the_permalink();
					$title        = get_the_title();
					$rstlogo_link = get_post_meta( get_the_ID(), 'rstlogo_link', true );  
					$content_logo = get_the_content(); 
					$show_title   = get_post_meta( $post_id, 'show_title', true);				
					

					$show_title = ($show_title == 'show') ? '<h3 class="logo-name">	<a data-onhovercolor="'.$title_hover_color.'"  data-onleavecolor="'.$normal_color.' "href="'.esc_url($rstlogo_link).'" '.$title_color.'>'.$title.'</a> </h3>': '';  

					
				    $slider1 .= '<div class="logo-item-wrap default-border-style">
			            <div class="logo-img">';
			               if ( has_post_thumbnail() ) {
								$slider1 .= '<a href="'.esc_url($rstlogo_link).'" style="padding:'.wp_kses_post($logo_padding).'"><img src="' . $logo_image . '" alt="' .get_the_title(). '"></a>';
							}
			               $slider1 .= '<div class="normal-text">
			                    '.$show_title.'';

			                $slider1 .= '</div>
			            </div>
				    </div>';		   
					
				endwhile;
				wp_reset_query();

			}
		$slider1 .='</div>
	</div>
</div>';