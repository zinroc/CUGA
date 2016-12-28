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
define('DB_NAME', 'cuga');

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
define('AUTH_KEY',         'F1xd/vEBEc6g@p5xft;.EyTjSdLNj`(]ZhayQ{C|{/Di6[x2f3_*lgyb2C?k}W=f');
define('SECURE_AUTH_KEY',  'e[/Z1,M%2Dc#r&Jz:hC&|#Pms9L7a4niy2y|P]]kQ>{(VIk9Bg6gdp6@j#Qaq_(t');
define('LOGGED_IN_KEY',    'gnB=r0l4KckN}4=H{4DAM4s@qtkpEwg7NMBw]u$=Mz?h4hj7p.-oEq1(fb7VQ4?p');
define('NONCE_KEY',        'CXzsip?yT<t 8zt+YP9hIGZy- _`2jMVON{=lb62H->UkmkWZV>KQxM#G7]&;>|M');
define('AUTH_SALT',        '!m%(Vbx#j~CJx nW6drOqwIF]#M^D^b`C:8TJjv9esp^YY$ISfGxCJN>tSNW/ W*');
define('SECURE_AUTH_SALT', '}QNFa)dILa6Z@[Xhf$:RVuWuG-h*tl(p|A&qL0`!4V.^*F~D!~og4i+%Koe}qxF7');
define('LOGGED_IN_SALT',   '_k_SQa2YcQw:hOIx}#A$zC67eR[d,7|m_w/Z=iaDAxW3EJviS%ganIidcTM9y1VO');
define('NONCE_SALT',       '1{SE@Pgk[<@uo^ _=x@r3`OzJPHhEV@Da;X/)G=??s.yc_B0VA9-<<& 1 FK.)N3');

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
