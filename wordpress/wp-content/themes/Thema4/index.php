<?php get_header(); ?>
	<div id="heading-text" class= "header" >
		<div id="site-heading">
			<?php dynamic_sidebar( 'koptekst' ); ?>
		</div><!-- #site-prepage -->
	</div>

<main id="site-main">	
	<?php 
	
	$section1_bg = get_theme_mod( 'section1_box' );
	$section2_bg = get_theme_mod( 'section2_box' );
	$section3_bg = get_theme_mod( 'section3_box' );
	$link1_bg = get_theme_mod( 'link1_box' );
	$link2_bg = get_theme_mod( 'link2_box' );
	$link3_bg = get_theme_mod( 'link3_box' );
	$form_box = get_theme_mod( 'bottom-form' );
	
	if ( ( is_front_page() || is_home() ) && !is_paged() ) {
	//if ( is_active_sidebar('page-full') ) {
	
	if(!empty($section1_bg)){ ?>
		<div id="box1" class= "box" >
			<div class="widget-container" style="background-image:url('<?php echo esc_url( get_theme_mod( 'section1_box' ) ); ?>');">
				<div id="site-prepage">
					<?php dynamic_sidebar( 'box-info-1' ); ?>
				</div><!-- #site-prepage -->
			</div>
		</div>
	<?php }if(!empty($section2_bg)){?>
		<div id="box2" class= "box" >
			<div class="widget-container" style="background-image:url('<?php echo esc_url( get_theme_mod( 'section2_box' ) ); ?>');">
				<div id="site-prepage">
					<?php dynamic_sidebar( 'box-info-2' ); ?>
				</div><!-- #site-prepage -->
			</div>
		</div>
	<?php }if(!empty($section3_bg)){?>
		<div id="box3" class= "box" >
			<div class="widget-container" style="background-image:url('<?php echo esc_url( get_theme_mod( 'section3_box' ) ); ?>');">
				<div id="site-prepage">
					<?php dynamic_sidebar( 'box-info-3' ); ?>
				</div><!-- #site-prepage -->
			</div>
		</div>
	<?php } if(!empty($link1_bg)){ ?>
		<div id="box4" class= "box link" >
			<div class="widget-container" style="background-image:url('<?php echo esc_url( get_theme_mod( 'link1_box' ) ); ?>');">
				<div id="site-prepage">
					<?php dynamic_sidebar( 'box-link-1' ); ?>
				</div><!-- #site-prepage -->
			</div>
		</div>
	<?php }if(!empty($link2_bg)){?>
		<div id="box5" class= "box link" >
			<div class="widget-container" style="background-image:url('<?php echo esc_url( get_theme_mod( 'link2_box' ) ); ?>');">
				<div id="site-prepage">
					<?php dynamic_sidebar( 'box-link-2' ); ?>
				</div><!-- #site-prepage -->
			</div>
		</div>
	<?php }if(!empty($link3_bg)){?>
		<div id="box6" class= "box link" >
			<div class="widget-container" style="background-image:url('<?php echo esc_url( get_theme_mod( 'link3_box' ) ); ?>');">
				<div id="site-prepage">
					<?php dynamic_sidebar( 'box-link-3' ); ?>
				</div><!-- #site-prepage -->
			</div>
		</div>
	
	<?php }}  dynamic_sidebar( 'box-content' ); ?>
	
		<div id="form-box" class= "box" >
			<?php dynamic_sidebar( 'bottom-form' ); ?>
		</div>
	
	<script>
	var link1 = document.getElementById("box4");
	var link2 = document.getElementById("box5");
	var link3 = document.getElementById("box6");
	var content1 = document.getElementById("enhancedtextwidget-34");
	var content2 = document.getElementById("enhancedtextwidget-35");
	var content3 = document.getElementById("enhancedtextwidget-36");
	content1.classList.add("show");
	
	link1.onclick = function() {
		//Classes voor boxes
    	link1.classList.add("active");
		link2.classList.remove("active");
		link3.classList.remove("active");
		//widget show/hide
		content1.classList.add("show");
		content2.classList.remove("show");
		content3.classList.remove("show");

		
	};
	link2.onclick = function() {
    	link1.classList.remove("active");
		link2.classList.add("active");
		link3.classList.remove("active");
		//widget show/hide
		content1.classList.remove("show");
		content2.classList.add("show");
		content3.classList.remove("show");
	};
	link3.onclick = function() {
    	link1.classList.remove("active");
		link2.classList.remove("active");
		link3.classList.add("active");
		//widget show/hide
		content1.classList.remove("show");
		content2.classList.remove("show");
		content3.classList.add("show");
	};
	</script>
	
	
</main><!-- #site-main -->

<?php get_footer(); ?>