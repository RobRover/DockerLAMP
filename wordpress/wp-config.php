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
define( 'DB_NAME', 'wordpressDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpressDB' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RNPf !=oD/*PR0WA*VH*5[/IE40YhgXa(Cb+-5bl`Uh,!,+{|7:DgXe:dBTd%BRy' );
define( 'SECURE_AUTH_KEY',  'aLy=I~,w=l:E# iF`:/LU0=(f[|HXiI8fy]$AO}O<s!MF8{nUu{MqD[ z&<jw )z' );
define( 'LOGGED_IN_KEY',    'agb~{3:/RB3sF@;A9bo@H>k[Fv[= m N/u@QL`yOB9)e6_h8)@.!YCVN}}Q1KX3x' );
define( 'NONCE_KEY',        '(gWsV66r]hpI+))TE?3/,zWWxEI,{)v!Fit|15o]m,5kyuk7e8XyD!j=oU@D%r!u' );
define( 'AUTH_SALT',        'w75ID~yRN&50:v!xAtu83$C%D.43P#!M`+RoZNOxZIt<BsuJJnrBqws BT[7IHP}' );
define( 'SECURE_AUTH_SALT', 'Gvy2N4e+$c7o_--Q&{veFhgy;C(/Lo_a~T&2bA_IP, L=oggy>]h#;3*araHKKrL' );
define( 'LOGGED_IN_SALT',   '@21G-J-:rg9q7QH?KQx6l#5B;c4=2y/;N.U>NL&clC0-a`63?5uF}[f-%1&=,Eq7' );
define( 'NONCE_SALT',       '#LJZhSSv%U*g $s;.L<j9e_h3``[ <}mD>^_}Ipgt2#KPM)v ru(]pVAl$HnX q}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
