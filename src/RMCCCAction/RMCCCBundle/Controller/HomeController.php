<?php

namespace RMCCCAction\RMCCCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use DBORM\CSIBundle\Entity\Tbluser;
use DBORM\CSIBundle\Entity\Tblfptactivestatus;
use DBORM\CSIBundle\Entity\Tblflightschedule;
use General\WidgetBundle\Controller\WidgetController;
use Symfony\Component\HttpFoundation\Session\Session;
use General\LoginBundle\Controller\LoginController;
use DBORM\CSIBundle\Entity\Tblfpthandover;
use DBORM\CSIBundle\Entity\DBORM\CSIBundle\Entity;

class HomeController extends Controller
{
	private $session, $em, $user, $CSI_connector, $active_status, $WidgetController, $Tblflightschedule, $Tblfpthandover;
	
	public function instantiate(){
		
		$this->session = $this->container->get('session');
		$this->em = $this->getDoctrine()->getManager();
		
		if($this->session->get('type_profil') != 1){
			return $this->redirect($this->generateUrl('general_login_homepage'));
		}
		
		$this->CSI_connector = $this->getDoctrine()->getConnection('CSI_DEV');
		$this->user = new Tbluser($this->CSI_connector);
		$this->active_status = new Tblfptactivestatus($this->CSI_connector);
		$this->WidgetController = new WidgetController();
		$this->Tblflightschedule = new Tblflightschedule($this->CSI_connector);
		$this->Tblfpthandover = new Tblfpthandover($this->CSI_connector);
		
	}
	
	public function indexAction(Request $request)
  	{
  		$notLogged = $this->instantiate();
  		
  		if($notLogged){
  			return $notLogged;
  		}
  		
  		$form = $this->createFormBuilder($this->user)
  		->add('Matricule', 'textarea', 
  				array('attr' => array('class' => 'ckeditor'),
  					  'required'  => false))
  		->getForm();
  		
  		$form->handleRequest($request);
  		//$form->submit($request);
  		
  		if ($form->isValid()) {
  			return $this->render('RMCARGODashboardFABundle:Home:index.html.twig',
        		array(
        			'HandoverToDoFlightList' => $HandoverToDoFlightList,
        			'HandoverDone' => $HandoverDone,
        			'form' => $form->createView(),
        			"home_url" => $this->generateUrl('general_widget_profil_edit', 
        					array('home_url' => 'rmcargo_dashboard_admin_homepage'
        					))
        		));
  		}
  		
  		$var = $this->active_status->getDayFlightDoneWithoutHandover($this->WidgetController->getDate(1,'-'), $this->session->get('sector'));
  		$HandoverToDoFlightList = $this->Tblflightschedule->getDayFlightToDo($this->session->get('sector'));
  		$HandoverDone = $this->Tblfpthandover->getDayFlightDoneBySubSec($this->session->get('sector'));
  		return $this->render('RMCARGODashboardFABundle:Home:index.html.twig',
        		array(
        			'HandoverToDoFlightList' => $HandoverToDoFlightList,
        			'HandoverDone' => $HandoverDone,
        			'form' => $form->createView(),
        			"home_url" => $this->generateUrl('general_widget_profil_edit', 
        					array('home_url' => 'rmcargo_dashboard_admin_homepage'
        					))
        		));
  	}
               
}