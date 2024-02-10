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
define( 'DB_NAME', 'Buisness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R4>5LS(O!rgM/ew7IK>],&mF@j[f^`rv`,}.5yRM FUQxbN Jo5rv?m-=o+T+Htn' );
define( 'SECURE_AUTH_KEY',  '{GG/DDsko4CuH@jWa0p iOHk@PX%so^nXb)MH.%p.j3]#{v1[Yf0F1;Pmh9b1[LX' );
define( 'LOGGED_IN_KEY',    'DTr*CrkG=2R[mDu?.Y7aP$p6aqe;6Af/N*qwi& r4&LOWNa]m.9L66k$*CXE#(s9' );
define( 'NONCE_KEY',        'sAr4+ZmnmZ5TrR8#sT!jF(AA3o<*A(JDtC~Q=L_,{V7qLoA}4vA!8ioU+)]cL|j$' );
define( 'AUTH_SALT',        'uY!l-LI!cnZbI!qVWRhH-8%nRQ0@7%Qdg2O6qY.Hsz8)We];<5 qlm/:5+u2WrpJ' );
define( 'SECURE_AUTH_SALT', 'Wms>{cGaE8Ql&Cw;{<+t`Gy`oWH~Q*1Cq^2<JgkLQ|T?s 4[Wo/[~!QFL(iq G`i' );
define( 'LOGGED_IN_SALT',   '327c|Iw$uh^6gz~K[e4mn6[58/Kt-?q1#[(rVPthP@{]os6Ha-i|i<#^S<S<*##N' );
define( 'NONCE_SALT',       'ltTlEQW)g:jTqyQkRPn[[ug1[LY](=XOuL0,0chr|p62LQ8oZD4k9@fycIgYq^21' );

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
