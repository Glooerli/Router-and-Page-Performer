<?php


spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'roobique\\controllers\\frontpagecontroller' => '/Controllers/FrontPageController.php',
                'roobique\\controllers\\abstractcontroller' => '/Controllers/AbstractController.php',
                'roobique\\controllers\\profilepagecontroller' => '/Controllers/ProfilePageController.php',
                'roobique\\loaders\\loader' => '/Loaders/Loader.php',
                'roobique\\responses\\response' => '/Responses/Response.php',
                'roobique\\routers\\router' => '/Routers/Router.php',
                'roobique\\valueobjects\\uri' => '/ValueObjects/Uri.php',
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
