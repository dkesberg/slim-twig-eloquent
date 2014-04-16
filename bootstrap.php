<?php
session_cache_limiter(false);
session_start();

/* define environment */
$_ENV['SLIM_MODE'] = 'development';

/* Get PHP Dependancies */
require_once __DIR__.'/vendor/autoload.php';
 
/* Get Configuration */
$config = array();
$config['paths']    = array(
  'app'     => __DIR__ . '/app',
  'public'  => __DIR__ . '/public'
);
$config['database'] = require_once $config['paths']['app'] . '/config/database.php';
$config['view']     = require_once $config['paths']['app'] . '/config/views.php';

require_once $config['paths']['app'] . '/application.php';

require_once $config['paths']['app'] . '/routes.php';
 
$app->run();
