<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WeekdayFinder.php";

    // Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_day", function() use($app) {
    $my_findDay = new WeekdayFinder;
    $weekday = $my_findDay>findWeekday($_GET['month'], $_GET['day'], $_GET['year']);
    return $app['twig']->render('view_day.html.twig', array('result' => $weekday));
    });

?>
