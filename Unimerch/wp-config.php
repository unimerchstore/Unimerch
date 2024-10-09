<?php // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
    define( 'AUTOSAVE_INTERVAL', 160 );
    define( 'WP_POST_REVISIONS', 5 );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '891092_d98f3a259fd6baf47c36985496d10d51' );

/** Database username */
define( 'DB_USER', 'easywp_961491' );

/** Database password */
define( 'DB_PASSWORD', 'oNMqNnLozbhjXujEsGa7AlAbZSpiNlFjqDY2lrrplvQ=' );

/** Database hostname */
define( 'DB_HOST', 'mysql-cluster-0-mysql-master.database.svc.cluster.local:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'J:;7XO>ZF<8%e=m#0D0o5: Elek4%?mBu14knh#T A?X*zY+^2&vT~NMR|uhVxnu' );
define( 'SECURE_AUTH_KEY',   ' l=;tdDDjXo+ggEh<%2)TVM]_7)NL$HZ.NSBy|JO?t:bhLLkFH|v%N|FNQ|}Y=jO' );
define( 'LOGGED_IN_KEY',     ' z*K51`J(=TL;q%RNsnQX!i%@Db?,acCyMYk+n(/yo+f/D[W[bryIe2f9gQ;R-qQ' );
define( 'NONCE_KEY',         '@Y*~FK:|[iXq~mRB0P[18`j G^`^?.Jp?NkWD`aLG)ix5 f#lpw~|8wXHvR|yh6o' );
define( 'AUTH_SALT',         '|i,Jzj3Op+(DF&*gLiEQ_Y%e4U:Es##nhO]7vr@cs3,Ck+3w`<%1_M`T;a^>C25q' );
define( 'SECURE_AUTH_SALT',  'MFnEq^HQ|nGTP][3HHKhCYR%*pG1-f_^rl>FOrPu;w1QXIumh|}EPh>Z=9;c~_~i' );
define( 'LOGGED_IN_SALT',    '+t(OV]C>/XXj>$],,oew|_gk,+l|]jlVMX:2&$M Gou(qsjA8D*^T~JoxeVk:kF4' );
define( 'NONCE_SALT',        'il5m(JZ.:R~6~(G=xFMWgynukIgb,> 6*0G2#OAc-tN-}`AM@,eYk8bC0F{Co<p]' );
define( 'WP_CACHE_KEY_SALT', '8H_Z]P8n[+i:ejrHjumL^v?.pWm[l9ZoMCxl;|[MBY#JN+ dc>T+u-V5J +s7=XY' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
