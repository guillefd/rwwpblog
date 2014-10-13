<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rwwpblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'v8jepypa6jzodo11iqrngdhyvtbfz91h5vnblj8wzxlhjkqbfrachf0pcsdyixzy');
define('SECURE_AUTH_KEY',  'bdbwtkkgp1yzwqlfvsqew7nuhzvuxqmcr8isz4yomhupwintzyf6q60h7zpcxlm9');
define('LOGGED_IN_KEY',    'thj0ja3gldsu0ab1epzvy1zy1xahthhb6kpqghqdpbnkantacdnqeawlshqbh4ds');
define('NONCE_KEY',        'mvnohdaok4hv1ngkpvfr8s2zfxjkl9zi7ncl4xzrefabhbdjqhbaxvfdmv2lnvun');
define('AUTH_SALT',        'icsoldeo0bzuspehhytsuqg23ofzot5mhl4dd8ztlspatebvu0k5q7hi83td0fyo');
define('SECURE_AUTH_SALT', '2lekjuoqvrfwbnga1mtgyx55ym34urtdpwowr9p7fqbeljmq8nwd9vbmn8dxukhi');
define('LOGGED_IN_SALT',   'hqb8upksfmmhpvcaglfwjjbe2ysm92ksohjeb50qammpypegqbwstuubksvqnfpb');
define('NONCE_SALT',       '4wifvkqwo08gt8hghyemuhndijzts4rtx9icoqclw3b8fuyrug361gtnvtxbrtna');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
