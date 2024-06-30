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
define( 'AUTH_KEY',         '5:E/T<sTT(?oQ3R(JVvgX JZp,1>wG^n$$RKxx9)j$KLF8WfNX=Knx~iT<GCops2' );
define( 'SECURE_AUTH_KEY',  'Jm|eb55~D/:=jH&Z5kXn~uk?~l2?GaW0@I|LswSS/1uz+9DJ7a0:zs6icT*VSfxA' );
define( 'LOGGED_IN_KEY',    'Ki;NEJyLJft$]6_u_P|Z*}N[bW +S`j >tHy>-pEXUVt360%e}9!H:p)ge0K:O:j' );
define( 'NONCE_KEY',        '@M}RKxmX`+Q.t?)|!jO&0:*3TOG33m/L!{[haug}$R|jSZ@f/-e*x-dt0w!EsQz^' );
define( 'AUTH_SALT',        'q8`q[k?^=|;$G8{m>d{BwvR<]QkP_$-hDaqx1&*|@OdY1l)hZyS7j%_XiZTr-+nc' );
define( 'SECURE_AUTH_SALT', '(?{(6 Q`iaR`|YtKw5JIWm^4-v:N1T MJT,RF{4c]}&L?TH{*cY%M2Jr>FKJ0H<w' );
define( 'LOGGED_IN_SALT',   '$gkmJ2qjm7d_/V`OC|AT.fa&}Vf;~f>i{oGve{D#y+8gBOuYdxE~mBY=)+]CDlVZ' );
define( 'NONCE_SALT',       'R/OSAoV4@R]6mb>p/#(7{qTcAhN[kvv#Z~r-.{~o>Iv2R#JC`$yutg6D#WE)j|!h' );

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
