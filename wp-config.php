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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'z^KSxZI[Ev=Z ]BH[Xv.b`MeHmW*2|,UV}e`=V7iMoK.jM2vzQLzQ|5QCj.B8q=Y');
define('SECURE_AUTH_KEY',  '?s{~U@r(p-nxFef%T7U9a?90`A<+mcEHB`Z|=@1Qo.$#1VJ*&#7j}9 y{%tQ/c }');
define('LOGGED_IN_KEY',    ':igNMt(z}eqF-Aan>T$e!w`_i !Jwn#).m2LM;!v% QM1 YkxhQRG)amYXnW`+^n');
define('NONCE_KEY',        '[uO>@Tn&W_r}+#lKN)N gQs5>)rsd+0s6+<*sADo9NaP-$Mc?i196#?@0]w1+@g/');
define('AUTH_SALT',        '9^Mm//2,{Vf9g12s)OHs?, N!xF q[wEM2dX/[j>s9C+?U^%uPBjWIA;b8=fD3j,');
define('SECURE_AUTH_SALT', ',xE.CylqsRilEo0o6hX#?Im[B<*:Sc#P;.[I%EK^9%3lWMc+jKoQ>.`8.nO%{7R*');
define('LOGGED_IN_SALT',   'Q8+mGst]estn[R*{fXO5<fA]H,Wb[y5/j*uIv;e6H_Rm(;>C.kSUY+zsnZ9=}gU(');
define('NONCE_SALT',       ']x(,%L~u C3-5:ZG^ErKAK[~ZHTust=zpK}Drnf).qpXghYt=q?;>4l]sQ=Vx YD');

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
