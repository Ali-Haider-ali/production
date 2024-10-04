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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         '5o[ n~$v52@$%Y$?R4:*}^cFkzeRFx1IcAnFf&Im40`[YT#Dvsv3_|SzfcN|v Gq' );
define( 'SECURE_AUTH_KEY',  'r|O%h,&[N_)eH*a]_(,VeCVt8KA5kPeO/~zSQ)8J4/1i.PX}U>U!_O?04`x^p7Sx' );
define( 'LOGGED_IN_KEY',    'agTi[{=ybKy^Ay^p[D4KT7fM(Oh.uS%<I]iNzT HE<ak!ZZPT@sy6-S= -rY(]&m' );
define( 'NONCE_KEY',        '.[TCps:)FWM(+y#AM*fs|Z^{NHM:?Y=O+>)SFr|A=PyO2({{){_EhOo1dx6^{7)!' );
define( 'AUTH_SALT',        '3H88K7/b)XG9zE`%z1kn:^,5unXr|kzfwgnN8ZxX*XJ]~&$!R+NQ-;$C>`LghN;U' );
define( 'SECURE_AUTH_SALT', 'cB<E3a{D7/$]nr<,YO: 9jGde?VRlAYC#*zxa?G{$#a:ZWX2{3)-KI5Y)R!3G*VU' );
define( 'LOGGED_IN_SALT',   'G#I&&F^Y%_E RLdoF%=60*5I)*@xD~4A?ojq2Dn7Q1sK M.z<HmE,ljSHfpWUpPE' );
define( 'NONCE_SALT',       '/j{Lch.P!zvF<D ~^[A@Gbno,Nmn--[+}/)=OF}d,J<bk@7g<z834o@aFS=$XbBs' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
