<?php
/**
 * Created by PhpStorm.
 * User: Lukas
<<<<<<< HEAD
 * Date: 09.02.2016
 * Time: 23:38
=======
 * Date: 29.02.2016
 * Time: 12:32
>>>>>>> origin/master
 */

namespace oop_Learn\Controllers
{
<<<<<<< HEAD
=======
    use oop_Learn\Loaders\PageDOMLoader;
    use DOMDocument;

>>>>>>> origin/master
    class FrontPageController extends AbstractController
    {
        public function getBody()
        {
<<<<<<< HEAD
            return $this->loadDom('/var/www/oop_Learn/data/Pages/index.html')->saveXML();
        }
    }
}

=======
            echo 'hello';
            return $this->startDOMLoader('/var/www/oop_Learn/data/Pages/index.html')->saveXML();
        }
    }
}
>>>>>>> origin/master
