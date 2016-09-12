<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_pingponged", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $ping_pong_list = $my_PingPongGenerator->generatePingPongArray($_GET['number']);
       return $app['twig']->render('ping_ponged.html.twig', array('results' => $ping_pong_list));
    });
   return $app
 ?>
