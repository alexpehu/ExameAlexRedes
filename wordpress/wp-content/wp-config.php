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
define('DB_NAME', 'alexpehu_wd');

/** MySQL database username */
define('DB_USER', 'alexpehu_alex');

/** MySQL database password */
define('DB_PASSWORD', 'alex123');

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
define('AUTH_KEY',         'un|4;Wt:XUL<jA5[{4,{5(p@~MVYi>.~d|0JW=Bp?O+X(tAHy@>[R1.k+n YDd0-');
define('SECURE_AUTH_KEY',  'J~z{1HP!E.Tw_}FAZCZv`?U/`H~- ALu)Z/1($P8tA4|jnMH^%2*vCy34&(Zl;L~');
define('LOGGED_IN_KEY',    '_9%tWMq~w2TYf&(%)Lr)Z!)Q#[>%iMR4k^Z+jm&^gz%5*;-@39ae{H-X{Kt_T3{H');
define('NONCE_KEY',        '@bt#kO++]lA:Ue9klQvJ9SK<{Xe~qM+z8>R9tb;+N6+bU8<D5QmNf,fkz5|p^tLJ');
define('AUTH_SALT',        '|%k1*_JLm[E.C6aZu!XbuCBFxO}a]%Dh&%O@D].+9hPq9@eWh|o&/XKwhHQ>f(qR');
define('SECURE_AUTH_SALT', 'sX}e<^F^ezLe=+Txf]w+FD9Zo2B)u1N*P1imTh%fQ3mp:lX&0c^6E^4G2jnu./P]');
define('LOGGED_IN_SALT',   'nekbHn<;<Xk+`D{XNc:xpJT7Nlqn88>+x%L!8:,C;PPx~RO.Jy0?<SFvVU0x6@fX');
define('NONCE_SALT',       '{MDdzZY(2,hq8-v~oX+3Lt?,~Ao%b9DAve#-(|/Pw,1i99X|s#ba:xC2SBuYC><v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ap_';

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

