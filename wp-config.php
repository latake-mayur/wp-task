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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u533912763_DQ2Zv' );

/** Database username */
define( 'DB_USER', 'u533912763_pPCm0' );

/** Database password */
define( 'DB_PASSWORD', '0bLkmZHgrv' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'gXj,*^~b(VnY7<5cfea#)d:&;:EW2nb[uI5V`X+)[k2d mO=N]=RY{Yk{(WH>;5d' );
define( 'SECURE_AUTH_KEY',   'maLj77a:Kp-=~4^_?%TJMFk]L.k24j1hex*3]W3dN5K0y/zONzTYWFM^y 1([Rb0' );
define( 'LOGGED_IN_KEY',     'L.`^s[w6DW!d~*9G,asqh+^#U^pM~WDQYz5x-n60C3{_RhUXSGm)j?1GD)==)}&7' );
define( 'NONCE_KEY',         ':7T 2zz@Glgwyun@G=C^lXU5?:MN*TVyNBl|<gI}8|[EWG-=wr0%p|yLJ0B2NVxN' );
define( 'AUTH_SALT',         '{7aAVq.n<+lg^|[:N4Ir@ga:.,yKGz^{. -/ot;LPh1JBlM2J?nN!p}N{iOj9uV8' );
define( 'SECURE_AUTH_SALT',  'sl]}#d.yd:`(}uT,HyM,])YylQ5*xN-s.LXZ15r)dJno7<u^oHzE[tb5[f7]} nd' );
define( 'LOGGED_IN_SALT',    '80w/k}z Mz&QjVPzmOkOZ!icW[q$vY-=/7eWY96([EyJ/Q{)qZGhu?WI&Y?#psJE' );
define( 'NONCE_SALT',        'lH4|Zx:R-lS~>cdi.HlPwxoB~(s x#t)e?`OpRO=B*W9xB.R[2 |r8%]L6<l1~tv' );
define( 'WP_CACHE_KEY_SALT', '{ayH^9PaI1Aan^GI*Je:wtR_#%ouBQ&c]3If#n~JC_H2ESzX%cPN5>uP;jPUYRB<' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '78a0e5dde7ea15f0f009d59ce5db47df' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
