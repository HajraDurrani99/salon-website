<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beautysalon' );

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
define( 'AUTH_KEY',         '4U0]<<d;?X(ny6^=s&%>%:,8.|@32nN$dm}p-c:n1CuAz]GV*;K$k}W*p{xm;:~y' );
define( 'SECURE_AUTH_KEY',  'll7!>`~{AZj{KCr^aCu$7/{[E}!CS #0DtHSUx7A}h:7dAv=51/1c-r0RBcrCet{' );
define( 'LOGGED_IN_KEY',    '/3m$po#@6.|;^1Zmw/7[3t,!vXm:8669#0X91F{*!<$Hkf$S2/[6z|TC!2L|5d<|' );
define( 'NONCE_KEY',        'Cv%s_A&8z{Tm4HisDGmKf,pwQ]B0hW!C8n; UC`j/::3}+Zt%a],YVw#F}BgAj/B' );
define( 'AUTH_SALT',        'z<9K&M~OJW.hl@!wbTU`4G{_G<=Z{S9AV7_~<$8.@0TW5#BW`6(Sb?35|0pw7#HK' );
define( 'SECURE_AUTH_SALT', '>25Ky!-%Xz!U3$Qpk{ym/u3RpWhr_PveT3MRMX0(Va`y3zEsSUjTT{B/_oi1=MyR' );
define( 'LOGGED_IN_SALT',   'xXZkJjqxr6sh9&:SbClQRhcixOz~o1yw8seXgiJ;aPjdm5J=Q*Q8qhGX9|XFx3P0' );
define( 'NONCE_SALT',       'pSlT#Rm]!bThe q9;`-*RI:U;J@7+G|F2-&1P]{o:UKuUh(Ku0CKov?Ow-I:Oh|t' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
