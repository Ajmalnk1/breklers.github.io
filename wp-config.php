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
define( 'DB_NAME', 'u569135381_breklers_db' );

/** Database username */
define( 'DB_USER', 'u569135381_breklers_user' );

/** Database password */
define( 'DB_PASSWORD', 'Nh=Sk!un9?' );

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
define( 'AUTH_KEY',         ';f! 5^<#N!PO?Zh^gkH<-}qG =DYf;pGJ$9}- ]CD4S)2pM2{#yI%n8]}S~}V;H7' );
define( 'SECURE_AUTH_KEY',  'V-bwOtNYc%;+:YJ;Shv%a:L#[.d1Vsd4;k~r<z*AlRcH&?Q7B%PYU5dH9a;UW6Z/' );
define( 'LOGGED_IN_KEY',    '`K[bTI&>}F<l-x@zIeL(cGLJNr`|E-qk/f{CQ?r7whd3LH-}pkYZvpPOs22@LYVN' );
define( 'NONCE_KEY',        'o0$zdcIWe]3?]a1WTp7.z_6ne5O^ws?g]M/w`x,9D{Kx9.rXL-E0wwja(nTCKMY(' );
define( 'AUTH_SALT',        'X{i9,O $#F9]GSQUz`0/m_r F/+,x_}~.,Js;L!;d~C]c75y9~it:S({#iij0z12' );
define( 'SECURE_AUTH_SALT', 'XP~Hz:&h$zE9iDh7_!6GFX=^<$t$&[`{w)2Ss+sig0vGJ`L,QTO=DPu;~sryo_>S' );
define( 'LOGGED_IN_SALT',   ',j]ll]P:H@_BJyYbVg?jXr+ H<k`+U$VI:7:=g]SyW?>CX*P;p#4!+fR@0lA+f Y' );
define( 'NONCE_SALT',       '?r9gP_{NUftB`pTsiW!D.U>bd#y>~KJ?0AM4?po0PU=MQ+:?EoHh9lnY)ahXnAn^' );

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
