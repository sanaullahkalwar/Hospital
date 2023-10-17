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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'NsGqVqilbgZJCaX2o+6pjVjREemrr/CTJbkJ7gD51xV2wLMAnbu5s1vGA443CS60SejzzMTL677ESjk1uIzgpw==');
define('SECURE_AUTH_KEY',  '285LGo26r4O5BRH6n1sOO57wiJaO4hflbzmFw4jUQjLUZCgwrYt/06hUvmyWkCQ/uutD3z/lw2tgHPeLS1PDgA==');
define('LOGGED_IN_KEY',    'JCwBh/ufJ27nwh2BDuWMN37yU/vST1dcUvEI01QVRIY+L2vBSOK/H1yoqpjtYkE7lSTcvrlyBI+2XflBoJDh+w==');
define('NONCE_KEY',        'ZjXHFF+UqegK2JMcLwrnWbEh6R3EA3oXa8ejomBBBIVg1hLxccRJbpZVdSg3ChuxD2u4H9Uquffb5dee2SDhfw==');
define('AUTH_SALT',        'JDtyfnv0404Fpw0i/l437FssxiF56IhfkdrX0YFz0Kcoomngb4XsFyg7+yIzkQUn9sfMHwPaI9NWnUzRytBPkw==');
define('SECURE_AUTH_SALT', 'B4y+06VRcqbuaUbdPFx2PZWV2+Vr5oFC9tcZJWkZZuW5N+eDiz4FL4QHCKvoYpmaY6pN6ztlEJzxUmijZQqMBQ==');
define('LOGGED_IN_SALT',   '7hmfj9efEGT3KGjaeXyTtLHSsCA3SgLm4sI/ZU44cN2xnDmV2CKtFHBHqEeMzsE708foBGA6bRg2OLgcOg2L+g==');
define('NONCE_SALT',       'WuYxGmTpIJQZZcZOwtznqABeIPY9eYF3fjiw9VVqtXP5r37gUjHk/h1Oy8PwGQvGebum5/trFKeUiZZ6vEnbOA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
