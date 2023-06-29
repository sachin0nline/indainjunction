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
define( 'DB_NAME', 'indainjunction' );

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
define( 'AUTH_KEY',         '4.Q5NtR3cC{a[nv|ZkR`x;3>_3ZvoM [&oQ85S* {x.1j`ue}Z2V.FH9koLeU^N9' );
define( 'SECURE_AUTH_KEY',  'cPl=`T{oW@dz!Y.yJB{94KLD{2J~@d7z3~6HZ<pwP-J={Z6z?PK=Eoc{H-9$C4M;' );
define( 'LOGGED_IN_KEY',    '8--ELlwE2^xu{w|m`qW0]!}jvD?w_JdF_A$f8<|FQ^m2CS=.:7:mIAe*R_sxOzdo' );
define( 'NONCE_KEY',        'p-! %RGq8]qN$xZL;sLk2p&~(KC2CJ*I}WrcI2Y;Q)3/MpY gHiHoDF4,x,x.kXw' );
define( 'AUTH_SALT',        'j26:MHx[3*MY`b[jIfeytDb<}ssF(V@dm(a5<wGGAuKQBKzQspIz?X!:f@&+4bVG' );
define( 'SECURE_AUTH_SALT', 'vY2rKdL{T%64zFD>|M}UZ371Riq2S[J$}N:=J,~C<?.q-NZ@,Ny$oxDo?L5Q{jz{' );
define( 'LOGGED_IN_SALT',   'K.^!&V6r`#jB(Y>_=8RLu3;mJFbI`7d<s#|Moe~4M9?z1w68; h GMIjgI>A`ySd' );
define( 'NONCE_SALT',       'QVKe9&=z;fj4h98+|@W4KAMT<aD[C>?rNUrN;6sg#m&O.PCmW{^y:o=b}}U&tpob' );

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
