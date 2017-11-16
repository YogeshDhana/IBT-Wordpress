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
define('DB_PASSWORD', 'inter@123!');

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
define('AUTH_KEY',         '^>cEO;G3U}wn4OXlMZG;2I=-ct@t<>CAJO9-KA.=&bKFt!G[acgp[|NU#$oVnz r');
define('SECURE_AUTH_KEY',  '&>N)x(q.C8Wpl~4~(N0S6]~1o=}O+aIT#M5p`MdNu.=6~NWYS})8nk}gO,LwApUk');
define('LOGGED_IN_KEY',    'y?ve*`5m>]+YpG--oH?h<w}}c[8>KjM*Lk.Wq1#FZDso!a2_a]noEz_tQRr`:*m-');
define('NONCE_KEY',        '{c{>UO3:%H0LJ)vCJ|6!T<kuVtNmH],<l,370B@Ht`rQSB9%e%^`*r&pL`WX)3I ');
define('AUTH_SALT',        '4qr8j?pbrqH!IneQKZO4/8@G@Upbv0(TdXHQ/*+/5kABSZ`hA$0ed _+UouTI(NP');
define('SECURE_AUTH_SALT', '|$}OQi<4v!Bcj#y++uaEgsW;>zY=0ARRNTE&$XzZnRgto>;_`?O^r+Z/y7JehMCR');
define('LOGGED_IN_SALT',   'D9KNb{!8)b,_m`Wd!n i;MaEL3Y*@`Ax;![-zfz=F&cr5T6!:!k>Iu($` Ho:r<0');
define('NONCE_SALT',       '^pd+j)1W`tKD.:4V pX wTuYAm|D]j%l@yK-URwm@|z?@>R,!O ckv?pswhRX$2Q');

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
define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
