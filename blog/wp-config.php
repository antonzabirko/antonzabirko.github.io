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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         ')lf#^$@^FV+v0O.g`5n0,@+so%0=b&A1n4!3a]Xszmari$ge&AvjE:<D#FWS2aS=');
define('SECURE_AUTH_KEY',  'z[2~e^b]#fL`oL3{eeiOkYzqo~cQm:pYJ,4>N$<A6J?proy7`n,+T.=IuH>khTY$');
define('LOGGED_IN_KEY',    '8Mq6g~+RjU<F#oNP7ab2!T2aa,mx CeEhA0r4.e2XQQc>(QXeAP{Z+!fVjim._(N');
define('NONCE_KEY',        'p|Eq:KGaYHf7YPGXwxqAHkx-xWCO6YLwVO<lD~Ppgx6k<eyZUSw-z=GGU_3Ai3yT');
define('AUTH_SALT',        'bjQI:D-kY(V#AJn;F>yXsXB~!NXAaD2Ip5^_t4.^z|3ARZ|[K:zHc(l)sR^uX/H[');
define('SECURE_AUTH_SALT', 'Y5MP7Je~-:FHqwdkAEoy4b+&}Gf~34aP/P@ThN#/uP7^&;y8oFQXkhf#9Q=RT5sX');
define('LOGGED_IN_SALT',   'XJ0iZ8dZ6#Uez;p5}PS,}!9-,oG!e|~B0(FXDH4xi;N5(Mx])(%ywEKevmg=Onm`');
define('NONCE_SALT',       'H?m++J]A#8{ UgondwHV()_C7z|sxhD3)^yo rt}ot[HCXLUKStH]X,v|jM19,XB');

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
