<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'script1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mYL<RjvmTm$e|= :*31@-rD6B(`anzN])3l1<1q)9h+l3Z.]XF[~!)(Fy@Gc{2@T');
define('SECURE_AUTH_KEY',  '<%m`Cyf0bgs6CVCmg<)Qr^e2|s-*Q)&Y~X](-nF@#Tk$tcL9^T[[pNOn|]L=iB#X');
define('LOGGED_IN_KEY',    '<9|NQ)zD:&$/&ZV()3UpF->X4Hvj-9GD$]9>pUF#W}|Fbch@_7+p-~SLt>C)oiWk');
define('NONCE_KEY',        'e-<C!Jl=w{|nwaiqcaDM17_0~5sUk^_D.c^KM)3~bg[83vjM  KMGz^>-.+i;HXO');
define('AUTH_SALT',        'rBM5$+c0:!qN;om_]9E|1Vt.6%-Iu,K2EPboD0n[p]`|J3*hklTqDf7,Ri.K.G>@');
define('SECURE_AUTH_SALT', '?d>QI?3O8OEUEda}@W9A$NIw|FMqmPw81$gL|2R+IU@[/-iR-$Xq6*RCJ-;wK=C1');
define('LOGGED_IN_SALT',   'qfh|K;s:G3T=0r1ukc.4cW{cQ[um?A*YMD`J^!5U|Z8{?iBjF+E>8w78Cmjb$4.Q');
define('NONCE_SALT',       ']dv-_/I0:+bElBE`r1jpLD#wNkyK2a7pP]&`9u#>/(wt^0/iy!AQ8Gx,e)s<tnXF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
