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
define('DB_NAME', 'lindoresgriffin');

/** MySQL database username */
define('DB_USER', 'lindoresgriffin');

/** MySQL database password */
define('DB_PASSWORD', 'lindoresgriffin');

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
define('AUTH_KEY',         ',?c=!ZL]J`,3fBoj8 %mR_m+`7?fH5Vv>@KBa4>qcX_P!tZ3OirXCKv$)@yei8t5');
define('SECURE_AUTH_KEY',  'YFvyeuwpnc?*V-/w3Ldj}I9Y*HM?@R=0I$VqmR@$[+ !|HqYG m<(e+M*4z^1,p&');
define('LOGGED_IN_KEY',    'zSeA`m>/Gh[&,Q}|2RpLG {KXShOpoUY9JI`gT~}r>dpHZhp)OvrAV^zj6S&O(`j');
define('NONCE_KEY',        '2(_`<n}lJj`oS3!ebue&}gUhqP[hI(5w5y>]*QA#WK:_c(zi_-nZ-.^=CKdt 3r,');
define('AUTH_SALT',        ' !];4y_Us#(vo9;V(u6*qF0[@1|aW8zPuh8lZ$3T8f? FbzE)e<|.0G3,<eX5_E]');
define('SECURE_AUTH_SALT', 'K!DfE!];R@7jEbrwuMU0K2^VnFMM8#>~Hi@+Cy;vS2~B7QG{a^[4Le}?A>l^)z-?');
define('LOGGED_IN_SALT',   '6el*p^B:4`T5Q#&D3u01AM/(hQM%d~xXo3MIxZgg9b!Cc=>wPh$,v_7Ou~p_[xFh');
define('NONCE_SALT',       'UdcNk{F<h>eR k5@^6#Gq&>oVAHK~gwA=]vj_z0O}N<^fb=5..*6S}K@P@_nkLVE');

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );