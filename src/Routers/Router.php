<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 29.02.2016
 * Time: 11:07
 */

namespace oop_Learn\Routers {

    use oop_Learn\Controllers\AbstractController;
    use oop_Learn\Controllers\FrontPageController;


    class Router
    {
        public function route($uri)
        {
            switch($uri){
                case '/':
                    return new FrontPageController;
                case '/bar':
                    echo 'bar';
                    break;
            }
        }
    }
}