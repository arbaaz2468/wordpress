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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'doS{`uDbwY}/5uD:G#/]@6ND!O_)2,0<# 9(W8,KpO}>^B1Y*5~(4Ba0k<=qwtDQ' );
define( 'SECURE_AUTH_KEY',  '7fcv7n(-;Puo`%N1=_n{$JSJMskJJ:C}f$~gQ]H)R= ~AS-u}t% @eMZL(:8{_M;' );
define( 'LOGGED_IN_KEY',    '!I0l#%+ c|wu9zXsp]6~tf@L$/@sw:bsoMRwmqvk,kGFkX-1M>.5hu!rsFl:?[~}' );
define( 'NONCE_KEY',        '[Do^/|odMiaLHs2u(ngYn=8>]Q^H !~FWZ4g5}?gS<Lq@anlQ)H,q)OBsl#)<bbT' );
define( 'AUTH_SALT',        'j(LZtbVMVI6k)cT*8i2L`N4h<.4NF272J0uib|GmZ9%?B{8 l+*_({o0K^2Nlyd5' );
define( 'SECURE_AUTH_SALT', ';19 5Cvqr~Ht_qb>{t9cxEuHX z@qt-$`C Plx>CJ+e+0D}A[,(vYL]*b](l$v%`' );
define( 'LOGGED_IN_SALT',   '`8q.v<5:o~!a|ke[h(lmC`x@5+A)$yg%XsF`_;v/=c26.G?-<q?^B1Ni9c$k8T*t' );
define( 'NONCE_SALT',       'H0yOq8*T[t`l3i>Ut ;^zaC-x$S1gN3LzZ02)g`SRcm.S^J5c4s~;.XUDHITMwM:' );

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
