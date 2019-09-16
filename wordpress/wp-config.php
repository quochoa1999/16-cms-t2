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
define( 'AUTH_KEY',         'hV@{e+5HP&=~=axO01+>^CD&9XD6M<I/jUj)J:Yns0P}`4g5PyVZIC0dsi:OaMxc' );
define( 'SECURE_AUTH_KEY',  'X|Ga3e@KK[V 7do*jfozNeKO^Fl:mGy1A!UscS<iI~!]Ck s5V2mDcZ)=%C{!d])' );
define( 'LOGGED_IN_KEY',    'a^z:S/UmIa.PE;Kjm`1tvPf)dlm)M4A5g7)NH>/j]W}D(zx+/yffU(oSfo;IGGT*' );
define( 'NONCE_KEY',        '@7F]x{YRG&Rtfr4 Yxp,_T0T+8BYhz|/cktfnhN>^l1CC<lY^Vb~H5,$0U !!vmu' );
define( 'AUTH_SALT',        'b0[/}! v(FP 7BO=orziUi-p=@]{5r2g}WEL,dTWBUr&2;lVI$Eyf;8G;}7qYXve' );
define( 'SECURE_AUTH_SALT', 'M=se 0U,dF25SifIu9Ts>6hwDW]!4!m7z/jQ5&,Dc}{t(`6`!KS+Zna?lqEGC<1Z' );
define( 'LOGGED_IN_SALT',   '>@J.CG+lCpjF{lFZsy?!u$<}FLdwK6kj1j^S#;6)}rO2t@z/Be3s&WsI.zlXRkR ' );
define( 'NONCE_SALT',       '`D2Q2?JuiJ<,aZxxU}od-M3sy)kA=.6X&zO[LN~mSYaeSj]c;|:;4e_J8fq6N5)3' );

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
