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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hybuilt2018');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UC%DZNser5i[StG]c&dc^%9u!dY;0mC+#- %5<T^Y)XH6>x$E<-f`Y>L[urObrLf');
define('SECURE_AUTH_KEY',  'm]3[QME-1EEAXj=f,Ab|R7I!:osQEu+#Q1||l9{[;1Q- B*&D,4nO*BgS#cJm7lj');
define('LOGGED_IN_KEY',    'e`!(2.qU=`7#dbF9=>]^v>(}3<c_F*Z%lA ^h!:](rg*nC[mfv-{FLPN5M_UH-e?');
define('NONCE_KEY',        'Sl.GJHr_0N[eh^@c9co;/^8YA/*mohUZ0-DaK0(KNE5l/sDajnpa)r gZ?:nZQ?,');
define('AUTH_SALT',        'MVSoRAp%/W~p<-mV.]]M4+hy@O_ELaq[1(-D}LQZGr3s=u8.pQYxWw4DBCvCkBbm');
define('SECURE_AUTH_SALT', '$!/TKe4-IUCBN~YAnOWVNr-P8=g@]tf8ZYFQlVLU&JJ&^[!rLFRbP&Fi[>xr {J}');
define('LOGGED_IN_SALT',   ' g{GmH|14;=7,wps>L.Fw]H4UD#&Snwn9>3.`6dB|ovU?UJS-cY^G;sJ~Tj6:iRM');
define('NONCE_SALT',       '}B97L&6Dk[`&bu% EUMw{wK~*)BJT=trNbfQq9j1Aixe=r^=VL$jI6Sih*=deVsA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
