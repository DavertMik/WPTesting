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
define('AUTH_KEY',         '}[}=9ef3eY-,w.y:Yfxr@%8E^C)`Q~4R(}5p>b-^LMi&7D,|,Z#qX1IF &^?Ynrh');
define('SECURE_AUTH_KEY',  'eN>I-5MX;c}}M:i<Fy=E|uDf:WGTCO3FBoXP$qGn:0N-Rlb==j]3o#!>O?cA4XGY');
define('LOGGED_IN_KEY',    'aiHSvqG`G-VD*c6E&wY}fxnWe5aR)LqQ2505;.uQ-*A21E,kh<l4p3IId%eZcZjT');
define('NONCE_KEY',        'kg>osgE.vp{Yg:;w04m.u[RKR<>Yol(Ud!FmUH*y:(]ktv>|j+noVk0%K%VJq!T_');
define('AUTH_SALT',        '%Z+`!/QLrwKNZ*Nceq]TyIK&@%PAYPJaMH%HH*:jMpRls+<Tr5Q<-d*o>B[x?l>Q');
define('SECURE_AUTH_SALT', 'hUI4T[J}lP%V)1V0l7X7WWA6<0w*MBjBSUeCuL[Sw)egcc7EIG:n2:S p&q;&CO>');
define('LOGGED_IN_SALT',   'V{r.wi,.+hI*tGoX s%(0@s{hR^VzPc&`gINL*[_Z}]XA-muD_*o>_+zu/5qrtFK');
define('NONCE_SALT',       'yyeS]]-A?N8qpSbYD]x[9GrIF;W)o=7-MN[(%rFr{(dFnS`{14}%qsdJ.@FU`hSS');

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
