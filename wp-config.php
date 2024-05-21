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
define( 'DB_NAME', 'wp_lee' );

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
define( 'AUTH_KEY',         ';2S1g2GKiof}T:S2Y$bx C>JjVji#a:zZy-!R*pW&Fe28C-S,DQf_Z^O/C%xJ/xE' );
define( 'SECURE_AUTH_KEY',  '>Qp}!ZtW;lFQSWk_F.W+PF(+a^rtf*b@9b[6?CmaE.xIx#g#7@tnSw|D/Zw^typ<' );
define( 'LOGGED_IN_KEY',    '$Km0R`Eb)s+(qIYK49UfF~R&g=KL7*p)Vz^`!ksI d-(Co}u1YbsXKKfJl(o<y>B' );
define( 'NONCE_KEY',        '~Y$F72vtp5nlqIK?=T9OJ8=<r11vm?ZrH]AL|ac^u}rtfk?YuhFQ~ngO4(>ImXj6' );
define( 'AUTH_SALT',        '_F0v~Y4nQ*<)SMo(u,A; YA[<[Vi/oZ&/,8%5u3{XX2mE)_3COG8yHy+E[_ejUu#' );
define( 'SECURE_AUTH_SALT', '$nqk<(v)9TqQmNQk-b;XUf4#|k;`c#f#,gtSOGMB+W1LPdh-ffKw/#W;[TR^Sl>4' );
define( 'LOGGED_IN_SALT',   'dPvV^f*gwyll1GCJ23Eo_dvhYgxPy<x,ecpw`$l:&$^,j=AOo/.!^Q-_:ujUZ?j&' );
define( 'NONCE_SALT',       '{UO[YyKyiuHP=biw~%um71/]yFpOIi<7)U>7=U6@)[|:4g=$!l8!oT0;&{3Twaw!' );

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
