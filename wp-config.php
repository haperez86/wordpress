<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'bd_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}Oy5 Q{kdfvnM)(%H^/I}Ik%j<e8[2~`B?`+ar( !t#ia]3G(@TYE6NEy6M&K}tq' );
define( 'SECURE_AUTH_KEY',  'd<G1Gz<$tR~N)~KsT{Dj(#wT>+ge+V.A%;5`]1G${OidKN+=)q(/8,O[Uk#Obb8f' );
define( 'LOGGED_IN_KEY',    '*s{.o:LtR$THhTzaeOtApfp`|!C+>jBR_@ KQ=>&4p[(&$AYG3d*_FuX_~x/x`7/' );
define( 'NONCE_KEY',        '6WFti:0ko)fFVV`#j?[Wqg2{b(420(+I<:3Tb -9dJ%b#XYR-Edi|pM#n DYrX}.' );
define( 'AUTH_SALT',        'Q@Y?T#^w<B UZJS3_[B36D%OQ0+[11PaSgrd&Vzs6Ijt4Ps,Us]g5_#,#hjn: h}' );
define( 'SECURE_AUTH_SALT', 'ZefC<)Zs<:CJL/s=4no@WhYY$B)`QRFpY6))$ }mBkCky)iG<%PW[<9A vKQvw]>' );
define( 'LOGGED_IN_SALT',   '#N2D<6k*u7>t]auWlXo,r[rpP_#Rt~Ju>@2nhZ{G(`%n{*f,Pj6V}max}/< kfH1' );
define( 'NONCE_SALT',       '@48sbFgC+>l%x_fZ+43#viX7mpLR^,2r0My>i^.s/-g5?>~CG3Y,hn/e&(kS+(>`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
