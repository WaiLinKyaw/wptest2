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
define( 'DB_NAME', 'wptest2_db' );

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
define( 'AUTH_KEY',         'G~!hQ|*Kg#w~x]UyF+fDJs^!HJ*?Oq(42jq}nd}?Bq[FBrKx-?yP=)pxUBMb|E4S' );
define( 'SECURE_AUTH_KEY',  '1GZmSEcFM5UP)OY-v*0b>1=$5aJh7;hb}lWp7{btEtcdHeukVs(+,Ie_7/rNzHjB' );
define( 'LOGGED_IN_KEY',    '+]3_&,o$VK9!:&x`f#FGQ{cQZh!,5=nRTam/w<*!^77;M)q&]W](nb6jw.WH7_88' );
define( 'NONCE_KEY',        '_F6Opw/LYuNv9#%4}%TQg2Yuo kabs;*UaR_4$FkHW4[E7CS_ =^Y`m4c8^SQzHl' );
define( 'AUTH_SALT',        '-oS*_FT:-)+w/,ruL~k2>c3n2>vde|MkCC8@c8ZFBb|uDf24sOEO,`r|Xpf8S9pK' );
define( 'SECURE_AUTH_SALT', 'LO&scs|xD%y8d;gkL|32wE^@B:=b6B,>:>;J.?1Lt`c%?0R;2E6%hJ_HulK_A^~a' );
define( 'LOGGED_IN_SALT',   'i:<^`yET?O2`R8W8Ot@]bzQ=?}v_aZFpk<v-IGb_z*>M*i8auNY;ywFwr;PgzjK}' );
define( 'NONCE_SALT',       '(:?rqiR&.jaTo%OG;%=O(~IQrV|UIvG}-26Mu.Tx;]^JzpPxxy)h{@xv`e5o+9<~' );

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
