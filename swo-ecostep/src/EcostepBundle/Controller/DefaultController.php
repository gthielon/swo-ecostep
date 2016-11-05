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
     * @Route("/alim")
     */
    public function alimAction()
    {
        return $this->render('EcostepBundle:Default:alim.html.twig');
    }
}
