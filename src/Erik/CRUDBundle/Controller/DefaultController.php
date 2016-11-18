<?php

namespace Erik\CRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Erik\CRUDBundle\Entity\Workout1;

class DefaultController extends Controller
{
    /**
     * @Route("/crud")
     */
    public function indexAction()
    {

        return $this->render('ErikCRUDBundle:Default:index.html.twig');
    }
}
