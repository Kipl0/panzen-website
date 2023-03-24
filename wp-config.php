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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'panzen_website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'O0$wGH-6c0v=JQWl PUmTkgV9mPCTQ|wa;3.(uIwGPs)[ ]HuI=d%0IlOqskhhIE' );
define( 'SECURE_AUTH_KEY',  'u]H|I0di+&HE5<?TM1xz}`|,6#D[Q{-v,vW!SnV.i=kk7ypuc#n$pL|WV:%WWl?_' );
define( 'LOGGED_IN_KEY',    '/)]IEkM6Jk[EcuWu6*|J1h^(}cx:XCEXbY}|C(r7e>Nc]H7n3e)0HLj.<s0V^nol' );
define( 'NONCE_KEY',        'MO{%q0WY}8D8[~NRB_N48iT0-K4OU5yd|$kcby`Pqj0|y5BpW$~{X$1;SjYq--kG' );
define( 'AUTH_SALT',        ',{{gI+.5L|0&g0>b-Aj0<r;fnk+m=L0w<#f4S~h;cc|)YMN;XuHII)BA.wCaE]Mg' );
define( 'SECURE_AUTH_SALT', 'M-Pq]P`RG.QX<.)qnB95$.j3gbF;6j1z81l5(`?4Uj;AOJ)eR9$,4U1TR-}189<>' );
define( 'LOGGED_IN_SALT',   ';IawXm_<U8.<on=K*,RTqP$c)%,)Y-QGt8?-Z&-|6+f4|ER=XD RH5K^G3^ly099' );
define( 'NONCE_SALT',       'DnCV >LzgnC4=Xt[q*nId7;Xc8l+jqBR)oq,d_a<I4`EPKKSFYlPojUwp@1&MJ+9' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
