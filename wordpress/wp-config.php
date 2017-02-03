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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Q|qA_:F-jSy5-{+jO${yerb!~R>GlZMG^j%@8^?-VNFHq&{LA>1Wd@YQ{t@t{plM');
define('SECURE_AUTH_KEY',  'FqLR^cEx|2[|-5*>=7rnPhP}QM9#<yVchk2P;yK4c>KmLI/PFdpds(}N^N?_2AYS');
define('LOGGED_IN_KEY',    '(n9I0,hn+rbVZNFZloOT*)}1[{U[(h V6bF}x>P N&iUN1Ls_)hz#I`gV@dEm{x(');
define('NONCE_KEY',        '[0kzN@Tl#EX-LXxPA+6$7O8d,l.[H}0:7rsVfFXb;,$lYNe_?MkY:m?QdFbdz,nR');
define('AUTH_SALT',        '~8@_Kze./B}:#|q,rsnh1/-m6WFp=c8SZrYnT_Timl!rC1z~gl`?33eh3uRC)V)`');
define('SECURE_AUTH_SALT', '_yyOEo;R[$Exj9sH4w D7Zlp7,!p7LG9>c+>A}BYs.!6x1v=2.qqZ^PnrJ!s2Sj~');
define('LOGGED_IN_SALT',   'Wv-z-}nBq5KGY,uxNbgD8 [.e{gkU1>z:L/K*+{D|(P<*t8y<fT_4w<Ffwt+,.X,');
define('NONCE_SALT',       '7S<cQ7PNLd|Q:w{1Dl)pzS_R/T=_De7NYeOJhDp<Lf#C<j/OR]K4u,l%i-g*eiN~');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_xyz';

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
