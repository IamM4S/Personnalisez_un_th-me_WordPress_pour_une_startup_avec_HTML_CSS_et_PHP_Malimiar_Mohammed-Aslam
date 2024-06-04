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
define( 'DB_NAME', 'malimiar_mohammed-aslam_2_bdd_062024' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dic!h,Bg!Anx}R:&GFbxlb>?b/<+(,qP^ 74v]dM]:Zt(*2CaOa:CV#fb!G32_H~' );
define( 'SECURE_AUTH_KEY',  'P,>=088d,]T6/!>U&t0*^CP@EI121^8bFg8[*O110m_jnmv3Z r1b0=PIw]X^yw6' );
define( 'LOGGED_IN_KEY',    '_)n}m2G{jrn<sapi6!p:tWE|=R(J1MQ.*5,9V9Z.,O_)XA`kS8F*.4OIc%}7S=4;' );
define( 'NONCE_KEY',        'P<)_}T=Xo_8.a;MyQUu,eA)k%/zf3jZys^eS/hfWz)~0C@?5[Q8HV;%rXJ.Eqc4*' );
define( 'AUTH_SALT',        'c|ww?Qr?1K5rS<>flS>>!rl!{h8nanF(0 4>bNwr$<$Lv^((r]wKl)&q0m9Lr/2N' );
define( 'SECURE_AUTH_SALT', 'v}~6qw&w ::G+d3{j@PM*2~{4 f&`Hj5=}8K+LyNjwSD ymZ1M#+gG&BvFw>G$M&' );
define( 'LOGGED_IN_SALT',   '8 !L+7b_k^5v!b:Gh^l5^+AelL=4SMiqqxoqsDrU,Fs4otrDYwo:wE|.z}$Ql-uw' );
define( 'NONCE_SALT',       '*1SjCd2|L~H<6&7vS6z7<&h)6H HWsn)VY8*h xUs`e/^gc%$F5)i($-|!LGdVRv' );

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
