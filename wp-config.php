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
define('DB_NAME', 'musicreview');

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
define('AUTH_KEY',         'x#N7*#q9RI]m(au=EWdU<rR`2hO(H VL^,%jafG2vscT;RXzqy0ckh5AXg&P? ]q');
define('SECURE_AUTH_KEY',  'ca<PO0]$T.3>|3!Ey|zD:{u/q}T-F*vfF>)ro;pqx2p*7*550>->6CA,|sq>%_>J');
define('LOGGED_IN_KEY',    ')weh?hzz>Twh3 O*uen1b>H>>|<i|l 4/{Sr bh>imj F-ga1U!fEkyUt?,`Lec%');
define('NONCE_KEY',        '9OY40wLq xsG[ 0X+3ByNVJ,WF0lYw6P/.b!7pL[A 8]=//?]g182sinJ86!<gse');
define('AUTH_SALT',        'w8flnho#{*0,Kis`QC)ZP.3Y.Hl,^)E6|Qw@?QrBAilN*sH0Js;mVqT@z@:NG#,T');
define('SECURE_AUTH_SALT', 'k[R9VW(?rh{ak#N[3RK-E0K<--|>x1=k6JJ!Oi$D+8o._msKa}_],(wok#w~G1jb');
define('LOGGED_IN_SALT',   'q$3G:NzMKiMH81zUan|OoySyzB!=pBDsoo <Iry]HplhF)86I-v%rc9r*kE/%et<');
define('NONCE_SALT',       '|A&T}P<wj_>k l:&MU>7gB16/}{jwXok*3Vb@dY(+ 6vNRVR=}{t]=Gy!:`o>$wf');

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

define('FS_METHOD','direct');

