<?php
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
	public function indexAction()
  	{
  		$session = new Session();
  		$session->start();
  		
  		$session->set('name', 'Drak');
  		
  		$em = $this->getDoctrine()->getManager();
  		
  		$user = new Tbluser($em);
  		$advert2 = $user->getAll();
  		$session->set('name', $user->encodePassword('AnalystDev_02'));
  		//d7382367520feb4dd5584eec710a4bf1c38f86d80bc4197bf75e23c1a1563edc
  		
  		return $this->render('RMCARGODashboardFABundle:Home:index.html.twig',
    				array("advert2" => $advert2, "session" => $session->all())
    			);
    	
  	}
}
