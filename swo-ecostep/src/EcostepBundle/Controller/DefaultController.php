<?php

namespace EcostepBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('EcostepBundle:Default:index.html.twig');
    }

    /**
     * @Route("/map")
     */
    public function mapAction()
    {
        return $this->render('EcostepBundle:Default:map.html.twig');
    }
}
