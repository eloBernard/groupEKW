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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'ekw2024' );

/** Database password */
define( 'DB_PASSWORD', 'ekw2024' );

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
define( 'AUTH_KEY',         'Ju*rdqpiU.bRdH,cW`I %-BqYR))6y<2{7{1*Cu1A$Q0nFEvKg=@o6wwo.K+w7tR' );
define( 'SECURE_AUTH_KEY',  'XkCF~+Ma0.Q$c`J{eP`m1G5.<!C5;[&(nQWW+yc+5vD ~(0C!H8u8yX19hc?k$S;' );
define( 'LOGGED_IN_KEY',    'klc.r/E6 ZY[.Q<e8*-*9fs6CV$l|GH;Ed}yA)&y SDR%df$a%%Ew1H<!IRng1zF' );
define( 'NONCE_KEY',        'Oj`J%pB{dhAL+w1e?gaaLTsS7^4y/,hj+5PYu,tJ-&j|LA;iU9%6GyJ1iLFmRv>r' );
define( 'AUTH_SALT',        '/71>em&`,-lM]/*YJB[ONny<cRS:+M{<A}})SfiyyI;a8*X2bdaTnA|bo({c1XFl' );
define( 'SECURE_AUTH_SALT', ';Psy*Cvk7BL23L:QkX,FET^^h<)l`[kcL&m 6?);hcl#HIOp*^[L:8$Fe`Xn2*Xi' );
define( 'LOGGED_IN_SALT',   'o]nd]-{>hE?v>3`@<07:itP}EPw5lB{LC9Ae~r*}=cF7[S<X{%;.6={j~Gu(o?tP' );
define( 'NONCE_SALT',       '!(!%7H+WUEZtKX^fX#-9kd`}:qs4[x_Guj!M>VMtg3f+qK,$AzTx;1ce$bo-{E~3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
