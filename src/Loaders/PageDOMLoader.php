<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 29.02.2016
 * Time: 13:47
 */

namespace oop_Learn\Loaders;
{
    use DOMDocument;

    class PageDOMLoader
    {
        public function Load($path)
        {
            $dom = new DOMDocument();
            $dom->loadXML(file_get_contents($path));
            echo $path;
            return $dom;
        }


    }
}