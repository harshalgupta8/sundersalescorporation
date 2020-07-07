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
define( 'DB_NAME', 'sundersalescorporation_db' );

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
define( 'AUTH_KEY',         'HGOjmZDx6}vGwIeON&q%^}a]fZmpux`byONk}JTa2%Fz|NYrsHG=u-A^Z6/RnKGQ' );
define( 'SECURE_AUTH_KEY',  '3-EfL,mT$tig56Z-f#foxR2J6WET5,MY8E5h)O{2O3sR-ge}Wn^wQ!K{,Mee*bF{' );
define( 'LOGGED_IN_KEY',    'cMo}+(oruf1m<3W1^yy=ep+D_|&b{>/l$gE#,EK-K!R&^;r>t HS:E0tSUWrwdmk' );
define( 'NONCE_KEY',        'gtDKMq9MA8E7=g#eQ^X,>W]~7c(arn]3$XcA;2-Ns]xZ0C);|ZSV|x%*C{^8Dmd)' );
define( 'AUTH_SALT',        '<*7+!X<-Dt1H[hkHHsf@_ei])?<=C<A.vE-,_qSq:#z7303:z(.lt/*P=4x:@jf`' );
define( 'SECURE_AUTH_SALT', ';Vz:Hj2hQe%c)Ck;utjY5ufk+UX~)96hg%S^~=[&^TA(;SH}AB0#fJBu&14.,DT%' );
define( 'LOGGED_IN_SALT',   'A}Xt| N$>uH2H0 d_[^5yZ?&[y~qlRr5ae$`4yXQAC7&zL.8afWdKdlpKzT.$]@u' );
define( 'NONCE_SALT',       '^8H72h:,@kC+@MyNTjD+,/+@7[<`% Iy3kwMwr3S>IMZ7##?>Et/mZ_G8vu%M_q`' );

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
