<?php
  require '../vendor/autoload.php';

  /* Create Contant Variables Straight Away */
  $app = new \Slim\Slim();

  $app->util = new \Core\Util();

  $app->view = new \Slim\Views\Twig();
  $app->view->setTemplatesDirectory("src/views/");
  
  $app->configureMode('development', function () use ($app) {
    $app->hook('slim.before', function () use ($app) {
      $minifier = new MatthiasMullie\Minify\CSS('css/style.css');
    }
    $app->config(array(
      'debug' => true,
      'database' => array(
        'db_host' => 'localhost',
        'db_port' => '',
        'db_name' => 'table_name',
        'db_user' => 'db_user',
        'db_pass' => 'db_password'
      )
    ));
  }
  
  $model = new \Core\Model($app->config('database'));

  // MORE TO BE ADDED HERE

  $app->get('/', function () use ($app, $model) {
    $app->render('head.twig', array(
      'title' => 'Home'));
    $app->render('index.twig', array(
    	'page' => 'Home'
    ));
    $app->render('footer.twig');
  });

  $app->run();
?>
