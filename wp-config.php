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
define('DB_NAME', 'magentoWordpress');

/** MySQL database username */
define('DB_USER', 'ilias');
//define('DB_USER', 'ilias824');

/** MySQL database password */
define('DB_PASSWORD', '12345');
//define('DB_PASSWORD', 'Ilias824!');

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
define('AUTH_KEY',         'rgn2iIEm:[O8vaVDR3cUvH^$f&|#g2CDZ<S$CZOFR>~#D;mrR&,.Yy*sGwxfR?Gi');
define('SECURE_AUTH_KEY',  'jlk~>y408`Z&J()6=ns[|?[IuN|GL|rkf8og%&eobS7n{-]9-tndbWPLw_f2D#;y');
define('LOGGED_IN_KEY',    '#~4h`r[|99S82oLv=1x1:?7;o0~N]9ic5b*l]NKW%.n+*V`SFvmrSsrU6/Otk*-T');
define('NONCE_KEY',        '+ tMZFp #HA*+pQVDOf*;XPCxW}(xoPPUWk4(SywYj6DRII4q<CuUu6&&r93`;*?');
define('AUTH_SALT',        '8u2Y%o,yzOYxbYdJ.dY]NT0,/ s@j34J6[25VW}7,zAynS,Z5u=[L$9i^htezkAd');
define('SECURE_AUTH_SALT', 'w>{+ b(}]^rhu6^HbA^EEoL (DgJ`EXESd]@lbv08eb6y=a7S$j^kjv`q(*4PKMo');
define('LOGGED_IN_SALT',   ',E;mEFT3Kp%y<dk(A=d0Y2uD/)lL%]0,I:3<XR^eLJIlsPNsW-tf3V8)GHX0#xUm');
define('NONCE_SALT',       '.?}}zx%9c<$H9m~~2,s)hP+3ia`yvE<zK(<K-{JE1ka1y#Pz0M]#%/QR#cp69]$c');

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
