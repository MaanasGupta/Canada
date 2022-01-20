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
define( 'DB_NAME', 'canadadeals' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/4`HUT$*`;6<]n0c{TKrRq.]?%cC,X{e7W0q|!YqGOalfakY=^o&};:m$Yy5`#+P' );
define( 'SECURE_AUTH_KEY',  'a_Vsg!}gK1%Zc/V(<:L5M2<-h:`%T02o(CRSHb8F_o@t).|(IBD@9!|2B(B)r)!K' );
define( 'LOGGED_IN_KEY',    'IKMqsoItRH0L?SRbI,+O&v(sr7z3s:{l2`:Y[ 6.0DC?/N4Wns$epv&&z,4ay-|U' );
define( 'NONCE_KEY',        '|51K1u<T88}8Q{e} U%!tfv~`LR&ML>J|ob9P?3>}Ou2&^QNaj|MEiTD{}[>WF}=' );
define( 'AUTH_SALT',        '5Nvh0{CfV-&i1K^h-R9fl~T_jHMW0ucdwJs^y$#sL((ubwFAcZxacJQU@M`65DK5' );
define( 'SECURE_AUTH_SALT', '/> FLOk{Uk2vyA1E.$,`oM&}Xl*IiK^aA{-hK~yRcJFEum[%YU;F_wO5qE?VlM<b' );
define( 'LOGGED_IN_SALT',   ' )jTr[an2O5>E+V8S|cM@F~[f?7r-hh).lQ~Q+/xF*0r1lw37Vo]Lh4zmnAxyh1d' );
define( 'NONCE_SALT',       'K]Hb%S*VC4,MeIb@%kvQlhug~GXw,%!7)V08-kS;KegpD|FX#i<HsYOG#Z%1dC<{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cd_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
