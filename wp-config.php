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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Skittles707!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9?<hoFxs/w)vEJQg pwBTzCU~B}KAwx$FG,LZ<;UY{NUksoGv}Dk<`0v7*(bz u=');
define('SECURE_AUTH_KEY',  'd(,;ealp6~j9/J@9$!g`M@p69/k^A<3qxOZ0^1D)1ivqSTN;yuKJ5lGfQB9P;op3');
define('LOGGED_IN_KEY',    'e=xqwoOjGS%0j}=kp[)r9nJ@~.K.~ry{7_i(Xlk1`s$gU4<TAJD74F!ZbfFgX_>@');
define('NONCE_KEY',        '~Im6 Euq1m?#acakCNP+ x{|u+&iB|6)7wrFA] haA1ek+HGZG1:C^<u@$%trjG2');
define('AUTH_SALT',        'G@*%SSlL>:.z|0Qdog)8Xq{x=;r=B{wxi!Ss$C7bx!;fFEa.T_8gk~o728Qg%QnJ');
define('SECURE_AUTH_SALT', '9NAWrA;5EHl$kVD+5 J4;O-h>-W*;s5=7*/J@{<ycDxc;yDbO),>=e{rwW7kG-*.');
define('LOGGED_IN_SALT',   '#|_L<.0UA}?I}z-/}nq&>KMF},p{:0o8q)unzVx<H$<F~y]+FHsBy #=+kFasLb)');
define('NONCE_SALT',       '~OIwh*gCqp}Xbyf=4tgl0e9~P[<rjGl*!PpY?2_]w|k5h!Z3nk|qxhIFAoPG>@+3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
