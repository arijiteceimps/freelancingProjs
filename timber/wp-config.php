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
define('DB_NAME', 'b7_23049376_timber');

/** MySQL database username */
define('DB_USER', 'b7_23049376');

/** MySQL database password */
define('DB_PASSWORD', 'Admin@123');

/** MySQL hostname */
define('DB_HOST', 'sql202.byethost7.com');

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
define('AUTH_KEY',         'Y^Oj[H:S{dT=&Cfb4L}{^bq|L*05+YH^UNWC7; jJA1~;l4c-*:%icOPe-Lx}W$o');
define('SECURE_AUTH_KEY',  'h4qQiY2nG38VwHp~Wr+p7yK>9E/J[kifcc:G]0embv5)Qr4FxTI[l(-9:m*~mHNW');
define('LOGGED_IN_KEY',    'dalUV/)ZCik{RB9afYjZ}Y7L6Bxu7F@} UMglQ*%Av|@`|mnuvfU.{;XlJfeq,&[');
define('NONCE_KEY',        'peVVmX4`[)ch},oOwKA!urT2T$avUYlO#M`C9gCOVy41JNzLYrw/HNj =p>vD70A');
define('AUTH_SALT',        'l@nb&OHmK34_ldyz hTv5.*!0f>O[u!TNJIo1,a6M.`qsddVZ{5KL1R2#*Z*2rWs');
define('SECURE_AUTH_SALT', '61t(WGR %mD#p9a)K`R{)s?~|=`-5W2cNN-`j3zgwR9[0E?:&#S3j4|iXlLh|/XG');
define('LOGGED_IN_SALT',   'PlQx8f8_>(lIt(jIR=K} :Wq|owk*z-=zV$dinOsl]BADl92$9FsHZ3Fvj:[?(tc');
define('NONCE_SALT',       'z&)|y!b{62<]uE42VJce+Q`<u!:u$tG|0c88?YJlL1:uk@[B4skzIG<LM|&_7I~G');

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
