<?php get_header(); ?>

<main id="site-main">
	
	<?php 
	
	$section1_bg = get_theme_mod( 'section1_bg' );
	$section2_bg = get_theme_mod( 'section2_bg' );
	$section3_bg = get_theme_mod( 'section3_bg' );
	
	if ( ( is_front_page() || is_home() ) && !is_paged() ) {
	//if ( is_active_sidebar('page-full') ) {
	
	if(!empty($section1_bg)){ ?>
		<div id="sectioncontainer1" class="sectioncontainer">
			<div class="section-image" style="background-image:url('<?php echo esc_url( get_theme_mod( 'section1_bg' ) ); ?>');"></div>
			<div id="site-prepage">
				<?php dynamic_sidebar( 'rounded_section1' ); ?>
			</div><!-- #site-prepage -->
		</div>
	<?php }if(!empty($section2_bg)){?>
		<div id="sectioncontainer2" class="sectioncontainer" style="background-color:#F8F8F8">
			<div class="section-image" style="background-image:url('<?php echo esc_url( get_theme_mod( 'section2_bg' ) ); ?>');"></div>
			<div id="site-prepage">
				<?php dynamic_sidebar( 'rounded_section2' ); ?>
			</div><!-- #site-prepage -->
		</div>
	<?php }if(!empty($section3_bg)){?>
		<div id="sectioncontainer3" class="sectioncontainer">
			<div class="section-image" style="background-image:url('<?php echo esc_url( get_theme_mod( 'section3_bg' ) ); ?>');"></div>
			<div id="site-prepage">
				<?php dynamic_sidebar( 'rounded_section3' ); ?>
			</div><!-- #site-prepage -->
		</div>
	<?php 
	}  
	//} 
	}
	?>

</main><!-- #site-main -->

<?php get_footer(); ?>