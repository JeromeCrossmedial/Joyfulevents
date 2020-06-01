<?php
/*Slider Style 5*/

$slider5 = '<div class="logo-style post_'.$post_id.'">
	<div class="logo-slider-style">
		<div class="slider-style slider-style-2 grid-style-1 zoom-style owl-carousel owl-theme '.$slider_dots_nav.' '.$slider_nav_arrow.'" data-carousel-options="'.esc_attr( $owl_data ).'">';			
			if ( $que->have_posts() ) {
				while ( $que->have_posts() ) : $que->the_post();															
					$logo_image   = get_the_post_thumbnail_url( get_the_ID() );
					$link         = get_the_permalink();
					$title        = get_the_title();
					$rstlogo_link = get_post_meta( get_the_ID(), 'rstlogo_link', true );  
					$content_logo = get_the_content(); 
					$show_title   = get_post_meta( $post_id, 'show_title', true);				
					$show_content = get_post_meta( $post_id, 'show_content', true);

					$show_title = ($show_title == 'show') ? '<h3 class="logo-name">	<a data-onhovercolor="'.$title_hover_color.'"  data-onleavecolor="'.$normal_color.' "href="'.esc_url($rstlogo_link).'" '.$title_color.'>'.$title.'</a> </h3>': '';  

					$show_content = ($show_content == 'show') ? '<p '.$content_color.'>'.$content_logo.'</p>' : '';  

					$show_tooltip = get_post_meta( $post_id, 'show_tooltip', true); 
					$show_tooltip = ($show_tooltip == 'show') ? 'data-toggle="tooltip" data-placement="top" title="'.$title.'"' : '';                 
                   

				    $slider5 .= '<div class="logo-item-wrap">
			            <div class="logo-img">';
			               if ( has_post_thumbnail() ) {
								$slider5 .= '<a href="'.esc_url($rstlogo_link).'" style="padding:'.wp_kses_post($logo_padding).'"><img '.$show_tooltip.' src="' . $logo_image . '" alt="' .get_the_title(). '"></a>';
							}
			               $slider5 .= '<div class="normal-text">
			                    '.$show_title.'';

			                $slider5 .= ''.$show_content.'</div>
			            </div>
				    </div>';		   
					
				endwhile;
				wp_reset_query();

				$paginate = paginate_links( array(
						'total' => $que->max_num_pages
					));	

				if($paginate && $pagination == 'true'){
					$pagination = '<div class="pagination-area"><div class="nav-links">'.$paginate.'</div></div>';
				}else{
					$pagination ='';
				}

				$slider5 .= $pagination;
			}
		$slider5 .='</div>
	</div>
</div>';

$var = '.post_'.$post_id.' .logo-item-wrap img'; 

$slider5 .= '<script>
	jQuery("'. $var.'").hover(
       function(){ jQuery(this).addClass(  '.'"'.$logo_animation.' animated") },      
       function(){ jQuery(this).removeClass( '.'"'.$logo_animation.' animated")}
    ) 
</script>
';