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
define( 'DB_NAME', 'avance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'PeMH(CbI5rm?Ip_b KdOjk8rn)@~0nu755=uA$|^mmJO2kI*Y*<qQCl#;?*%;J{9' );
define( 'SECURE_AUTH_KEY',  'Ry?:9/d)7r!a;EgQN,8Jsjp6Li1Tps-zN<)4v.wX+xldQ;R>Q_Ird!Fa19%K2aBd' );
define( 'LOGGED_IN_KEY',    'DZU{Bl/]%+nrOd49iuk*p+VsHn j5U6?+-c#;H%l W-`X5v$eXh^8]Vpra)sjvW ' );
define( 'NONCE_KEY',        '*DjuDv-Xru+vQe-f,5tJqm|lB&P^:#i?%$y(*} 1v&QBWO0Sv}cBT)NQrYeH5. ~' );
define( 'AUTH_SALT',        ')[FM`-U];4W1%gQq..9d:2#rB-rG4l2 Ny[|[W**~SCoYw`@ggs{5qt``>sB?uSx' );
define( 'SECURE_AUTH_SALT', ')]AL:(M;PHHb<3WE=V`|GtN1HAk!$2!B1wJJS0C>i+O/m=})(FG:H; k@v5+d0Q6' );
define( 'LOGGED_IN_SALT',   'u->B0^Q?T!>kL|n8dLQ)<in/@YR;t$Ff2(hUaJ71vR?kueI|.x@q=6zaXUax/aKV' );
define( 'NONCE_SALT',       '}9XS`_xc28&3`v6c-M~bg=ij;*#~kjt,REh<zLGvNJEVI#cpy<wHnEH3^{R2R&pa' );

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
