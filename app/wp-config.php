<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'curso-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
//define( 'DB_HOST', 'curso_wp_mariadb' );
//define( 'DB_HOST', '127.0.0.1' );
//define( 'DB_HOST', '127.0.0.1:3308' );
//define( 'DB_HOST', '172.29.0.1:3308' );
define( 'DB_HOST', '192.168.0.13:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M5B!}mKS(K_hJ+?Sjmp;0 ^%n;>JqJ|A0cTR&uKMq&JcI*cWKb@UQ&?:!TR9_;x!' );
define( 'SECURE_AUTH_KEY',  'bL_,>1f2]7^h1?eU]>^-1L0x!}+10YXZG4)jg:R:z55Xu/Be4QuTGbkd&SMQhd# ' );
define( 'LOGGED_IN_KEY',    'B8GBm^!_j-jSG)Sy2;_Q}Qs<z7aq4<[j7FKkIlR/}BB>oAWnA-#.*FTJw46|_Hj-' );
define( 'NONCE_KEY',        ',/?Xd=wQej_{5ITbc;*r0ccZjoKm8t3s0>#u r6:6+SMFh<[X+wV$ARcV;A6n6BN' );
define( 'AUTH_SALT',        'zJ>p|lN9rDl8DZOl^~xnAszXe}JdyX.~ip9|P:>UX4!xV53u[[5F?Va92_N7R&u#' );
define( 'SECURE_AUTH_SALT', '7!dFU&]kpu<fn%&ntla_=Q6,_YfOp4km4tiB>0r:]atb8evB=&BzDG<a}K:kH&1w' );
define( 'LOGGED_IN_SALT',   '}FVh)O8;Fa7W&.QWTO84oyi<1=7(JEN{R02dC,PFN-YS`l$u{<K@s2?*5?{cnJVX' );
define( 'NONCE_SALT',       ',%gPJ/g4LN:>;(61Plo&qj;7|}n-9`N8ctz5VFS9y=x{iXQi&n.t:_*K`+Ln)?UD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** FTP Direct Method */
define('FS_METHOD', 'direct');
