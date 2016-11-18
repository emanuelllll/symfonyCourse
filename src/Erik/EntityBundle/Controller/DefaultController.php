<?php

namespace Erik\EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Erik\EntityBundle\Entity\Workout;

class DefaultController extends Controller
{
    /**
     * @Route("/entity")
     */
    public function indexAction()
    {
      $workout  = new Workout();
      $workout->setActivity('yoga');
      $workout->setOccurrenceDate(new \DateTime());

      $em = $this->getDoctrine()->getManager();
      $em->persist($workout);

      $em->flush();

      return $this->render('ErikEntityBundle:Default:index.html.twig');
    }
}
