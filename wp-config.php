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
define( 'DB_NAME', 'spectrafilm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<}MVm/M^h-6-pNt[TyJM+LE]]oy x/vTLf_Cduc$v5qINqDo.>b.+m(>s[1)o&SS' );
define( 'SECURE_AUTH_KEY',  'IkaW}F;_*I&c5M-`hP);ME?*`sZ[+C4YUWS[wnI=@VFFy{yZ^Q@eKv&@sxUgh*jC' );
define( 'LOGGED_IN_KEY',    'iuDIC(NVKm@  6y.u)y~rkXfPpKj+F;[|j(HDCJl*Fc!rXmKH~`v=m[J:.Q*S/sM' );
define( 'NONCE_KEY',        '&*fJ{*KRm)s}Zdf};iFf{a5>westDk_mM*on3P}6+HZ{z4sN%.$+ibS>K0^5]m,n' );
define( 'AUTH_SALT',        '{J,y!t:OsKzNp^E?@bi]k!(ic|x/J#NAa~9|&QA2sMEpg#GJme(dG*O^P}ZimEA[' );
define( 'SECURE_AUTH_SALT', '-o5<(Gy|3A/x3Q7cMNMMWYj1tYuil(W8ldb=[jp`ma?Qzju~u)(&F2Ha,4L4Q|.k' );
define( 'LOGGED_IN_SALT',   'T.yRA/iV(6NlT3h}|Zryq5gHq0mP|NR.zQ<>sn<V9A)4JV`X6VN[Csjc=~EB{>7e' );
define( 'NONCE_SALT',       'G)-*v3)lq{0W<trNYw2AC)m>Tq u| !tR6jKde$C<9,7G#}s*C{NptjwZtuWvnh|' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
