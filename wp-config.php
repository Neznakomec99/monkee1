<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_ipbad' );

/** MySQL database username */
define( 'DB_USER', 'wp_d9zd8' );

/** MySQL database password */
define( 'DB_PASSWORD', '%vVUdMT16whE2c$D' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'n(&+B39!4j:Bm76rjc]5#oC3I5)F)4C84j6-(]a2(Oumb&_o4aJ4R5r6v9qb#!5:');
define('SECURE_AUTH_KEY', '5Z+-1*67jS5a#wqRo9[)QJf32#CfcP@4MF3jW38k8y[f190G*%6Nu4*1ntrCbOwS');
define('LOGGED_IN_KEY', '(z81b4(V/@rw2&3Y:8fO+8w&pQIs]0w)OC6dh2;85L41u;4S/0&jg)4!MA9yFSPP');
define('NONCE_KEY', ']61U!4]LK[5X2rab1%4;3u7(!p81nV_)42u/4Sg4EX)m43]5@/jBTlW;|5VO#ZO_');
define('AUTH_SALT', 'QtgO0:vF%2~3azM/Oi+0EG29j-qc9/lfoZ|%:PwYosh4LVQSDU9T+!tNGzH859eh');
define('SECURE_AUTH_SALT', '5%zR71Ws1k8v6t#9]P6o207)*0mleU[c7yZkU|rSQ[0EC&PKU//6885-KK)DYk]M');
define('LOGGED_IN_SALT', '&xc4135E31359XM1%/CrOGhI(ii[)w5ZxQ18Y~0o0;~_UX~59HE5)Q98t3y6:;5j');
define('NONCE_SALT', 'GE4u2-%pLm+8~74Zkqf(R#4s_H_4~J]R1R6QXrC42ojW|Sak|#2u739)@5l[GC5@');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'okvUPse_';


define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
