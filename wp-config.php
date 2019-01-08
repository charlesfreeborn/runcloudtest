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
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'charlieadmin');

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
define('AUTH_KEY',         'o>|~{J<ivqQg]i%UX/cif|)_VT0h{SjSO7F14D*gqBlhZa=h.UjbM`pu[U,DgrO2');
define('SECURE_AUTH_KEY',  '}K#-79}^]#sb%C6`S{fN-){ec/~cVqt>iR.XQp`K/r6YN|HiFr9{oC]I-;MMBB3~');
define('LOGGED_IN_KEY',    'XkF>dbU4,I /=tCuOU&;2X;1U! 45,zMJI`Lq!%|B&cyl1L}R0qA}ec3xH[CZb2j');
define('NONCE_KEY',        'w0Y2u@$<a9%0vJ5<_jL)=VTbJ#A1N_3nQ;Sl9f).s702MuRpx&EH4,*s1HlVvIM<');
define('AUTH_SALT',        'VR-)iVX,POiBiOzfxQ=BM7*O^@oq=Wag4*/#K3hry;>7Rzx:e/ffqsf@qNd/or,7');
define('SECURE_AUTH_SALT', '3*Hol)IVbliKAIT}Z}C,}#-w+{<g/MXd !z[UeDE6UdwJ*}C3r_+5uZII`SCK=Rz');
define('LOGGED_IN_SALT',   'ubX+PS<3IvqNga ==ipWbts[$-E3l}N{FI5<9;rrIohB+34a+VR$PZ|0J!bEIr>i');
define('NONCE_SALT',       'Ckt~)t_U+sZ#+_]6G} itLBow6dQN2>!UJ |lWa6:olg:!/C ;+t$*gNE;zytS6~');

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
