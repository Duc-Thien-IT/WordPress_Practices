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
define( 'DB_NAME', 'wordpress_practices' );

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
define( 'AUTH_KEY',         'fRmrUV&xQVua~p>J#F!D%X+KHqwQw8#YW]?6x=l@EP@*:W,V;hDcds@t!?G^]q)`' );
define( 'SECURE_AUTH_KEY',  ':ZCGfrr0v4IVOY?U;coOYup2;TeiZP3y[V{rZ*T[K@F-0*ftEz2:m{?-rZA7c]w)' );
define( 'LOGGED_IN_KEY',    'q6Ui1qdkTJ^ Mn|CMLRqzmBaQX.+fg=DL%6.T@t.&dz.lP0A7,zjG(KE;u|8qSi;' );
define( 'NONCE_KEY',        'RYw+Ubf_KQ[[]ngJNT{%e{|W1QmBx0()Q/aU20!~FhEL-cy;H]fDez/E2v1y^9?W' );
define( 'AUTH_SALT',        'h|-VRb71vk%v%O}#x5*ohVW*ps :v4XgY|6I-I&91AcmLy)VTi-<OqLgCz1dK?Q`' );
define( 'SECURE_AUTH_SALT', 'k8_#Z6.tt28[oB=g*4`h`4~}fYC {8D!bt*Axoe9gt7x!mQF zSMUNv]y3DB>/lq' );
define( 'LOGGED_IN_SALT',   '9$!VX{D$lRmR2:DzlW0v~`]7UX$OBR8_m:brA2OHR}F]uXCi:V<}]%B?_ye|!dTs' );
define( 'NONCE_SALT',       'CwzDjRXihSL]^v8|L%{(`6f8x>28y9._lQmw9|BGER1v3%~>wu`wzkon2mD7mWY#' );

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
