<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mohammed' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XlT`:#2L1OV9b;u08j8AQF7>$?4vBb<5OO-S?-s}M2f`cKfLi6t6C?^(a1BCYQ&j' );
define( 'SECURE_AUTH_KEY',  'y`IBQD=poioWpmS728Rc.8Z7sJf+IK_aaM|+(hKHpC$Tg?dQ592)Hc=Vxz8DS_ox' );
define( 'LOGGED_IN_KEY',    '`UMJU?mJ|m90t?|iN$fBD%~V(~t,giPsoEj:~bXO=ay:GKIc<hw>y;TkJsq1!s{v' );
define( 'NONCE_KEY',        '2l(fS2hNfDsKqoI21*D)]Ijoj)o8`GAR6Rbl8?SCE$cV)l#71k-RCs(~u6wUv_o{' );
define( 'AUTH_SALT',        'sUCW 6oW0ikgn*>}tYW*b!n))Q2Xy4+^NS2VT.9K/4?LT0nx8/YlRK),/|),mvp@' );
define( 'SECURE_AUTH_SALT', 'wAXd:MHE]i;n]VM&pw ?>uSHc BWMYv`aC!{,KAaQbj95h[OU$6#,icG :)~9iGp' );
define( 'LOGGED_IN_SALT',   'Jn-gWprkWl1A64I]=ELw=Kaa^O<&tqq2.I R-]f4la21E7 {xwV B,;OqcAM~?fz' );
define( 'NONCE_SALT',       '5_oJmZNF?5Ax,ubGQ-MeWtU=)lC*N99LOe{Ki7V%H)S d|J-u$aLooJ:q)v*0!%q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
