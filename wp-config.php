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
define( 'DB_NAME', 'work' );

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
define( 'AUTH_KEY',         '3CL;{|)~mo^_:W8>O3*98Y0beU9Y~3s6EbN}-mYE4_[o`wXqf7M+NO&{Os~?VUJc' );
define( 'SECURE_AUTH_KEY',  '])w/k:R:y]/Ke}c$}s8]jFcgeOCFkm-v~~{W~&#vH i?l]b%+_]B[:Zau1b0`R_+' );
define( 'LOGGED_IN_KEY',    'tkof{1{& &abq-U8.Fzr{]Yaae6nEnw<#o}wo{*U$hW[#Qtj,AR1dbous>2UpJzH' );
define( 'NONCE_KEY',        'n2];0ifd6M@3;XL3,o*(w,f1r>yAU[qdpPxm| ?*Qzk`<,a/hTw )mJ#yiJy6q0B' );
define( 'AUTH_SALT',        'w_IId_bvq q@iQCb .Z4xV&EG%cY Ive}AzZTE(q!*5&I-f+QAI9gXOsI{ _?nfF' );
define( 'SECURE_AUTH_SALT', 'NAp]f_$^0rimt&Z?WxTxNh%{D`apPgh|&#*|=;6ElzEzB>4(!:Gl-~-$YPN{#L&Y' );
define( 'LOGGED_IN_SALT',   ':o/*4`KjLX9Fr~3H;(e#W0YT1Z9b)@:MX]hENQ(#E78(t41beT+Eg|f(5RNNtFC!' );
define( 'NONCE_SALT',       'qc_ltoi29-@Z4KBjr_)7c;VuG1<LSxR2N_FwGPHr}%2?a?&V?00$*6_CYGJ[&+8a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
