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
define( 'DB_NAME', 'wpcurso' );

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
define( 'AUTH_KEY',         'OVn!^RV#(hDfAeT}7PJgbOJ!I;2xHXT96G5[ppY6ro(!hkNOMPr%2;~t|~K85x-%' );
define( 'SECURE_AUTH_KEY',  'Cxz,~aE%o?Cdzvk|%oQCqZ1:2pSMut3hkJl/oc,yC2_[o.|F1<)eVws:HETc0t-,' );
define( 'LOGGED_IN_KEY',    'Kfv:U7,&X;cvuz%,y(*fQ-xMNJwJ0PW?Xnb@U(I|^U&a69x+tK]4,=5n>x.U`GNq' );
define( 'NONCE_KEY',        'g:-^<t0*;>B!xD>I<BK{X?)bIf*J$}div$J[1&E{,C661xE^zd|xIt0&Vb%lI:A2' );
define( 'AUTH_SALT',        'dvnDh;?uk~0808=ct-2jF7elpbPRMooCIX]P~wx~~p[cn_JWA9L~9A;7:V5u;Dbn' );
define( 'SECURE_AUTH_SALT', 'tiM9R3CR{CNQ0DsmZe wK{1,-zZ`cd$4w~X6ARoy12I!FAGAQQfyC}(0wxAm:[p%' );
define( 'LOGGED_IN_SALT',   'DQD|Pq2L%t+^o5shCZ|4N3*`:Rm{gU(;1+x`|r-h[*V2JNCL,BJF#E([>hDF[K^j' );
define( 'NONCE_SALT',       'G -Y=3YmAq2tuI<DlIljpLE[iSQ)APbX@YFI9<+n@Q6`.P|QA4t;RPrzHoi7U$ T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_curso';

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
