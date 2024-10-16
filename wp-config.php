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

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'B4% AY<T,}.6`t>/WQz_P49Kz!v<P=uNC#xgzRJCi9W68=mIj4g0JGt=e61un<X`' );
define( 'SECURE_AUTH_KEY',  'ZsfIO_^*f;{0O6ehi-ts.a1I<LH)%7-jvYD#EqA>`cibg7XIWd)#&%/=2h>L;AdB' );
define( 'LOGGED_IN_KEY',    'c:%gOKjivvBth#D8cH;m@p6;&gf[d+8jy18nT}%U*{s6!ZR8HxWMoqk}PF!r@1BZ' );
define( 'NONCE_KEY',        'lTi:(VM+)fcC^B:%-/oH k~,;nAd3U`FPqDXo1TOwm?9s2$lyp8E96LTOWW[g<u.' );
define( 'AUTH_SALT',        'Hdg=}4~UB&@2,:~I#8E{{,,D00D E>k^W<J r3X+^tEvI5_P%|KBbl5sI}?sFle{' );
define( 'SECURE_AUTH_SALT', 'pL2AjC^o6]yV5H<zS+Y4X?vp3Orly{Y5~9e~B-8x.J^,.DsnB)^>M5lTK >)a&&t' );
define( 'LOGGED_IN_SALT',   'PD)kvkS[&Tu)O NQJ|$)R=-Q#Z!ip)lD+LLgA6BIi!SC|]WA&2nUpM$P-;)~1&_O' );
define( 'NONCE_SALT',       'hwZTvjb}}XrM}^uCy<VHX}_OkAxR05Yxx$6.3O@*_tqln/M.K)@fK9C8.5=h:9rB' );

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
