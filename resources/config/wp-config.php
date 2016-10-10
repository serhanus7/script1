<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '%MYSQL_BASE%');

/** MySQL database username */
define('DB_USER', '%MYSQL_USER%');

/** MySQL database password */
define('DB_PASSWORD', '%MYSQL_PASS%');

/** MySQL hostname */
define('DB_HOST', '%MYSQL_HOST%');

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
define('AUTH_KEY',         'Ueq>@ XJP<}RF_q|$e8W6]sHU@0Aa4WHx-pIz$|G&1BD`E#_8R;aYpHH;Y2+)oks');
define('SECURE_AUTH_KEY',  ' FXF+-r7q~T)_S`9:C)T1x/.LH+q[r+)1g5_cs93&]phA.F$Bxe28q[|j&WRc*Q&');
define('LOGGED_IN_KEY',    '-*{FCP-egr)D#8FsY?Q_XnJy-V60>f^:e7|}B-0VznTd-U3us+g{7v+6+^3=ct+T');
define('NONCE_KEY',        'eXp|>.#7qDYZ(Q^(oB$*JLy1nmPdYD6fTJk]JU{Vz67rpk.yct-B,DlHd*65UqUa');
define('AUTH_SALT',        'BGaZjML5q-Z||5k(bRx(n56|<7J9S;d4NGLyYe0ApY+c/,e]+`c~+,Et`)O{/+|s');
define('SECURE_AUTH_SALT', 'hor,rRanAaYy&>8Oqm+|zP[Hap-wRY8C}r07Lo^Q4VSK*)D|j^_zfOXp/^8b+IfF');
define('LOGGED_IN_SALT',   'k~Re<#`^QSU!{]PnP|Z%`~.(-WYe:+1LA+8@(DSZN#Xz.-AjE3C|0rKz_T)xD=@l');
define('NONCE_SALT',       'NhCsBx<:NQE`Bi@4lSox%T-< |@>98MlOn%YD-]0LR(T}rtffszEjmQyAv3-)Y]a');

define( 'WP_HOME', '%BLOG_BASE_URL%' );
define( 'WP_SITEURL', '%BLOG_BASE_URL%' );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sga57r_';

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
