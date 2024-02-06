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
define( 'DB_NAME', 'onecare' );

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
define( 'AUTH_KEY',         'M2aDVgnq0jL1AQ7tboy0t34kCnUsjqKtQfyo9CEpB7zbq8uR70q6RYwjRz4KDfWX' );
define( 'SECURE_AUTH_KEY',  'pb6YzceiQNLQq3k57gHPLlWIvVAHZbhTpKzjSWJChmOh2sqOXKLJAHSKmtq4o4cK' );
define( 'LOGGED_IN_KEY',    'M0mvhfmLp35RrteH1QIIcGhSI13LwP9jsPrANG61QkdwWbkYilamRUH2262KIX1o' );
define( 'NONCE_KEY',        'jgkoYxHgeylQi1hs0tvsloyjLMoJkujlzllrG9pZr6eDXKCJkdOnGVY4VRHostKb' );
define( 'AUTH_SALT',        'YIEygqqCgHbdfphI7IuF7Cbau6R1XXahkN3makvs3gj2DmpY7s4i0pZvOmRcWR2t' );
define( 'SECURE_AUTH_SALT', 'KtmZ0SvNwtAXhGcsRAHnqjasRWsBneG8KbylehnoESuGY3HGD8T7gkLnFAvabaRi' );
define( 'LOGGED_IN_SALT',   'K3rVPSvs0QKTHuLALjMEM9hJqLwgZVS24YvW4OBcgZjme58fJIgfLNlJfQuFdwov' );
define( 'NONCE_SALT',       'hHl5hSPHGmAWe2ijkXheDOozOTRKi5pgn2UjCj73WaZKA7rPLKFsLqE7Zs1BV0uo' );

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
