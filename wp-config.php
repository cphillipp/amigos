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
//define('DB_NAME', 'gold');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'root');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'amigos');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         'ppSO<.>c7;M27:Ni*B~G-lYV)Qp1v?+@_:6?6VETN`^r:+$W6*2P| V?y[a|eV#2');
define('SECURE_AUTH_KEY',  'dF%uRIp>>$LB@&sRa$u^f61(Ueqv*hQC#Iv<d&-]9gtOo4(%Ja}C7GL%Y0Vvb(l)');
define('LOGGED_IN_KEY',    'iC5-}w{ZO9-!lc{W~B*y!Jc##3Q|}+n@gP#6GpaJ_i=%w-% &Zh~]mDN;&v1:#z{');
define('NONCE_KEY',        '<e^[ATl/jQ1v.HDadGZC:7pOJ0`wC:-e-kg)8[3?{(GDB+142w-uNdI=`qc$DleZ');
define('AUTH_SALT',        '2#E:zn[w!&$:+:=%aN|>MUK;#e0=z1joVw*W&r^q =:hC%9[g9g-HJ6$d1}+Z*-[');
define('SECURE_AUTH_SALT', '6c/:$r-+[)YMD5oO{+-hvWi.Mb%vi>7]Nlp}`2)Cwv-CVH)gV+fav>7+N|5Nu]WD');
define('LOGGED_IN_SALT',   '+Tx|OQ,t`2R~QWf14kRS5^p.fj+B+W7F!vhzNeIRSm<x[w06Q.MB]x_:NCKD`Toe');
define('NONCE_SALT',       'N~{fGQl$ID^f>:YhO>7|@A&y7+rhGhwZ5DK7NmCkH=KmETR-G?<ZTJ02T|qzcA%q');

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
