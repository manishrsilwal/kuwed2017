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
define('DB_NAME', 'kuwed2017');

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
define('AUTH_KEY',         'FeJyX}DE8oI_ORl%k+gig{<k9/;)|b_c^vtrFK2C2iMN<&N *N6?#+3wxl2dcJ26');
define('SECURE_AUTH_KEY',  '1(y=Aa^60bH5lx_Pbk+9p!scrl<?pq2u0yhOQnS[X#,k%;B8+3x3*Q?I`nLb+)P7');
define('LOGGED_IN_KEY',    '/@9hx+-}DnUQ21Ouk`7KydAR_6iq5(AY?YAU?7B/d&h]-$Nyh!7o}x5t?7iWo:n_');
define('NONCE_KEY',        'PxxU29y@ocdNLTnHuq|F2ZHI~!`7H%[/-LSzOm0t+yf`/R+|)HNNk&<&N$kHJd]u');
define('AUTH_SALT',        'dI;$/bd#br2~irJP s|zq(KSR%NJ<^<+--y{7[O-&@X9[bj]x(i_j7tq=k%of,rf');
define('SECURE_AUTH_SALT', '*zFykSUWtZ0KKN^{ZOa{v@e?HonY*OxST|mf0T3NIE5eV[K[,8p/~kvfN107Z9>U');
define('LOGGED_IN_SALT',   ':X,a^s3H;mWl:Z6D~.~?fTZ~l3v4/;YVe4__.FP1jB4baL%+DVKu8=HC_/pk/0#J');
define('NONCE_SALT',       'aki=W*H<HPWV;!@SC#=SJ5.S{Ee&]]9$NP})TYYu`CL6p92czPdY$oIlIh|IsnPR');

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
