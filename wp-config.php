<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wds-test' );

/** Database username */
define( 'DB_USER', 'DS' );

/** Database password */
define( 'DB_PASSWORD', '20101987' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         '(qQhZp-hn9B*r}-6f1;Y~1>v`,BE0j>&.3>F+5Mu86*=z44dVppuY+}d,6t3_M7x' );
define( 'SECURE_AUTH_KEY',  ':*)eT?yf1qhD+#:K3JaX-;K5eEbSCh&IDSiLo!/x)pL})!TK;jC[$|LXII&|~T<,' );
define( 'LOGGED_IN_KEY',    'JiIn/h<HxnJ71>w 2<$ISUSi%z=CkNnN@Mg,owhWJ`,1cp+3?l`|JoZ}?>m*1~+c' );
define( 'NONCE_KEY',        '(Vo-Y4G=m5OoGz;@i%uIbb!bpg{vYY}O]>0<}+/M9&j$No%3_n6$-Hw>~k]t7%%v' );
define( 'AUTH_SALT',        '}x$N,]<)~~S7~D?jk*K {~*EXY!-Qfx`T|H`tS|i:&u6o#2$b/p]H:}4c3ZzB7W(' );
define( 'SECURE_AUTH_SALT', ']P>QQn=S0<!Y:[gQYp)6DZX5Zy$Zod~@7E654dSeq:~jIC+Q_k%tP(*kyj1Plq}-' );
define( 'LOGGED_IN_SALT',   '6x@aoOY`DCFWoqo9AI2?<{3I}9cO=31!yGD:FK6ysg;t#{lvue?f=#L1TaD9xhBm' );
define( 'NONCE_SALT',       'WrhhI_6d_m15wlSx7h#[YpTUk.0nT>loV:y[4hY_P/_].CSfc*YKuxJvv>F?6mPr' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
