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
define( 'DB_NAME', 'wpdesign' );

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
define( 'AUTH_KEY',         '0Ke<+>82{I h~^a>))FAZ/ty_U/X#lpzK}=U$v~Ye[B4APOm$4{|6`}/b_&tPju.' );
define( 'SECURE_AUTH_KEY',  'o$E@PfYPz`=zv;Td+v[I%<AL*Vy:G0#MB3l[?jVfUpOT4`}3Ysv%3B?L5)5|[*z1' );
define( 'LOGGED_IN_KEY',    'cKHIP$d*o_HCEMrWi?A/-vv)oq4+g![xpvmY<wH6d&,})qut>oRv p~O6ZMJXoH1' );
define( 'NONCE_KEY',        '@1_4)Gk]8G(M`wZ*w-iI,#l(|$lP2d]Fe_.8B%*ebF%O.Sa/;{hCq(23V^z@UPy<' );
define( 'AUTH_SALT',        'C.:sfa8eV839fI[<sSlg=JR{7bl0/WNwq&nZbl8RT}%NKyr16 Lti7iu1JK~m|LS' );
define( 'SECURE_AUTH_SALT', 'w!}ro `<,X~%zA&v>@U2G?|g>7-h2R:wkXoWDaiw}{/88~Gz 8}P7k}6oeEKQ!5Y' );
define( 'LOGGED_IN_SALT',   '4hSX/@I qeb6I~ wY3.;6%68 )Ac@_]jea^0/ LXb%i{V9{>{nS2%[mSkE?xY.N]' );
define( 'NONCE_SALT',       'l8fwV$QFbZn7%*=5JmcG|vO-!<bj{Fg6h*ryTmD0iGOwHUE@nhzAX5Z5&j4aWq}t' );

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
