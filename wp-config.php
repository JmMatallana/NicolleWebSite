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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Drogueria-Interrebajas-Web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'hx0MsrtMN72Zvf2TPtp0JJJ44NzsFqkS0bSkTmcLHw4kjgzXjEQKv7ilDPi931a7' );
define( 'SECURE_AUTH_KEY',  'a6sW66Y1tR2UJcujsFvWDPvgZhnXve186e8W4uHgMNOoV6I3GV9cpKljmmKb8hlq' );
define( 'LOGGED_IN_KEY',    '7UaVnEkIugQn7nJo8frhZP3VJw1whLYTef4zXve2N1pKBcHpYSkV593htvZKW9xh' );
define( 'NONCE_KEY',        'dIVk38KGOC3p5RmdthIQe66JuAjxMvX1Qachf0UuOm8xNTWvUWpubHSo4fX4Rk4U' );
define( 'AUTH_SALT',        'oanSvSQ5gh1DBNsiJ859K6kezVaJcFgyh5L3jFZdQqTtO8WPHGM2816c8Q0WaYlM' );
define( 'SECURE_AUTH_SALT', 'XAUfLo5YlOG1mlmRpP6R3zD2FUpS3fBPGMLY9smnUMUfPwsBKCXf1Ezg9DNiHigc' );
define( 'LOGGED_IN_SALT',   'TXyuNGpp5e6xmw5UtqJ36yZ6Kw1XkgVN3kc7Gx51ZqaTQ8tO4LTaPDiA7CR0thP0' );
define( 'NONCE_SALT',       'asXud62aoRNBQ7lPvvtgK9PyGEcpBvBJWdTVBVTW71aOs79kFeYjGDCNLmKGNeE2' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
