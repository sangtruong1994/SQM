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
define( 'DB_NAME', 'freelancersqm' );

/** Database username */
define( 'DB_USER', 'freelancersqm' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '0Ax,2%Q@E5o%F1#m.`aUBw!!e?pjC=(`P&fK8u_6KsulXU62 c84t}@k},E,[3Jo' );
define( 'SECURE_AUTH_KEY',  'WyHU;1`!l(rQ|_E(v(9;w u*N.`(mj?4P~%bp_dA=vL:|3*2`R6WhA;wW<;Uv/Rw' );
define( 'LOGGED_IN_KEY',    'ku[8ZCz>1=;q_AJ`dby([tgPaO{JVUSk:45E%7gBRr9&7X_o-9f=?Y_xV]~eF@,&' );
define( 'NONCE_KEY',        '3ZL+cvX1W,%7*d*$<inN1{].JB=jGY,HL{aBM)azB/V7+,=A@~<sDy$}Ja&`f)Gt' );
define( 'AUTH_SALT',        'KZ2#*[Q4]c[NW*( d`)#Um(G19c^d$ki5iuys-i<>w;IT>$7j{/gU.mD%g}ei;dd' );
define( 'SECURE_AUTH_SALT', '#MdQ%~u5y]$d*>350Q,$pTLRTSsp!|<{h-o(J oiaaTltJ,.V!n8ionBwI22_(./' );
define( 'LOGGED_IN_SALT',   '|p02*|}yU[o>Igeg[SbM-)AA^/0j4&{f}UaAmUp24FkW(y$UNx-k#*:n!Wq]bb9H' );
define( 'NONCE_SALT',       '^`RJU:Kl@p&%t KIJ9w<./T>G3jJ5B3pISoDot/@}Jn#zBoKlD%<kHn%8``KfC*S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'admin';

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
