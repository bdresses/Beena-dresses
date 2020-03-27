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
define( 'DB_NAME', 'beena-dresses_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x[?%tW0L`@Z29Ex*@4n(2&>lHMD<@(wZl[$oW^.8S|[8l73X<#s BYp>hb&6o|lX' );
define( 'SECURE_AUTH_KEY',  'YeV4^q|NN]Wz<c .2cY*^%*NG-&F]QTW6Gr~JK9#(qMf5ckdV3+g1+`N-/vw}*dw' );
define( 'LOGGED_IN_KEY',    'J8/>|7b>PO%dkgFydGF[/|Ou8JcZ{E4;B}/^0-dPWV3^`*a<!l&NCu$P]l/3up%A' );
define( 'NONCE_KEY',        'Xdgfx?L.87uTa~gwO]EhW~L@,<klv<f:/[#SI!k/LqRxXnE$oo-tn!g]aGY7J<|-' );
define( 'AUTH_SALT',        'U83/A}-a1G5w)O6SuJ1hA^]{1QOXT;./2dxNvg7D6xyu QZx_=r3z(`aT/=}#bjF' );
define( 'SECURE_AUTH_SALT', '*$v>{L8t l]K$7[VqzH!{`O8(HSh3%AyQEE#8.|Ru%sR@_sEdFs,U2KK>r$jPnu ' );
define( 'LOGGED_IN_SALT',   ',WpblWtQ(cR5dAM_TR*3 KuUOPU-/.&B_yE0{{RZ3/B%$_UAAKQi*N1I(6c2jna&' );
define( 'NONCE_SALT',       '[Mn-g.bH@(jf3ht(2tJ[/JOl%XO#en4k$7JCZD[)!R&oS|.j-mTf2Tz.0U+_jl30' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
