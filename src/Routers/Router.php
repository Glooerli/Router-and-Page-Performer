<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:46
 */

namespace oop_Learn\Routers
{
    use oop_Learn\ValueObjects\Uri;

    class Router
    {
        /**
         * @param Uri $uri
         *
         * @return AbstractController
         */
        public function route(Uri $uri)
        {
            $path = $uri->getPath();

            switch ($path) {
                case '/':
                    return "Huso";
                case '/profile':
                    return "Huso";
                case '/login/instagram':
                    return "Huso";
            }
        }
    }
}