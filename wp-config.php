<?php

define('WP_CACHE', true);

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
define( 'DB_NAME', 'websit19_wp507' );

/** Database username */
define( 'DB_USER', 'websit19_wp507' );

/** Database password */
define( 'DB_PASSWORD', 'pS4]7KWl2[' );

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
define( 'AUTH_KEY',         'fohd5svekwcephyaszfhbx2cql8zusaxgrljfhp8jtkcled9eqlkgpksiurxmbtp' );
define( 'SECURE_AUTH_KEY',  'fmv9972leqrnpymcyv63gnmyxktwye7yam8skzs3xsveyczms1ltd2son5vgdbis' );
define( 'LOGGED_IN_KEY',    'hlt0trf4fsaaixuwlwcotocirwecnvxkudmknfufhpcq8ydtj0y1wl9ehiomaxli' );
define( 'NONCE_KEY',        'plx3mdp00t0d6uw5mxajym9ozzek8o9zyngos0fcj49wft1kuwwpzvjactlj5dae' );
define( 'AUTH_SALT',        'g9osldawnndjf9ngeduizeaaryd5axkkxhik9w5pgunenvacszzjjxwzkzc1gpql' );
define( 'SECURE_AUTH_SALT', 'qvgzbdlatvxjn2hk5es836ufn136w7grvcbwls7figacgb7ez5rxhfw20ycshvgy' );
define( 'LOGGED_IN_SALT',   'vps3kcfmqfbujnfuqk4p8kflzgjutescm8uxa48rfgcmbokclsgmxbnkxoboyuhi' );
define( 'NONCE_SALT',       'zmts42hpjx8pixjbr620uncfvk2qki6zehgrslznzwpafovaloy0o6jz7nmfgux0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwv_';

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
