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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}iY`aJWu$)_{VC<f[+nyaL[jHLzt&h0`kq75H{mi|?!TW1c?bOetU.5+og^jPz=u' );
define( 'SECURE_AUTH_KEY',  '-qu&0FPViON@p%_!708|BshsX]InC(N~AG],9(C3itIwm,F`.YJdc]/a5w%Z<yN_' );
define( 'LOGGED_IN_KEY',    '^4vP|ZF-NwU/r`]El`~0:W$fKS2018J*2]2N>PY7N<=T^.^TJr)c&vTJ)$.tF/0/' );
define( 'NONCE_KEY',        'CbrmiTbEWO7%^Jbv*Y4SpWhPgU^7,`Vgj5oakYg^h>R)Ojm!?~]rxqA,fLuDt1o-' );
define( 'AUTH_SALT',        'IP(aG$cRoR9tODiA[SSgJ {Iax^R(0l}xtktOL<p@w-U*98&[!Hfw,UZD7_N[OL-' );
define( 'SECURE_AUTH_SALT', '~SLSF|7Uu>[z[tF!WD~;o1@qY:qP7*O]yji4+E.9teW@/kJ=) R4w(?vwR]r=RFG' );
define( 'LOGGED_IN_SALT',   'UC_Vy4j+**48_|DLaVJ:1Ll>LS>:K0&v!$}PL3Hrl!QB/K0!A10(mu~5B(?9Jvd9' );
define( 'NONCE_SALT',       'k=m9vo(kBtfo*Qw|.%cB$0u%6W):^-#sDx9`#wN?#>u+Sn9) f&6532V]5#+RnNz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
