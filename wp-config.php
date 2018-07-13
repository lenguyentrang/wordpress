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
define('AUTH_KEY',         'F[$a8&(&/HMfG!L8-V.bazB|IP6QXF7fAj2 1tK^!fE)X6%F;$dBxQI=2^:!<Rn$');
define('SECURE_AUTH_KEY',  '[8)D4SzGw0r],m.3lqrT~8!7GiyqT,)o)2LU51z,sx$vlYvQ~be!{-x:-}Lnyp6 ');
define('LOGGED_IN_KEY',    'HwQT2_lp.qbH5]645*}5+kx6~%6meb:bU]+XnM|25`6Omv:N3OmaNWtuss&OM`S/');
define('NONCE_KEY',        '?SC~;h~-dFKaT6;uK}~ohg*4C,l)#JJ+Um@v2~1-(Mk:,*(Dt+Ag!>0V([!s4(!?');
define('AUTH_SALT',        'znK6RmPb.>`+xqf]q}qX{8^aSi:ESE;vi.d#HF/nC&_slr+:s&O{Y3gn!Dyqu ,;');
define('SECURE_AUTH_SALT', '4AcD&}[F+xs<~]#=G*tWt;`]15w-/wLmP<@v4u8e*fCI49eKxrD1s4#:SmR./`D8');
define('LOGGED_IN_SALT',   '}{%.ELa_$LyhUAZHa/+fl#R7H!ByKmKry>w+J7lQhD2@]zEQaRy_~,3yFSLm_,O2');
define('NONCE_SALT',       '|N!^>{`MGD-qu(yf.4ri-GJVk]hMX;qCyJCeHn^}*0$F#o4j(t6XbERe-SdVOnlC');

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
