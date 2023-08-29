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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         '^ j0K@q/CSd@+[2iZmGB|1au)nUo.V8fQ{j-NiN7_GERkLkntZB`+z26lmvDHk5U' );
define( 'SECURE_AUTH_KEY',  'gNAg,x%Sd^Dm{!Wj58^C(r4CP/*#f0T.g@A#yaWcZ6kc&fWG8N<D|1,wnk|8}uOH' );
define( 'LOGGED_IN_KEY',    'w~hBw2];pFQ^^0M|/nA?.VR2vjAFelzs=9a~vs4O4V33A/^)sPqr` N`uD7#KYLL' );
define( 'NONCE_KEY',        'r22=xelpPf4C/M:LrGi fcwZ]RZm7{ZEhC$@6G7 AS`K@-7FZN,a0y Jpu<d*>S-' );
define( 'AUTH_SALT',        'w?O~7|_/s%iYY>~Xzd$~OlLcE3HR>yoH+1]SwPcJuIJJnF|3aq,2-KN+8fE8Vl$%' );
define( 'SECURE_AUTH_SALT', '?4bg*{y+|J{r(m0r=z&fj9[f,~QAw9sOH7m%rjc$SvYNK&8aDi~@z=| 8&%7y(X[' );
define( 'LOGGED_IN_SALT',   'M^TgW 1.XS?%Bs:MURgn7NLJRX /:$C9ZTlS1>3!wf)/KpU/;84j)IskcQy|&9;n' );
define( 'NONCE_SALT',       'BL_*WE073~5&e//m0Ch =k!3miDaa?hk!;d3,9m0bfV1E iWx1pjN1*DtG:);;9A' );

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
