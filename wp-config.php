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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'Vtu+<[u!whtG,0 M!Trpo.W0cF>?@imtwL1Setg%OnR`jO(Bf1T<sP!?_< Fx4_?' );
define( 'SECURE_AUTH_KEY',  '7R,5ghb&C&HqrKA?>lbs >D[$q@x=f^)+j-(r>B%W^cr.V:3^q#,~BAg`A:pP(mN' );
define( 'LOGGED_IN_KEY',    ',1~TT8M<oxgXUA01q<cF{p:Cd6Vfdgt.6v@37$yu/(8%CP9_wOC%w/t4 ?K8}^RX' );
define( 'NONCE_KEY',        'h0)`2_v|UUPw1.qp.gA}QA.znJX6( J^b3.ic*naU|?sP}60fiwK1#.)nPZki{!x' );
define( 'AUTH_SALT',        'MDCV5~qt[nA`N]r4_ih@fPF*WU{ahrXA=lE8A{|5DK3I/FUVxw/v3~Z}Jp0`:tHE' );
define( 'SECURE_AUTH_SALT', 'l?nFJ9`|zOEQ`:x#_Z7L8_4$AF1hG<ckcB=db+:O5h[HZ3Az$Zi4RB?_TZdGG3tj' );
define( 'LOGGED_IN_SALT',   'RY%}`cx5n?* k=8FCA/OVGU]S<>quB_9@RJ*]{Z`xPMS{x|[&wf^X7p2vWEI.pZi' );
define( 'NONCE_SALT',       '|;[n>4l)7>PCm;U;Jk&1uS8%5j><u`y&lcD~}UHvB[x_wd-L2sY3-M&9*eg:yOtV' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
