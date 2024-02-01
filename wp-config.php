<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
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
define('DB_NAME', 'my_db_cli');

/** MySQL database username */
define('DB_USER', 'user_cli');


/** MySQL database password */
define('DB_PASSWORD', 'V*iTvp!yXEeX3dSuPY5Kd6*A');

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
define('AUTH_KEY',         'A|p)gz+Hc~o+Wj`V@BC=3@k.1;@y(,!gg]0A=N(w`J1`4DQWzuRv_B+U]h%.?aV?');
define('SECURE_AUTH_KEY',  '>@ ()0]!NmQ}1Eq-nFyl1rCO ^ tITS*weJj/}#~r|I$G*wq7D!^Eo|^s [/cV=n');
define('LOGGED_IN_KEY',    'uV+T(u_QGK1u)ziC3*YlU}qb]&#pn5/iE6>`^8y>#E)B<+BSGW5#Y)@OJX&0@j=w');
define('NONCE_KEY',        'Mm[rV(,[t{prOTdk=s9c[y8}%0vz&02;EtG: FW/s}*+Y)z%h`q)~*I`MQ(%ecm*');
define('AUTH_SALT',        'Yty8L4Hu?]y6s/p0n>YYg(Z=ASsu;?W86Ek2i2)|es=?h._(QM])6.8T,<2?(=9Z');
define('SECURE_AUTH_SALT', '|}t?H!;NS]0H.=v7S7GG 5kemPGON/7@u#&h&|,{(H]!n/rnOe&2A;Wrd)qu]:5f');
define('LOGGED_IN_SALT',   'TXAICr2^/.9R}Fugh<f[+NE*u %J&lj}iO[TIdlY{o-6n%$j V]w(eMluQ.4[=1I');
define('NONCE_SALT',       'Qg~[D-t7h 6-nm%KEJQo&Sr|+6M*%?.6v|Q;S?25O}q935[%(/G*(rIjsL[?NBK2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_cvm2016';

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
define( 'WP_DEBUG', false);
//define( 'WPCF7_VALIDATE_CONFIGURATION', false );
// define('WP_MAX_MEMORY_LIMIT', '128M');
define( 'WP_MEMORY_LIMIT', '256M' );
	
define('FORCE_SSL_ADMIN', false);

// if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') 
// $_SERVER['HTTPS']='on';
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
define('CONCATENATE_SCRIPTS', false);
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
