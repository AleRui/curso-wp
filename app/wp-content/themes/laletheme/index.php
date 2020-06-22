<?php
/**
 * WordPress Theme.
 *
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

<?php
/**
 * Check if is home page.
 *
 * @package LaleTheme
 * */
if ( is_home() ) {
	?>
	<section class="row">
		<div class="jumbotron">
			<h1 class="display-3">
				<?php
				/**
				 * Check exist bloginfo() function.
				 *
				 * @package Laletheme.
				 *
				 * @param string $name_function
				 */
				if ( function_exists( 'bloginfo' ) ) {
					bloginfo( 'name' );
				}
				?>
			</h1>
			<p class="lead">
				<?php
				/**
				 * Check exist bloginfo() function.
				 *
				 * @package Laletheme.
				 *
				 * @param string $name_function
				 */
				if ( function_exists( 'bloginfo' ) ) {
					bloginfo( 'description' );
				}
				?>
			</p>
			<hr class="my-2">
			<p>More info</p>
			<p class="lead">
				<a
					class="btn btn-primary btn-lg"
					href="Jumbo action link"
					role="button"
				>Jumbo action name</a>
			</p>
		</div>
	</section>

	<section class="row">

		<?php
		/**
		 * Loop of posts
		 */
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<!-- Post -->
				<article class="col-md-3 col-sm-6">
					<div class="card h-100 justify-content-between">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail(
								array( 242, 200 ),
								array( 'class' => 'laleclass' )
							);
						} else {
							?>
							<img
								class="card-img-top"
								src="https://picsum.photos/242/200/?blur"
								alt="imagen bonita"
							/>
							<?php
						}
						?>
						<h5 class="card-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h5>
						<p class="card-text">
							<?php substr( the_excerpt(), 0, 200 ); ?>
						</p>
						<a href="#" class="btn btn-primary">
							<?php _e( 'Go somewhere', 'laletheme' ); ?>
						</a>
					</div>
				</article>
				<!-- -->
				<?php
			}
		} else {
			__( 'No hay entradas', 'laletheme' );
		}
		?>
		<!-- -->
	</section>
	<?php
} elseif ( is_single() || is_page() ) {
	?>

	<section class="row">

		<?php
		/**
		 * Loop of posts
		 */
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<!-- Post -->
				<article class="col-md-3 col-sm-6">
					<div class="card h-100 justify-content-between">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( array( 242, 200 ), array( 'class' => 'laleclass' ) );
						} else {
							?>
							<img
								class="card-img-top"
								src="https://picsum.photos/242/200/?blur"
								alt="imagen bonita" />
							<?php
						}
						?>
						<h5 class="card-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h5>
						<p class="card-text"><?php substr( the_excerpt(), 0, 200 ); ?></p>
						<a href="#" class="btn btn-primary">
							<?php _e( 'Go somewhere', 'laletheme' ); ?>
						</a>
					</div>
				</article>
				<!-- -->
				<?php
			}
		} else {
			__( 'No hay entradas' );
		}
		?>
		<!-- -->
	</section>

	<?php
} else {
	echo 'Sin plantilla para este tipo de página.';
}
?>

<?php
/**
 * Check functions get_footer() exits.
 *
 * @param string $function_name
 */
if ( function_exists( 'get_footer' ) ) {
	get_footer();
}
?>
