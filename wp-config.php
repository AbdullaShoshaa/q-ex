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
define('DB_NAME', 'qexplore_WPFKV');

/** MySQL database username */
define('DB_USER', 'qexplore_WPFKV');

/** MySQL database password */
define('DB_PASSWORD', 'P7uVDpwLnLxnRS831');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '8eaf2ed995cc7d1196a4fb3df9c7aceba62663d8522a0a7fe73ebce2513640cc');
define('SECURE_AUTH_KEY', '2e986257f65fdb6f89b66f36d1183d0d3ea1433267c58591fee557132fb3d086');
define('LOGGED_IN_KEY', 'dd9d3c4ffd0ab07605eafb75ee0f2f326a21418e445272012b1b13d57c19e7be');
define('NONCE_KEY', 'd2fd37e0b4bc18ded14c6decc249ba6d504439d40e605bb7faa5a69e94473ce5');
define('AUTH_SALT', '39e72c124113732c83f4a97b7539b8c9d6d68aa8c72d26c209a8a245c31f5bd4');
define('SECURE_AUTH_SALT', '3814125d24c0a2b14f6e12ec1b0e91313f058848e41cc59e880f9dfffd9126b1');
define('LOGGED_IN_SALT', 'cf86f3e46281f1ff3290ef47e8a53d23a27835e60a822c0e24f2acff9ab606ea');
define('NONCE_SALT', 'daf04b708775daf1f6b3f802538cd88302288a729a50c8ad1acb4166b07ff4e9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_FKV_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


