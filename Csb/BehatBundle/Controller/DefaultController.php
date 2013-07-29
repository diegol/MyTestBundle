<?php

namespace Acme\Bundle\AcmeMainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
