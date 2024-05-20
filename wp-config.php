<?php
// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'db_72kb');
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'kb72');
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: '');
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
define('AUTH_SALT', 'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT', 'put your unique phrase here');
define('NONCE_SALT', 'put your unique phrase here');

// ** WordPress Database Table prefix ** //
$table_prefix = 'wp_';

// ** For developers: WordPress debugging mode ** //
define('WP_DEBUG', false);

// ** Path to the WordPress directory ** //
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

// ** Sets up WordPress vars and included files ** //
require_once(ABSPATH . 'wp-settings.php');

