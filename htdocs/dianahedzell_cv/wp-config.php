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
define( 'DB_NAME', 'dianahedzell_cv' );

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
define( 'AUTH_KEY',         'D)>K)j[yMh!<c%L|3RN639!9>Bz{Y]b.vV.Wu=;4{|2Q?G4SoWJJU7&9h.<}vLTX' );
define( 'SECURE_AUTH_KEY',  'uow7$ lsO+Z4_D8Y}[x.dQ?dDI_Qw^C7i6^H0Xry24YCnIN@9yy3id?=b2< $+mt' );
define( 'LOGGED_IN_KEY',    'S~vs`Xlo}`.`6H~IE4=5K]Qs$bNbI~t9|-6*;T^o4RaGPOR~.4}pY`?*k<p6!-XD' );
define( 'NONCE_KEY',        'gF>tp`P$|87n~?Vz,1g9 fp+Fx:x$W ab1o2V}IZYCGz!A*5{0W3j5i,mpV~@,12' );
define( 'AUTH_SALT',        ',f|9;4RuDc[xof?>#5&lmo}|a%/v-er]LfwrY[Qf_y&_*MGqO.<T)zmBi@!Rwc-|' );
define( 'SECURE_AUTH_SALT', ']fa_QnM,h7ztpMMrY95M,F3cQ~xjr4-Pu!qTfo!l|p`~:IC[}LUT#VlLSDo[XKPj' );
define( 'LOGGED_IN_SALT',   ';.6ri[LeT^zWKS, Sh^YIWbO2^/GybC^$+d9V<M c34REMid>U[mC7t3Cf!d_[/6' );
define( 'NONCE_SALT',       'zb)RxCI% U@P$5-0xJy7&#ojBGUuI5I@8n}`h/CEStr =J7H>WXr$:<4slVu)8sD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
