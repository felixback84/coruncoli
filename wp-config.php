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
define('DB_NAME', 'futbolgol');

/** MySQL database username */
define('DB_USER', 'user_futbolgol');

/** MySQL database password */
define('DB_PASSWORD', 'user_futbolgol_pin');

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
define('AUTH_KEY',         '@p,_x^3vF+N(md/Z%0u4^i!Z?-#-GW%HGw!(GK,XKA[4hfv^nejNVh=>1Lk0~t_,');
define('SECURE_AUTH_KEY',  '~i;vw{ux&1%.aQW:!aR%2[Qq5~euP8GTWE.bo(h3{BjN){hkYkp`5%!NZoA$hLT?');
define('LOGGED_IN_KEY',    '**awFyIuVV;^=`LFAn4Jb]Nd}eVDDeB]wBKrZJQF8KZ5+>gULNT{*p:|4-ScvW$6');
define('NONCE_KEY',        'h6yPz53X$ScR|LQod[+;:H[(T6Se`aZdqc4OE&R0xI]}Ck) [+]v1lSJ6#?we$x^');
define('AUTH_SALT',        '%q(<Gj?o&v4uWT[`6+ev!uDI/k!-0f/*TJo}^M.#4s*#|SpU:xrAj/I;ul_djJ C');
define('SECURE_AUTH_SALT', 'G`IA9)5]CFq~uL*R[ .X>G0WQO4Hwy+Y(N$RAdM`8w!rtSs{F2a&te`$i?JfgH,P');
define('LOGGED_IN_SALT',   '2$t/>wPXY]AHrxIA,scZj893T4%[tri[)=5}z^1.T/oSmXGb5>31+z=<xq(4%9@M');
define('NONCE_SALT',       ':tkdRg-Cb^a,Ro8*n!|b7c.kSef7hgi4G+<, 1p6mqQw*K ;<#SbRSb}%W=g2#sT');

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
