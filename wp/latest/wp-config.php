<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 *
 * @package WordPress
 */


/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE', '' );


/* Authentication Unique Keys and Salts. */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/* Wordpress debug */
define( 'WP_DEBUG', false );
define( 'WP_ENVIRONMENT_TYPE', 'production' ); //development, staging, or production

/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '500M');
define( 'WP_MAX_MEMORY_LIMIT', '500M' );

/* WordPress Cache */
define('WP_CACHE_KEY_SALT', $_SERVER['SERVER_NAME']);
define( 'DISALLOW_FILE_EDIT', true );

#wp files
define ('WP_CONTENT_FOLDERNAME', 'static');

define( 'WP_CONTENT_URL', 'https://'.$_SERVER['SERVER_NAME'].'/static' );
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/static' );
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/static/modules' );
define( 'WP_PLUGIN_URL', 'https://'.$_SERVER['SERVER_NAME'].'/static/modules' );
define( 'UPLOADS', 'static/uploader_folder_here' );
define('WP_TEMP_DIR', '/tmp');

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* MySQL database table prefix. */

$table_prefix = 'wp_';
define( 'CUSTOM_USER_TABLE',      $table_prefix . 'accounts' );
define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'accountsmeta' );
// Here we just simulate how it's done in the core
define( 'COOKIEHASH',    hash('sha256', $_SERVER['SERVER_NAME'])); 

$cookie_prefix = "cookie_prefix";
// Then we override the cookie names:
define( 'USER_COOKIE',          $cookie_prefix.'account_'      . COOKIEHASH );
define( 'PASS_COOKIE',          $cookie_prefix.'account_pass_'      . COOKIEHASH );
define( 'AUTH_COOKIE',          $cookie_prefix           . COOKIEHASH );
define( 'SECURE_AUTH_COOKIE',   $cookie_prefix.'aut_sec_'       . COOKIEHASH );
define( 'LOGGED_IN_COOKIE',     $cookie_prefix.'logged_in_' . COOKIEHASH );
define( 'TEST_COOKIE',          $cookie_prefix.'skp_cookie'             );

/* Site Info */
define( 'WP_HOME', 'DOMAIN_HERE');
define( 'WP_SITEURL', 'DOMAIN_HERE');

// repaired tools
define('WP_ALLOW_REPAIR', false);

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
