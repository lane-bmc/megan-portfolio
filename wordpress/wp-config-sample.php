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
define('DB_CHARSET', '_xyz');

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
define('AUTH_KEY',         'gIbkwm|s7}1-9I[0mgKth6:U,Q+dcgNG2tmxJHLh[%$a@5i^`-0|-jY/aF:?h kn');
define('SECURE_AUTH_KEY',  'e[ <7oN[5Ye:8([TF(kL.# /F{#!A3VgF7#}{,F.~r^F,+ oG<a|&zQMFjFygVm%');
define('LOGGED_IN_KEY',    'jz-{+9aT6zWGU#`FZUT6zSz~d}l*Z}f:15W-]l|4|l)Gxn{j.%?Wk1@,z/X=-<fG');
define('NONCE_KEY',        'g#+]r:=UEl}#d5 m~Dphp_7l^j*?`U9P}HG@AK=6;WH-6Y2~u[0j8xKmNx88}hww');
define('AUTH_SALT',        ',&NX(0&LS.90)$,vcSo3bJt NI#BZ*oV@J2(g/_:C|d*k1X;W9>R/1$J!VipJAQ(');
define('SECURE_AUTH_SALT', '|b-3edfBj3N7~ Vb_(NJ#bO@|2Q<_Xk>  qi+!m0GY{3?L4eF22,44:|f8*vX;ZX');
define('LOGGED_IN_SALT',   '5f /CEQ*RWY7%5#E+p|]!O)?wU4-LrL[[d&#tRsADfh$a-!PIODU+8/oZN0M|FT{');
define('NONCE_SALT',       'elol>$^8Tc6(Pf-;T<~7dYea7Jtid),h8:&h#K9hMt|v}}( i?.y|{wyh#7MHvul');
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
