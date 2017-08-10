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
define('DB_NAME', 'milky_way_galaxy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')R~3!&1u=6?17~jl1GY{PYHm_DLae=A+T|KxWS%>QCMehi%,))k,Z7ctd%791,z&');
define('SECURE_AUTH_KEY',  '0-hspOn}f>XQrkRO%}9 uM`=E.CDJJ=7abwuTwb$Ssnw:aGP!gLUxD2M].]^xz*X');
define('LOGGED_IN_KEY',    'Ot8@Q_R]]L`4l vJW#QE|J),.fs-j5/,2cKM~pi4b#NKW+)I&VNEol]N< Q+oUG@');
define('NONCE_KEY',        'l(c4 dh^QWIrR (ch},|vz[4u!%3 L^QI%/;8b8zQ@$SPcCOaj >}!Z[>sA}:I^l');
define('AUTH_SALT',        'fqI*5@on|5.-3s,0;e56C9C!o7wv`cBkP|K1bMgDWF|mf7|7zIB4B`7*;k@=s)vA');
define('SECURE_AUTH_SALT', 'G~%]#t8xJs`I.pn6D,sy,L^q~=S[w7-%8DG>2Bw^({tVnA!u`)2)m?K=P*~0evjC');
define('LOGGED_IN_SALT',   'eL(e3E%@oxX$sz:SG;}2#J(P1S7)}y98?M`WK$i_@^D`+.A8o%frxo~z( BD-]L@');
define('NONCE_SALT',       '.GNy|VM({XMn4o:T~cyOE9LAo{4^Up`ngLw/MJ3Ug`8u},=y,&JL*+mx<.jH1gd_');

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
