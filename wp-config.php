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
define( 'DB_NAME', 'teslareferralcode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}e|R!`?WAj?l}+-er_L4Amoi]l#(rqn,l7?k^6&5@6w< *?)d$vwhd$E0H3+-Da+' );
define( 'SECURE_AUTH_KEY',  '`kh`B}3y#^vjIGP4V&Ntt%A~{w9L#/qOQvqW;c*`B=W}igDUET2`~$)i$@[fhqJ#' );
define( 'LOGGED_IN_KEY',    'UG$~zCUX=&ee7#7lw}/Wnix^/+;Nus);lG_@x,C#9{dNJ$LSD{a38zqc-8`.qedj' );
define( 'NONCE_KEY',        '~$[ia.C;+.b&&=~5P{k5p}4jUpA|:ql^KP1kQ|i`iG?8l>a^yGwo3Ksj%!ywPN]Q' );
define( 'AUTH_SALT',        'E:MV$V1mg@d28;Z(gYvX!HE?HI*5nD$Xz+6-;T>C1J/3&&$fDD0]V$~E!}<f[BxW' );
define( 'SECURE_AUTH_SALT', 'AfMfHzgUIP}:t.di,KNbAxIBO2m&H&a8c3< sb>u^;jpy||YLle^L}nJ-Mk?Gect' );
define( 'LOGGED_IN_SALT',   'bWe1gc{]|I<^yq`MGb%A}-ef P7j[7|vWr_ll3bGYyUy$oot EaP#7|QGZM`+Z>M' );
define( 'NONCE_SALT',       '7W;~iHA9j`/emd&:ryVBQZ-dYwC*vF^xCq;jA4CV+{Lo1vqEO$FgvCgd%oDPKta/' );

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
