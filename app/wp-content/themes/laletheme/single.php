<?php
/**
 * @package LaleTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php
/**
 * Check functions get_header() exits.
 *
 * @param string $function_name
 */
if ( function_exists( 'get_header' ) ) {
	get_header();
}
?>

<h3>single.php</h3>

<section class="row">
	<div class="col-md-8">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				//the_post_navigation(
				//	array(
				//		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
				//		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				//	)
				//);

			endwhile; // End the loop.
			?>

	</div><!-- #primary -->
	<!-- SIDEBAR -->
	<?php
	/**
	 * Check functions get_sidebar() exits.
	 *
	 * @param string $function_name
	 */
	if ( function_exists( 'get_sidebar' ) ) {
		get_sidebar();
	}
	?>
	<!-- -->
</section><!-- .wrap -->

<?php
/**
 * Check functions get_footer() exits.
 *
 * @param string $function_name
 */
if ( function_exists( 'get_footer' ) ) {
	echo '<div>Estoy aquí</div>';
	get_footer();
}
?>
