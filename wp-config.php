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
define( 'DB_NAME', 'webmaxy' );

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
define( 'AUTH_KEY',         'ZC]R;S*a 4HZ Cx/TL(tY*lpF4V?9m=AH+3*ZlOg@ tCtm>._gf(X1*utYr(p;mX' );
define( 'SECURE_AUTH_KEY',  '0fIe0i~(umVD=0#wN6:,lex{UAq`VcV0;4(?UU4dECr6QbaY&_WE[5sfS!?wnL91' );
define( 'LOGGED_IN_KEY',    ']M^1L~t2i3IQGM!YRubVAZRx24XCQ1Cj[N?S25 q6u_JS21#%_aRCSyRJ<@vXOn%' );
define( 'NONCE_KEY',        '3*!8P7Y wh/Df1pZ+m|Hf:%LdTa/CGdu%t5BQSb,30R%y<Q9~rTRj&r-b7,Yfn2<' );
define( 'AUTH_SALT',        ':@!}&Q9$=bcYl+x/!{<?qC)yRdWG!|:TJV~X!-#VEXFm=-by+n@4jd{0vo(*Yf`t' );
define( 'SECURE_AUTH_SALT', 'aR:2u1QUyl)Nq8Kbb~=:5J5sEVjJ G hsZ0bS`nS @E:P)R7_(^ez=;qpp2Z,1AU' );
define( 'LOGGED_IN_SALT',   '1:Z_N=_^S$11$Bd4k5bS4bHmoZFt R>f}ic=]t;5[chpd|9lLIVk_O><|/Zp17nY' );
define( 'NONCE_SALT',       ',rmvgK?A6&VRGgV-j$ -0VBGovk8;(EEAE_HA0nk:@,FROLEgB/.=yo*hDbH_o),' );

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
