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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\laragon\www\ondemand\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'ondemand' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZnuS0I1TVSxfHCVSgPApZKtNZgkglpK5Khq9hXqFY7c5tD258dMKOKvO21Snt7F4' );
define( 'SECURE_AUTH_KEY',  'nZx09T5yC8yrF5fqqtINuZk9erIVpwF6rXRXaSkDMmC0pN3JtnrZCMq6g8WVFoz2' );
define( 'LOGGED_IN_KEY',    'xNcWkweJVMOteZVAqgYBW74tiGDwicU3ffRahdRLz9nfqBVygAzU2gxTLdFX5DLA' );
define( 'NONCE_KEY',        'sY8akZEeObVJE0JLONNrfe5X2PjuygObJFefd4RVl3YL7hNqxZv20Q9RjQqEZ6S8' );
define( 'AUTH_SALT',        'YVxJUK6JI4vkHtYOM40jjXgIVyPsqbo76ht8GJwnaJs9IvjzExKaAjOyxHYnWhjB' );
define( 'SECURE_AUTH_SALT', 'eddJikNxbFX9z3lQ954ddGLCuc7OFtDe836SZTDRYzMWYBPKfiPwJTZpM6yLpGF3' );
define( 'LOGGED_IN_SALT',   'IkhetroP3T99Q0mgDVQI0xnweNPc6cyr3b8f4D7cMUKJ04tMpZqbgZYKKvuHG0JT' );
define( 'NONCE_SALT',       'xz8v2FgrtkEFBEWx7gJhG1sQNT0Xv9OBwFoitHHRDbsOVVK8T3a6P7xZpGdjuz3E' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
