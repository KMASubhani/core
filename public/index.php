<?php
  require '../vendor/autoload.php';

  /* Create Contant Variables Straight Away */
  $app = new \Slim\Slim();

  // MORE TO BE ADDED HERE

  $app->get('/', function () use($app) {
    // This is the Home Page
  });

  $app->run();
?>
