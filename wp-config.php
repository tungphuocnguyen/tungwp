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

define('WPCF7_AUTOP', false );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tungwp' );

/** Database username */
define( 'DB_USER', 'phupt' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'UV/12N{UV;KFw,FOGEkr6vR{ C[G2sR&{A[>O=U12`67}1lH%)Oj>?+n.;MG/RmQ' );
define( 'SECURE_AUTH_KEY',  '|Y@ya#xM6bAm/I?h#gh9+i>9vx*~<F_v6 {%$:zgA6JOq:DxE-aK!|u1}OpI@kO.' );
define( 'LOGGED_IN_KEY',    'Fl%_?!tWMM,rd!X{N=!=kp^s6>.tFc?~0?z5}n!&^4@(hMG2@=:1bG$q!0e7bEQS' );
define( 'NONCE_KEY',        'mU ^2=C<dBH@3AO` ~vUeXw5/ W*!Zoba7Op@F]Rhc%oC;QK&?$Km _dT0rH[>-a' );
define( 'AUTH_SALT',        '?sAtJ*l@Q-&?fmzfVRK_xaiNEZxt1yHD=yvM}&h*,Ok#T[$AIt(u0&;D,4wTk+:x' );
define( 'SECURE_AUTH_SALT', '!l/_$73c+D*.Oad$2.Yd),Ak;gorI?s6.+3b`1-5y#ursR5Ze46zYI<c/}ek5um_' );
define( 'LOGGED_IN_SALT',   '96lFwB!xbn}7bQCN3:]|6GpwNZo_;gd1P3r <%-k?vtOGaihCor*Hi+aB1NHF1PV' );
define( 'NONCE_SALT',       'WgAeHQQQG*:b@yo0}Qg!>~G<WT!.dY&}y*BT5vPkI,!Brn-~Xo7&R 1qhi[e.}bQ' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
	// define('WPCF7_LOAD_JS', false);
	// define('WPCF7_LOAD_CSS', false);
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
