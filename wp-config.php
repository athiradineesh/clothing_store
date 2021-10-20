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
define( 'DB_NAME', 'clothing_store' );

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
define( 'AUTH_KEY',         'Eg[jF`Cp{A wW$$a1sOsBy~]A?XTW^Vrfwp0]Lq[T5-MctR<G6fXZT-|D2wU_t-E' );
define( 'SECURE_AUTH_KEY',  '[c=`8@ewxXpG:,{#jKHHcSSHsbJ3~,Z9Vjlkj>^rX[>pQxt,H&$}o]LfCPJ^,s h' );
define( 'LOGGED_IN_KEY',    'biiucchvMUq:K5F_y^?nCff57y-FJ!vK=TPmr!:@L)~ujbk~HQrhlVOT;}=e-;0(' );
define( 'NONCE_KEY',        '6&Bw(}/U}zSaMlQGiW%Nehl]uV(,k1VZ0Vvs 8kIRIV!zu(tNsZUN5#sT5,lJWc}' );
define( 'AUTH_SALT',        'n1;p1~wbJ#23K#iqUhVTP8BC?@wf6&5}M$/(u:3Yyq[6AO1f#Hi<$[6@oSh* %;r' );
define( 'SECURE_AUTH_SALT', '_iv.4+4:12Pg-/BRedZ[GMD/_vdk|(,WRWGYq%:.wavJFZ_V=L< )-W1g4X)pZ-w' );
define( 'LOGGED_IN_SALT',   'j9p$|8J872p5Dc&yBoOUSXut@Nne%K(ca}6X26gMIPsE3a6!Ny=r$^}utcq|k]qE' );
define( 'NONCE_SALT',       'PLV.det:uGAX#I>,kT:RNTz?D4OsgC>(kM3v(J&i17wj@0byEZ5ZKvE(1Q=1{n-@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cs_';

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
