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
define( 'DB_NAME', 'joyfulevents' );

/** MySQL database username */
define( 'DB_USER', 'jerome' );

/** MySQL database password */
define( 'DB_PASSWORD', 'stage@Cross20' );

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
define( 'AUTH_KEY',         'nQi}1NNTFm>G7Gyv70?r&pK8UJd#E!Ytk0N)Yet/a+/.m F+^N?W*zq;F><x 8y_' );
define( 'SECURE_AUTH_KEY',  'Ho#O,Ivx9y`#mCDxOt]I>)%@/! jq;E%c9(UGO@-X:&+*kJT4r}3-3f>f=e/:K>^' );
define( 'LOGGED_IN_KEY',    '1cu*^?7uEL`7N_jl_j?ZU &7y)=dVbj..V7gr,IdsHSGgFIU?T37/6xzn#?jv4$F' );
define( 'NONCE_KEY',        '3bf3ate71Ai+bQgN/Z0qq:NWy>5d*N?m3/5*&C!Usut*G5n;=rMiQ5a jZ<2LPkU' );
define( 'AUTH_SALT',        'kQ<z#r84GvoB9{Dcr^FIf3GOTK,]%sv:JAL4wvS-EiQN}gu^=fEU1LL!!rPSeVR%' );
define( 'SECURE_AUTH_SALT', 'L2_r4O(F~#(#aFp18=&A@~]wEML]@n|EtNbiM@KI$hSh&x?H-Bvj}|.} /: R0;6' );
define( 'LOGGED_IN_SALT',   'asXe ]JM%tsfu%$*o.M<dlN;$JQ$TB{B!LB@<f6Pa9,#!=B`yiUu L:<7j3p$:h.' );
define( 'NONCE_SALT',       '^=-A.KUMD$Gm_?#$6/7<bNy*w!!C:2Upaz#Cp9?G$&MQ/dA_wA@U,4ZZtaV?+Y~)' );

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
