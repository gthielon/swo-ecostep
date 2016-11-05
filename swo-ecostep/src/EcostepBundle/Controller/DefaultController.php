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

    /**
     * @Route("/mobile")
     */
    public function mobileAction()
    {
        return $this->render('EcostepBundle:Default:mobile.html.twig');
    }

    /**
     * @Route("/compte")
     */
    public function compteAction()
    {
        return $this->render('EcostepBundle:Default:compte.html.twig');
    }
}
