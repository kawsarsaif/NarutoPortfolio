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
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         '<!!2RaBX<wBG@eka2r+7O,.IQYrKU4+#uO6ic*9V`2iDqr{;cuTrepNrq*xKiMO8' );
define( 'SECURE_AUTH_KEY',  'w$Kq7t75eVL4]^]2A@1dI(|DWx~v`SXXO(SQd9Y0&;k[0z[<zj-nvs}&xl@Cwia$' );
define( 'LOGGED_IN_KEY',    'o!OPv;p5<&B_-b~m]C;2Y/`gxLW*KaE1?()c)XS@=.?~*n^qP/AzP=6}z&g.-65*' );
define( 'NONCE_KEY',        'AV0/Vanlaw3=3k789x:CD#lQ}k?xO3w*&vhbS%Q,,/%ZP1X` Fu.0z`Iz+|FO}:)' );
define( 'AUTH_SALT',        'NL?:J&@!%<a#1#T!r*c826D8KN?qI981Qq;$D<bED8r.}P|%OktY, ;mNPKQMZ#N' );
define( 'SECURE_AUTH_SALT', '|NRs{Y ed.U?*;pbGYicYXYK9?)eUSpdSWBpp(9$95^ax9vbo?#OIBg,2%U;cD3i' );
define( 'LOGGED_IN_SALT',   ')|uj#LqaY-c%9k<~y9.{s3^+o47q#PrF -%;N:aS:YFb|O#J#ecY?XBgG<!WnHLy' );
define( 'NONCE_SALT',       '_&xc|to-^6gxrlZ&yT8:1;m?K;q DcY0I*~3V7c~S<5YNtaT!XfCD{kzVP 1)f51' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
