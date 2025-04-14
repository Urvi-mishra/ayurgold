<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ayurgold' );

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
define( 'AUTH_KEY',         'mL^!W|xjjM>}$|WokKA:?NXPVT<C+M!s:yYYge3[uM`M]fc]XT2VLu<,.^c6.h,>' );
define( 'SECURE_AUTH_KEY',  '`V5^7T7$m2Sj$Wj1`XyD90K>k$ZblX[MR,% jb/c^GAM6Q%K#zm0SZw+Mv06gZkk' );
define( 'LOGGED_IN_KEY',    'Dt!O5@lfvMw]2r4}LR...1,vi#<*^mvu<M%I(D@HC(39G1rXF%tG9izxP3y.Vt`v' );
define( 'NONCE_KEY',        'Vgi,6i</$[$0vMCJpNR^N2oFHS`;Y=I+h^q7j8]j)~U,0D[) y44a:v+imfmTm)d' );
define( 'AUTH_SALT',        'L%2ga=P!1l0q+w7Hy9!20.|Ha}#1B=-iv;Z%WF0nnX+R(p)3&Ywq#BU&hsYfPyzy' );
define( 'SECURE_AUTH_SALT', '6F>;&R7y?{<aiTVJDUc..j*M`rqB-4=JZfdkJDu/m5_Y$?{BC!y?8U4=9!cJ&o}g' );
define( 'LOGGED_IN_SALT',   '$wQItoxq_BUaI$s) |;K.AW:<9sMkX<Q$;7;.gP,SWo_U6a ev/p}Ata(vG~)pZy' );
define( 'NONCE_SALT',       ',r}juFygHS_ddD#dwZF+tcv?92~~;E3)v!AMS5/z}gnO}`{R+V)EqH:4u5D OKbr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
