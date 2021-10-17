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
define( 'DB_NAME', 'baloons' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ';<>?Y^CQPpKFW/d{wb`fPN9ApfXj=wQhT6F#%XZndvm8=1#PiGM8jO7_1EPMuGS:' );
define( 'SECURE_AUTH_KEY',  '`-:t2v%:)l$-?pzW{88dlvN/s`Whu_#BVn<&shpC;d$-SGHL`H1%$8}{X0_|q=<_' );
define( 'LOGGED_IN_KEY',    'NA`iR5Ou/(@iB7,/dbCOa@M}*@fwxG^3Fpp8n5!ge-$K<Ne{ehJ,U>YU+LzW;>h7' );
define( 'NONCE_KEY',        '.H`#3Ic7@M0oAU;K.XeCh,5s{{^D9XJVZ~4E]]/VGjP;1y+H!i@,>o6:RyG5+dl-' );
define( 'AUTH_SALT',        'B8$cU/TBHEUz*|$)_jL{k/8;jmz[E|#nquGTeOKh<,|P.x[qVVBoRk3d4Oi!gI7T' );
define( 'SECURE_AUTH_SALT', 'sm!H_S|)8cy(hKm,JM]|B.|DM$J^#_Z5?T,n.fY%KRa*HfEGvc>0K,YWmxSJ!?=m' );
define( 'LOGGED_IN_SALT',   'T~oHcfPs9x(D>A~/k$eyFjfZRZEKMmQx$ns[*jJ.:EJxjlMpJ`EDvf[GDLj7UVq*' );
define( 'NONCE_SALT',       'g2>G;RTL0Q&PZ.C!_$i/w[9gHowDZ$LYYE@I-7mbfI1/mkdG]QP<z(Lvy(Q3sZr+' );

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
