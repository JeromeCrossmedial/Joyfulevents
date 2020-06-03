<?php get_header(); ?>
	<div id="heading-text" class= "header" >
		<div id="site-heading">
			<?php dynamic_sidebar( 'koptekst' ); ?>
		</div><!-- #site-prepage -->
	</div>
<div id="horizontal-line"></div>
<main id="site-main">	
	<?php 
	
	if ( ( is_front_page() || is_home() ) && !is_paged() ) {
	//if ( is_active_sidebar('page-full') ) { ?>
	<div id="box1" class= "box" >
		<div class="vertical-line">
			<div class="circle"></div>
			<div class="line"></div>
		</div>
		<div class="widget-container">
			<div class="image-blur">
			</div>
			<div id="site-prepage">
				<?php dynamic_sidebar( 'box-col-1' ); ?>
			</div><!-- #site-prepage -->
		</div>
	</div>
	<div id="box2" class= "box" >
		<div class="vertical-line">
			<div class="circle"></div>
			<div class="line"></div>
		</div>
		<div class="widget-container">
			<div id="site-prepage">
				<?php dynamic_sidebar( 'box-col-2' ); ?>
			</div><!-- #site-prepage -->
		</div>
	</div>
	<div id="box3" class= "box" >
		<div class="vertical-line">
			<div class="circle"></div>
			<div class="line"></div>
		</div>
		<div class="widget-container">
			<div id="site-prepage">
				<?php dynamic_sidebar( 'box-col-3' ); ?>
			</div><!-- #site-prepage -->
		</div>
	</div>
	<div id="homepage-gallery-text" class= "gallery-text" >
		<?php dynamic_sidebar( 'homepage-gallery-text-top' ); ?>
	</div>
	<div id="gallery">
	<?php 
	echo do_shortcode('[modula id="250"]');
		
	}  
	//} 
	?>
	</div>
	<div id="homepage-gallery-text" class= "gallery-text" >
		<?php dynamic_sidebar( 'homepage-gallery-text-bottom' ); ?>
	</div>
</main><!-- #site-main -->

<?php get_footer(); ?>