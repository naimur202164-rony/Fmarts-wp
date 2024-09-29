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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%M*A;FU4_0IH7v`~ED8M$rp_J4QT%>;q)b*~8i4/-l@+IA{0s>tC*%[kV/KZ7Q#8' );
define( 'SECURE_AUTH_KEY',   'HRaav#gd.3<??Lu^2nD<RXv>t1ec3?t&9Hv!?x@%Chz!uAg|NBHq6O&K%;ZY=mu[' );
define( 'LOGGED_IN_KEY',     'E>}1(bBT~tQ;21{^MM)Tu!/4)M@WkB1]puG} XR/O[Tqtj/W%3+XPFracv)z_opz' );
define( 'NONCE_KEY',         '+kEc9g&nxuVZ#<M`<<ZnZ06s?Pxg0a7:Lc1}v7$L-&,RK|kX)ksL#Y)*$P8:Jj:C' );
define( 'AUTH_SALT',         '7H@uqV*N{?BQp!-PUE<*q&qa4sPw&9xp]|[J4i1R4VbykEG0o#Uk0VvL*_irI!I>' );
define( 'SECURE_AUTH_SALT',  '#}x>R5dZP+|d0?JsL=c<v@?%.Wg_jeS(R&5Z?U(L<v{[ig(MY4 gUmpHS7b&%Yf^' );
define( 'LOGGED_IN_SALT',    ')nI9K^fW:.y D!FIFmD$nSAYW^LA6a8tnP$*jzP^B_2R&pQNHNv:U%N8)-=zNA^R' );
define( 'NONCE_SALT',        '~ /IT>]{4@NJ]S1^a%P7D:H;H=I&L1[%(c^QK0P[D(kP8V8IR_O2ch(0l5aT>v`[' );
define( 'WP_CACHE_KEY_SALT', 'tjoU*rfPB7)t4|U?YLG ciNH~8<V_w_w1<&a3oA!% /_&LT@p!B`5Yo4 q}[9CL~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
