<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Main
{
    public function indexAction()
    {
        return new Response(
            '<html><body>Index page </body></html>'
        );
    }

}