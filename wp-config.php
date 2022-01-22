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
define( 'DB_NAME', 'm_db' );

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
define( 'AUTH_KEY',         'q!5*oGT*K@B5:xy 6f{A`865=ae$aR|~:_syaJlG4$/kQa&ZWacN/Dz8(rE:s&p<' );
define( 'SECURE_AUTH_KEY',  'x&KVWwG9/qiBI%Tx[]b)v6=JEJT[389i<IaDI:fv>QPfEj2ibPP+7=EDD6&bwPYm' );
define( 'LOGGED_IN_KEY',    'X=>:4UDagPe,g6KI@q&XP9Mg?6Q9Qy?B<2m#cbIg[^(pN,6teeftHq^+rDc a$o1' );
define( 'NONCE_KEY',        'gL9,4)Yy]z$8MoyJ(~ )6;V?L@c8Lt<~7SU)?9 9)gZWnb~dQ+S:yv/;1?6SrG.U' );
define( 'AUTH_SALT',        'k868Uz,9?;gTA8tLbQt7L7F&x?K;:FNhy 6u?^C<~J9S[Zaw2}])Q`2s0D6|CG7%' );
define( 'SECURE_AUTH_SALT', 'nQkP@It3(m).m~$U{E.)O1TT4(/*uya]IVjvD)qc;g;`|x_s[:@hAJx/}$j9Z=:)' );
define( 'LOGGED_IN_SALT',   'D.S8c:d}8A&b6#7Q>;p)Pk9-ds5Ps7L{33VUyz[Rs:x8/AdvThe%*D3,:ABgYLtU' );
define( 'NONCE_SALT',       '(n#nB)#vWy=]u9j,.d[{+kZTDE.Zcz}),r3}3LU/r-lkHOxv*>h?EhPYOCm,^5 X' );

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
