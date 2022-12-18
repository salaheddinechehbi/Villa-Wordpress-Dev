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
define( 'DB_NAME', 'wordpress_sec_dev' );

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
define( 'AUTH_KEY',         'W%:xtUj+.!v #hv={oW}6zQTEF<yidu&[.SVz2i1@XvfP @,t%,ma6TD7Bl84;V5' );
define( 'SECURE_AUTH_KEY',  'c.t&^`iy9}:U0&}=O8 mWPsGL]~UiM,8:8J}._f{txizf]uY.^N}gl!-#?`I~rk&' );
define( 'LOGGED_IN_KEY',    'weu}WDp{8]Rx2Yd5%+Ug6e}QCLe1H_jM$(,sEq!AwnRqNlrZD6S5%dWwKl%Qs9gr' );
define( 'NONCE_KEY',        '7+=PW^:|)iE.P23z3I$s7HQM:=2vlfh#_2&_ig5^#Dt30q>DemU?>@)=H??K,>7z' );
define( 'AUTH_SALT',        'N?XF&B}S0UaB>}yo;`+y[nB);ons~nAfPbh,Z;lz*ZOIf4c8]SJ,^0AIbXM~&0[ ' );
define( 'SECURE_AUTH_SALT', 'C77dL*g*vkw/MEJ)zcNMjD@p{smF YO>O}#Ee80{fV,4Ly{!heYEH9mCVBF{UI>F' );
define( 'LOGGED_IN_SALT',   'GtUnVP0.S{i`(6{/Fz^|e>N}[H^v<kT+d}7N<K$ZZU:<Y-i#kaN:6ZPII4ndpmhs' );
define( 'NONCE_SALT',       '![/s)nM8?1TjBqyOeY>zm i1t[)&Tm<`:B9>68breRRSP7[1fz,N?_p+cUjz_/FN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sec_';

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
