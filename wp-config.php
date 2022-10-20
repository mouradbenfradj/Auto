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
define( 'DB_NAME', 'auto' );

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
define( 'AUTH_KEY',         '=jy#F@#716u&8a`gdb@ovhzaV^AuZ6qeca80Xy@6gs5glm/GQg3XEQYd_15RR]Vz' );
define( 'SECURE_AUTH_KEY',  '}OD@L=EwRa56Nt@Mv|kMxAd:MND1?vy;^TtmL1U!qK2t@>(8(7gm5)jbSkvxSW]1' );
define( 'LOGGED_IN_KEY',    '(?7eYY6-_?cbd1H6:mw#vcc -luYzqy(/q3vx9+j-}a?!XYJYoO.g-TIC|(g2>{2' );
define( 'NONCE_KEY',        'LBF+Y_^ej{ogHRe(Z_%3hR{X{E71Kz4_=v|iFhocm!>^@mju^)#*bnFMA,[W T>%' );
define( 'AUTH_SALT',        'U?wj9 VY|yz|oWBuwJEiWlcQS]cmzccp2xYZ>ly>,rn+!ocT#up!^j/U^~3Y7a7T' );
define( 'SECURE_AUTH_SALT', 'CF^EF5(R8q5DjBWmmIs[Gsl}M{]}C7uEBY#rTao^pxj%V`Z]1Gh*UiVYrA1kOxGj' );
define( 'LOGGED_IN_SALT',   '/[O K.sn-O@.!OQOCy{1i]|8X!*kZ31Ds$eiVCNQFY3:vrwEhH~(<~DE.icVGV>P' );
define( 'NONCE_SALT',       'NL[b4NX].tHFF,n]3K3w^Qk@UCC ,c>k7<w=G7&4uBCJtF=b2.}bqw0D>*iX$w9A' );

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
