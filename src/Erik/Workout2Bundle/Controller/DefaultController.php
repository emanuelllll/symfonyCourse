<?php

namespace Erik\Workout2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/sayHello/{name}")
     * @Template("ErikWorkout2Bundle:Default:order.html.twig")
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
