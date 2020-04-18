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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'I$B+Q_MEp<}PU7Om6WPcN@|{78L(2L@i`mGM!xQarOJd9rTlG1[r=f8Rt8h Ip$+' );
define( 'SECURE_AUTH_KEY',  'ID1!7I!-Ubb9v<qcOxuy?}Y>v~{ccoopJ:nYhup<K2>YvRo15~psj_->4xd}5.=2' );
define( 'LOGGED_IN_KEY',    '~!f>)#$T5.[JtX3Q}&x>chewSNHY+%.rgUW@9b99na&S:q+,r(1;tx>}p@(CzD5e' );
define( 'NONCE_KEY',        ')0Z3HGB6u[bh3LER^x.c>7ZHq2hy|4n%5XMQ5XR[!+u-$$2sK-oe2{=<fSK?@lqY' );
define( 'AUTH_SALT',        '}3IEnE4B$tsHG<s(adQbE~|5hB2/R}J&(nXF&pp;u==@?<M9D& lAYst*>.d@cvh' );
define( 'SECURE_AUTH_SALT', '|UP &lL%y(V>DA/5XRP~pqtp>f633Ib[;qN(Vc#>5p35Ut-CZMsqy)84DFAj*9Oy' );
define( 'LOGGED_IN_SALT',   'Hyz=X{usd&y`P< !<9(-q5X`oY`)ten4]&%_^dTQ[.(+`Fski3#o=.t?+IO;gUI(' );
define( 'NONCE_SALT',       'sckOO~GcQ9.m,AT#X<k]TSLmfbDr8JD7sKw5|DCkPrE;{0coy{-WG^7,F?;Jp 7D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
