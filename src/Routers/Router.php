<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:46
 */

namespace roobique\Routers
{

    use roobique\Controllers\AbstractController;
    use roobique\Controllers\ProfilePageController;
    use roobique\Controllers\FrontPageController;
    use roobique\ValueObjects\Uri;

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
                    return new FrontPageController;
                case '/profile':
                    return new ProfilePageController;
                case '/login/instagram':
                    return new ProfilePageController;
            }
        }
    }
}