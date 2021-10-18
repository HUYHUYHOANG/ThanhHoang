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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'demo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Huyhuy000' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'yFD,[vHnOWfvli:YvkAO.&5pR@+w`)vYfJ3cGnq]/G&CQ@IWtV9$hbmbgV;=Pqmc' );
define( 'SECURE_AUTH_KEY',  'p2tGy2e&nc&C^zfa7@V Vkkv.x&.0q*=#bEc${#r!awE;K4!62zC8(%0-G,XX#*S' );
define( 'LOGGED_IN_KEY',    'Rg6Czk)AFmx>uaIZroa%8#(@P+?5e&}@vuA]ksrFU GJ((5gA,I*sWOu.IPP+}|$' );
define( 'NONCE_KEY',        '[DLDXMS#[~+=aP[Wk=Uv].-.)^oh)ojVRK 34=1VYko1Dw?@XJMsqRZP9p`X$BBD' );
define( 'AUTH_SALT',        '=qj=azW%/NrI94ILPTbXz*VW2+L#9718qafl `y.+imQSoJ[P|x!s-.oUbl/g!]!' );
define( 'SECURE_AUTH_SALT', 'Hh|;?sdpS@}Ihm]4(ZNLe5]F&(@`Nf%/onbX?DS,V@%}P$lj[!*fB217.yWjGlf7' );
define( 'LOGGED_IN_SALT',   'X%E}C[dG]/@a#`1{3(Hz$@TTj,Xne07$J fi>_uAa2]^b7isU^=vN[l$/@541;)n' );
define( 'NONCE_SALT',       's %vLZ/6M}%iI1dp/PqH+.Py<.66>st.C7K[X_Hj:9P%S;;<^U4QA>3fF]6$5dd=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
