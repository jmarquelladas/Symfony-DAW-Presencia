<?php
// Espacio de nombres
namespace AppBundle\Controller;
// Librerias
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class JM_Controller extends Controller
{
    /**
     * @Route("/jm", name="homepage")
     */
    public function jmAction()
    {
        // replace this example code with whatever you need
        return new Response(
            '<html><body>Hola Mundo Symfony !!</body></html>'
        );
    }
}