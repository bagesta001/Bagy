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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'm2r=Fg.=B<PjbQ><j|X +}H}mC]@^*^:?8H&+fG7q>thv8%s.S7[XuXx(UQ_nU>>' );
define( 'SECURE_AUTH_KEY',  'uO/f+FCN}ycHvKi@*E7n?V0a|}|4|i_#WQ<bG7wr5<[jU1GT~4.|+?el0(s$A3Wn' );
define( 'LOGGED_IN_KEY',    'v0}{2_-4i^%MNHX78@e*5ZRq)ynO,[d`V.a)2N6i;yi/vS]&Jnw2J{gKXh]5Yde=' );
define( 'NONCE_KEY',        'O+lzy-&7W1Yrtwh|f9nG,V8fXeh(MsY82f`0nFPOZ~& w-%2P3#.N~XmQ$d0p:*g' );
define( 'AUTH_SALT',        'Xa%`h>0v%h1=)zhQT1>v0WD9JQ;M3VK,lr,SYanu::O0MM(H(+x5B6t#x{N>-RH9' );
define( 'SECURE_AUTH_SALT', '9P1jUhAj0}gLT=r*3>eNne&:)|P|?X/9L,Z[!e&_Vp@4lOmvx:uv1TK.^?M[Jj?@' );
define( 'LOGGED_IN_SALT',   'T9eGy=F._6HC#8BlkM2NAFo&FS@!bMwz#t+:yTV>|4tbf1dw>nq(2jBOaRZiI^Yq' );
define( 'NONCE_SALT',       'DG}i1j(_*s-^RCOLgzF5lVBK9+ko&fyHOp}G<=;,mG#0*A|?@xb-CK79{su${xUV' );

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
