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
define( 'DB_NAME', 'escape-room-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'stacey' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'l^,3Bq!>G 3|>_q?>;1P9lzb3~+^2wVMoHi9~RU//h/YPr#=oo>]8>#M1TDrg&%M' );
define( 'SECURE_AUTH_KEY',  '}D}Nubu-%(=D^Bn+4uFt^>7TF5;wMfZmcqF85Fk(V<uUWz7,Q{f,stxX$f5effmy' );
define( 'LOGGED_IN_KEY',    'W@W77X15+)d~_C7D1[:JqZ3xZ[g3KbKgn|t*-.Y_G6QMUt,<D$>}TnDjTGp}`oy^' );
define( 'NONCE_KEY',        '5^Orbp^ET{|>s)[7Qy+@nT?]MfYngK1S0D([h ;X&{aDV.q1N.hVt9wIjy1et<2H' );
define( 'AUTH_SALT',        'OV:FO:bk{,$5a!vd8jFy-i1;U+k}{GIWUv*!jy}EB`.GsL#~,ykBJ.Wd75.dR}cM' );
define( 'SECURE_AUTH_SALT', 'v]G0Whzec{)yukN+WRZ)DSvfzwXsFGlq_R=)kF>(b{Q7((1*]$uCM.61~B:jo0[M' );
define( 'LOGGED_IN_SALT',   'RF5~+3gGgZ.1Ssog9s|(z=7RkahhV.q+3U EK,~/B,&]wk~~gd_9h{`_b)Hpc~1J' );
define( 'NONCE_SALT',       ')b!aA0qvM_HtIX2ch6AG[fE25ygUW{R4:KD7PMo:)KG.}L7FK8}+hs<%!Ov[D$0~' );

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
