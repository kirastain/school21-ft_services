<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bbelen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306' );

define( 'WP_HOME', 'http://192.168.99.201:5050/' );
define( 'WP_SITEURL', 'http://192.168.99.201:5050/' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTHOR', 'bbelen');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'soQ#IIBrhY`V&]U=uA|AJGjq.+w;~](~eZeEbIa%nP~ QPh$3d/|&A)zLI-mU2/|');
define('SECURE_AUTH_KEY',  '`9*hovJ<-*T;wOJW%ycGO$ob0m*CJZVIR>!@VcIaQ3CA4OF~22++c69 8Z+JJx?f');
define('LOGGED_IN_KEY',    '<a4?NxN,8C9#^yld-(on4mCld|Yee);xz$I|H;}tR(WZ/!O*2j?)hCs?,5~|fZ-m');
define('NONCE_KEY',        'J+o1r:x,Y?u`0=(yf]axtzr{tJ]1X!wr|][VbJe(7KhfQ!J:lwl8`N|!#P(@uUG#');
define('AUTH_SALT',        'cSELFs~nXJ{6^6y!Iq.!f+MX@5U# FmEk7DJ9([l^Jm6$`2{|2-yw@|0Fl[49b-5');
define('SECURE_AUTH_SALT', '* Q:XXWsoF&2O&Ox,B|{ZRQJ5S>:k0B]xTcYV?tS+(^a:.q30cB}2PP|#Xn;!pNS');
define('LOGGED_IN_SALT',   '>]axu:SX=MlNT<T.}+S<^CG/,CRN-=TuVyt{AN> +pb?k92Wq$hzl-^<]q-@bUll');
define('NONCE_SALT',       'wA.CB@p|5~R=5>9rt8VN+2>8Yg8W zVZZ-N-IZY[$o!E<L7H_.):gS-a^7G`M~Y#');

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