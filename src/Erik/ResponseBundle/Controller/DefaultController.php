<?php

namespace Erik\ResponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Erik\ResponseBundle\Controller\DefaultController;

class DefaultController extends Controller
{
    /**
     * @Route("/response")
     */
    public function indexAction()
    {
        // Plain text response
        // $response = new Response("<strong>hello</strong> world response");
        // Json response
        $response = new Response(json_encode(array('name' => 'your name')));
        $response->headers->set('Content=Type', 'application/json');
        return $response;
    }
}
