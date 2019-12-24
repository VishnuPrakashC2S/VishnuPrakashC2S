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
define( 'DB_NAME', 'vishnuprakashc2s_db' );

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
define( 'AUTH_KEY',         'G4(ry4raQ:4zLx;St7M%%<i{}Ht@IM[@Zl)? EBd, :- eQN^m}{7/S48;&;mGJQ' );
define( 'SECURE_AUTH_KEY',  'Z4,eQ5l*GJ(EuyB~wtQqd7}c6r pf+|dJ]t^O|`cObR/[Ki+YvA?uS]xIBFv$P#0' );
define( 'LOGGED_IN_KEY',    '4x(unHD:&!jmxE$*Z86aqcLeAI|`{MSDiQy{=n{z_o$wHCEm!_$V(g#AwYqgN=&l' );
define( 'NONCE_KEY',        'mJy80G{w*dq>:eAac`ASNL|i6VO~$V6:2-w2r<:fG>u;Q6.~kZXryn[1pNqvp2h{' );
define( 'AUTH_SALT',        'BTaz@6KJ;-/b]Ond(ognk}#_#m[f,aM4P~%rPe@ _L>GtM>T!1n;BVF)*mmdB<RP' );
define( 'SECURE_AUTH_SALT', 'R(pL&rgx,*qf`}s`pS4pTGD*j;Wm(VUL1KW9kP:pT{P*z[gkH[7/ m8-BwG:~Vka' );
define( 'LOGGED_IN_SALT',   '>_U!3qAR*?QLR9E#y}l:=*;/9=sY%)+yt #x<6S1rHZcku-z4*lUbMM,Hz/JSD2k' );
define( 'NONCE_SALT',       '&_=B[F+c^o,!F`TTEX5H<=1S[2K/yB32( Bk`4N$x(zH~+?gK>2=!Ljj& U`:W(6' );

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
