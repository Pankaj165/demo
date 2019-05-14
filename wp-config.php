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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '1ecHF=ysdn1o7@-+8p[RKFLg=$jSPl@|WE&^zNodoY:64ighHVp[DXBn> ABE4zZ' );
define( 'SECURE_AUTH_KEY',   '?)&6+S{AEDruXHiu~6[6rS$OlMXT<m=;e|[k}dKMWm.QTS9jdchRK1Xq8e=:X}WW' );
define( 'LOGGED_IN_KEY',     '~<]rc+<[A;n9Pu(5c? L`~Hl_JC;Frk}p~=J;?+-.^$l:?*`-GZ+(y[$z$d#`F%*' );
define( 'NONCE_KEY',         '*2Y^3u|qZ^VMIjv@SZ0BSkO>lP*><:%14s3(Y0x=0jA&5Q=nt>1L3Ni+gBm(RJQ<' );
define( 'AUTH_SALT',         'jxeUcT508}$P>O.c8<!mz9OC@: |OS=]+%eA(6LTwTLTb]]zetkQ}$22iB_e3^2!' );
define( 'SECURE_AUTH_SALT',  'Nv]@w$%o4nx_x|EkX|3vS-Y){Q`Y&tQr5BQk:R}j6tKB(&d&mW>(l}1&N}PMd3~&' );
define( 'LOGGED_IN_SALT',    '?ikDOSBPV6939GgHLs6wqO!a5}ra1,*%wv]+GU|.BI]Zm,J+rQE!m)B~GxHj#LS7' );
define( 'NONCE_SALT',        'cW_VQ*:>y tDGxJ^zRJFqA0&ob0{3&$_GJpU2HCLJheWIabp@MeF#nWB)PD8^o`x' );
define( 'WP_CACHE_KEY_SALT', 's-6Y/8,6&,Jj[C<Q(r#isi#x>_r_)2#2Hgf}|ea_Dw7r<?;;&mb34c{w(@!? cH-' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
