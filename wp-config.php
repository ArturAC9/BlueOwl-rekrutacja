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
define( 'DB_NAME', 'blue_owl_rekrutacja' );

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
define( 'AUTH_KEY',         's4&Rpp]xF)5eF},zvC#Ht212f4l .uxHgYgT/M&Wp?7wH8j(v]Uc#i(Z+Y;Y|<?-' );
define( 'SECURE_AUTH_KEY',  '!|~LZM)?vn7E 5S9^=K7<ELIq0_YP3ZM%Wp~+zpdJvRW-.T{az8+~zb^A d@^~XM' );
define( 'LOGGED_IN_KEY',    '`>?;mnj#c7!Z~X=e|fyp6pAc _?yb3+4?f0[O8 /NuzYyJrg<3fUx%UI=kjc[iJ?' );
define( 'NONCE_KEY',        'oso~vxoR#cjWC?ylf.1S`|/5|T7tYSdqwV92p$5ZcaMtrsP)T/ ]c$w7%PiPl;NP' );
define( 'AUTH_SALT',        'z2P%Wfez%}#+k11KMbAArHxI.Bc{%4HPX[=9tkqWbAm_{Dz(0y12i5`vpZ>ms&]0' );
define( 'SECURE_AUTH_SALT', 'wNf->;{,9)PD,&0r,}Tidp>%A[Om4wmN.nLSUT*9-^CYg~8w-Z%3Fu/k#qnd$&RD' );
define( 'LOGGED_IN_SALT',   'v;u2or7]|bDR;0`d8Ql8V,sz]>q7#bqzDi(nCWIu3`f?&9TBX-(EDyYG9.37z{Cf' );
define( 'NONCE_SALT',       'N/e<Iq;gP4-W%jE9+%0UlL8TM!4TJ:/YrPg9>59SJPSiMwF#:>qK1fY]&:Rp>b^W' );

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
define('ALLOW_UNFILTERED_UPLOADS', true); 

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

