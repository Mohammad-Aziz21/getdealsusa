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
define( 'DB_NAME', 'gdusa_blog' );

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
define( 'AUTH_KEY',         'S:vzCD=;DXq=NqjpE1SCw^Fb!f8tE.8 o6`Q}-!dVr}# HqA+64;{S?Tz$}:IXI[' );
define( 'SECURE_AUTH_KEY',  '^7Rn(4AIG]~]`1C*d},:+mJX2=/N~nny%)|:e+>`2<38[s5=/g.@XT_[U~MbXP:J' );
define( 'LOGGED_IN_KEY',    'A.eTbZMZS,D$UoFA;JOG$J}=A+7iIj P`6#.9L#.5[TVw64v:_2[b50m2u9J6S9K' );
define( 'NONCE_KEY',        '[?`lQdT4q}f@tm?%4&*_0&>pD SLYd`8.KOj8w<q@_~e[|,V?fG?<]C#VkC^i8Sa' );
define( 'AUTH_SALT',        'FOXa(U![J3@)k{u$h#~N:SXUKLW>&GR?#;mmg-WjBY^X|,f_(_mk?AmB9YP:k3w&' );
define( 'SECURE_AUTH_SALT', 'F/_/O|5i%5@cir2q4x@dtmK2/WY*f]~0Hse7@-ghJv-b:H67eiAtHg<Hydd##[/r' );
define( 'LOGGED_IN_SALT',   '.{[8P/wwo[c)_2:|C<a_8;2?3:D=P|u:jzBPG`sEE98.J`-|e5= [{jU@+ZqkULz' );
define( 'NONCE_SALT',       '8t`QX6qP(pMX _DG-MPgIA:y:f_B-Qe!0s[?(/g&;Y7e ,3Rcs0-L!{YOQK,)#}c' );

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

