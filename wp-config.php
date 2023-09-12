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
define( 'DB_NAME', 'webbanhang' );

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
define( 'AUTH_KEY',         '_zgMn`hc*q/a3DOR%EgwPmTqk=QR@%8@PT+](NZfP8bw[;ip`o gere(nh4EK&`(' );
define( 'SECURE_AUTH_KEY',  '{7Go-bFBN@&bM]xM{@=Q6^TW6Oz!$<PRCO;PtNk5?-$6P<FY<w+4qNm/|SBH/U1^' );
define( 'LOGGED_IN_KEY',    ' DS..gzy8.+V!i:Wm^*>;/50^Z@Z&T/TGDk3Dz,?Jpl1U?@=:&tf>2n4Eoikd-I(' );
define( 'NONCE_KEY',        'mB{E{bXrnHmnvJ J]CPEt,inE0){3?&=p;-$lG 5)NMfMgy3fxWTCLp8IYg)/k7a' );
define( 'AUTH_SALT',        '=tw}DF4RzQ5.P!G|;}2r#;mx9_$~b0S8?/8Kh;.NS@B$h5dy$3Z:}29O8hGQ1/hh' );
define( 'SECURE_AUTH_SALT', 'n:qYKiU`W5rp/8z`.=K$7hP>E<89q0o>aNJ`SxEYm=?Oz;A8KabHoZ3 :EgfY-%{' );
define( 'LOGGED_IN_SALT',   'FP]6L%<%E8=}dyC&sKt^pi,TdC6R,am>>riEd26*oNpi4Kc:Ij<Fp#gk^rxU]O.T' );
define( 'NONCE_SALT',       ')G+M  En!&!xO,XJi_?r$}~Ph=@/N-!1uLe)y7L~JeTzl-CUOm<}!3A^wEef$z^/' );

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
