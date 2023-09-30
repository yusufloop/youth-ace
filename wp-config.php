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
define( 'DB_NAME', 'youth-ace' );

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
define( 'AUTH_KEY',         'Ec.fbu$~y79`?txC<H8Dq^>a:{{k9W82X9h1=QiBGGjZxaWn{VXQflbTM7iwYx3,' );
define( 'SECURE_AUTH_KEY',  'LPY3>(;VH[SK#+GZ:X/QdC|4:&{KZmb;~rQZX!k7%s;jjGn8Q*]QD([GS4je{*E?' );
define( 'LOGGED_IN_KEY',    '+-ipbujr}k`W8GL<&Y`o<VByiLr5Fu^[>I1aDvmH-zKm*Foi;S+fq$Ei j nS#4m' );
define( 'NONCE_KEY',        'Q+Q*6-KR+6afs96f`!^^R KP=a6z}mw>W%; X9nIh(4i*w9w:yt%NbD0Oa!d8JH ' );
define( 'AUTH_SALT',        '>08NHjd_uz/dEg#>yz?/XrXKt F,Ki5Qh8nG@{9@VPRo2wrX!b}L 7CYzYUcTmkn' );
define( 'SECURE_AUTH_SALT', 'X/Yjh+#kCezl;a<k8vy!318B,/4[^CN$G/skovD yF5>1t:q siXeS@u.7;!=/$9' );
define( 'LOGGED_IN_SALT',   '?,/7|(U[kU1YjMR.zhX}K~;j1y#-;2F3CLd/F~]ZT5J?|C0f(x7*61<#:AY6<TkS' );
define( 'NONCE_SALT',       '9a&5#K]DWPM|7>d:WWr:5gxWg%~yt{}w#Q_5k3vi1i}m;|coJoQkoCjzU/?Ma~*9' );

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
