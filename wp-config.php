<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'abel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'j');

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
define('AUTH_KEY',         '<=CjwY*oX+?YEUy38_)b>+? 6ea,(@>^+aAPgEBvyh/?3<7/Y}lr5Q8N.$9}H*3s');
define('SECURE_AUTH_KEY',  'pg{><lKg=TS7YPM`t7;x[|Dhd`+p`I4*-0T[1I;/|XcjS|!NH(tK(p:oEu0-80k/');
define('LOGGED_IN_KEY',    '.f0.j0k{G.8_E;-nU;G1(7;LnDz+%jTT+9F Xi}ueRY 2|1hTS*&O-Gu9jz;>;wB');
define('NONCE_KEY',        '1],1<[!wqrT-Z*DJh6XQwo*t#}y/+]H9KJl+n|V&[tJml.lsP9>_VY +uKi)xt?h');
define('AUTH_SALT',        ';Z71j{qyMVB1n=VEII@)vI{A3q%-juA,;?l P>vPCD|/w2^4uxV1G (X/X9-n^@+');
define('SECURE_AUTH_SALT', '9Sxt~+ssVzy;a&x9jjMbj DL2So$#xZ,Gt-CZ}~B1e$p:|f9.KOT&|[<cwu(XCFD');
define('LOGGED_IN_SALT',   '6C>b(^o(m)SAu+-b+h07EBgi?QhCX?>Y@OWMr!I<m~X.~&T20XQ-W&X31Vylwg:5');
define('NONCE_SALT',       'Q$AM/KPwqdp<$o~NqF{%m/r*>G.<bv<X*_UX@e BWZNInu>4FFYK4rZ/JQK*+7w:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
