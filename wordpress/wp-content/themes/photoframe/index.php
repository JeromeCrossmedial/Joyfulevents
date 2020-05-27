<?php get_header(); ?>

<main id="site-main">
	
	<?php 
	
	$section1_bg = get_theme_mod( 'section1_bg' );
	$section2_bg = get_theme_mod( 'section2_bg' );
	$section3_bg = get_theme_mod( 'section3_bg' );
	
	if(empty($section1_bg)){?>
		<div id="sectioncontainer1" style="display:hidden; ?>');">
	<?php }elseif(empty($section2_bg)){?>
		<div id="sectioncontainer2" style="display:hidden; ?>');">
	<?php}elseif(empty($section3_bg)){?>
		<div id="sectioncontainer3" style="display:hidden; ?>');">
	<?php } 
	?>
	<?php if ( ( is_front_page() || is_home() ) && !is_paged() ) {?>
	<?php if ( is_active_sidebar('page-full') ) { ?>
			
	<div id="sectioncontainer1" class=sectioncontainer style="background-image:url('<?php echo esc_url( get_theme_mod( 'section1_bg' ) ); ?>');">
	
		<div id="site-prepage">
			<?php dynamic_sidebar( 'section1' ); ?>
		</div><!-- #site-prepage -->
		
	</div>
	<div id="sectioncontainer2" class=sectioncontainer style="background-image:url('<?php echo esc_url( get_theme_mod( 'section2_bg' ) ); ?>');">
	
		<div id="site-prepage">
			<?php dynamic_sidebar( 'section2' ); ?>
		</div><!-- #site-prepage -->
		
	</div>
	<div id="sectioncontainer3" class=sectioncontainer style="background-image:url('<?php echo esc_url( get_theme_mod( 'section3_bg' ) ); ?>');">
			
		<div id="site-prepage">
			<?php dynamic_sidebar( 'section3' ); ?>
		</div><!-- #site-prepage -->
		
	</div>
	
		
	<?php 
	} 
	}
	?>

</main><!-- #site-main -->

<?php get_footer(); ?>