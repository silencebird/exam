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
define('DB_NAME', 'my_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'i*tp #Yo>1 I~D$jjtp=~Glk_C2Q*{56Ugv}S3k0{*Nd|N*WVZ{,%PsK[/,XrZl$');
define('SECURE_AUTH_KEY',  '%Lmb)*9_qLaut;mjgv+2b*R@DaS{BJTA_6;=4.Jh?F,wJEBBEO +L|32-U6.>S6$');
define('LOGGED_IN_KEY',    'L2N;rM|rP+#Fb 7^uUIp5*.<UkTFuLH+WVvsGo_M)hwIl.b_Zt;wUm|9/3(p6WEg');
define('NONCE_KEY',        'q1v^M=ZBEL1_aX[pW<Ao9alOHBwZ]L~MK8I9Bf#QU&f{?51PqNwbzyhJ|Ct@b(PS');
define('AUTH_SALT',        'bW`x1K0&zF;*~3?^EfwVYE]gK@pimVLT[gxlV3AIb1!qK8sqNnM,LA32TF8yRGsX');
define('SECURE_AUTH_SALT', 'U5qElEFoN=(QT:&eQV~ZaNYg.oUgSwMuU(S,]2*/[AZl]BGS8Z^^LLo{G3!d]i?)');
define('LOGGED_IN_SALT',   'JEk33oF=`y8DKr$;Vam,nh1fmr4Bpd+Q1tDrt;7$pxB-eIQbNlkqV }a^hq(22I/');
define('NONCE_SALT',       ':c]&(#yqF?.d8= UBxaZ{}zC>CPwqu)00KC8rOS{E#1pC/>>Q/Trv8)KO%@g,D=D');

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
