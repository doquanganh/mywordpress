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
define('AUTH_KEY',         'S>f-K{xk[tE7P|!:?]/2g7%7V[9GOj]J1_,S)W1qM|op &Exdi_4SD7Bd?;1)`td');
define('SECURE_AUTH_KEY',  '.Yy}Snl2-<AXZTsa#3|n3J 4kyu;3|``)XAz<EVKnnKe9_{nRgp=pkPW0aD$ZkBS');
define('LOGGED_IN_KEY',    '}[80vPi%a:Zf.xxzK1L|hETLI=&X%?2.vkyZ9bq9}|Z__~/^?n%)U)oiNK+72~p4');
define('NONCE_KEY',        'hJP>B5LQ{Nr39yl.(Np3~KDM=G?QaiQW#OK Y(|:dM!+90>:WW,162a96&2hdDld');
define('AUTH_SALT',        'jA3pg?nPVQYLgZniLN*GnL{haiUT=n00Ym=Y<%YQ2a8pJFu,5g_d*8IAjR&p4l,I');
define('SECURE_AUTH_SALT', 'MA4kE8@Z:S=ZV=H$U.WFFr@hV7<]nN4RK_:D8(G;jVQ%BoHtcMvuf35Aq_wMB#<:');
define('LOGGED_IN_SALT',   'IVb>c[CluiC3HKj%W[m!aO}[Cw+)USvtSWhty Q=29@Tz{M,j~Agbc=I*u#bA!8e');
define('NONCE_SALT',       '}vk|:%%sS*LB)aw9iZ=8ef.zIm!O/uXL{b9n3m`_<xtqWblm]!+neo~yq svtrfF');

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
