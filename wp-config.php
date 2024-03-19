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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ales_db' );

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
define( 'AUTH_KEY',         'xEQ; ojLYy7)9tjees]&YI 2F*,7c-}Z`pau.igPvEcu1e.(K$ewp~%tKa,W1^eB' );
define( 'SECURE_AUTH_KEY',  '1c]vzh=|fH)CAYl([<9-jrv].1W]dW.mCbp8p[9^.<)lp3n>]ox;w?UP&2E8+`tP' );
define( 'LOGGED_IN_KEY',    'K{r ;s_+TCk{RpKL/15x$U;pQdM om?x;*~H~]GBV^Y4iJqwPvlm^<D@t;7MQsXv' );
define( 'NONCE_KEY',        ',18)uX?Ps-eFhf(s893e:,v*6()!L}w6U8ptHsj8T!4)-Z0-nHA,CFgo(M2mTxm,' );
define( 'AUTH_SALT',        '2<WAs+&eg7pqwxL%>qDy`;qS=rDo}et1JW.3n<s!n|it/`,xB4^YE</q~YPYA5TE' );
define( 'SECURE_AUTH_SALT', '%RCk/[`L;y_@FNF/qgSx]P;5qF7TaDwor8px]|L%jiUj@u%qPI|cf%Z+blI<X9F^' );
define( 'LOGGED_IN_SALT',   '/Oq5H*t1o7`6h#Pp6@y}btUiBar@ v%/s:>u*Tufr[`DtAg Ad><d(XSb1FF;j?z' );
define( 'NONCE_SALT',       '5ko28nw?E0&]X:PCgqe<U.}KuuGo{4<<=O:]hHpO^(<w6&M4;PZ`oRc%N15 4-%+' );

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
