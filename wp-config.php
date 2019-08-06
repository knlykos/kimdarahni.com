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
define('DB_NAME', 'kimdarahni');

/** MySQL database username */
define('DB_USER', 'kimdarahni');

/** MySQL database password */
define('DB_PASSWORD', 'Kimdarahni546.');

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
define('AUTH_KEY',         'O{favrx2/C<A4j9{}%lwM*jSJsD;PPHaAsc)>~AJ^<${-%!HEZN=H92HUTuR~y*(');
define('SECURE_AUTH_KEY',  'rtt_sQLk8l1f{*N!=)%H!0aVwNY.AT2]TM,;h|U/g~bKUi/GxD=RWz=:vB1~UU_9');
define('LOGGED_IN_KEY',    '2)d-%- chX{R?[tRB7r:IsB+zh=QC;G %6fCK28-k.TIVH8jVn~E)e+9i#&!&x{q');
define('NONCE_KEY',        'BxB4<+0A4qMjry(R6XrifFBmb@;U.9&j ,tIBLoCP6=)!2>S8QhOBVSG9#^C6z9L');
define('AUTH_SALT',        'L/<e/?J@lAteF]z]7P*hTe2[y1@,6-[f#49hOFN@!t/*;,|Ke#ZSVKH,u>at@N2n');
define('SECURE_AUTH_SALT', '+;3Vem7f2f/}D2C/r!Oh7z&ReRPWSS{M2O9tV~#/x`m#O/Ph=<.iD57,/X4J#z ;');
define('LOGGED_IN_SALT',   '8ls):=H]l:[Ao|vD%D{Y`* X)d`W^`S=8p{CH&}U-z1{>p&]Ck^{<XCuW^!i1bpr');
define('NONCE_SALT',       'K9,T1AF#Tz<eusikKl|Rl1Ag=y wIbdrN]?8HtK,yieaM/_=K)d9uPrf2^pshkgx');

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



define('FS_METHOD','direct');
