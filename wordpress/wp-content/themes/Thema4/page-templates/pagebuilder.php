<?php
/**
 * Template Name: Page Builder Template
 */

get_header();
?>
<div id="horizontal-line-page" class="page"></div>
<main id="site-main">

	<?php
	while (have_posts()) : the_post();
	?>

	

			<?php
			// Function to display the START of the content column markup
			ilovewp_helper_display_page_content_wrapper_start();

				ilovewp_helper_display_content($post);

			// Function to display the END of the content column markup
			ilovewp_helper_display_page_content_wrapper_end();

			?>

	<?php
	endwhile;
	?>

</main><!-- #site-main -->
	
<?php get_footer(); ?>