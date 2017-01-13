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
define('DB_NAME', 'teaching2');

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
define('AUTH_KEY',         '@{mOKGE`BKew?fFC}~zt0vC%`Fa}Vg1e<%^T>u#tRuM.>pm87Az&ckFYEr6nGL2b');
define('SECURE_AUTH_KEY',  '>7PDj]b55?ms)ue|aV>2mX$MzPbH IFy2d:!l~6AUHe_cgkS3NYVWY_HRV3MRb:b');
define('LOGGED_IN_KEY',    '.Q2)XG[W_:^}HeMh/6^`}C8XN]W0n?g8/]0NVxb(yyHBs3;wck*Z$Pn3X*Zdh8A<');
define('NONCE_KEY',        '0h+YwC%nACn)xKf>I<:Xzp2(*c/pm[XXnIC|.bo%(vaWl]V}2`>-4C?u@6Xa>)_n');
define('AUTH_SALT',        'R4%z;.yCEuyQa?ta8Ua0q8qPc.%k~IZ}6J{h:Y($LZZN@lF~zQ4CX}<&eBhaBME1');
define('SECURE_AUTH_SALT', 'pDL$EJz;ZA[Totx;*My2v/8D!U`Y9hf15EXpK-LZnD^J;wzSn8<w8uh~~2xv.KSB');
define('LOGGED_IN_SALT',   '97^_+2xlH[s~<B!di4*X]EtgAC)OcobBtfosYl_:vw$*]ee.^%s<ANph}0D6MLCu');
define('NONCE_SALT',       '0B`h*q,&{LTF=Grsi](u9v>L(ARiKt!6$Z-*%Hzw12x.(6MawRFL2u}gD}45nes=');

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
