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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         's^=330=+}OBFv]c2kb924nSYoy cCt&*m%+[.Hkp2WomI{$&zJGZk!_HFzXzist,' );
define( 'SECURE_AUTH_KEY',  'Lu9C9^)VD^xee,/>pST_C?5z!gBTbsasxYF!m&^Vnj0aS7FU/)F9u^3/Vt}jd0&.' );
define( 'LOGGED_IN_KEY',    '-SuQ_)5dqC+7qKtq7^8-bCgaJYhI6wFrC+x(D&.]!~L.}K3w7V,IR;/1Wn_rv*=*' );
define( 'NONCE_KEY',        'U+*)nU9w_Uze&3>hnaO-&lYDs??bY|64ss)P&6Ovd8>M0h<CYi)kHrFH&^U4CeN<' );
define( 'AUTH_SALT',        'w~PYP5X-J iT<^t+2DV_T,}I~Mbdie^Jo3c&:7;:mHImx$#}%yV,MBDy;Miv4i@u' );
define( 'SECURE_AUTH_SALT', 'em17qMZS%w3T-vzsUXgOd*XPWNow4H}m-FLj+FkOJpOOiho#Gn.%U)R!Vz<%fzf2' );
define( 'LOGGED_IN_SALT',   '0&sq<pY|A&$@WryawYb)T1l!g+i3^~=nu:A|I~oNfaRX6i*IADuzZ.JBxv6{D*P`' );
define( 'NONCE_SALT',       'l+gZ|fW6ZP,$>_OjfmDvPEX;`Iy5q[o74%P?*p%oXc6Mkb%0jX@PD!>YPgn2I*`E' );

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
