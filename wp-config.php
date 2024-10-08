<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task2_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=hmugL!n=F@F/R$p:H)|JwRsyN>?H]RqNr.x0Yy@f!ySCP75z1j8 WgSK@.Y)+H)' );
define( 'SECURE_AUTH_KEY',  'nTQ/Sdb4NU6vltkR: h=W$bTKFl2Xs!A(4LcB{lNEi]0VhsS[Jh|U@w [dP[:u+/' );
define( 'LOGGED_IN_KEY',    'FKBw(}dE3fpP@rnZm$+bC>zMW4eo]#;16)d_/bU`?Scz5zdwNk:=McaGAs+|qSOJ' );
define( 'NONCE_KEY',        'Nmg?P-klhn`@Rv@^Zth5YSWuhRxykf:43wEi;;#pHGk?n$tha{Od`3?!6+cn`M8V' );
define( 'AUTH_SALT',        '},3txFp)n0e>3MCCzEb?$csT4l+V0uq}(mmY8B&`P3W`V0c{A/sgFvB.MGY?h-DW' );
define( 'SECURE_AUTH_SALT', '^QC$V9i~-:zvmZf);CfB|{_/ESR:9n)lm_{joE*7dSn%)xhm<`Ed.++UFAFM@S|k' );
define( 'LOGGED_IN_SALT',   'j4p6b |NxrDI#,TWeBmX6{/|[k4Te,6[q2V)[xldG+er%vaa6HVziNzH$Rqtf`f_' );
define( 'NONCE_SALT',       '=r_wQ_adI*h$/}A[02J-Cv))l[yZRyGX[d?<j5)f<PD^a:f&m.}Wa=k?xtA]b7]a' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
