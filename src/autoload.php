<?php

spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
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
