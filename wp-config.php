<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cthemeacf1' );

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
define( 'AUTH_KEY',         'YZVF[H@$B5MaBZ,N$X^]Bb*-uUW6 t!JGOjV8m/*fN|d3B(DG8epiuo;.T0f|wQ)' );
define( 'SECURE_AUTH_KEY',  ')7_rfo*}-)Z,.9<TeJl(mzq|d/_>DHG{E5WDidO6N.l3c[VWzq@J%^.R$<b/SZ5E' );
define( 'LOGGED_IN_KEY',    'Q>UY.g(OYVo=zCwE}H+D1iiRM~Zearvm4k=:4Cl[FcjDWnS@@MwhPt6KxdK;nPx;' );
define( 'NONCE_KEY',        '7uL}sHKZ_DUW9=3-$k}3tPO~4dhg BO/stGE%CX6[]E-Y>%6*rK%^C$*:f*&k a0' );
define( 'AUTH_SALT',        '^l&5@iOS$S_;Gr1+;VSS0|E&*xe9iR:Lk-1Dac/x5^Bb/%hoVeZE5R.RJX$CsH{e' );
define( 'SECURE_AUTH_SALT', '0)}`/F~)6:>p4t;+xJ!tM.(D6Uy)Jj$ 4Q#icGFlNx+fzQr+r!N4tL}xw-[O07X$' );
define( 'LOGGED_IN_SALT',   'qo~b(O#>eNqV!I3p`w[~=G).qj.2z:hPkpmCf[o<}|sxp(I}mD^`<dA_:puWJ.E.' );
define( 'NONCE_SALT',       '^^C^PtaA4F]UM)8PmXq.LT3ECd*-S Mz`q!gMhM]#&BY7W)ckMcM=]b|+%R[kp/e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
