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
define('DB_NAME', 'cwch_db');

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
define('AUTH_KEY',         '.D7JpQI?w6t!_2>M!1cGmh680Um-1Yl J`<NjlbP /=6A8!Br<))+C}*9-kJ[T!C');
define('SECURE_AUTH_KEY',  'e2Qu*zxm`I50)sD^YalXo:a10rrV0RZ.U|96gGS}zZKfF)L}WQj(Ri5Euq6Tr)1;');
define('LOGGED_IN_KEY',    '<1SGYU8kq^Am :(`9{<a:lV07,+tzUs,V/L0cgRqK<Yk[+Z>O4(3)<@V:$Ju2X(6');
define('NONCE_KEY',        '*-F)fO[~zSshT#&%CWnNUP*!z{rjI<AZ;t2;pfv8Z0Gwtj/>DRo&o{P+H*<p+@rs');
define('AUTH_SALT',        'go.8NV{a-;0N;o|ct|^E16HH$.RS%9#T *!R3&O>I.p-jUQXJPkFiVm=hnJq1WTG');
define('SECURE_AUTH_SALT', 'xM>uzd7Ene:dJs6y^-9?D?aFXiOHvMGWiaX7qhWz#C)~!8FwSk0r]c}7Z_9t2GsZ');
define('LOGGED_IN_SALT',   'BbCF)cVW*G(xYVGpKP1#2U1=`B*i@rV4Te$TjZ,B8x{Pc@#{2IST!3/(Plo5r1q.');
define('NONCE_SALT',       '2:j-^@`ohKolnf(iS9L/#I+LK*)7ANns*n(Hy<3&>g$Q .)s$[Fqm+v9aP!<hm0a');

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
