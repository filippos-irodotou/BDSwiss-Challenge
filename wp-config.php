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
define( 'DB_NAME', 'bdswiss_challenge' );

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
define( 'AUTH_KEY',         'iA?$zm(?6^^>da`|4,PEvA_(CNHJD;2o`}usWX%4vi%0L$CHc*)&i1WD]2WMZV*)' );
define( 'SECURE_AUTH_KEY',  'S`:_c,Xpx{[Ab~|*yXte/z2u1yw]AR,2/,;ZpM:.zcMr!rko|Us-!`}_S,ceY`)/' );
define( 'LOGGED_IN_KEY',    'c.c oE_FrtjkIf?cK7PU+9.s!%)gu9F94)JNpw%:4x.;nayf:oS=%}kUdXr%I>eR' );
define( 'NONCE_KEY',        'Qyy_Qh ICO[Ibc2ae0}59]w_}*AP&!Z@C`f)Px7)l^u=P:dRh-43uIIY$j5O{$yO' );
define( 'AUTH_SALT',        'Vyq|6XW-,;TjyL~)cerecFz?@p8RtM9sej)mztW+=eT,k/ |G:O6Z?AmD|Ce4F:Z' );
define( 'SECURE_AUTH_SALT', 'CyVQ=LS8iD1@CY1+4YE)ZmDmY> 83pViddmfqaIHFn80Hhz3F:l+}SRPRpnb@cFt' );
define( 'LOGGED_IN_SALT',   '(Yy;x3~w8&yTo4^@;^i ;3#L*Crs#.d{Zc9tkkwxCb48#TNy==IjY&W9jdI6]Xz]' );
define( 'NONCE_SALT',       '5U0&QP-5DVS,pL2SfCf4pCo~DuYbscoy9/djN)p^S^VXV][kMhp|F~6i^|s)}($1' );

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
