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
define( 'DB_NAME', 'watch' );

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
define( 'AUTH_KEY',         'if:e|j~5>Ct)spv(zyDMqZ*EbG;[wK,cPNb!2+FFb53]r%pk%SF:`a]XXJqJq!f<' );
define( 'SECURE_AUTH_KEY',  'Er6bs;lrDx-/, ZB2]uc1q@x&cN7TvS@6%K_1NCmJdTX&~MBSc}+~AR$_GQy9d> ' );
define( 'LOGGED_IN_KEY',    'fb.2Ir9}e/gI%AHw)@hMJA?@c!h0Ls3w*d)1q4eiSv:hI](O r#,<?no{lRTkHiv' );
define( 'NONCE_KEY',        'oF/_ R/i&|8_2)xlQ+3u5C%<iDtQEL@Y4kspvrJk 8Q3T)+mF=x<ixu(4>]3N T{' );
define( 'AUTH_SALT',        ')V}rNIpLPPiD_zw&YA2U:}qZ_0O#8`Kp^f!F%jT1?hj8=$aFR4y5T% 3-m{TAz9[' );
define( 'SECURE_AUTH_SALT', 'C-3jAYMvUR1WgT=ZR2dZ:lYH[_ZA7mOEY<AK]%Z#0&&](gQm]^?Uxz?i1[5{`gFH' );
define( 'LOGGED_IN_SALT',   'uS}e.X9y|~pT|Df3by~}LQGB23X4WxCv_ k!Jq@=v_<vsbWxv&`eEo,ow!+wX^^b' );
define( 'NONCE_SALT',       'L&R7u|su@sxZLat<<Moxp:(6,5Dc[XNav?ARI;WtVA5*zl#L+SwF?.U!k_RUwX*4' );

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
