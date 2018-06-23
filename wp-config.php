<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 't618_wp_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WH6JrY0dKp>!/v)SG&zQzLe081-Q8s]0>)hehgsDPn}oA?fs,Rcm{[}L_~6^)UpI');
define('SECURE_AUTH_KEY',  '#kWY<k}Talj@J:.>K<(kldzj_>.]:so6k;:R qHukG61+~!+1bQX*@L$U@ Cy;R[');
define('LOGGED_IN_KEY',    'q4U)q4XdYcTUe)h,iNRjRv$A7TU).njVx(AJdJ^$:xlN[fm]q4WI?+Ws~-,Ze]M%');
define('NONCE_KEY',        '<Ow,Ir27g5Z-;J5!3gT>NG>YwyS!O1`4y7poh$-s:%&T7r+-^`#{aq*d,&7.iB-~');
define('AUTH_SALT',        'Txc_7gf~_*Rk`TXs2bYTK>w{RM`R[, p+9LMydmiI63j!ed8]]hP`[Tr>F)Xvf(c');
define('SECURE_AUTH_SALT', '@=0iTp]4]J<a7 #yiC`^1=+mk{#To?U_wC+M!QT<.X!oNGAUa[nZybEQEeP!(%;@');
define('LOGGED_IN_SALT',   '}9onD[jGCS:EOn3dVy<mOlZ.2Kf,*j38dG+hq4]Qer2F-?{v2/0dcIZ3I[I+Zd6a');
define('NONCE_SALT',       'q8qh$mv?.bPfgb4bva7mq{s;`<[%4W4G-9XMw;xr`G5k8E|m?EkZD*{l!pgB-]vs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
