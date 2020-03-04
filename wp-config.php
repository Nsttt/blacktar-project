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
define( 'WPCACHEHOME', '/home/pfzzeizd/public_html/wp8/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'pfzzeizd_appweb8' );

/** MySQL database username */
define( 'DB_USER', 'pfzzeizd_appweb8' );

/** MySQL database password */
define( 'DB_PASSWORD', '3@pnS.32Q0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fdkafybsxzfrzq2jltkumfoiwfpklbyuahfmy9kamjmzfvyadqkv0xwqouzcmov7' );
define( 'SECURE_AUTH_KEY',  'ictpxpb5wbv9imsirzt9aiguiziymfrw6egkfhhzsnrn78iowpvce4f9syihmxpt' );
define( 'LOGGED_IN_KEY',    'jwmmj9oeihrjjrnlmxqpu9ixtgquk06yusdzgx6l0kcaitbe3ioia49ejiyz8qol' );
define( 'NONCE_KEY',        'dondq6ev211ltw55oa3m4nwo02nvgycs5m95ial4i03ven8u1vil5xoeevnonhbj' );
define( 'AUTH_SALT',        'b0omcmhfjq37sy1zpnwmpojj03m3bqzwud9qstyuvijhoava6zp5zwuvtjbca9ov' );
define( 'SECURE_AUTH_SALT', 'ahnk0efcxetom6eq3blxwyfg9rcwzbjgweescrijxrjdxxg2wiebqpvn7kxqfand' );
define( 'LOGGED_IN_SALT',   '0wyfi8e3v2wii3pthtvzvufg85vg0112hogvs2iabnalgw7w7ofj8crtwkmw9hxk' );
define( 'NONCE_SALT',       'ygre1sasnakupq34ljwxbzlhcika8tpzyx1oxrjgu2xjbwlmgcybvbszrjaxvdcw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxq_';

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
