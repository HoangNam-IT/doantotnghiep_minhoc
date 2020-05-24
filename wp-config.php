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
define( 'DB_NAME', 'b24_25846650_da_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'b24_25846650' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hoangnam97' );

/** MySQL hostname */
define( 'DB_HOST', 'sql112.byethost.com' );

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
define( 'AUTH_KEY',         'T{2.(g/[$5acQ(>o6P2iyf8Q3ix*(57US!oH11^Q:aDj&I.s.vI,&d=@O0UmY2+~' );
define( 'SECURE_AUTH_KEY',  '4!LtQrdW h]IF1*`&Oj:;_`/XK~bFX;Mk?CE%#T%H2y]):/+r]x?:F}cR+<X`HAG' );
define( 'LOGGED_IN_KEY',    '}qe|p{#zH8kc7FrY)(<y!3ka+*r}p8wqElq#/.Q~#SRMi8B00&E_k+w^;K]IG=Jt' );
define( 'NONCE_KEY',        'H Ud#8mGeug!I3spY^e?7^ef!_,:+wY.Ezgc<;d}! 5kFzLzt,DN8-,*/^%wOsxa' );
define( 'AUTH_SALT',        'a9[M5V(_M;E0B-6,P{<b#,_;FderRux.haF`tgFI8At.9d^y=AS6(YF&r:ciSJ`p' );
define( 'SECURE_AUTH_SALT', 'WRXf=R+9I&@%&BX<MVN[5Ej0no|MK6Vo_]/|3!pFv~C#~BBx*/3fSr(=G7j)X#M`' );
define( 'LOGGED_IN_SALT',   '(Gv==9|?IPa{Xs TS5z#(Uc/koFe+YP?2NxQj^&DT10Q)mqa9!WE5C]E4[r]CSB#' );
define( 'NONCE_SALT',       '&uN[xkTsm%abS=GRANyiY;0<QFVQbX=S<+a:]&=xMJXL7&Lb^cQzhwEWL6YCY5:k' );

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
