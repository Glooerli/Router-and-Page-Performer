<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:35
 */

namespace oop_Learn\Controllers
{

<<<<<<< HEAD
    use oop_Learn\Loaders\Loader;
    use oop_Learn\Responses\Response;
    use oop_Learn\ValueObjects\Uri;

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
=======
    use oop_Learn\Loaders\PageDOMLoader;

    abstract class AbstractController
    {
        abstract protected function getBody();

        /**
         * @var
         *
         */
        private $loader;

        protected function getDOMLoader()
        {
            if ($this->loader === null) {
                $this->loader = new PageDOMLoader;
>>>>>>> origin/master
            }

            return $this->loader;
        }

<<<<<<< HEAD
        /**
         * @param string $path
         * @return \DOMDocument
         */
        protected function loadDom($path)
        {
            return $this->getLoader()->load($path);
        }

        abstract protected function getBody();
=======
        public function startDOMLoader($path)
        {
            return $this->getDOMLoader()->Load($path);
        }

>>>>>>> origin/master
    }
}

