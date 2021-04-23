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
define('AUTH_KEY',         '7vIoMmGmFU5FfRByssal8SehWSd/9VPLqDJX4eevhPHouyPN0sbSiarBpo/ve+yNFS3EtUnMOsLNEZTp/tKuew==');
define('SECURE_AUTH_KEY',  'oIBYO9PQCwxqKXLJXEooTOZaAzxZ7TjuYPBgU3skCNy3iYMyXETsgrXNwCNzGdbbPzxlHUevbhvrnDSFLc/KEQ==');
define('LOGGED_IN_KEY',    'tLTWccBiGBXDX++PR9Gp8VOHk8Qr3pJcH1dU1xFfcikguRNbg4xKfSS3gAAhgYQM1ohxZaZUj4RlN0gdnfU91g==');
define('NONCE_KEY',        'RRGKZk/q6qvtxikzfdXZUP4Bv661tqWMbDK/da3NcZDRzLBAMRdVnVU1gqB4QIan53f2RwzlnIf6h/CrGHVLgQ==');
define('AUTH_SALT',        '8MleXARLO8cJ00TBKagUb00zanuElNgp7u3Ru0JcbH8+rWO6iwFtf1DVTThNO/cgqSvSk4PioZWyP2UuSRWnhw==');
define('SECURE_AUTH_SALT', '/UOq1xTeibYLgufZ3tfYoiEbQDHx4VS6mSXT3/KFdD4nn3W8Mh4jqjvE0IYhQImpmu6aC177aJ55gZ3OSQFV8A==');
define('LOGGED_IN_SALT',   'EZVXkvxU8FGlo0j0CnCXW3cI/91JFD1poemJsAW116Wkg3mo32M7t61oHiSrFTSjhkaKYZYv7UziNy4huXD4Gw==');
define('NONCE_SALT',       '9WGm1uJoDvebUkVNoOavV7gpoVxFAL7xJG1HTzHVqyS4VeNP8QUaVN5mDDun+4Sd/pqQ0NbNz42g2zgyPE4cLw==');

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
