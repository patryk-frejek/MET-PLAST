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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'srv43024_wp1' );

/** Database username */
define( 'DB_USER', 'srv43024_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'N)D3vSuzn6JIwbrnBU,01^&6' );

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
define('AUTH_KEY',         'XzWzSe5HM92505A4FCgKErONeSPo6kgr2uOlBZ7WtADrY22gM3WagzUimkMeKaph');
define('SECURE_AUTH_KEY',  '3UdUdUD2KsAeSrxcjFVtF3d6P05OGvID5jnCWTUiNIL6bmRnlLG9O20C8VDlgr9O');
define('LOGGED_IN_KEY',    'Ik5rqBCEFXi2s2pIbfrjlShIIxk26gKqRhqyvPQh3DLuZkL6VeYqKzp8cOqRpOt9');
define('NONCE_KEY',        'e9LtY0ACqkByqnCL5hOA4LlI9sPER3QcqRL9knjlfvgmPidIKdIGNTfe88vwAVt5');
define('AUTH_SALT',        'AJdiEbaF3XFfDlVLavWw8SwKhzQ1qdTnu6Mcso3DhYs63tqX313S0oJUa6lPfReU');
define('SECURE_AUTH_SALT', 'qdkbLYYLf6RMIpfWun0ESKbJ2zKyOd5S1w65atEpHdURUbO1lLTamLqpCVuI2WfD');
define('LOGGED_IN_SALT',   'FuITI89uet7vpe4U9AJSoVo5NmPfwEA8FGlx2gSbUF6YcQ8sbQy0OjwrcKrqAfsN');
define('NONCE_SALT',       'UPBiChX60vhdDdDGnhHWVOwm8HvfY83X7sHA1jV5OHdx3UHLISWj1i8TUV0DEH6m');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
