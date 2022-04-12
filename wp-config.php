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
define( 'DB_NAME', 'affine_new' );

/** MySQL database username */
define( 'DB_USER', 'root');

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
define( 'AUTH_KEY',         'p];Q;2?K+kM.{2<D`8E+xsuc3PurN.5px<mKdgI5~BI)&<0AVJuQ*Mf4C&LJsa+<' );
define( 'SECURE_AUTH_KEY',  'K$tI%9!%k,C,9bXD&t8%]I`LUd|mDt5u5F?.+l;+,*dOC/82xMnhL8I6Vh5iP$cr' );
define( 'LOGGED_IN_KEY',    '(HNbiw<`OBo>N2<<7(h/u*o^<t36d^dr&Xg~DTf/47gI_(?>z._~}N[6mmypj)P|' );
define( 'NONCE_KEY',        '8n-)bQvX*)<re<m/ZR@voB0e_>yd}alaM|BRDzq$at;AeQS8B:!g~Km!;ggQB4}{' );
define( 'AUTH_SALT',        'IXjubNg4g=ovGZ2lxAV4X?}D{.Wjxo<Mt{5tBLwb|QxUrLq4mjwoeicflXVFC|qF' );
define( 'SECURE_AUTH_SALT', 'M[~m0aR*I|?f0/ALnuw<1FcR*ZU0=i7xGK)mX}a[n];8!ew<^)&<$OV72DZ2dk0~' );
define( 'LOGGED_IN_SALT',   'C_0AnZ(_P?N7WcHu7(@Y9cVeD1et+?~2y U/a3J=0CoK{V6!4ul9N+.?7R1/&gCN' );
define( 'NONCE_SALT',       '](M|[s~U]e?EiQCo`YH,j:j zz)AviA@<5XSx2 lC!jhgL}mXAnhno,A>YXaBC[p' );

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
