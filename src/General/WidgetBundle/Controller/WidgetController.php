<?php

namespace General\WidgetBundle\Controller;

use \Datetime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

use Symfony\Component\DependencyInjection\ContainerInterface;

use DBORM\OLDCSIBundle\Entity\Tblfptwaitinglist;
use DBORM\OLDCSIBundle\Entity\Tblfdverror;
use DBORM\OLDCSIBundle\Entity\Tblfptpcsettings;

use DBORM\CSIBundle\Entity\Tbluser;
use DBORM\CSIBundle\Entity\Tblfptactivestatus;
use DBORM\CSIBundle\Entity\Tbltypeprofil;
use Symfony\Component\DependencyInjection\Container;
use Doctrine\Bundle\DoctrineBundle\Registry;
use RMCARGO\DashboardAdminBundle\Controller\AdminController as admin;


class WidgetController extends Controller
{
	private $session, $em, $user, $tblActiveStatus, $widgetController, $OLDCSI_connector, $CSI_connector, $Tbltypeprofil, $controller, $Price_connector;
	
	/**
	 * @param ContainerInterface $container
	 */
	
	public function __construct(ContainerInterface $container = null)
	{
		$this->setContainer($container);
		//$this->container = $container;
	}
	
    public function indexAction()
    {
    	$this->instantiate();
    }
    
    public function login_editAction($home_url,Request $request)
    {
    	$this->instantiate();
    	
    	$types_profil = $this->Tbltypeprofil->getAllTypes();
    	$user = $this->user->findUser($this->session->get('matricule'));
    
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
    	->add('Sector', 'hidden', array(
    			'empty_data'  => $user['FK_Sector_id']))
    	->add('TypeProfil', 'hidden', array(
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
    
    			return $this->redirect($this->generateUrl($home_url));
    		}
    		else{
    			echo "Erreur lors de l'enregistrement";
    			//return $this->redirect($this->generateUrl($home_url));
    		}
    	}
    
    	return $this->render('GeneralWidgetBundle:User:logs_update.html.twig',
    					array(
    						'linkPage' => $home_url,
    						'form' => $form->createView()
    					));
    }
    function array_sort($array, $on, $order=SORT_ASC)
    {
    	$new_array = array();
    	$sortable_array = array();
    
    	if (count($array) > 0) {
    		foreach ($array as $k => $v) {
    			if (is_array($v)) {
    				foreach ($v as $k2 => $v2) {
    					if ($k2 == $on) {
    						$sortable_array[$k] = $v2;
    					}
    				}
    			} else {
    				$sortable_array[$k] = $v;
    			}
    		}
    
    		switch ($order) {
    			case SORT_ASC:
    				asort($sortable_array);
    				break;
    			case SORT_DESC:
    				arsort($sortable_array);
    				break;
    		}
    
    		foreach ($sortable_array as $k => $v) {
    			$new_array[$k] = $array[$k];
    		}
    	}
    
    	return $new_array;
    }
    
    public function getTimerAction($hour = null, $name = null){
    	
    	$firstTimer = new DateTime('0000-00-00 11:00:00');
    	$secTimer = new DateTime('0000-00-00 16:00:00');
    	$thrdTimer = new DateTime('0000-00-00 17:00:00');
    	$now = new DateTime('0000-00-00 '.date('H:i:s'));
    	$timer= 'Timer error';
    	
    	if(isset($hour)){
    		$hour = new DateTime('0000-00-00 '.$hour.':00');
    		$timerDiff= $hour->diff($now);
    		$time = $hour->format('H:i');
    		if ($now>$hour){
    			return array('name' => $name, 'time'=>'', 'timer'=>'Time up');
    		}
    		else{
    			$timer = $timerDiff->h.' Hours '.$timerDiff->i.' Min';
    		}
    	}
    	else{
    		if($now < $thrdTimer){
    			if($now < $firstTimer){
    				$timerDiff= $firstTimer->diff($now);
    				$time = $firstTimer->format('h:i');
    			}
    			if($now > $firstTimer and $now < $secTimer){
    				$timerDiff= $secTimer->diff($now);
    				$time = $secTimer->format('H:i');
    			}
    			if($now > $secTimer and $now < $thrdTimer){
    				$timerDiff= $thrdTimer->diff($now);
    				$time = $thrdTimer->format('H:i');
    			}
    			$timer = $timerDiff->h.' Hours '.$timerDiff->i.' Min';
    		}
    		else{
    			$timer = 'Time up';
    			$time = 'the next at 11:00';
    		}
    	}
    	return array('name' => $name, 'time'=>'to '.$time, 'timer'=>$timer);
    }
    
    public function getDayMaxMonth($month, $year){
    	if(strlen($month)==1){
    		$month = '0'.$month;
    	}
    	$month = strval($month);
    	if($month == '01' || $month == '03' || $month == '05' || $month == '07' ||
    			$month == '08' || $month == '10' || $month == '12'){
    		$dayMax = 31;
    	}
    	if($month == '02'){
    		if((is_int($year/4) && !is_int($year/100)) || is_int($year/400)){
    			$dayMax = 29;
    		}
    		else{
    			$dayMax= 28;
    		}
    	}
    	if($month == '04' || $month == '06' || $month == '09' || $month == '11'){
    		$dayMax = 30;
    	}
    	
    	return $dayMax;
    }
    
    public function getDate($toDay, $operator){
    	
    	$year=date('Y');
    	$month=date('m');
    	$dayMax = $this->getDayMaxMonth($month, $year);
    
    	if($operator == '+'){
    		$day=date('d')+$toDay;
    		do {
    			if($day > $dayMax){
    				$month=$month+1;
    				$dayMax = $this->getDayMaxMonth($month, $year);
    				$day=$day-$dayMax;
    				if($month>12){
    					$month = 01;
    					$year = $year+1;
    				}
    			}
    		}
    		while ($day > $dayMax);
    	}
    
    	if($operator == '-'){
    		$day=date('d')-$toDay;
    
    		do {
    			if($day < 1){
    				$month=$month-1;
    				$dayMax = $this->getDayMaxMonth($month, $year);
    				$day=$dayMax+$day;
    				if($month < 01){
    					$month = 12;
    					$year = $year-1;
    				}
    			}
    		}
    		while ($day < 1);
    	}
    	
    	return date('Y-').$month.'-'.$day;
    }
    
    public function getFlightDate($toDay, $operator){
    	$date=$this->getDate($toDay, $operator);
    	$year = substr($date,2,4);
    	$mont = substr($date,5,8);
    	$day = substr($date,8,11);
    	
    	/* to do switch for each month 
    	 * OR convert to ddMMYY format <=best idea ever
    	 * */
    }
    public function getHour($toHour, $operator){
    
    	$hours=date('H');
    	$minutes=date('i');
    	//$seconds=date('s');
    	$hourMax = 24;
    	$minMax = 60;
    	$secMax = 60;
    	
    	if($operator == '+'){
    		$hours=$hours+$toHour;
    		do {
    			if($hours > $hourMax){
    				$hours=$hours-$hourMax;
    			}
    		}
    		while ($hours > $hourMax);
    	}
    
   		if($operator == '-'){
    		$hours=$hours-$toHour;
    		do {
    			if($hours < 0){
    				$hours=$hourMax+$hours;
    			}
    		}
    		while ($hours < 0);
    	}
    	return $hours.':'.$minutes.':'.'00';
    }
    
    public function getDBSize($dbname = null){
    	$this->instantiate();
    	if(is_null($dbname)){
    		$res = $this->CSI_connector->fetchAll(
    				"SELECT DB_NAME(database_id) AS DatabaseName,
						Name AS Logical_Name,
						Physical_Name, (size*8)/1024 SizeMB
						FROM sys.master_files
						Order by SizeMB DESC");
    	}
    	else{
    		$res = $this->CSI_connector->fetchAll(
    				"SELECT DB_NAME(database_id) AS DatabaseName,
						Name AS Logical_Name,
						Physical_Name, (size*8)/1024 SizeMB
						FROM sys.master_files
						where DB_NAME(database_id) = '".$dbname."'
						Order by SizeMB DESC");
    	}
    	return $res;
    }
    
    public function clearDBCacheAction($connector, $dbname, $url){
    	$this->instantiate();
    	
    	$res=$this->getDoctrine()->getConnection($connector)->executeQuery(
    			"ALTER DATABASE [".$dbname."] SET RECOVERY SIMPLE WITH NO_WAIT
					DBCC SHRINKFILE('".$dbname."_log', 1)
					ALTER DATABASE [".$dbname."] SET RECOVERY FULL WITH NO_WAIT"
    	);
    	
    	$res = $res->fetch();
    	return $this->redirect($this->generateUrl($url));
    	var_dump($res);
    }
    
    public function instantiate(){
    	$this->session = $this->container->get('session');
    	$this->em = $this->getDoctrine()->getManager();
    	$this->CSI_connector = $this->getDoctrine()->getConnection('CSI_DEV');
    	$this->OLDCSI_connector = $this->getDoctrine()->getConnection('CSI_OLD');
    	$this->Price_connector = $this->getDoctrine()->getConnection('zz_Price');
    		
    	$this->user = new Tbluser($this->CSI_connector);
    	$this->Tbltypeprofil = new Tbltypeprofil($this->CSI_connector);
    	$this->tblActiveStatus = new Tblfptactivestatus($this->Price_connector);
    	
    }
    
}
