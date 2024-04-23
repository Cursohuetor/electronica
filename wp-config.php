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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'electrica' );

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
define( 'AUTH_KEY',         'XrsFB_3=-Y/Qc`BVD_~ )*fBoh]{g70Xk<By*8OQp#;~}QAU]YLY*k};_6d0*}GZ' );
define( 'SECURE_AUTH_KEY',  'fd,v*e?O`m5Uge{L-]}K99f+z2aZtMP6ZYf2:j,nLV_m&1WbEC:kStas;,xBZn!7' );
define( 'LOGGED_IN_KEY',    '1J>^Z{6!%Gmi87EI~$oo9?:%G>+!f]v2~%c,Z1XHq0]w;%hzYMI[2OqcdLT65[|T' );
define( 'NONCE_KEY',        'S@QT=*|;DV*3-o]5%fmjLvWW#Nxs<Vf`e>0[UHoB{;Jh/ai97_nci sWoI-{WF77' );
define( 'AUTH_SALT',        '[!z]4^jD{.vql;Z93uvR~4lp.pbV>g:Y[k:sKYl(BOx7>#D(+@pIG8bTg$@IT>J6' );
define( 'SECURE_AUTH_SALT', '&5+r|heC]wumoIn40y%[hoV{ZQ`Ve%y#7zG4?~q@y74^/Cx}:T-8b2^cknmbdl-{' );
define( 'LOGGED_IN_SALT',   '%&H<RS{76m#pd!2icm{bs3pIe-x?p5`ozMqC!zqC7&,A[~7=B>F4C^}.lrdD 6lZ' );
define( 'NONCE_SALT',       '#.:{?@RHU}v.3ep!-N*U,,&.[XctOHmm.[J75lLLV6AW7b|gHI_a~;8QQgY46AF_' );

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
