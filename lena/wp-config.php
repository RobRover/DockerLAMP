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
define('DB_NAME', 'lenaDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'lenaDB');

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
define('AUTH_KEY',         'bI&H8.M-Xv4ON|2@eS[[DMNOIDZ2vQ#9`J3Xj345WYWm-%?X+j?C67qK!@y1owY/');
define('SECURE_AUTH_KEY',  '|(D-Hx2,l5BD]cT6@C]I0| =IJ~TbYmZ:yJ]jk;^|CV`l5WG@R+0ih-lq&yAgWa0');
define('LOGGED_IN_KEY',    '<1f+&-|5W%6CS?c#&j<WVQbt_4iU5l#d4*ym!N.U&EphQ|{#F&n:AwK$!}.J=eP#');
define('NONCE_KEY',        '#=bg{.STRxU#KXB4y=4XOJ-l{qlo-$LU@i_byua/Z6%{Ch=4$ib|RA:xh&_tk)h9');
define('AUTH_SALT',        'Cyud5s0Al_SN|}U+qFW#@|@F$W94Bf|fs# G/?EQx>=-pI)Iy,{-y d@h1-$ $:O');
define('SECURE_AUTH_SALT', 'h}l-.|K)`7?QoF{2+AIPSDd+h$)2sUekvom3_?yI@;zw%Aj1ck8]]r=] SadTr/G');
define('LOGGED_IN_SALT',   '%2R;w=,FSV>I!/BPWc96k-eN]?ibt~}xYZP.NAK*J#dvL4aqXh vk%1~~nGgh-7Y');
define('NONCE_SALT',       'D.5VzsQHe#Y@+um~4W|0o@bR8^+3p_%kU&(ANB3S%]e.Zf7!u&;y*GfQ*qjSlVb3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD','direct');
