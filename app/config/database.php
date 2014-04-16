<?php
/**
 * Database connection
 */

/*
	|--------------------------------------------------------------------------
	| Connection examples
	|--------------------------------------------------------------------------
  | 
  | SQLite:
  
    'sqlite' => array(
      'driver'   => 'sqlite',
      'database' => __DIR__.'/../database/production.sqlite',
      'prefix'   => '',
    )
  
  | MySQL:
    
    'mysql' => array(
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'database',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
    )
    
  | pgSQL:
  
    'pgsql' => array(
      'driver'   => 'pgsql',
      'host'     => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'charset'  => 'utf8',
      'prefix'   => '',
      'schema'   => 'public',
    )
  
  | SQLSRV:
    
    'sqlsrv' => array(
      'driver'   => 'sqlsrv',
      'host'     => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'prefix'   => '',
    )
	*/

return array(
  'driver'    => 'mysql',
  'host'      => 'localhost',
  'database'  => 'database',
  'username'  => 'root',
  'password'  => '',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
);
