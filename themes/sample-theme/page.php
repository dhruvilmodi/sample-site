<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			if(function_exists ('get_field')){
				$featured_video = get_field('sample_theme_featured_video_file');
				var_dump($featured_video['url']);
				if ($featured_video){
					?>
					<video controls>
					<source src="<?php echo $featured_video['url'] ?>" type="<?php echo $featured_video['mime_type'] ?>">
					Your browser does not support the video tag.
					</video> 
					<?php
				}
			}

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
