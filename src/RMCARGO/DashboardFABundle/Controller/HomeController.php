<?php

namespace RMCARGO\DashboardFABundle\Controller;

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
use DBORM\CSIBundle\Entity\Tblsubsectorcomment;
use DBORM\CSIBundle\Entity\Tbltracksinstruction;
use DBORM\CSIBundle\Entity\Tblcccactioncomment;
use DBORM\CSIBundle\Entity\Tblqueuesreasonscsorequest;


class HomeController extends Controller
{
	private $session, $em, $user, $CSI_connector, $active_status, $WidgetController, $Tblflightschedule, $Tblfpthandover, $Tblsubsectorcomment, 
				$Tbltracksinstruction, $Tblcccactioncomment;
	
	
	private $Tblqueuesreasonscsorequest;
	
	
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
		$this->Tblsubsectorcomment = new Tblsubsectorcomment($this->CSI_connector);
		$this->Tbltracksinstruction = new Tbltracksinstruction($this->CSI_connector);
		$this->Tblcccactioncomment = new Tblcccactioncomment($this->CSI_connector);
		$this->Tblqueuesreasonscsorequest = new Tblqueuesreasonscsorequest($this->CSI_connector);
	}
	
	public function indexAction(Request $request)
  	{
  		$notLogged = $this->instantiate();
  		
  		if($notLogged){
  			return $notLogged;
  		}
  		
  		$timersTab=array();
  		$comment = $this->Tblsubsectorcomment->getLastComment($this->session->get('subsect'));
  		$HandoverToDoFlightList = $this->Tblflightschedule->getDayFlightToDo($this->session->get('subsect'));
  		$HandoverToDoPublished = $this->Tblflightschedule->getDayFlightToDoStatus($this->session->get('subsect'), 'PUBLISHED');
  		$HandoverToDoError = $this->Tblflightschedule->getDayFlightToDoStatus($this->session->get('subsect'), 'ERROR');
  		$HandoverDone = $this->Tblfpthandover->getDayFlightDoneBySubSec($this->session->get('subsect'));
  		$timersTab[] = $this->WidgetController->getTimerAction('11:00','P5');
  		$timersTab[] = $this->WidgetController->getTimerAction('16:00','P1/P2/P3');
  		$timersTab[] = $this->WidgetController->getTimerAction('17:00','P3b');
  		$timersTab[] = $this->WidgetController->getTimerAction('19:30','P4');
  		$gen_instructions = $this->Tbltracksinstruction->getInstBySubsectGeneral($this->session->get('subsect'));
  		$instructions = $this->Tbltracksinstruction->getInstBySubsectInstruction($this->session->get('subsect'));
  		$form = $this->createFormBuilder($this->Tblsubsectorcomment)
  		->add('Comment', 'textarea',
  				array('attr' => array('class' => 'ckeditor', 'value'=>$comment, 'style'=>'position:relative; z-index:10000'),
  						'required'  => false))
  						->getForm();
  		
  		$form->handleRequest($request);
  		
  		if ($form->isValid()) {
  			$this->Tblsubsectorcomment->addComment($this->session->get('subsect'),$this->session->get('matricule'),$form['Comment']->getData());
  			return $this->redirect($this->generateUrl('rmcargo_dashboard_fa_homepage'));
  		}
  		
  		return $this->render('RMCARGODashboardFABundle:Home:index.html.twig',
        		array(
        			'comment'=>$comment,
        			'HandoverToDoFlightList' => $HandoverToDoFlightList,
        			'ToDoPublished' => $HandoverToDoPublished,
        			'ToDoError' => $HandoverToDoError,
        			'HandoverDone' => $HandoverDone,
        			'form' => $form->createView(),
        			'timers'=>$timersTab,
        			'edit'=>false,
        			'instructions'=> $instructions,
        			'gen_instructions'=> $gen_instructions,
        			"home_url" => $this->generateUrl('general_widget_profil_edit', 
        					array('home_url' => 'rmcargo_dashboard_fa_homepage'
        					))
        		));
  	}
  	
  	public function tracksAction(Request $request)
  	{
  		$notLogged = $this->instantiate();
  		
  		if($notLogged){
  			return $notLogged;
  		}
  		$action_array = array();
  		foreach ($this->Tblcccactioncomment->getAll() as $action){
  			$action_array[$action["PK_id"]] = $action["PK_id"];
  		}
  		$data = array();
  		
  		$form = $this->createFormBuilder($data)
  			->add('dataBaseAction', 'hidden', array(
  				'empty_data'  => 'A'))
  			->add('id', 'hidden')
  			->add('start', 'hidden')
  			->add('subSector', 'hidden', array(
  				'empty_data' => $this->Tbltracksinstruction->getKLMSubsect($this->session->get('subsect')),
  				'required' => false))
  			->add('userName', 'hidden', array(
  				'empty_data'  => $this->session->get('matricule')))
  			->add('AwbPrefix', 'text', array(
  				'required' => false))
  			->add('AwbNumber', 'text', array(
  				'required' => false))
  			->add('Uld', 'text', array(
  				'required' => false))
  			->add('Station', 'text', array(
  				'required' => false))
  			->add('FlightPrefix', 'text', array(
  				'required' => false))
  			->add('FlightNumber', 'text', array(
  				'required' => false))
  			->add('FlightNumberSuffix', 'text', array(
  				'required' => false))
  			->add('FlightDate', 'text', array(
  				'required' => false))
  			->add('Action', 'choice', array(
  				'choices' => $action_array,
  				'required' => true))
  			->add('Comment', 'textarea', array(
  				'required' => false))
  			->add('Save', 'submit')
  			->getForm();
  		
  		
  		$form->handleRequest($request);
  		$form->submit($request);
  		
  		if ($form->isValid()) {
  			$this->Tbltracksinstruction->setInst(
  							$form['dataBaseAction']->getData(),
  							$form['id']->getData(),
  							$form['start']->getData(),
  							$form['subSector']->getData(),
  							$form['userName']->getData(),
  							$form['AwbPrefix']->getData(),
  							$form['AwbNumber']->getData(),
  							$form['Uld']->getData(),
  							$form['Station']->getData(),
  							$form['FlightPrefix']->getData(),
  							$form['FlightNumber']->getData(),
  							$form['FlightNumberSuffix']->getData(),
  							$form['FlightDate']->getData(),
  							$form['Action']->getData(),
  							$form['Comment']->getData());
  			return $this->redirect($this->generateUrl('rmcargo_dashboard_fa_traks'));
  		}
  																														
  		$gen_instructions = $this->Tbltracksinstruction->getInstBySubsectGeneral($this->session->get('subsect'));
  		$gen_instructions = $this->tracksGetLink($gen_instructions);
  		$instructions = $this->Tbltracksinstruction->getInstBySubsectInstruction($this->session->get('subsect'));
  		$instructions = $this->tracksGetLink($instructions);
  		return $this->render('RMCARGODashboardFABundle:Home:traks.html.twig',
  				array(
  						'form' => $form->createView(),
  						'edit'=>true,
  						'instructions'=> $instructions,
  						'gen_instructions'=> $gen_instructions
  				));
  	}
  	
  	public function tracksEditAction(Request $request, $dataBaseAction,$id,$start,$subSector,$userName,$AWBPrefix,$AWBNumber,$ULD,$station,$flightPrefix,$flightNumber,$flightNumberSuffix,$flightDate,$action,$comment)
  	{
  		$notLogged = $this->instantiate();
  		 
  		if($notLogged){
  			return $notLogged;
  		}
  		$action_array = array();
  		
  		
  		$data = array();
  		
  		if($dataBaseAction == 'D'){
  			$this->Tbltracksinstruction->setInst($dataBaseAction,
  					$id,
  					$start,
  					$subSector,
  					$userName,
  					$AWBPrefix,
  					$AWBNumber,
  					$ULD,
  					$station,
  					$flightPrefix,
  					$flightNumber,
  					$flightNumberSuffix,
  					$flightDate,
  					$action,
  					$comment);
  			return $this->redirect($this->generateUrl('rmcargo_dashboard_fa_traks'));
  		}
  		foreach ($this->Tblcccactioncomment->getAll() as $action){
  			$action_array[$action["PK_id"]] = $action["PK_id"];
  		}
  		$form = $this->createFormBuilder($data)
  			->add('dataBaseAction', 'hidden', array(
  				'empty_data'  => 'U'))
  			->add('id', 'hidden', array(
  				'empty_data'  => $id))
  			->add('start', 'hidden', array(
  				'empty_data'  => $start))
  			->add('subSector', 'hidden', array(
  				'empty_data'  => $subSector,
  				'required' => false))
  			->add('userName', 'hidden', array(
  				'empty_data'  => $this->session->get('matricule')))
  			->add('AwbPrefix', 'text', array(
  				'empty_data'  => $AWBPrefix,
  				'required' => false))
  			->add('AwbNumber', 'text', array(
  				'empty_data'  => $AWBNumber,
  				'required' => false))
  			->add('Uld', 'text', array(
  				'empty_data'  => $ULD,
  				'required' => false))
  			->add('Station', 'text', array(
  				'empty_data'  => $station,
  				'required' => false))
  			->add('FlightPrefix', 'text', array(
  				'empty_data'  => $flightPrefix,
  				'required' => false))
  			->add('FlightNumber', 'text', array(
  				'empty_data'  => $flightNumber,
  				'required' => false))
  			->add('FlightNumberSuffix', 'text', array(
  				'empty_data'  => $flightNumberSuffix,
  				'required' => false))
  			->add('FlightDate', 'text', array(
  				'empty_data'  => $flightDate,
  				'required' => false))
  			->add('Action', 'choice', array(
  				'choices' => $action_array,
  				'empty_data'  => $action,
  				'required' => true))
  			->add('Comment', 'textarea', array(
  				'empty_data'  => $comment,
  				'required' => false))
  			->add('Save', 'submit')
  			->getForm();
  																														
  		$form->handleRequest($request);
  		$form->submit($request);
  		
  		if ($form->isValid()) {
  			$this->Tbltracksinstruction->setInst($form['dataBaseAction']->getData(),
  												 $form['id']->getData(),
  												 $form['start']->getData(),
  												 $form['subSector']->getData(),
  												 $form['userName']->getData(),
  												 $form['AwbPrefix']->getData(),
  												 $form['AwbNumber']->getData(),
  												 $form['Uld']->getData(),
  												 $form['Station']->getData(),
  												 $form['FlightPrefix']->getData(),
  												 $form['FlightNumber']->getData(),
  												 $form['FlightNumberSuffix']->getData(),
  												 $form['FlightDate']->getData(),
  												 $form['Action']->getData(),
  												 $form['Comment']->getData());
  			return $this->redirect($this->generateUrl('rmcargo_dashboard_fa_traks'));
  		}
  		return $this->render('RMCARGODashboardFABundle:Home:traks_edit.html.twig',
  				array(
  						'form' => $form->createView(),
  				));
  		
  	}
  	public function commentPageAction()
  	{
  		$notLogged = $this->instantiate();
  			
  		if($notLogged){
  			return $notLogged;
  		}
  		$comments = $this->Tblsubsectorcomment->getAllCommentBySubsect($this->session->get('subsect'));
  		$sorted_comment=array();
  		$tmp_comment = '';
  		foreach($comments as $comment){
  			if($tmp_comment != $comment['Comment']){
  				$sorted_comment[] = $comment;
  				$tmp_comment = $comment['Comment'];
  			}
  		}
  		return $this->render('RMCARGODashboardFABundle:Home:comment_histo.html.twig',
  				array(
  						'comments'=> $sorted_comment
  				));
  	}
  	public function tracksGetLink($instructions){
  		$filteredArray = array();
  		$result = array();
  		$j=0;
  		foreach($instructions as $instruction){
  			if(substr($instruction['flight'], 2) == null){
  				$filteredArray[$j]['flightNumber']=" ";
  			}
  			else{
  				$filteredArray[$j]['flightNumber']=(substr($instruction['flight'], 2));
  			}
  			foreach($instruction as $key => $value){
  				if(!isset($value) || $value == ""){
  					$value=" ";
  				}
  				
  				
  				$filteredArray[$j][$key]=$value;
  				
  			}
  			$j=$j+1;
  		}
  		foreach($filteredArray as $instruction){
  			$instruction["edit"] =   $this->createTraksLink($instruction,'U');
  			$instruction["delete"] =  $this->createTraksLink($instruction,'D');
  			$result[] = $instruction;
  		}
  		return $result;
  	}
  	public function createTraksLink($instruction,$action){
  		$sepparator = '/';
  		$parts = explode($sepparator, $instruction["awb"]);
  		$AWBpre = $parts[0];
  		$AWBnbr = $parts[1];
  		return $this->generateUrl('rmcargo_dashboard_fa_traks_edit',
  				array(
  						'dataBaseAction' => strtoupper($action),
  						'id' => $instruction['id'],
  						'start' => date('d/m/Y'),
  						'subSector'=>$this->Tbltracksinstruction->getKLMSubsect($this->session->get('subsect')),
  						'userName'=>$instruction['user_name'],
  						'AWBPrefix'=>$AWBpre,
  						'AWBNumber'=>$AWBnbr,
  						'ULD' => $instruction['uld'],
  						'station' => $instruction['station'],
  						'flightPrefix' => substr($instruction['flight'], 0,2),
  						'flightNumber' => $instruction['flightNumber'],
  						'flightNumberSuffix' => " ",
  						'flightDate' => $instruction['flight_date'],
  						'action' => $instruction['action'],
  						'comment' => $instruction['comment'],
  			));
  	}
	
  	public function filRougeRMCSOAction(Request $request){
  
		
		$notLogged = $this->instantiate();
  	
  		if($notLogged){
  			return $notLogged;
  		}
  		
  		
  		
  		
  		$data = array();
  		$queueReasonsSQL = $this->Tblqueuesreasonscsorequest->getAll();
  		$queueReasonsForm = array();
  		foreach($queueReasonsSQL as $row){
  			foreach($row as $col){
  				$queueReasonsForm[] = $col[0].' '.$col[1];
  			}
  		}
  		
  		
		$form = $this->createFormBuilder($data)
  			->add('dataBaseAction', 'hidden', array(
  				'empty_data'  => 'A'))
  			->add('id', 'hidden')
  			->add('start', 'hidden')
  			->add('subSector', 'hidden', array(
  				'empty_data' => $this->Tbltracksinstruction->getKLMSubsect($this->session->get('subsect')),
  				'required' => false))
  			->add('userName', 'hidden', array(
  				'empty_data'  => $this->session->get('matricule')))
  			->add('Identity', 'choice', array(
  				'choices' => array('option n°1','option n°2'),
  				'expanded' => false,
  				'required' => true))
  			->add('RequestedBy', 'choice', array(
  				'label' => 'Requested by',
  				'choices' => array('Pelican','Cargoal', 'Mail', 'Phone'),
  				'expanded' => false,
  				'required' => true))
  			->add('OriginMarket', 'choice', array(
  					'label' => 'Origin Market',
  					'choices' => array('FDA','Europe'),
  					'expanded' => false,
  					'required' => true))
  			->add('AwbPrefix', 'choice', array(
  					'label' => 'Awb prefix',
  					'choices' => array('057','074'),
  					'expanded' => false,
  					'required' => false))
  			->add('AwbNumber', 'text', array(
  					'label' => 'Awb number',
  					'required' => false))
  			->add('QueuesReasons', 'choice', array(
  					"label" => "Queues Reasons:",
  					"multiple" => true,
  					'expanded' => true,
                    "choices" =>$queueReasonsForm
  			     ))
  			->add('Save', 'submit')
  			->getForm();
  			
  			
		
  		/*	
		$form->handleRequest ( $request );
		$form->submit ( $request );*/
		
		/*if ($form->isValid ()) {
			$this->Tbltracksinstruction->setInst ( $form ['dataBaseAction']->getData (), $form ['id']->getData (), $form ['start']->getData (), $form ['subSector']->getData (), $form ['userName']->getData (), $form ['AwbPrefix']->getData (), $form ['AwbNumber']->getData (), $form ['Uld']->getData (), $form ['Station']->getData (), $form ['FlightPrefix']->getData (), $form ['FlightNumber']->getData (), $form ['FlightNumberSuffix']->getData (), $form ['FlightDate']->getData (), $form ['Action']->getData (), $form ['Comment']->getData () );
			return $this->redirect ( $this->generateUrl ( 'rmcargo_dashboard_fa_traks' ) );
		}*/
		
		/*$gen_instructions = $this->Tbltracksinstruction->getInstBySubsectGeneral ( $this->session->get ( 'subsect' ) );
		$gen_instructions = $this->tracksGetLink ( $gen_instructions );
		$instructions = $this->Tbltracksinstruction->getInstBySubsectInstruction ( $this->session->get ( 'subsect' ) );
		$instructions = $this->tracksGetLink ( $instructions );*/
  		
  	
  		
		return $this->render ( 'RMCARGODashboardFABundle:Home:fil_rouge_rm_cso.html.twig', array (
				'form' => $form->createView ()
			  //,'test' => $this->Tblqueuesreasonscsorequest->getAll()
		  ) 
		);
	}

}
