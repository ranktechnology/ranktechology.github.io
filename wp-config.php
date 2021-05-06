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
define( 'DB_NAME', 'ranktechnologies' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']4RSQlyth;pe})Joma)VY5f$w9dRxdU~lBY?hCUBVRCd#Exl{L%ORH=9:MuC[9`E' );
define( 'SECURE_AUTH_KEY',  'zt@|wj}c3hD]^SKGSz=2Ce{*sC!jP|xx}#e6.#hQxK/aJ|[T@[X&|tEO%0rLzL!$' );
define( 'LOGGED_IN_KEY',    '?E7<Ob[cF,oHCXL4$x@:;*Xtz[0&NsTtk6f5G<NHlB1sX6L6-Tyb1MmfytHmCGpS' );
define( 'NONCE_KEY',        '6xy2R=&3C*NaJk4_u:kQ;OW1a/pA9XB`NER,By/]hYX)##m2`Dw!A}+*)J<IU-79' );
define( 'AUTH_SALT',        'cS0GF7]1XKK{Mz0SCN{t|@ibVfIj;3|QJ4&2kzmBh;7ujt_sOb$:B/od?y$=LMQ/' );
define( 'SECURE_AUTH_SALT', '(`#>*;&Yc@J3DG8tB,u1ajUBi[Xem^{25H{[_Rz}A(sQUEB+ Pt> `fohe_y*r)I' );
define( 'LOGGED_IN_SALT',   '1UHrJ Z?wx@R<y9s}.}Yx^%E#o2!JXK~,;N-?r}rlv;b{?G=7X_@-QDeA?XlLnP)' );
define( 'NONCE_SALT',       'fvR7[~pVFE7ge=3Z 95l8~C71tJN6GY}V,_a1/&G~8=bQhl@(!s5BZ~T>vt*1P0;' );

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
