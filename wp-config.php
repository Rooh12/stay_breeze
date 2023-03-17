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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stay_breeze' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'u#w e}+x[_&yC6W(V3FEPI-i83q#DW5`Mw~Lji_g}YsjFqPMRqU+t4afxRuqe}g.' );
define( 'SECURE_AUTH_KEY',  'uumq*bFy- y6B8H^4;+qUGcKL.zNp<fxk3@ V;vAFMR ad3pJ)Lx (WTAcc2`nU5' );
define( 'LOGGED_IN_KEY',    'LNGgQdR8dCo?%<#n<=@2c~YS&)o+U3U).c4tk51W,Nz.F/.,e=i.bUtS~WcAL)YH' );
define( 'NONCE_KEY',        'x`4QuZ 6O6C`&XBs.ElWrbLw-<vGqlFF/${]?];S=qTj6&vzQBp&wI}Zl].RfV>H' );
define( 'AUTH_SALT',        'x~(vc[lEC3eUtC|?EKx3I{+Jdp%$~@J_1!iSZxrZ-#OtOhQiW4ry%=gZ#{>uJ9J[' );
define( 'SECURE_AUTH_SALT', '7@QFIOj5X3!CZ{HXEH`/@-^RP<S.r2WaqJAp!QwH@WkdbDSVi;d.Ef#o*,,UbjkO' );
define( 'LOGGED_IN_SALT',   ',TV{9%N,lHE6Cw!Y%SkWmSI:|[Gd[CzDinz2L1vV?h@|z>PON+C:-emw7L770;#(' );
define( 'NONCE_SALT',       'O7I?G_jn#BU>ACLB~n9lpdfnxzjmw/4_UpG9Y(8$1[E;hlHX$1l[0L/S-~j|*{GT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
