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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '/viS>jlS>rP@ziegURL{5!)nkRr=u/)~h$mzC.&]MhDDWv7b<T0LmyD(mpz3JvyY' );
define( 'SECURE_AUTH_KEY',   'El@J@8l|/;R/Tl2L`a2KWBiPO/8X~|aT W-`,r#pQJf_oK{P.wkwAmJ!$Ia^{jE{' );
define( 'LOGGED_IN_KEY',     'vMqGgNK1y2_;M*B%+PTGQ:*W5o(GmC~gW$M0]V0#!D]^/[k=z[kC}#c2*]8Gle[F' );
define( 'NONCE_KEY',         '`aCx9FHS8utN 3zfs U,3B_rT.h%tl4xw@`)IR|2s!gXc`E#uux(a;h(}ofpuKF)' );
define( 'AUTH_SALT',         ';i%W1:#t_E1c]k[yuousF N61o^tcqlhl_E)xGlO,1M@QqaVpy1tprQ6}AhRp6RV' );
define( 'SECURE_AUTH_SALT',  '2U`/5rc]UICw_q}foX;V_~Ytay4wzA!]AKidQwUK;Jzw]rRjk8VOBuh+XR9q,/o<' );
define( 'LOGGED_IN_SALT',    'u/=q)aK;V,-^z%>e5ak{,VEAf5<3#;?,w=(E,eSvXLv`gh/z5m-P8Bp=S8x?2BIp' );
define( 'NONCE_SALT',        '$ZuswopLUU`e4+sb#EvKO)L/,d:ac[FXZMGy5b2?06Hi60cUrnwu4)K{cXHAKp;V' );
define( 'WP_CACHE_KEY_SALT', 'RMDGEao(}a5Tp4=bo2rsT!^LKXo`rGABb@,3/` CV3*9SOhK!_%/}_h6.K2Mj6^,' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
