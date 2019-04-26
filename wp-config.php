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
define('DB_NAME', 'rcb-fashion');

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
define('AUTH_KEY',         '[f@v1p[9;tCeSiDd0RL=34:7um?EO3L2%efObJ.=c6K6] L=yOVYSC>r A}z>nl7');
define('SECURE_AUTH_KEY',  'gdQ1G4,05Kf-vjS&]x3)sDO,k[=W,e;A[@Qs(yBMK&D%,:Wgsx`7Oe[GOsmv*U$g');
define('LOGGED_IN_KEY',    'f/IA?-eV3IjTDeA27`T1IB:Rxc 4|Yj:iaJw:Z%s{z2*dDcZ9#.m:56t$[]Oq>]2');
define('NONCE_KEY',        '>b[PgS%$Jwhftq3qB`.))_MMFqf}^VUS(=jkTtM6_*;YR}LS!69_4q7ZpbJnC[nM');
define('AUTH_SALT',        'Gg{,e|C8IE:MJWQXX:&[,=zt_FTCPtBekJ01L)k`I8TF?C[2dudLPLD0Lv*X+t/f');
define('SECURE_AUTH_SALT', 'kz 65t$7xlMAwyOs[vZ+EQ_  +szT^xwUiuisf)1[R-=Ft}x_`}wj#/zz{>Bc>1e');
define('LOGGED_IN_SALT',   'cM#/Yrnbk[;uwK[zl}@FS;FGMh@$Mgb-)Qt~dvc()G(8 .7H&d@59h|&s~xZ~!;{');
define('NONCE_SALT',       '|WQ}Yj4vQbG:S #_<yT~!{#bYl*ThD%M5Oq:KW45<u+~)~0Z4W+cA0!O7th)QeA*');

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
