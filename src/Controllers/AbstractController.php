<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:35
 */

namespace roobique\Controllers
{

    use roobique\Loaders\Loader;
    use roobique\Responses\Response;
    use roobique\ValueObjects\Uri;

    abstract class AbstractController
    {
        /**
         * @var Uri
         */
        private $uri;

        /**
         * @var Loader
         */
        private $loader;

        /**
         * @param Uri $uri
         *
         * @return Response
         */
        public function run(Uri $uri)
        {
            $this->uri = $uri;
            return new Response($this->getBody());
        }

        /**
         * @return Uri
         */
        protected function getUri()
        {
            return $this->uri;
        }

        /**
         * @return Loader
         */
        protected function getLoader()
        {
            if ($this->loader === null) {
                $this->loader = new Loader;
            }

            return $this->loader;
        }

        /**
         * @param string $path
         * @return \DOMDocument
         */
        protected function loadDom($path)
        {
            return $this->getLoader()->load($path);
        }

        abstract protected function getBody();
    }
}
