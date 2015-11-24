<?php

namespace DBORM\KLMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DBORMKLMBundle:Default:index.html.twig', array('name' => $name));
    }
}
