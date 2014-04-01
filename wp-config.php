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
define('DB_NAME', 'WINE');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '8Sajq2Zl~3yt8YWVC@VpHe+@`+KnAcGYP]I}D80RaLh.F~9|PWp;`s/IZo}p3Pm ');
define('SECURE_AUTH_KEY',  '+^-Yv- 33bUkzxE2sVpb@K+eB9+]`Z20ddiS_7:u%4~f--]&0U|+-k6->+|au1y|');
define('LOGGED_IN_KEY',    '81v|cPGuco}on|+0UV9d/3szrr+<0y3XA=_;Eog*_Pc,]Sai|-t K+dchR9AQXrJ');
define('NONCE_KEY',        '@!lHsaBt(`6Zk+(G Fw9OA-e+FhJm:o-B9#9]1)Y324!f;T4IQ]YHOqb,A9E~9;A');
define('AUTH_SALT',        'Q:yU?eV-sGE)zlmq|b>2_ZsjWQU 62Ul1aE4^ YRmo>-l}Z%84dT(@Q[gdcG({pQ');
define('SECURE_AUTH_SALT', 't^yh9VkPVScgA495lQ_b~,G~`lG%gw: .tm*n8^#O-M~!@VWEhLUw4Lq*M+JP3I%');
define('LOGGED_IN_SALT',   '29gOB7WAkrY+MJ{G*6aAfFY|F&Xr9?sfh198rO&[RFo[qzokwCfIcOSD]Fk_^M2k');
define('NONCE_SALT',       '^ DnTw!<e$6^mbCH3rHd-<GT?Eyfj;qC;#|0O4[t~qI0t_8+s_)]bL.jbJ~C>e~|');

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
