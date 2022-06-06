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
define( 'DB_NAME', 'theedush_wp213' );

/** MySQL database username */
define( 'DB_USER', 'theedush_wp213' );

/** MySQL database password */
define( 'DB_PASSWORD', '7BSF4p!24[' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wywiyt30irpphg9nyevgemzn0tuloauzdh8owrynpimdpniwwtptroxihequdz8j' );
define( 'SECURE_AUTH_KEY',  's1stbbqtgwlo6nymllgmhzqchgiavoujn2dzj8yo2kkmytcudjpgqhgbddnwkhbv' );
define( 'LOGGED_IN_KEY',    'nh0bfvew9x6jpcqdtp1fxbk0gof1gmli90wolov0l4jrbjtntqtdhkxkjzekdu1y' );
define( 'NONCE_KEY',        'rcd3tnlqggr7c519vmw5booogesrmn47h8ri7vqevnumtteekpo4lm5wlck4rjyf' );
define( 'AUTH_SALT',        '02ha5fnz3ujyuubpplkekemre2nwkz0xchbapzfryphcyjw2dnol2ebeqklvrbcn' );
define( 'SECURE_AUTH_SALT', 'vfdcvg5gzulp34byio2xahe21ywlkxksp61f8qrbnj8f5fcecl8nro3f1llin2rh' );
define( 'LOGGED_IN_SALT',   'hpnnk3ptxymbi2iui9rnpixns0hv7qlz0jav3yhm6ul1t8n00nsy1gnjescud641' );
define( 'NONCE_SALT',       'xiyyrxk6zjvsp20mdcgdoxqxho4ujpeivqqogp6f8y1hk5xpiv4wk0n5gx4vnk1i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphu_';

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
