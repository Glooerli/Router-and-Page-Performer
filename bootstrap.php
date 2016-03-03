<?php

<<<<<<< HEAD
namespace oop_Learn
{
    use oop_Learn\Routers\Router;
    use oop_Learn\ValueObjects\Uri;
=======

namespace oop_Learn
{

    use oop_Learn\Routers\Router;
>>>>>>> origin/master

    require __DIR__ . '/src/autoload.php';

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('Europe/Zurich');

<<<<<<< HEAD
    $router = new Router;
    $uri = new Uri('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    $router->route($uri)->run($uri)->send();
}
=======
    $router = new Router();
    $uri = $_SERVER['REQUEST_URI'];

    $router->route($uri);

}
>>>>>>> origin/master
