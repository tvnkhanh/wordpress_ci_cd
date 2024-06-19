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
define( 'DB_NAME', 'wordpress_ci_cd_db' );

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
define( 'AUTH_KEY',         'cV[`_4(=3VUXQ<bvS;![UK;ZEPHqBJ1Aau$a$~;z5FEcMmx?7#d|5M{{D!MG@9X<' );
define( 'SECURE_AUTH_KEY',  'cT=z 5kD~ME3=H$Jxzzh4R1&{d:kmqs)<xsvPO1a;^~lM S[(6IRxcv2?VfNw=}I' );
define( 'LOGGED_IN_KEY',    '^nH7{R??W[.$>I`]}_ A3v,y}B~|G_?_j<Z2ja|99#FC7UWTs3N0xjGnwi`{zzv/' );
define( 'NONCE_KEY',        'lTt>es bD24KGb_p$#UV9ufr)<I9x?x1znDF20gw8fa-.~9$?J%rRBr4#AO7rTQ=' );
define( 'AUTH_SALT',        'w4DTN(=FUJ&vU&2q>J@RzeIfkAaY=A$.VGHMB{#_A_|AE/{02yiE}@0r!dv7!Str' );
define( 'SECURE_AUTH_SALT', 'S.kz ~1@<9hpfH^Q8F-v2YZif_w^tQ_A_e=#au[sQX[SseC-z2o;O1Ev/c([${?/' );
define( 'LOGGED_IN_SALT',   'l]s# %u>mTa8b5WEN_O&ZX:2*[Nh58c{=zCnD*W^{6-DlT ozlk)~Uk_-`gSHcvn' );
define( 'NONCE_SALT',       ')u/-wN6Lnn1@8`<<2?#+[(~1K=SIlxk*Hf/J)e[1T67{$*O$e#4q)%,@A]* !?Qx' );

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
