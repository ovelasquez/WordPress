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
define('AUTH_KEY',         '!J<eO%y`;,=KBD<b$|(<9zLgD`jz9xt:k?e3m?W_4mhl4Kd0_2KR2HM%HHI;T|^G');
define('SECURE_AUTH_KEY',  ' 6v}6`}7u7JSFLd$C^@Y4IZi?ADO(lTM>0zd@SX)TVSd=P1v ;Y;LCPax+98H><E');
define('LOGGED_IN_KEY',    '06e7Ov3mqFb{W4)>#~W=J0=B_WW1Qqz.>@_Int2@7@{,hjfA+W;!KUw7-v3r}i )');
define('NONCE_KEY',        '-i*[Nf:8-y|PQh57j)t5nNCugu;@-e-vEb8dtnBy%mssqxrh:%}@CyRUQR6(=n_)');
define('AUTH_SALT',        '|Nh9U}*gx~TT8z+hUPIhzhOzws;|9&rLWV8MX(PUL,k?f[6p(P5l7Lt8sH1t,b^Y');
define('SECURE_AUTH_SALT', '5JQkH{Fle=43A2A11K-M@ijwt1?u]F#YKU+xF_%6T6QDpGQmg, ?1jsC.SI$c@m.');
define('LOGGED_IN_SALT',   ',:WeG!pTzmUC!fj[>l: 9YtBKwyakbRr]V1t}:1_8pgZs`S.(4MaraK*T7?z(R&N');
define('NONCE_SALT',       'bA96ge,QK-mS 6KM>PK{ZK,oO^bv>mel,p3hR@&ywA75.ZVfs@<ZhJ5K#)nbbm(:');

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


