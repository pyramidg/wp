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
define('DB_NAME', 'hhn_db');

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
define('AUTH_KEY',         'x4d}o+<+GQ5(+VT2zDz%Yo1<jVW*46h:eX#bx;h>QH^^g:Y-u~-Ej+FdJ*A^<+z)');
define('SECURE_AUTH_KEY',  'v)E}d|>Cmi[vZ}-}%s<W8Vz93Zz&4{*axx,puu41o|o`/tdbUs<8KpuGe#p.TIs@');
define('LOGGED_IN_KEY',    '`[MVG?i}lrpH;FnG;zE<rx3Z58t<R4CE``p||kMCThg2V=l]d9;?4ap+B,2jSwzO');
define('NONCE_KEY',        'A7qG?@I#naFW4;qH;Xfq e@^;y]c)/lcqZOFPNXy9V;^J5dT!mna}&O+acyY#|3S');
define('AUTH_SALT',        '2[b<bs`J_B~_We:z<d=lJEj1Kk#ngH/y&M44ku#^{hH+prR|+~;C+.ERG3Pq5&_u');
define('SECURE_AUTH_SALT', '_C2_8AbtC^)J$RC;Y}podH>[^bS0Dz3$7f!!p)+{5K=Zr$NPH@3FXU6CF=4_~mAj');
define('LOGGED_IN_SALT',   ')P0opf,<qkNRBkB;K%Gh]$b+N92F[|79+Gp,)ZYXX+]+EUw-tnH_jRhGOn;}NK^|');
define('NONCE_SALT',       '/1FTiJl^<L]+K0[FERcn +OXpoE,mMBL|i%8uq7W]&dFkIC|F*9E}M)faFk<}|pV');

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
