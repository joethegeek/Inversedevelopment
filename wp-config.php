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
define( 'DB_NAME', 'inverse_Dev' );

/** Database username */
define( 'DB_USER', 'Root' );

/** Database password */
define( 'DB_PASSWORD', 'root@Inverse' );

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
define( 'AUTH_KEY',         '~?Y>j*,aws5r8T9E)40u|l+v;`WQ&{sS_~!oD@:dHnZ|gNLDGd3[q;;5/g=4WJUp' );
define( 'SECURE_AUTH_KEY',  'Yu68tc[Gs$}*v^fYW(fxZP^a17-)Hrjveh}GJs*u^>jdAEx%G(,OE<^TdbIyTzT2' );
define( 'LOGGED_IN_KEY',    '<_#Y>Rq#0?81q3aeEn?.o`h7w}=V1EJL_zi9;h-Rt<R Z7B=62W(9EL m;5U$J5/' );
define( 'NONCE_KEY',        '&p.c3uh>7+ zhZU)HfX:xH9IWP+l<u`57ZIfxxJJ7v{%`.Pa/nArVv$#zj,FXdPb' );
define( 'AUTH_SALT',        'iLb?i.Z@QFNbrJ,y-Ko~=X,aMn=f@0#6l8X9PL/7La!7k;p3?l[ +3;#<$=]eMbN' );
define( 'SECURE_AUTH_SALT', '=Q%}kXli3nMsp~UEsBdvb:z3;:5i@D/{({vT%n4L|GldlcO5{bGi#~<p{zuU@EC;' );
define( 'LOGGED_IN_SALT',   'yeAX36@1nM=_No%aD=jhJ`zCRB8zMx~&vAP+QoHEQtj9e%j#Rn&TN$;O4FrG9}h&' );
define( 'NONCE_SALT',       'z{_:B6Qc~AL5TR6M JM$ZogM)Hl`p7?/VdAB2,#n;?l5pRK_Bn2H~I.0rX;+?x!D' );

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
