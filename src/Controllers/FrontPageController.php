<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 29.02.2016
 * Time: 12:32
 */

namespace oop_Learn\Controllers
{
    use oop_Learn\Loaders\PageDOMLoader;
    use DOMDocument;

    class FrontPageController extends AbstractController
    {
        public function getBody()
        {
            echo 'hello';
            return $this->startDOMLoader('/var/www/oop_Learn/data/Pages/index.html')->saveXML();
        }
    }
}