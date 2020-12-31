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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         'sLcgdEh)B&zN#<1OV$`UI[cvL|7iRbe{Z-<Z!/WU^&S>1&*^Mt8ww,(wIyk-%(i=' );
define( 'SECURE_AUTH_KEY',  '`fqF-2q2Z4N^9#M^^J]yLV)`WS1SI{<Lqw96S(`EiOIu[~?t{!>L~QPI}tK5(sNG' );
define( 'LOGGED_IN_KEY',    'Pvv9jc|[w8epMHO8FCq}Xfjp[ =N,LBZL)A?wg1HMz^c)EhhlWt(O6ET>P=?siM_' );
define( 'NONCE_KEY',        'S67`a:2Iayt`EK*hx`)~ZBi<Pc~^p|PdL9t,Wz/}^vS4HI5Q0?fB.A+oEo%&P~f.' );
define( 'AUTH_SALT',        'Hy3cKf,QwI^?F,H*U,<q$ 8;tGIxR`7<nXc$>Ns)m:EP8:V,Tr4]c~#lGpbCzz8v' );
define( 'SECURE_AUTH_SALT', 'eNb[Nsw2p^VCvM#LvF -!rY` S7A(iOYZ)zU`q&IZaB`VP$YcA3!kkhg<&N%IbKB' );
define( 'LOGGED_IN_SALT',   'H<Nl^{xB-jqrzK3h4tsb8)[*QvZeq,JeB.-ypNsfyU*w,E=$NeSVES d!}=(hMe{' );
define( 'NONCE_SALT',       'B}`f2mAB]W@K:xOAa.q*;=|lYb[>{@[em2;DKlecv:$s.-q5ar5f6pcp$GX/Wugy' );

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
define('WP_ALLOW_MULTISITE',true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
