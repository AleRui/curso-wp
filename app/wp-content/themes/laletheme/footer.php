			<footer class="row py-5 bg-dark">
				<div class="container">
					<p class="m-0 text-center text-white">Copyright &copy; Laletheme 2020</p>
					<span class="glyphicon glyphycon-heart"></span>
					<?php
					/**
					 * Check exist get_sidebar() function.
					 *
					 * @package Laletheme.
					 *
					 * @param string $name_function
					 */

					if ( function_exists( 'get_sidebar' ) ) {
						get_sidebar( 'footer' );
					}
					?>
				</div>
			<!-- /.container -->
			</footer>
		</div> <!-- End Container -->
		<?php
		/**
		 * Check exist wp_footer() function.
		 *
		 * @package Laletheme.
		 *
		 * @param string $name_function
		 */

		if ( function_exists( 'wp_footer' ) ) {
			wp_footer();
		}
		?>
		<!-- Bootstrap core JavaScript -->
	</body>

</html>
