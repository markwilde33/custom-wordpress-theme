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
define( 'DB_NAME', 'mrd_custheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'UCzxv5oSl:P%$NLb48wNN4+Qt#Cefe RbQ[%TMbY//S6.1wlG<,XR_xcqO}0@lFs' );
define( 'SECURE_AUTH_KEY',  '40Ts5spxVuOK40RwCnQ0927PjZ)*$k%gN-U!P<sWYP=,KdeSDR[ rE4Iog9`?8Vr' );
define( 'LOGGED_IN_KEY',    'r>g68U!LeK!=,G5W wJ8n]xP]r3un1rV &4=bE`5KcY8.y&3V &<53e#+IsF|I1j' );
define( 'NONCE_KEY',        '*{*Gn7}qr<-D&/8iH^UJwY^K<[c}FLI?#6Anm6cSg&<!>^kn=7*f.7UW)9}I{tUL' );
define( 'AUTH_SALT',        '5{M]oz>bSeABXi}CR]u%J~dQu!wRpl^6K>m<u1?E7HQb.v^shB Bv`[kvh#c0:._' );
define( 'SECURE_AUTH_SALT', '8)c,`+.%yD?MAbr8n.WX:))QpdXzP%P#9$jD6AWfiu]vqW3NMG-o@5riQ+y^=69~' );
define( 'LOGGED_IN_SALT',   'S2]@VDo=}n9Z`;?8M!+[C6UU1.R-9eP@<KMRZvxwR]c6:5I2KCK2LNH#vtz}V9B7' );
define( 'NONCE_SALT',       'a5y*K#kub7%m%89!~vTIIr|bD%(/;ueM`A*KB]r{y`zp5a#Cxg8K=cdT_LEwvV<$' );

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
