<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'riolapatour');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'relogio123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5>9J<5/1@z+k8 pmNaUWiQ|}JBu@K|[hFkbo/S!9x1;(KUaY#cT-9eU;>_r!:?Zi');
define('SECURE_AUTH_KEY',  '.0SJcjUhe=U[_/ENZamjtcr&wq(>%z$_{JALbTC n&Zqp|+HJX/5;DLNB*/L9Cid');
define('LOGGED_IN_KEY',    'aSNBX!NG~+s-E#/ Bdo-L E5btW,@3nw$4Iz-x=^*s3gglNoe1}) !R>zNZO5<A-');
define('NONCE_KEY',        'znRA8z.y+@^oY{VSRM7!q0!bQ[{u|kFRj-U%>h2Cu]=c<e42g6@|:y[Nh`BwbG=@');
define('AUTH_SALT',        'qun3)wjw}}8*|h|9bh!$+4A,t_I;XCp0XQgEw+b*P+^n,D+*V`^ORG6huD@KQsZy');
define('SECURE_AUTH_SALT', 'ZU6G= ><-LN+iE>UDuPX0H<fLR-&wwKn[k2%wB>/OH%!Hm`ooI)V&*G{~&)%eS{e');
define('LOGGED_IN_SALT',   '++.k-c:XnewnKy-*c?Hx}EYYza/#|oa!hx&?|3T#jnKY$WeD>srq+$<BC@R iSH<');
define('NONCE_SALT',       '&ge]6H76[?t-X=aM:|epAZ]n[Ch9>U8M[B%N`,IU1mOYU%fjm<trVA-Xq_P@+7OF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
