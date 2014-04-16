<?php
/**
 * routes.php
 */

/* default view data */
$data = $config['view'];

/* routes */
$app->get( '/', function () use ( $app, $data ) {
  $app->render( 'index.twig', $data );
})->name( 'index' );

