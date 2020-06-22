<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
		/**
		 * Check exist the_title() function.
		 *
		 * @package Laletheme.
		 *
		 * @param string $name_function
		 */

		if ( function_exists( 'bloginfo' ) ) {
			bloginfo( 'name' );
		}
		?>
	</title>

	<?php
	/**
	 * Check exist wp_head() function.
	 *
	 * @package Laletheme.
	 *
	 * @param string $name_function
	 */

	if ( function_exists( 'wp_head' ) ) {
		wp_head();
	}
	?>

	<!-- Favicon -->
	<link
		rel="icon"
		type="image/x-icon"
		href="
		<?php
		if ( function_exists( 'get_stylesheet_directory_uri' ) ) {
			echo get_stylesheet_directory_uri();
		}
		?>
		/favicon.ico"
	>

</head>

<body>
	<div class="container">
		<header class="row">

			<nav class="navbar navbar-expand-sm navbar-light bg-light">
				<a class="navbar-brand" href="#">
					<img src="https://picsum.photos/50?grayscale">
				</a>
				<button
					class="navbar-toggler d-lg-none"
					type="button"
					data-toggle="collapse"
					data-target="#collapsibleNavId"
					aria-controls="collapsibleNavId"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavId">
				<?php
				/**
				 * Check exist wp_nav_menu() function.
				 *
				 * @package Laletheme.
				 *
				 * @param string $name_function
				 */

				if ( function_exists( 'wp_nav_menu' ) ) {
					/**
					 * Charge menu.
					 *
					 * @package Laletheme.
					 *
					 * @param string $menu-name
					 */

					wp_nav_menu(
						array(
							'theme_location' => 'lalemenu',
							'menu_class'     => 'navbar-nav mr-auto mt-2 mt-lg-0',
							'container'      => 'ul',
						)
					);
				}
				?>
				</div>
			</nav>
		</header>
