<?php

namespace RMCARGO\DashboardAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

use General\WidgetBundle\Controller\WidgetController;

use DBORM\OLDCSIBundle\Entity\Tblfptwaitinglist;
use DBORM\OLDCSIBundle\Entity\Tblfdverror;
use DBORM\OLDCSIBundle\Entity\Tblfptpcsettings;
use DBORM\OLDCSIBundle\Entity\Tblfdvshc;

use DBORM\CSIBundle\Entity\Tbluser;
use DBORM\CSIBundle\Entity\Tblfptactivestatus;
use DBORM\CSIBundle\Entity\Tbltypeprofil;
use DBORM\OLDCSIBundle\Entity\DBORM\OLDCSIBundle\Entity;

class AdminController extends Controller
{
	private $session, $em, $user, $tblActiveStatus, $widgetController, $OLDCSI_connector, $CSI_connector, $Tbltypeprofil, $prio, $Tblfdverror;
	
	/*__________________________________________________________________________
	     _____                   
 		|  __ \                   
        | |__) |_ _  __ _  ___  ___  
        |  ___/ _` |/ _` |/ _ \/ __|
        | |  | (_| | (_| |  __/\__ \ 
        |_|   \__,_|\__, |\___||___/ 
                     __/ |                             
                    |___/                                
	 ___________________________________________________________________________*/
	
	public function indexAction()
  	{
  		$notLogged = $this->instantiate();
  		
  		if($notLogged){
  			return $notLogged;
  		}
  		
  		
  		//Remplissage Error Msg Box_________________________________________________
  		$error_msg_array = array();

  		
  		
  		$db_error_msg_array = $this->Tblfdverror->getDayCriticalErrorMsg(date('Y-m-d'));
  		$ftp_error_msg_array = $this->tblActiveStatus->getDayFlightFailMsg(date('Y-m-d'));
  		
  		foreach ($ftp_error_msg_array as $fpt_error){
  			$error_msg_array[]=$fpt_error;
  		}
  		foreach ($db_error_msg_array as $db_error){
  			$error_msg_array[]=$db_error;
  		}
  		//Vue graphique day_________________________________________________________
  		$histo_day_tab_success = $this->tblActiveStatus->getSuccesHistoHours(24);
  		$histo_day_tab_error = $this->tblActiveStatus->getErrorHistoHours(24);
  		$histo_day_tab_crit_error = $this->Tblfdverror->getCritErrorHistoHours(24);
  		//Return____________________________________________________________________
  		
  		
  		/*if($this->session->get('type_profil') == 2){
  			$titre = 'Admin';
  		}
  		else{
  			if($this->session->get('type_profil') == 11){
  				$titre = 'EDC';
  			}
  		}*/
  		
  		//var_dump($histo_day_tab_crit_error);
        return $this->render('RMCARGODashboardAdminBundle:Admin:index.html.twig',
        		array(
        			"robot_pc_status" => $this->getRobotPcStatus_array($this->OLDCSI_connector),
        			"error_tab" => $error_msg_array,
        			"histo_day_tab_success" => $histo_day_tab_success,
        			"histo_day_tab_error" => $histo_day_tab_error,
        			"histo_day_tab_crit_error" => $histo_day_tab_crit_error,
        		    "home_url" => $this->generateUrl('general_widget_profil_edit', array( 'home_url' => 'rmcargo_dashboard_admin_homepage'))
        		));
    }
    
    public function data_detailsAction()
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    
    	//Remplissage Error Msg Box_________________________________________________
    	$histo_error_msg_array = array();
    
    	$histo_db_error_msg_array = $this->Tblfdverror->getCritErrorMsgHistoDays(14);
    	$histo_fpt_error_msg = $this->tblActiveStatus->getErrorMsgHistoDays(14);
    	
    	$i=0;
    	foreach ($histo_fpt_error_msg as $fpt_error){
    		$histo_error_msg_array[$i]=array('date'=>$fpt_error['date'], 'errors'=>$fpt_error['errors']);
    		
    		foreach($histo_db_error_msg_array[$i]['errors'] as $db_error){
    			$histo_error_msg_array[$i]['errors'][] = $db_error;
    		}
    		
    		$i=$i+1;
    	}
    	
    	//Vue graphique week_________________________________________________________
    	$histo_day_tab_success = $this->tblActiveStatus->getSuccesHistoDays(14);
    	$histo_day_tab_error = $this->tblActiveStatus->getErrorHistoDays(14);
    	$histo_day_tab_crit_error = $this->Tblfdverror->getCriticalErrorHistoDays(14);
    
    	return $this->render('RMCARGODashboardAdminBundle:Admin:data_details.html.twig',
    			array(
    					"histo_day_tab_error_msg" => $histo_error_msg_array,
    					"histo_day_tab_success" => $histo_day_tab_success,
    					"histo_day_tab_error" => $histo_day_tab_error,
    					"histo_day_tab_crit_error" => $histo_day_tab_crit_error
    			));
    }
    
    public function clean_monitoringAction()
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    	$this->widgetController = new WidgetController();
    	$this->widgetController->setContainer($this->container);
    	$DbArray = $this->widgetController->getDBSize();
    	$DbArrayWithLink = array();
    	$totalSize = 0;
    	foreach ($DbArray as $line){
    		if(substr($line['Logical_Name'],-4) == '_log'){
    			$dbName = $line['DatabaseName'];
    			switch($dbName){
    				
    				case 'CSI':
    					$dbName = 'CSI_OLD:';
    					break;
    					
    				default:
    					$dbName = $line['DatabaseName'];
    					break;
    			}
    			$line['clean'] = $this->generateUrl('clean_db_log', array('connector' => $dbName, 'dbname' => $line['DatabaseName'], 'url' => 'rmcargo_dashboard_admin_purge_monitoring'));
    		}
    		else{
    			$line['clean'] = null;
    		}
    		$totalSize = $totalSize+$line['SizeMB'];
    		$DbArrayWithLink[] = $line;
    	}
    	if($totalSize > 55000){
    		$colorAlert = "error";
    	}
    	else{
    		if($totalSize > 45000){
    			$colorAlert = "toDo";
    		}
    		else{
    			$colorAlert = "published";
    		}
    	}
    	
    	array_unshift($DbArrayWithLink, array('DatabaseName' => '<h4 id ='.$colorAlert.'>Total</h5>',
    								'Logical_Name' => '<h4 id ='.$colorAlert.'>Total</h5>',
    								'Physical_Name'=>'<h4 id ='.$colorAlert.'>D:\</h5>',
    								'SizeMB'=> '<h4 id ='.$colorAlert.'>'.$totalSize.'</h4>',
    								'clean'=> null
    	));
    	
    	return $this->render('RMCARGODashboardAdminBundle:Admin:clean_monitoring.html.twig',
    			array(
    					"db_array" => $DbArrayWithLink
    			));
    }
    
    public function robot_pc_monitoringAction(Request $request)
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    	
    	$Tblfptpcsettings = new Tblfptpcsettings($this->OLDCSI_connector);
    	$array_status_btt = array();
    	
    	foreach($this->getRobotPcStatus_array($this->OLDCSI_connector) as $robot){
    		$array_status_btt[] = array('afr'=>$robot['afr'],
    								  'status'=>$robot['status'],
    								  'last_time'=>$robot['last_time'],
    								  'tid'=>$robot['tid'],
    								  'link'=> $this->generateUrl('rmcargo_dashboard_admin_robot_pc_delete', array('id' => $robot['id']))
    								 );
    	}
    	
    	$form = $this->createFormBuilder($Tblfptpcsettings)
    	->add('AFR', 'text')
    	->add('tid', 'text')
    	->add('Add', 'submit')
    	->getForm();
    	
    	$form->handleRequest($request);
    	$form->submit($request);
    	
    	if ($form->isValid()) {
    		$afr = $form["AFR"]->getData();
    		$tid = $form["tid"]->getData();
    		$Tblfptpcsettings->addPc(strtoupper($afr), $tid);
    		
    		return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_robot_pc_monitoring'));
    	}
    	
    	return $this->render('RMCARGODashboardAdminBundle:Admin:robot_pc_monitoring.html.twig',
        		array(
        			"robot_pc_status" => $array_status_btt,
        			'form' => $form->createView()
        		));
    }
    
    public function users_monitoringAction(Request $request)
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    	$types_profil = $this->Tbltypeprofil->getAllTypes();
    	foreach($this->user->getAll() as $user){
    		if(is_null($user['FK_TypeProfil_id'])){
    			$user['FK_TypeProfil_id'] = 1;
    		}
    		$array_user_btt[] = array(
    				'Matricule'=>$user['PK_id'],
    				'FirstName'=>$user['FirstName'],
    				'LastName'=>$user['LastName'],
    				'Departement'=>$user['Departement'],
    				'UserStartDate'=>$user['UserStartDate'],
    				'FK_Sector_id'=>$user['FK_Sector_id'],
    				'FK_TypeProfil_id'=>$types_profil[$user['FK_TypeProfil_id']],
    				
    				'delete'=> $this->generateUrl('rmcargo_dashboard_admin_user_delete', array('id' => $user['PK_id'])),
    				'edit'=> $this->generateUrl('rmcargo_dashboard_admin_user_edit', array('id' => $user['PK_id']))
    		);
    	}
    	
    	$form = $this->createFormBuilder($this->user)
    	->add('Matricule', 'text')
    	->add('FirstName', 'text')
    	->add('LastName', 'text')
    	->add('Password', 'text')
    	->add('TypeProfil', 'choice', array(
    			'choices' => $types_profil
    	))
    	->add('Register', 'submit')
    	->getForm();
    	
    	$form->handleRequest($request);
    	$form->submit($request);
    	
    	if ($form->isValid()) {
    		$id=$form["Matricule"]->getData();
    		if(!$this->user->findUser($id)){
    			$this->user->addUser($id,
    					$form["FirstName"]->getData(),
    					$form["LastName"]->getData(),
    					$form["Password"]->getData(),
    					$form["TypeProfil"]->getData());
    			 
    			return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_users_monitoring'));
    		}
    		else{
    			$this->user->updateUser(
    					$id,
    					$form["FirstName"]->getData(),
    					$form["LastName"]->getData(),
    					$form["Password"]->getData(),
    					$form["TypeProfil"]->getData());
    			return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_users_monitoring'));
    		}
    	}
    	
    	return $this->render('RMCARGODashboardAdminBundle:Admin:users_monitoring.html.twig',
        		array(
        			"user_array" => $array_user_btt,
        			'form' => $form->createView()
        		));
    }
    
    public function user_editAction($id,Request $request)
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    	$types_profil = $this->Tbltypeprofil->getAllTypes();
    	$user = $this->user->findUser($id);
    	
    	if(is_null($user['FK_TypeProfil_id'])){
    		$user['FK_TypeProfil_id'] = 1;
    	}
    	 
    	$form = $this->createFormBuilder($this->user)
    	->add('Matricule', 'hidden', array(
    				'empty_data'  => $user['PK_id']))
    	->add('FirstName', 'text', array(
    				'empty_data'  => $user['FirstName']))
    	->add('LastName', 'text', array(
    				'empty_data'  => $user['LastName']))
    	->add('Password', 'text', array(
    			'required' => false))
    	->add('Departement', 'text', array(
    				'empty_data'  => $user['Departement'],
    				'required' => false))
     	->add('Sector', 'text', array(
    				'empty_data'  => $user['FK_Sector_id']))
    	->add('TypeProfil', 'choice', array(
    				'choices' => $types_profil,
    				'empty_data'  => $user['FK_TypeProfil_id']))
    	->add('Save', 'submit')
    	->getForm();
    	 
    	$form->handleRequest($request);
    	$form->submit($request);
    	 
    	if ($form->isValid()) {
    		$id=$form["Matricule"]->getData();
    		if($this->user->findUser($id)){
    			$this->user->updateUser(
    					$id,
    					$form["FirstName"]->getData(),
    					$form["LastName"]->getData(),
    					$form["Password"]->getData(),
    					$form["TypeProfil"]->getData(),
    					$form["Departement"]->getData(),
    					$form["Sector"]->getData());
    
    			return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_users_monitoring'));
    		}
    		else{
    			echo "Erreur lors de l'enregistrement";
    			return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_user_edit'));
    		}
    	}
    	 
    	return $this->render('RMCARGODashboardAdminBundle:Admin:users_update.html.twig',
    			array(
    					'form' => $form->createView()
    			));
    }
    
    public function users_searchAction(Request $request)
    {
    	$notLogged = $this->instantiate();
    	$users_array = array();
    	
    	if($notLogged){
    		return $notLogged;
    	}
    	
    	$types_profil = $this->Tbltypeprofil->getAllTypes();
    	
    	$form = $this->createFormBuilder($this->user)
    	->add('Matricule', 'text', array(
    				'required' => false))
    	->add('FirstName', 'text', array(
    				'required' => false))
    	->add('LastName', 'text', array(
    				'required' => false))
    	->add('TypeProfil', 'choice', array(
    			'choices' => $types_profil,
    			'required' => false
    	))
    	->add('Search', 'submit')
    	->getForm();
    	 
    	$form->handleRequest($request);
    	$form->submit($request);
    	 
    	if ($form->isValid()) {
    		$id=$form["Matricule"]->getData();
    		$firstname = $form["FirstName"]->getData();
    		$lastname = $form["LastName"]->getData();
    		$type = $form["TypeProfil"]->getData();

    		foreach($this->user->findUsersByAttribute($id, $firstname, $lastname, $type) as $user){
    			if(is_null($user['FK_TypeProfil_id'])){
    				$user['FK_TypeProfil_id'] = 1;
    			}
    			$users_array[] = array(
    				'Matricule'=>$user['PK_id'],
    				'FirstName'=>$user['FirstName'],
    				'LastName'=>$user['LastName'],
    				'Departement'=>$user['Departement'],
    				'UserStartDate'=>$user['UserStartDate'],
    				'FK_Sector_id'=>$user['FK_Sector_id'],
    				'FK_TypeProfil_id'=>$types_profil[$user['FK_TypeProfil_id']],
    			
    				'delete'=> $this->generateUrl('rmcargo_dashboard_admin_user_delete', array('id' => $user['PK_id'])),
    				'edit'=> $this->generateUrl('rmcargo_dashboard_admin_user_edit', array('id' => $user['PK_id']))
    			);
    		}
    	}
    	 
    	return $this->render('RMCARGODashboardAdminBundle:Admin:users_research.html.twig',
    			array(
    					"user_array" => $users_array,
    					'form' => $form->createView()
    			));
    }
    
    public function group_monitoringAction(Request $request)
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    	foreach($this->Tbltypeprofil->getAllTypes() as $id => $label){
    		if($id != 8){
    			$nb_users = $this->Tbltypeprofil->getNbUserByType($id);
    			
    			$type_array[] = array(
    					'label'=>$label,
    					'nb_users'=>$nb_users,
    					'delete'=> $this->generateUrl('rmcargo_dashboard_admin_group_delete', array('id' => $id))
    					//'edit'=> $this->generateUrl('rmcargo_dashboard_admin_user_edit', array('id' => $user['PK_id']))
    			);
    		}
    	}
    	 
    	$form = $this->createFormBuilder($this->Tbltypeprofil)
    	->add('TypeProfil', 'text')
    	->add('Add', 'submit')
    	->getForm();
    	 
    	$form->handleRequest($request);
    	$form->submit($request);
    	 
    	if ($form->isValid()) {
    		$this->Tbltypeprofil->addType($form["TypeProfil"]->getData());
    
    		return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_group_monitoring'));
    		
    	}
    	 
    	return $this->render('RMCARGODashboardAdminBundle:Admin:group_monitoring.html.twig',
    			array(
    					"type_array" => $type_array,
    					'form' => $form->createView()
    			));
    }
    
    public function prio_monitoringAction(Request $request)
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    	
    	$this->prio = new Tblfdvshc($this->OLDCSI_connector);
    	$formBuilder = $this->createFormBuilder($this->prio);
    	foreach ($this->prio->getPrio() as $table=>$prio_array){
    		foreach ($prio_array as $prio){
    			$formBuilder->add($table.'_'.$prio["uld"], 'text', array('mapped' => false, 'required' => false));
    		}
    	}
    	
    	//$formBuilder->add('Update', 'submit');
    	$form = $formBuilder->add('Update', 'submit')->getForm();
    	
    	$form->handleRequest($request);
    	$form->submit($request);
    	 
    	if ($form->isValid()) {
    		foreach ($this->prio->getPrio() as $table=>$prio_array){
    			foreach ($prio_array as $prio){
    				$new_prio = $form[$table.'_'.$prio["uld"]]->getData();
    				if(!is_null($new_prio)){
    					var_dump($new_prio);
    					$this->prio->updatePrio($table,$prio['type'],$prio['uld'],$new_prio);
    				}
    			}
    		}
    		return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_prio_monitoring'));
    	}
    	 
    	return $this->render('RMCARGODashboardAdminBundle:Admin:prio_monitoring.html.twig',
    			array(
    					"prio_array" => $this->prio->getPrio(),
    					'form' => $form->createView()
    			));
    }
    
    /*_________________________________________________________________
                    _   _                 
          /\       | | (_)                
         /  \   ___| |_ _  ___  _ __  ___ 
        / /\ \ / __| __| |/ _ \| '_ \/ __|
       / ____ \ (__| |_| | (_) | | | \__ \
      /_/    \_\___|\__|_|\___/|_| |_|___/
     __________________________________________________________________*/
    
    public function getNbDayDoneAction()
    {
    	$notLogged = $this->instantiate();
    	 
    	if($notLogged){
    		return $notLogged;
    	}
    	 
    	return new response($this->tblActiveStatus->getDayFlightDone(date('Y-m-d')));
    }
    
    public function getNbDayErrorAction()
    {
    	$notLogged = $this->instantiate();
    	 
    	if($notLogged){
    		return $notLogged;
    	}
    	 
    	return new response($this->tblActiveStatus->getDayFlightFail(date('Y-m-d')));
    }
    
    public function getNbCritErrorAction()
    {
    	$notLogged = $this->instantiate();
    	
    	if($notLogged){
    		return $notLogged;
    	}
    	
    	$tblerror = new Tblfdverror($this->OLDCSI_connector);
    	return new response($tblerror->getDayCriticalError(date('Y-m-d')));
    }
    
    public function getNbStatusAction($status)
    {
    	$notLogged = $this->instantiate();
    	
    	if($notLogged){
    		return $notLogged;
    	}
    	
    	$waitinglist = new Tblfptwaitinglist($this->OLDCSI_connector);
    	return new response($waitinglist->getNbStatus($status));
    }
    
    public function purge_statusAction($status)
    {
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    
    	$waitinglist = new Tblfptwaitinglist($this->OLDCSI_connector);
    
    	$waitinglist->status_purge_status($status);
    
    	return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_purge_monitoring'));
    }
    
    public function delete_pcAction($id){
    	$notLogged = $this->instantiate();
    	
    	if($notLogged){
    		return $notLogged;
    	}
    	
    	$Tblfptpcsettings = new Tblfptpcsettings($this->OLDCSI_connector);
  		$Tblfptpcsettings->deletePc($id);
    	
    	return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_robot_pc_monitoring'));
    }
    
    public function delete_userAction($id){
    	$notLogged = $this->instantiate();
    	 
    	if($notLogged){
    		return $notLogged;
    	}
    	 
    	$this->user->deleteUser($id);
    	 
    	return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_users_monitoring'));
    }
    
    public function delete_groupAction($id){
    	$notLogged = $this->instantiate();
    
    	if($notLogged){
    		return $notLogged;
    	}
    
    	$this->Tbltypeprofil->deleteGroup($id);
    
    	return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_group_monitoring'));
    }
    
    /*___________________________________________________________________
      __  __      _   _               _     
     |  \/  |    | | | |             | |    
     | \  / | ___| |_| |__   ___   __| |___ 
     | |\/| |/ _ \ __| '_ \ / _ \ / _` / __|
     | |  | |  __/ |_| | | | (_) | (_| \__ \
     |_|  |_|\___|\__|_| |_|\___/ \__,_|___/
     ____________________________________________________________________*/
    
    public function instantiate(){
    
    	$this->session = $this->container->get('session');
    	$this->em = $this->getDoctrine()->getManager();
    	
    	$this->CSI_connector = $this->getDoctrine()->getConnection('CSI_DEV');
    	$this->OLDCSI_connector = $this->getDoctrine()->getConnection('CSI_OLD');
    	
    	$this->Tblfdverror = new Tblfdverror($this->OLDCSI_connector);
    	$this->user = new Tbluser($this->CSI_connector);
    	$this->Tbltypeprofil = new Tbltypeprofil($this->CSI_connector);
    	$this->tblActiveStatus = new Tblfptactivestatus($this->CSI_connector);
    	$this->widgetController = new WidgetController($this->container);
    	if(($this->session->get('type_profil') != 2 ) && ($this->session->get('type_profil')!=11) && ($this->session->get('type_profil')!=1)){
    		return $this->redirect($this->generateUrl('general_login_homepage'));
    	}
    }
    
    public function getRobotPcStatus_array($OLDCSI_connector){
    	
    	$Tblfptpcsettings = new Tblfptpcsettings($OLDCSI_connector);
    	$robot_pc_status_array = $Tblfptpcsettings->getPcSettings();
    	$robot_pc_converted_time_array = array();
    	$i=0;
    	foreach ($robot_pc_status_array as $robot){
    		$robot_pc_converted_time_array[$i]['id'] = $robot['id'];
    		$robot_pc_converted_time_array[$i]['afr'] = $robot['afr'];
    		$robot_pc_converted_time_array[$i]['tid'] = $robot['tid'];
    		$robot_pc_converted_time_array[$i]['last_time'] = date('d/m/Y H:i',strtotime($robot['last_time']));
    		 
    		$robot_date = date('d/m/Y H:i',strtotime($robot['last_time']));
    		$now_date = date('d/m/Y H:i');
    		 
    		if($robot_date != $now_date){
    			$robot_pc_converted_time_array[$i]['status'] = "error";
    		}
    		else{
    			$robot_pc_converted_time_array[$i]['status'] = "published";
    		}
    		$i=$i+1;
    	}
    	
    	return $robot_pc_converted_time_array;
    }
}
