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
define('DB_NAME', 'escola-infinity-banco');

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
define('AUTH_KEY',         'n{(*HVDTQ:ql+)ch+;B,9i%x|Q1<?d=7|r_H/|hCpVE9pibDm>T=E|-Lc3)Nl<q%');
define('SECURE_AUTH_KEY',  'G!n4H<uA$7}zp@B0i{p%n`o9sdEKyQ(dlgB=d;-F)iNiU<6yrF-,hlFnrc|m?(h4');
define('LOGGED_IN_KEY',    ']<A+-9o6.@4.0*;Z0m6dnbOW48E @C?$tfL!Q#nU|`@G67l?7q>AX]t7k{yE T[&');
define('NONCE_KEY',        '1Rn,g O~u6=XBjYR/~YU+3y!|//Z^su}/s8pwcIn:,d1UA{%tO}e[s(&G.WJQb~c');
define('AUTH_SALT',        'Z{tE:R_p!!kgA-e5#Bdt}FI2V?CjXGntIY?50*!qCZ8PB98yWENz9SHaB&(=uOW!');
define('SECURE_AUTH_SALT', 'H)PU ;[28?1glJ&_xHX(qF*mmiCe]GF`kz:o@<)$TrA&J~CC:c13;ON@!^y|teVq');
define('LOGGED_IN_SALT',   'x0(W!.4H?H1W&*1T6jA],7x9UckrFc)O*HS8#}Se;;*}:Uvoq$un0ehD@vR!@Y[^');
define('NONCE_SALT',       'wEKMYP?a{KnbDvff~:*If]`>.3t:>^/5/xZj&GK5{FZo}N(,KNgvPS[77Kp:jxx=');

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
