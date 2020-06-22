<?php
/**
 * Funciones.
 *
 * @package WordPress
 * @subpackage laletheme
 */

/**
 * Index "example"
 * 1. Add thumbsnails. Line: 22.
 * 2. Add Style CSS and  JS: Line 27.
 */

/** Add custom scripts JS and CSS */
function my_custom_scripts() {

	/**
	 * Check exist wp_enqueue_script() function.
	 *
	 * @package Laletheme.
	 * @param string $name_function
	 */
	if ( function_exists( 'wp_enqueue_script' )
		&& function_exists( 'get_template_directory_uri' ) ) {

		wp_enqueue_script(
			'custom-dev',
			get_template_directory_uri() . '/dist/custom-dev.js',
			array(), // Dependes: jquery... others.
			'1.0', // Version.
			true // Go on footer = true, else in header.
		);
	}
}

/** Add custom menu */
function mytheme_register_nav_menu() {
	/**
	 * Check exist register_nav_menus() function.
	 *
	 * @package Laletheme.
	 * @param string $name_function
	 */
	if ( function_exists( 'register_nav_menus' ) ) {

		register_nav_menus(
			array(
				'lalemenu' => __( 'lalemenu', 'Menú from Lale' ),
				// 'footer_menu'  => __( 'Footer Menu', 'text_domain' ),.
			)
		);
	}
}

/** Register Sidebar */
function mytheme_register_sidebars() {
	/**
	 * Check exist register_sidebar() function.
	 *
	 * @package Laletheme.
	 * @param string $name_function
	 */
	if ( function_exists( 'register_sidebar' ) ) {
		// Main Sidebar.
		register_sidebar(
			array(
				'name'          => __( 'Blog feed', 'curos-wp' ),
				// id sidebar.
				'id'            => 'sidebar-blog',
				// clase dónde va el sidebar.
				'before_widget' => '<aside class="col-md-4">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);
		// Footer Sidebar.
		register_sidebar(
			array(
				'name'          => __( 'Footer', 'curos-wp' ),
				'id'            => 'sidebar-footer',
				'before_widget' => '<aside class="col-md-12">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);
	}
}

/**
 * Add function for thmbnails
 */
function mytheme_add_thumbnails_sizes() {
	/**
	 * Check exist add_theme_support() function.
	 *
	 * @package Laletheme.
	 * @param string $name_function
	 */
	if ( function_exists( 'add_theme_support' )
		&& function_exists( 'the_post_thumbnail' )
		&& function_exists( 'add_image_size' )
		&& function_exists( 'set_post_thumbnail_size' )
	) {
		// Appear option featured image in dashboard/posts/
		add_theme_support( 'post-thumbnails' );
		//
		// Default thumbnail 150x150 or medium, large, full or custom size.
		the_post_thumbnail( array( '150', '150' ), $attr = '' );
		the_post_thumbnail( 'medium' );
		the_post_thumbnail( 'large' );
		the_post_thumbnail( 'full' );
		the_post_thumbnail( array( '242', '156 ' ) );
		// Others way.
		add_image_size( 'miniatura', 327, 212, false );
		set_post_thumbnail_size( 489, 324, false );
	}
}

/**
 * Add Custom post type
 */
function mytheme_inmueble_post_type() {
	/**
	 * Check exist register_post_type() function.
	 *
	 * @package Laletheme.
	 * @param string $name_function
	 */
	if ( function_exists( 'register_post_type' ) ) {
		register_post_type(
			'inmueble',
			array(
				'labels'      => array(
					'name'          => 'Inmuebles',
					'singular_name' => 'Inmueble',
				),
				'public'      => true,
				'has_archive' => true,
			)
		);
	}
}
/**
 * Add custom taxonomy.
 */
function mytheme_register_apartamento_custom_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Apartamentos', 'taxonomy general name' ),
		'search_items'               => _x( 'Apartamento', 'taxonomy singular name' ),
		'popular_items'              => __( 'Buscar Apartamento' ),
		'all_items'                  => __( 'Todos los apartamentos' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Editar Apartamento' ),
		'update_item'                => __( 'Actualizar Apartamentos' ),
		'add_new_item'               => __( 'Añadir Nuevo Apartamento' ),
		'new_item_name'              => __( 'Nuevo nombre Apartamento' ),
		'separate_items_with_commas' => __( 'Separar Apartamento con comas' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar apartamentos' ),
		'choose_from_most_used'      => __( 'Elegir los apartamentos más usados' ),
		'not_found'                  => __( 'No se encontraron apartamentos' ),
		'menu_name'                  => __( 'Apartamentos' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_columns'    => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'writer' ),
	);

	/**
	 * Check exist register_taxonomy() function.
	 *
	 * @package Laletheme.
	 * @param string $name_function
	 */
	if ( function_exists( 'register_taxonomy' ) ) {
		register_taxonomy( 'apartamento', 'inmueble', $args );
	}
}

/**
 * Check exist add_action() function.
 *
 * @package Laletheme.
 *
 * @param string $name_function
 */
if ( function_exists( 'add_action' ) ) {
	// add_action( 'hook', 'function' ); hook when is started; .
	add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
	// add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );.
	add_action( 'init', 'mytheme_register_nav_menu', 0 );
	add_action( 'widgets_init', 'mytheme_register_sidebars' );
	add_action( 'after_setup_theme', 'mytheme_add_thumbnails_sizes' );
	add_action( 'init', 'mytheme_inmueble_post_type' );
	add_action( 'init', 'mytheme_register_apartamento_custom_taxonomy' );
}
