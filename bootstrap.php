<?php


namespace oop_Learn
{

    use oop_Learn\Routers\Router;

    require __DIR__ . '/src/autoload.php';

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('Europe/Zurich');

    $router = new Router();
    $uri = $_SERVER['REQUEST_URI'];

    $router->route($uri);

}
