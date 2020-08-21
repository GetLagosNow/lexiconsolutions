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
define( 'DB_NAME', "local" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "root" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ima1bw0yxuegb72ngivqinti5d2yp8lmwii0eukpq3v4xccotswyz2cgbrgmaz6c' );
define( 'SECURE_AUTH_KEY',  'lhujgydmmmzvxl5qxbcfoofgle0alj53z7t4lxe62rhwvymdnslouxuxxxnofg3y' );
define( 'LOGGED_IN_KEY',    'royuomeykduccz7crcr4i0hts4pixtxfde40ksi8tbpvnoaxea75bwz63947y0ps' );
define( 'NONCE_KEY',        'swgizjdxx2g2ellofsudvdrn5e0cloouzk9hw6dzt3wjh6uv256ncqs3d0kgd1dh' );
define( 'AUTH_SALT',        'lqjkgptcorjexevrgjazjzre2igreafzin7dzspqigyinrkzki1z3tg3zaltos9v' );
define( 'SECURE_AUTH_SALT', 'dztfls3ikdemaalrf9v7siojsbmduznoxrhch7h7t6dkflzvtbzwq2xptwr2mkko' );
define( 'LOGGED_IN_SALT',   '4q42uwl4jykznjkjrtfoeict1ahbtdwqzqsgua0rbjfwyjjfmpfi6q7wpm0a0lrw' );
define( 'NONCE_SALT',       'vqq8t1fau00byuog8sn2lxlzezcobliwtnyjzxuxymbgfaamorwon3gqlbf3jthh' );

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
