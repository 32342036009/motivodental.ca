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
define('DB_NAME', 'webdevel_motiv');

/** MySQL database username */
define('DB_USER', 'webdevel_motiv');

/** MySQL database password */
define('DB_PASSWORD', 'FGSo8k~OQ93z');

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
define('AUTH_KEY',         '*SEO`tPtK{/X(Y&8@>6eaGObUl3g-]-a[#_ i*K5~b{%uZC-%HS4i5sizrx-->4d');
define('SECURE_AUTH_KEY',  'E6r]Itlu~O-]f&A5PiZSq6=*L+:j3?@Z-`SJ+&%}x_TK-qIK i&)&L{W#~~`3Nl:');
define('LOGGED_IN_KEY',    '`_ |R]xJvQEoC7GEnFE *unsg_kT1z&|oMV8`!~hL(AAb&jv`k3W%s[2c+5=l**5');
define('NONCE_KEY',        ' i-{(NhNNy4<J38x0!R1pz2LA=^-e|gqh :Q{X7vEQE4>geg2jwJCCk0,ij]ZZDA');
define('AUTH_SALT',        '~l)!.L2|AEd>j^+<c;9/O)&2_GJw(zu9~I7ka<*(Z{EPzm0KoN|K<R+{38V|d=a8');
define('SECURE_AUTH_SALT', 'ZXR$WnV75o`][i,jRwY}KNb6I^D|h%_~ky]eEr.VuU^-S^1Bf!Y/$OS9P?_=[4}}');
define('LOGGED_IN_SALT',   'B-IvL+`*l1>/wmZdPj@n>`[k?H]#SCSD_b>+!yVbbY;ujG`0*?6gHS_yFxV%Ytnz');
define('NONCE_SALT',       'H)Vgtx4W$OdoMlGtF|$,54Un5N6O)g637<*,TnIH_?!R]y=-v*MJ@3IOOy`C]U=1');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsr_';

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
