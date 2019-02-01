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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'D]>Y{xaBOju ! l%#OD-An^l=uo{:5;VpTN/]0&:2^`<w9%kLFU%R5Gvde2poF6r');
define('SECURE_AUTH_KEY',  'Srzgx#^oxRwl1D0GHrc_<$J(yE85_A9B,R,G]y}}qudIu(8-Yt1Skyg@F~@UQ5)N');
define('LOGGED_IN_KEY',    'EDRgyU^[o=_JY5pgfuuHyu:{PF0zZ<tLZ5KpynUs&sDLjwDDpio|p+.:JEwDX?W$');
define('NONCE_KEY',        'gb%M^`]VWwK/&Q(;;B~H1>,q2d[#>4uL?V,&G2JG8;A_L*Cm|H^l+QZC==*|/r{=');
define('AUTH_SALT',        'ut[GL@+G 9u E|d[f8u09t&iS0U=^NBS!8x;BQ7c1}%MGQ5rS]d`fVALHHu%EQN3');
define('SECURE_AUTH_SALT', 'sP$%RK)i*#[z;oD4+8^2&(iQ@3rtvL#QW[Q43Twna7b]&EGrzZ{t;Gb!yfYkM<$X');
define('LOGGED_IN_SALT',   'rzEyV(w}]nM#3cUhS!s6%}tX PAFQr~1%%! m:RJ6W-3|tK,VTspK2HH-+v8s!BP');
define('NONCE_SALT',       'xAGVl0qClNc[Q-j7}6HOHbRg@}UBb=SzX1N!n oZ//uJI)$Z3ND2XP_4f9Q^W:&%');

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
