<?php

namespace DBORM\CSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DBORMCSIBundle:Default:index.html.twig', array('name' => $name));
    }
}
