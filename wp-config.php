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
define( 'DB_NAME', 'mintesnot_db' );

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
define( 'AUTH_KEY',         'oE0ULZc}[ZMM{{$LoxKjst/vo]Ov8P*0w1cjDpFzxK~$uxWPG=/JhE@*0M8^3g*i' );
define( 'SECURE_AUTH_KEY',  ']CrCySjkcxznImn.%w-F6tif#^=NcQnT%CH[~zP8/RE+qo(DzD;y~ZGBk65>F|[g' );
define( 'LOGGED_IN_KEY',    ']L*AG`h(LnMf7j]-AeXG2N,Y]BAXq_9U>e;y18`mV1xRGO-zuqK8!5SM}?Y~fw/`' );
define( 'NONCE_KEY',        '_{X_|R8Dm@HG<JTa/XSaOak`bMnGJc;@hksIH$-n;184C}B|,H]12Ga4LKsJZ8`7' );
define( 'AUTH_SALT',        '2<iYdfIms&:rTzw|^=[uq|(k85>HvZ.$]$<{_v>cxy0tSGEd5`nq2Tj=)Aqn1)BP' );
define( 'SECURE_AUTH_SALT', 't6X,*^QTjpcFWwuKH]~8(<3Z0k)P$jgDrKu&2Vg(I8^cZ)Dn/kh}p)n+9sa=c#W>' );
define( 'LOGGED_IN_SALT',   ';lK<S>d]<$;q6QD,p;:F]Cm/OTj.j0(/?Hm QxDdY*4 ORo`O+~[>4^$>)RvWGKd' );
define( 'NONCE_SALT',       'Ut$)p$*_@co~%KcEMqB]lY.if;_*gs4sh$m*/C|x!eo?g0-svBZ,pz!2 d5P2Q)L' );

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
