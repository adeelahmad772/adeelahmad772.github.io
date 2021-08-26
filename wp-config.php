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
define( 'DB_NAME', 'thescientist_db' );

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
define( 'AUTH_KEY',         'O3B/iVzMFfuF?v$uL,OG#:R|FBIP*zSU5Pt>,Bx|i15bH%nYGm`T`Q<luFbEbdsX' );
define( 'SECURE_AUTH_KEY',  '&!iT6w]AHtL:Vyb48Irrovf=e#}0B !W%x.,]F0NhXrS+3`Ob;?[GFR7wN`pxBKe' );
define( 'LOGGED_IN_KEY',    'Kvv]Zn:FWRgLf}RGdlT7TMub1|*Lth 9ePbwnI[U#v*y,3S%miRTvZ0*UCvUK)|K' );
define( 'NONCE_KEY',        'rSe4H JtZPH+)=3$p+Ynl*Uapw9L$BU;nUf[!R} @FEj8vXf5E?%& a7{MD:B%Er' );
define( 'AUTH_SALT',        ';H|`-H+(zC9Rq9[LrJG30-y}r~iA<u-MvFIBt]7_@;F^W26Wd?|S>; XX@|^&VUb' );
define( 'SECURE_AUTH_SALT', 'h..5#}_49xg.%J3o?~#QTAymx@XThus?QDA:e5e/pgl[ffL*t=$MLHZX*0^]O)[d' );
define( 'LOGGED_IN_SALT',   'qbZ*txtA5o^O/OX_CwP&<`KK)!eTWHsK8zM}mWC`)c.<s2`*tCHO7#(ubAcaH<ye' );
define( 'NONCE_SALT',       'd1d]lREs>N=]S+cmbP?p/mQv0$x$%aO}JD2la(Cdr?CLQGN0Cl6iYdOEfH,2 QTk' );

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
