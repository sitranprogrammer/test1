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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spa' );

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
define( 'AUTH_KEY',         'iTmF0QUzMfE-TVAa.Y@jP5_sfbu,_ml|{l@BO?}y:h7]wji7}_Mb!HHy/G,ty&6!' );
define( 'SECURE_AUTH_KEY',  '-d.s+[wEe(N5yr}ee5JhV.?EBVB8NV+OvQ3z5b}[4@wX|W@4WAH[mvI}?Cc;<z>e' );
define( 'LOGGED_IN_KEY',    'R Y(P7p hQO6J-Z~vmYh5I~]ICmKKb{fTYAut8Jjmx`EN#ZKcHA6c}))?S/9B1OX' );
define( 'NONCE_KEY',        'v~C,{ZGs,)nf5#q},&neyPwUecc(nYyB:C[^N$CM3T 7zi^rtub+0x*J-p2l+vT$' );
define( 'AUTH_SALT',        'O{ J?MP7DNj`QdEm?A@NWMS3a}[#C(3H#&T[p?U%shpp.Q^cHrCcS@Dc^Kn#8<R)' );
define( 'SECURE_AUTH_SALT', 'qIWsZ`6b+sW6^zs&_yA]J5x_co/$PrEfrB@=vG?dmA]Ya{$Mh=fZcGX/qY.BcBMk' );
define( 'LOGGED_IN_SALT',   'KfrtB:cfbap;2}f^ftIAY-)yIk&tqhDr`s|Uwld|}O8[82~%fm0iR^Oty:%O|-R@' );
define( 'NONCE_SALT',       'w<?-=6=,t(HvnVDE<B)1),T{*-!;oxY8`p,8BWKvZ$W(LrYX.1VhVYulmLem9Huu' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
