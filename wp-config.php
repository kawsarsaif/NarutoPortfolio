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
define( 'DB_NAME', 'NarutoPortfolio' );

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
define( 'AUTH_KEY',         ',em}qVc(dh1}2%L0M|Z!dTv9Xlv/X*o|}I2{_M;.K_r?|.uecDv WlBvuBJ..Y-[' );
define( 'SECURE_AUTH_KEY',  'O=m_MYOBd[3=UzEO;vkhs%^pc9(u:l*A)]G;:YNsVft{A6M+0=//o6WPvlf4V~]a' );
define( 'LOGGED_IN_KEY',    'l%ks5.5}c%TN[emL@Mh**Nuyz47c]OSI?Vi*6v7e}@/X,j5%/MUWFt5mgkeB>fU.' );
define( 'NONCE_KEY',        'LP(`BMe`yF!tprqvg?@(>aT>+-OY[RZd1HWcSy6k5upqXv;Z5+8F:B0mq7usE065' );
define( 'AUTH_SALT',        'xwjjN1MaB1wBBp#$wWQ,LkvH .jZ.$:w`_Wva48&m;Pg1a2S0F+blwdS^ylMD{w|' );
define( 'SECURE_AUTH_SALT', '].O]PJO8]rZ`)w.0Ku#!<0Wkxg5/1OQ3 ])XYg|@jqESp$TG lelmML]i%&;w1[S' );
define( 'LOGGED_IN_SALT',   'sdwQ^cG:Q_C)IFe0bHW-1.?HH(4wj $sq#ih0hHjh~RulVU>~*vaE&n9RqM0B,,T' );
define( 'NONCE_SALT',       'VSa_bnu{da#u)ubu8OgnaG!4<Y*ZY!m~DbjY[=i%mkw`Z*`GYqQ:>BKhTCHC.>{<' );

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
