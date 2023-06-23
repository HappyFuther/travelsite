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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l*67YdS`J&hltSwwvd/E{=4B*r>12:A%AAqQZRyIBQ^vn+TfZ0kswfP(#+hoqRuS' );
define( 'SECURE_AUTH_KEY',  '=Gx*h=:g[d2z/n`;^0SBd).m[_t|:<UJ%,WM:RFhj4$wRA!{x:TJ<8izDTA}R3o4' );
define( 'LOGGED_IN_KEY',    'xYwy3>9e(@S^Le?41[s=uBRkb3?|Ggt[vrtjsBksU}Q%H{)MObDG|z5w8QOZ`*/<' );
define( 'NONCE_KEY',        '%BzSN6#I, HC`!.A1Vv_(&ZN!/.F~4-1_DB_JW/{%BekCxOuubn;xGmlzK+Pv28x' );
define( 'AUTH_SALT',        '!x6x);`KTmh<fEIzZ.#WSM)9:K!o>>KPpHx-+YU7-(h[U]-o7.[5CKwsj4C;0guB' );
define( 'SECURE_AUTH_SALT', 'K}&[9FS[,mG4U qRZDMak6Cp+-Wbg_v]3AxY0>>E=bcd`Un=ZL=d]P@@i 82&pJc' );
define( 'LOGGED_IN_SALT',   'R;d)_3^fg.WN}s(?L-%1-e)n`G|EtIWoS*N02_%_!]ppEQ#YDG;L*(~rATzrv$:.' );
define( 'NONCE_SALT',       'w>9E,sQq6mVF6@jtlxB+c>MHLwdMq8#Y,T5AhZol+3W/`~t{++zxSR`b(eMr1bPG' );

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
