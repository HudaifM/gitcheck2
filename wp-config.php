<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '&N/aB34VfOCS=W)N0!n.bg%TDm8!%Q.dVD9}diUyUvThR}=@#2c,bBJ*yA}8!_98' );
define( 'SECURE_AUTH_KEY',   '06RRyktnf$c|_:4UH8:Iex]VTY[V^7Ujmt%Rkt[v1V*%E.bPKdI@R#15y%,iZ{pN' );
define( 'LOGGED_IN_KEY',     'uy_6DR>x2f}!mzq6!,ssg/[uFVW~PlMuFoKRJ h7ku)Vg-aHeH`r$aqpk>A3.Vrk' );
define( 'NONCE_KEY',         'xTZk|*D^)mPba+S_ Q0:E74t::I`*nOz61Z9EDrP2/Ng.)n9VhPOCA7Od$<Mj)Y$' );
define( 'AUTH_SALT',         'YuZE&A6xvbgH>EG=en(IatD[)AbX;?3J=Wq s[M[X-v8ZH3bEJcg^J5/3#?V6=ey' );
define( 'SECURE_AUTH_SALT',  '^*NS@H*0g{}5q=z[+_L&OV:4F%-saRlLHFPjuaSQR55GbhCk>4YM4ojWG_~K8~Fe' );
define( 'LOGGED_IN_SALT',    '46,VJ.iFDL`tRHs3pD<hzN9-1Xj4@rV|(sL9r4rmZ664bYv<gU^I}Hx,IC)kg|Q|' );
define( 'NONCE_SALT',        '*xspi9_owWJ|hT4}l,ikU^I^/4=53ICPUrK&oLvhKTQS?pyL%0S#~%*hZD<x3{Dv' );
define( 'WP_CACHE_KEY_SALT', 'ym{iRxXheCPW~MTu-=[idaDl|x}<c5)9ua=}#CZ-r4vp8HZK+|P58bH]ua{dTxj ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
