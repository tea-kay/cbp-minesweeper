<?php 

define('SYSTEM_DIR', __DIR__ . '/..'); // Constant defined as the path to root
define('APP_DIR', SYSTEM_DIR . '/app'); // Coonstant defined as the path to app
define('PUBLIC_DIR', SYSTEM_DIR . '/public'); // Coonstant defined as the path to public
define('ROUTES_DIR', SYSTEM_DIR . '/routes'); // Coonstant defined as the path to routes
define('VENDOR_DIR', SYSTEM_DIR . '/vendor'); // Coonstant defined as the path to vendor


require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';