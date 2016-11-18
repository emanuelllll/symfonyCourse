<?php

namespace Erik\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("twig")
*/
class DefaultController extends Controller
{
    /**
     * @Route("/", name= "twig_index")
     * @Template("ErikTwigBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $workouts = array(
          array(
            'date' => new \DateTime(),
            'activity' => 'swimming',
            'hours' => 1
          ),
          array(
            'date' => new \DateTime(),
            'activity' => 'yoga',
            'hours' => 0.6
          ),
          array(
            'date' => new \DateTime(),
            'activity' => 'gym',
            'hours' => 1.5
          ),
          array(
            'date' => new \DateTime(),
            'activity' => 'running',
            'hours' => 0.5
          ),
        );

        return array(
          'workouts' => $workouts,
          'name' => 'Your Name',
          'age' => 99
        );
    }
}
