<?php

namespace Price\DashboardAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Doctrine\ORM\EntityManager;

use Symfony\Component\HttpFoundation\Session\Session;
use General\LoginBundle\Controller\LoginController;

use General\WidgetBundle\Controller\WidgetController;

use DBORM\OLDCSIBundle\Entity\Tblfptwaitinglist;
use DBORM\OLDCSIBundle\Entity\Tblfdverror;
use DBORM\OLDCSIBundle\Entity\Tblfptpcsettings;
use DBORM\OLDCSIBundle\Entity\Tblfdvshc;

use DBORM\CSIBundle\Entity\Tbluser;
use DBORM\CSIBundle\Entity\Tblfptactivestatus;
use DBORM\CSIBundle\Entity\Tbltypeprofil;

class AdminController extends Controller
{
	private $session, $em, $user, $tblActiveStatus, $widgetController, $OLDCSI_connector, $CSI_connector, $Tbltypeprofil, $prio, $Price_connector;
	
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
  		$dbName = "zz_Price";
  		$this->widgetController = new WidgetController();
  		$this->widgetController->setContainer($this->container);
  		$DbArray = $this->widgetController->getDBSize($dbName);
  		$DbArrayWithLink = array();
  		$totalSize = 0;
  		
  		foreach ($DbArray as $line){
  			if(substr($line['Logical_Name'],-4) == '_log'){
  				$line['clean'] = $this->generateUrl('clean_db_log', array('connector'=>$dbName,'dbname' => $dbName, 'url' => 'price_dashboard_admin_homepage'));
  			}
  			else{
  				$line['clean'] = null;
  			}
  			$totalSize = $totalSize+$line['SizeMB'];
  			$DbArrayWithLink[] = $line;
  		}
  		
  		if($totalSize > 4000){
  			$colorAlert = "error";
  		}
  		else{
  			if($totalSize > 3000){
  				$colorAlert = "toDo";
  			}
  			else{
  				$colorAlert = "published";
  			}
  		}
  		 
  		array_push($DbArrayWithLink, array('DatabaseName' => '<h4 id ='.$colorAlert.'>Total</h5>',
  				'Logical_Name' => '<h4 id ='.$colorAlert.'>Total</h5>',
  				'Physical_Name'=>'<h4 id ='.$colorAlert.'>D:\</h5>',
  				'SizeMB'=> '<h4 id ='.$colorAlert.'>'.$totalSize.'</h4>',
  				'clean'=> null
  		));
  		return $this->render('PriceDashboardAdminBundle:Admin:index.html.twig',
  				array(
  						"db_array" => $DbArrayWithLink,
        				"home_url" => $this->generateUrl('general_widget_profil_edit', 
        					array('home_url' => 'price_dashboard_admin_homepage'))
  				));
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
    	$this->Price_connector = $this->getDoctrine()->getConnection('zz_Price');
    	
    	$this->user = new Tbluser($this->CSI_connector);
    	$this->Tbltypeprofil = new Tbltypeprofil($this->CSI_connector);
    	$this->tblActiveStatus = new Tblfptactivestatus($this->CSI_connector);
    	$this->widgetController = new WidgetController($this->container);
    	if($this->session->get('type_profil') != 10){
    		return $this->redirect($this->generateUrl('general_login_homepage'));
    	}
    }
}
