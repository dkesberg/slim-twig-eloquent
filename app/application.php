<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Slim\Slim;

/* Setup Slim with Twig */
$app = new Slim( array( 
  'view' => new \Slim\Views\Twig(),
  'templates.path' => __DIR__ . '/views'
));

// Only invoked if mode is "production"
$app->configureMode( 'production', function () use ( $app ) {
  $app->config( array(
    'log.enable' => true,
    'debug'      => false
  ));
});

// Only invoked if mode is "development"
$app->configureMode( 'development', function () use ( $app ) {
  $app->config(array(
    'log.enable' => false,
    'debug' => true
  ));
});

$view = $app->view();
$view->parserOptions = array(
  'debug' => true,
  'cache' => dirname(__FILE__) . '/views/cache'
);

$view->parserExtensions = array(
  new \Slim\Views\TwigExtension(),
  new \Twig_Extension_Debug()
);

/* Connect to Eloquent ORM */
$capsule = new Capsule;
$capsule->addConnection($config['database']);
$capsule->bootEloquent();
$capsule->setAsGlobal();

