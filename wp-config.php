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
define( 'DB_NAME', 'dbuqqvng99sqey' );

/** MySQL database username */
define( 'DB_USER', 'uw5nbdgrup7kb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f35n42xbage4' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'EProH;JGv]g:y|pj;M85#,^oeiyxN}^R6:-kJ!&iC-u?5?5ZL/U(.0K>1>I^K+<^' );
define( 'SECURE_AUTH_KEY',   ' -WkXHGyiDWEQQ38z__lEqGQhsiw;-[4Q>Rm==I^A&f[iKBZN#g.$CVIZ!}sQ3sT' );
define( 'LOGGED_IN_KEY',     'iF+=%#pOR`*|Y0Y9 &,8a!Fm hqv3je1[8uF$u{T}(-Kl.1;tQh]NUA[SY$+6#yH' );
define( 'NONCE_KEY',         '.VAjpg=xB><iq,!aZRYLYw|@HmuMl+mTL;@7L[e~) {DR=xEuF[q97Yx,BY(Hq}1' );
define( 'AUTH_SALT',         '&p@{]O8Em4XgQNR9>HH)IX@(Rc~I:(htub3IQ}eMTi.#.77dy7JIN3wf))zM;]<2' );
define( 'SECURE_AUTH_SALT',  '/uOU.W_TG[tTjZtn,M&GnCR-B#ph+?Aj~&%R?_$1N}.kt=DI8OlNgV(;WJ]HD`J;' );
define( 'LOGGED_IN_SALT',    'W[8w0F/ymbEkb%~bFCRo~bplMsh7NFapYo7~r0M1t/IH42Y8!*EK [_lp10`*uAS' );
define( 'NONCE_SALT',        'IA%{&6E0m1sbbg,3eNrilK] {[ 6J=sJ0Q]VG_-eBCIid9a+9m^,Cql~;A%|_t[T' );
define( 'WP_CACHE_KEY_SALT', 'CfI[jlb;rC9;PV61%_xN:ls/4K[diNSo{22f_=}KK@j;h5IP~qHGK[zQb16F%I+A' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aen_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_DEBUG', true);

if ( WP_DEBUG ) {
 
        @error_reporting( E_ALL );
        @ini_set( 'log_errors', true );
        @ini_set( 'log_errors_max_len', '0' );
 
        define( 'WP_DEBUG_LOG', true );
        define('WP_DEBUG_DISPLAY', false);
        define( 'CONCATENATE_SCRIPTS', false );
        define( 'SAVEQUERIES', true );
 
}
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
