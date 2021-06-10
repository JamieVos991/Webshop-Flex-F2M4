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
define( 'DB_NAME', 'webshop' );

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
define( 'AUTH_KEY',         'UtSe3gm#ZaF(WLGaEBkz/Gddd:/Zb=<pSC*<5zbfdSJ`*V6<c+WZwX%FfsXBg/LW' );
define( 'SECURE_AUTH_KEY',  'M$K7P a8hE &p:nBgrxy5K5x6F,]EA$>L>U`[2+a.k;.E5*&:k.[nsb/C&R1_]d3' );
define( 'LOGGED_IN_KEY',    'DK5Bq*L~dU2MYU672*uTw?XgOf]e7Q/4[*4sLO##EQMI^>vn^p<ZY!^OCP#%ZJ=q' );
define( 'NONCE_KEY',        '/M/%@_7ss8Zt YLgh#(UO>eecZ.--Mr@XCl]2.}@ZlLWH]uAA9evG$F_fKzJ(Hbu' );
define( 'AUTH_SALT',        '-`wTSv&gDHrpwa_WpQS{(g fu7bhw/HrzS^@`vi-L9{c|%`ObC%0ZPcFTzg=B^]J' );
define( 'SECURE_AUTH_SALT', 'eA{D^ nM7/dAU4E_hU8pP} 4xX?k[z2&9W`6a#C7)IdBNMt-58xg~8q,Tz:CZ7C ' );
define( 'LOGGED_IN_SALT',   '[;>oQ.?PQ^Nb?a~!BjOrm+U|?mIk@(0@G0& cNM#j~8wH[KEve9;0oSk_gjlJ9RS' );
define( 'NONCE_SALT',       '+b6p}YD/45E}~q.k{vhg[NZBd}vS>mskcFj|^uRY`R Y|6G=#S a%trOgBB@UMo0' );

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
