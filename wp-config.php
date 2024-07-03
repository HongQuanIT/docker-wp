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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'vnb2024' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '99Y3_6~y; ;# &!S6Re#D{bZO{l3{kwRu!T8>-6<X6E+,3o!b5Auc:;*zK=CauTd' );
define( 'SECURE_AUTH_KEY',  '.?`RIo<&S*I1nA~|04Ul*jTVTPj*o]le3Hh3!<~)Y6OmK04y2FGB&ga]]bVTu1UB' );
define( 'LOGGED_IN_KEY',    'qE^%OH|50OX4@j+3?Xy>bdP$6eP[i6V3hsHjGt %sr@9~vrT L00+REe-gMso*<R' );
define( 'NONCE_KEY',        'q,T0k^{|j$d]]D`I[d]Q}} b4K^%$2u qu$i,-Q;b?b:n{.g6s{Fhy0@h;r=8Yb]' );
define( 'AUTH_SALT',        'J_D9ciUFv@SM!z`:|VQPF<I-6;@|olp0$B/UIKPd^NmmD0,*Fq-=N^-5+P:OL2*p' );
define( 'SECURE_AUTH_SALT', ' I@#<m}lIuh%crTg%P]?(dBvxF*wwa2#n(t;bZdxsV@Pi3aH!35vPz6rw)W6bh@+' );
define( 'LOGGED_IN_SALT',   'gbqFw)I%[ma+Xe,++mTK&Q&Io$TVU{|+5@;bbzl,0*.(I{G;owG0ndZkRc g*$Y9' );
define( 'NONCE_SALT',       '^ufrQuO*]$RuwdB$afAy._t@nI`j7&AOV,->:#9mey>(`WL_z7%-t[ud=m3F&m8-' );

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
