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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EFAE82SguAxpbQGbl8i1ltNb6NJU6UXylQN9O2Dzs4Nz8Taxcx5vLIFrFOWWwtJ55TCAuWjvDUQHLuntDlHzDw==');
define('SECURE_AUTH_KEY',  'KQfYqvBQev6lgDGFWCUG9Vdx5vkvgRCiFgP31SUlcIfBezi30JHrnLqNQcpcBbEaBNmKPRdrnhHOFGSjwwMfPQ==');
define('LOGGED_IN_KEY',    'dWWivkd54PCbMhfAuyEg8147X/D1uMe9xhrTLQrI1InZ4zEXOWHIwYt0G7XWoKC+ZmPcZPnSVG18z16qtqCpkw==');
define('NONCE_KEY',        'q6v4ZKZf/iiiFtAUsEKhR4Fg7gk7pysi4CYUGGSYFzNy5d/7zOOCNUf9JLScXoQLCQZS7tiUS/7/x+6d53pHEw==');
define('AUTH_SALT',        'pj7rOH0pH7LCO6YOLOkHF+1jwotU/MDpegVY/HU4rkT36mVh2xUjq+kGY3ntqmH6DHYBQAvTmZt+vTVFBEeFIw==');
define('SECURE_AUTH_SALT', 'ujA1PSUY+bT/hVy0r7mDvXtE3jwwW+l5cusZlfyA5V1m1EaRQy4iICqwwpEuNZSD6K/Rh18SrhvA5f1GEFdkDQ==');
define('LOGGED_IN_SALT',   'aa/Fosvr+KKEZCfC89M/YIvZtteKnbuexrdeNLK+iqlHv53s/QFh6gz4JOOayhxO1RtVIpRW4gi1mjY3Cii/Cw==');
define('NONCE_SALT',       'WTgQw7WeKhLJnUhehLv5kNfZgD/qdF0vi1NIOQtJkXPT64oS5XriKbGc8Yg2KE9YvTVRJSGAdUq/8BIop7qGDw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
