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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'q:X8~nhK=O[cltkk#3aeMlEcOO2bX/lEqgjrv/WKe=J$vz~WA[t2A6V{+=`f{J^^' );
define( 'SECURE_AUTH_KEY',  'xo-5>DonLpJx2uggo|tdZ#C61h3kraCV9I+>@Xk.C<Bph[d5J&PJE#~r^/5$/w?,' );
define( 'LOGGED_IN_KEY',    '>xoG-=;7<UU]>9{DV2R,0s,+^VeUz^a;4^)qyY.~0I.GE8:/ `@f</[w1.n7u=@t' );
define( 'NONCE_KEY',        '/Eo@+I}R$!s{Lw<c(f }zy}R40f5Pvg$$i6TsoI!Wxc+~]v:w pe7v_pSmr7/;[&' );
define( 'AUTH_SALT',        'N|{.E`Gm<UV[o&p|t)eJr6L@ZWM9r,;j9R$M>$AG6f879exWG_oix_VjdJme<R*(' );
define( 'SECURE_AUTH_SALT', 'Uyu2^8Zb=Ah=>e%O@:ttob3hVyZ]RYU.)wKLQK_qKJY-5^!s_x2(f .Zsg]Anu;5' );
define( 'LOGGED_IN_SALT',   'ZfnH,|`-BLzPKk.,40 DxG0AL0K78XPzEx(8.:ND*4yVv*/8//3xmW,`d.8/Ial<' );
define( 'NONCE_SALT',       '-`l2FSxCQU|*8DL >#Azuxo^N+&]!2qiX2:cd^.z$XWqXO=+Hmz)`1%q:Gb-.Nt1' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
