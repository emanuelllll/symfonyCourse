<?php

namespace Erik\Workout3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Response;

/**
* @Route("controler-level")
*/
class DefaultController extends Controller
{
    /**
     * @Route("/routing/{name}/{lastName}")
     * @Route("/routing/")
     * @Method({"GET", "POST"})
     */
    public function indexAction($name="yln", $lastName="yfn")
    {
      $response = new Response(json_encode(array("name" => $name, "lastname"=>$lastName)));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }
}
