<?php


spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'oop_learn\\controllers\\frontpagecontroller' => '/Controllers/FrontPageController.php',
                'oop_learn\\controllers\\abstractcontroller' => '/Controllers/AbstractController.php',
                'oop_learn\\loaders\\loader' => '/Loaders/Loader.php',
                'oop_learn\\responses\\response' => '/Responses/Response.php',
                'oop_learn\\routers\\router' => '/Routers/Router.php',
                'oop_learn\\valueobjects\\uri' => '/ValueObjects/Uri.php',
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
