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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'GFf-%$vWV)}:|%tQ2se* Q<<yOqQ&<rS`B$yiY996*R*4;u88h%|+!WgcF25Sr}L' );
define( 'SECURE_AUTH_KEY',   'QgkWR8%I.P$xWPT@T3`US4;P0tv2IY9Z?@b~QP6WTO)SuI.k5t?_-wi@&Njzv1MY' );
define( 'LOGGED_IN_KEY',     'T~|~3el7z$`ix_G7:<]L8R>yTQ^^mM[Y9JD@tDdL`ek&UZ`qv9jQC=eib~q8gvG>' );
define( 'NONCE_KEY',         '!H.E[(&oF|}d:KRW{vh8wV==n`>J7(K~!Z5w{rvzSGfraG|O(vqa.km`@HO+:_r<' );
define( 'AUTH_SALT',         '|7zDqc{UIS/uJ}R.i2j(B)%s|Xm?$Hf 1FYH1/,8GX!.%AA!R+17#SBO$,<9DGPv' );
define( 'SECURE_AUTH_SALT',  '+^K%dssy$sEP-Nu0H1wR |%}%XN<@x<`EWpioq)=Lq*;M7|z:s/=8H$1fy0?{vno' );
define( 'LOGGED_IN_SALT',    'WsS*FYI1f!@yn/~&J<>c0N@YFOGev@VAaF#lEMn!v<nC6h,3%fB5z/yeOu+|o) 2' );
define( 'NONCE_SALT',        '`C/1L5MV+2BhAvmj1nNC.}9h&*s(#jxyD&!d76V5?@aR^B(5y3L6-$sh=Vhs6G81' );
define( 'WP_CACHE_KEY_SALT', 'W|OMF[pU4lHNYV_.qkc< f9y3-8=tS$42M1<i9|c[_<$Z-Cn6qcPIWl$hy?AWxZ!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
