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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 's1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' SJf5xkDg.x~dK^~ZD%)_s[8t{S&v@0NaTrAATKz{f,_@(:tDfj]Mzppb|J=$TpN' );
define( 'SECURE_AUTH_KEY',  '<zhSSV&9`eIiNp )mgspr.y|u7uyQ5`6x+Uqg$NgHyO]>:^EQU>)/5LLY3OY23N`' );
define( 'LOGGED_IN_KEY',    'Kzs7zZ*)hdG))iD;{tTilwgVIM%TbY>#3e[Z^M9pA-ANq|a]r<#K$v&d?7JTwkYR' );
define( 'NONCE_KEY',        ']e4ySsYLy[zv(j-rn@$5xn!lrH.8X=*C|FEDYx]6Wu*2Ai}lGMWF8SmM&Hrg/:WH' );
define( 'AUTH_SALT',        'V?G2{Lf*.4d3UIhmr]L;~_lNs<)kRjIrzyq9W<#sxMQd@1FB/X*wJ<nQbEw:ooi)' );
define( 'SECURE_AUTH_SALT', 'C#^,*0@bCPRIa52k]m w7g6#Y]L%TI8rgTQ9#.Mv[}VO;zndjZD#0`)]]%NRY2iM' );
define( 'LOGGED_IN_SALT',   'FLIJnMp0uoZ@mNQp)a6.c?<7#%EEzlf!F-3Wo*u]Or*OMo4>YO Vis7z%>[Dc,dn' );
define( 'NONCE_SALT',       '4Y_I8af/{mP7zI=LW;d?`8k&~~=,}]%#nwxse4-iQZZOn]=_r)jz~w{yT*4T^*0G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
