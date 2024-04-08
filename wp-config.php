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
define( 'DB_NAME', 'wave' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '(pb-#~|a[aNb|Pr~=m:,dnZ]QQ)@~;i^q(V^g-Y5r9qpl`TD2Q986T5?cK{BSxkI');
define('SECURE_AUTH_KEY',  'XE+6|#Bp(.|dyd]..nG*/T//AcEa+J}n*0o1RYL4u)rtTfUQ/`o_F8H|2$q c.!9');
define('LOGGED_IN_KEY',    '+p_+*k;;0)rysZ=P}%5K=l>x2<Mja7Wai033j_W#yla:}{7?>:Cw87uVE4-+9lk#');
define('NONCE_KEY',        '4;wczW:v `An6oFeeAPOIYQLVJJbl_+mC +Vf!*3fK`)@3ZcsJ-`kE45IHUIl(Pa');
define('AUTH_SALT',        'sWem!a9L+t9-U;10ZJP{`+ZwX#$tYp*^lzjs2sd@mP=|@6]WY5[`/84pz}i5],b(');
define('SECURE_AUTH_SALT', 'OE~|b_lZ}JA){G-Y+8a7Y:Q0%zX)ortb{h%bguH,7gTAcM^/?kBrI5d2@EItq-ap');
define('LOGGED_IN_SALT',   'u6%j%e#pd|^I<sqj>UZT6}swd-%2FC-9Pc^d|TgC+UdK%}9pcc>1|uMfBr.MM){J');
define('NONCE_SALT',       '+F0+^+nr.-t<YB(a>E%O$PNH^,vWd? /581Zfs:+]!IM@;z1:v.j4~v>M$j^^b^6');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
