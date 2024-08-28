<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'A/TUHx9dk$N1Qs8e#-1i%GgIB{Y|6- nS^AKRX*tq>;O.7IaNW&`.WJ;Y&5Sp2Oh' );
define( 'SECURE_AUTH_KEY',  '2*VCYndl:13O5a:`*~Yh}7%>3|1Se9IPLB>RtnkMqR^28AKp8mz[K T:wLunEr5W' );
define( 'LOGGED_IN_KEY',    '*J$u/sTZJ*vO1=?+b<c0|}!|]1^aEd;4Vm518NmSY`3@*:I1| $/ndJ^RC`Ieoc;' );
define( 'NONCE_KEY',        'A]*VH>5%9IkFnH]@;g,O>wn?&&}L9vcQmOI+Z@-jiQ.kP4IS9lfdh7{S@sFaQxn;' );
define( 'AUTH_SALT',        't.$&,!S8M(L5+M5Q)N4e.,N1bJVv~T0L /s,QS$j3M-:h-Rkl--n-1AXv(;C;5)Y' );
define( 'SECURE_AUTH_SALT', 'eJ:ZH.[8)caU*t7qot~9)7kx%/.yF>&]y..GkVb3]<]37SP9N)|ziH=nXd[RBYB*' );
define( 'LOGGED_IN_SALT',   '+@EvY$Erj/|WlZSspxpnu`Za&<&W/6`<.*x|:I}HWoH!]~Mdr%;l{O-CE7()YU7}' );
define( 'NONCE_SALT',       'P2=Ywi?zH/=a~5/F7-H#qbG-=Y)0kOSk.-?~YAJ)hp>gdz{3/v$JO>fUQ#0ESEMD' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
