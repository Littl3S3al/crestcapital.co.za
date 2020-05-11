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
define('DB_NAME', 'thetwoi9_WP06D');

/** MySQL database username */
define('DB_USER', 'thetwoi9_WP06D');

/** MySQL database password */
define('DB_PASSWORD', 'W0ZS-:h<I%<$t%EV^');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '0616a9a5d7546b4d90cc8c0ae25436afaaba28b9573127260b8274dc4c1cec33');
define('SECURE_AUTH_KEY', '0eec068a161adcaeaea13d465e87210df13893159155e823c748f0e0ab5c094b');
define('LOGGED_IN_KEY', 'c5d705b611c1c2394e84a904e8da7734900cb64ab795956625eaf3623d4b07ff');
define('NONCE_KEY', 'a5ddfb84ab37f791da0429a9ad05a72b3e9bdf33e683ff0d69b3fe6d0231b3e6');
define('AUTH_SALT', 'af827e77f0a0caf348db7d11427a309b869baba27da4976b13e1a6af6756e8fb');
define('SECURE_AUTH_SALT', '36546ee52f913a57e757ec03af6ea53f1478bce6308ba4b0e0036b3c274d643f');
define('LOGGED_IN_SALT', '77f477b7e713e2f30c032bda973bce4458ff6d8c058088ca10b12afdf515bb47');
define('NONCE_SALT', '6d8b571641b9454a7b819f09cbafec3ff756d436482001ee6704f04517f1952d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ijc_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
