<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'airapps_db' );

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
define( 'AUTH_KEY',         'GE{[Qr=N3Qb^bz~jKtXDq$f,.1pzwpUyx~!6:=d8RyjU=*-2P@f)v:x?3Xy-FhjE' );
define( 'SECURE_AUTH_KEY',  'T!3^I?{:_f0Venu)nIRzJ5/G|jT}s{R,WiuuO/<[jSY&TJc[$Vrx:qg#zt;JXT7|' );
define( 'LOGGED_IN_KEY',    'ABzpEB]T,ci]]pphA1Dv5cIlj6tUuJZ9CaKYF:q8qN<4!+`)NTd3ii+s5*N~618G' );
define( 'NONCE_KEY',        'R+~It^rW4Blp+t6o:w)A{=?iHY##RHxDm-+r]OTv8eOC|cG#l3B$t0^K=lQJi+aW' );
define( 'AUTH_SALT',        '%?2#^sa=u)}&1lI}i|}Nm$j}^nZ}jlY7%XCQ^8=V=YcOj91ZH3lj6%Z5Zc=5Max[' );
define( 'SECURE_AUTH_SALT', 'jKYGX!ptS2dd I=@F0/dkUS<Xh/dJq>LZ|gM@zq38AB.quqIjf=K,7y.B?Ctq-a4' );
define( 'LOGGED_IN_SALT',   'ssQH* bw~>ySU;%eFp_Jbo( c$3`VY#WCbmCbF0^79+T4.7_z4K$6^j|E6=tH(Zd' );
define( 'NONCE_SALT',       'eX7[SQ]?t$#5&%>>ba*#xmDB~8(Q*+}#I;Wyv$go`QR)3_ojq.I<@<6] Kiwt]Fo' );

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
