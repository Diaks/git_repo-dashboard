<?php

namespace DBORM\OLDCSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DBORMOLDCSIBundle:Default:index.html.twig', array('name' => $name));
    }
}
