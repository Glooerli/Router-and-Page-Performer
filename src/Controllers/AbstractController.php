<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:35
 */

namespace oop_Learn\Controllers
{

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
            }

            return $this->loader;
        }

        public function startDOMLoader($path)
        {
            return $this->getDOMLoader()->Load($path);
        }

    }
}

