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
define('DB_NAME', 'unixstudio');

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
define('AUTH_KEY',         'c?3oS48&m}{gs]it}!r$OM4C1TA:.ABbHc=y9fb<!,(nDu%&Np>nj9,vyMC0=C7:');
define('SECURE_AUTH_KEY',  '5|h=}aAl41>PO<]Yf]5+{1EDH|Wl^FB:t7[ n_TD!)8K?jTa@iE=xw+4ti?xm +#');
define('LOGGED_IN_KEY',    'U^{s&m5*ZsL-@`o6FI2e9f#MugFx=0~5IVlJQIA0pa.o*I6|-^i!l8?9r6-m4Hij');
define('NONCE_KEY',        '^sxIZhu&GKmHaKZrOS4MMyqF_5F}St|2JHfl]U(*om?N,H+gY1SOz>*mX/-*hc]K');
define('AUTH_SALT',        'Q`xyS]a;/)R/kfXYaNA/Sy(}WPUzbvo1{R4zKJ{O}@KX:wS5tj4wb@Fv]Zu1M6Ai');
define('SECURE_AUTH_SALT', '@(Krhc$.BEd%qRF{4!gY9u<g?d|F*&aySX%ui?dR.CPCk;-O]iqq^-3Y!NH7EufI');
define('LOGGED_IN_SALT',   ')@}$ US6PE G[fq7}/Zy^+who:(4P07hcXTN}$aPqGiJJSJqcqq4[J$$`l.V=Vf~');
define('NONCE_SALT',       'ojyBL8(7uc@ZDqy%c$Fr&7JqV*R#4x)iPA+Ok=gILac;G5UZaYC}S}R2YItSZk/j');

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
