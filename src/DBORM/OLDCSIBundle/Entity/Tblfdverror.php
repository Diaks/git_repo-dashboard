<?php

namespace DBORM\OLDCSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use General\WidgetBundle\Controller\WidgetController;

/**
 * Tblfdverror
 *
 * @ORM\Table(name="tblFDVError")
 * @ORM\Entity
 */
class Tblfdverror
{
	/**
	 * @var string
	 * 
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(name="Ref", type="string", length=50, nullable=true)
	 */
	private $ref;
	
    /**
     * @var string
     *
     * @ORM\Column(name="Flight", type="string", length=20, nullable=false)
     */
    private $flight;

    /**
     * @var string
     *
     * @ORM\Column(name="EvtDate", type="string", length=50, nullable=false)
     */
    private $evtdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc", type="string", length=500, nullable=true)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="format_error", type="string", length=500, nullable=true)
     */
    private $formatError;

    /**
     * @var string
     *
     * @ORM\Column(name="Matricule", type="string", length=30, nullable=true)
     */
    private $matricule;
	private $WidgetController;


    /**
     * Set flight
     *
     * @param string $flight
     * @return Tblfdverror
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return string 
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set evtdate
     *
     * @param string $evtdate
     * @return Tblfdverror
     */
    public function setEvtdate($evtdate)
    {
        $this->evtdate = $evtdate;

        return $this;
    }

    /**
     * Get evtdate
     *
     * @return string 
     */
    public function getEvtdate()
    {
        return $this->evtdate;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return Tblfdverror
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Tblfdverror
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set formatError
     *
     * @param string $formatError
     * @return Tblfdverror
     */
    public function setFormatError($formatError)
    {
        $this->formatError = $formatError;

        return $this;
    }

    /**
     * Get formatError
     *
     * @return string 
     */
    public function getFormatError()
    {
        return $this->formatError;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Tblfdverror
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }
    
    private $conn;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    }
    
    public function getDayCriticalError($date, $hour1 = '00:00:00', $hour2 = '23:59:59'){
    
    	$date = date("d/m/Y", strtotime($date));
    	return $this->conn->fetchColumn(
    			"SELECT COUNT(*)
    					FROM Tblfdverror e
    					WHERE e.evtdate BETWEEN ? AND ?", array($date.' '.$hour1, $date.' '.$hour2));
    }
    
    public function getDayCriticalErrorMsg($date)
    {
    	$reformated_array = array();
    	$date = date("d/m/Y", strtotime($date));
    	$error_flight_tab = $this->conn->fetchAll(
    			"SELECT *
    				FROM Tblfdverror e
    				WHERE e.evtdate like '".$date."%'"
    	);
    	 
    	foreach($error_flight_tab as $flight){
    		$date = date("H:i:s",strtotime(str_replace('/', '-',$flight["EvtDate"])));
    		$reformated_array[] = array("alert_color"=>"error","flight"=>$flight["Flight"], "evtdate"=>$date,"formatError"=>$flight["format_error"]);
    	}
    	 
    	return $reformated_array;
    }
    
    public function getCriticalErrorHistoDays($nbHistoDays){
    	$tabWeekCount = array();
    	$index = 0;
    	//$WidgetController = new WidgetController();
    
    	for($i=$nbHistoDays; $i>=0; $i--){
    
    		$date = $this->WidgetController->getDate($i,'-');
    		$dayCount = $this->getDayCriticalError($date);
    
    		if($dayCount){
    			$percent=($dayCount/1500)*100;
    		}
    		else{
    			$percent=0;
    		}
    		$tabWeekCount[$index] = array($date,$dayCount,$percent);
    		$index=$index+1;
    	}
    
    	return $tabWeekCount;
    }
    
    public function getCritErrorHistoHours($nbHistoHours){
    
    	$tabHourCount = array();
    	$index = 0;
    	//$WidgetController = new WidgetController();
    	$actualHour = date('H');
    
    	for($i=$nbHistoHours; $i>=0; $i--){
    		$date = date('Y-m-d');
    		$hourCount = 0;
    		$hour = $this->WidgetController->getHour($i,'-');
    		$hourdiff = $actualHour-$hour;
    		 
    		if($hourdiff<0){
    			$date = $this->WidgetController->getDate(1,'-');
    			$hourdiff = 24 + $hourdiff;
    		}
    		$hourCount = $hourCount + $this->getDayCriticalError($date, $this->WidgetController->getHour(($hourdiff)+1,'-'), $this->WidgetController->getHour($hourdiff,'-'));
    		 
    		if($hourCount){
    			$percent=($hourCount/150)*100;
    		}
    		else{
    			$percent=0;
    		}
    		$tabHourCount[$index] = array("date"=>$date, "hour"=>substr($this->WidgetController->getHour($hourdiff,'-'),0,-3), "nb_vols"=>$hourCount, "percent"=>$percent);
    		$index=$index+1;
    	}
    	unset($tabHourCount[0]);
    	return $tabHourCount;
    
    }
    
   
    
    public function getCritErrorMsgHistoDays($nbHistoDays){
    	$tabWeekCount = array();
    	$index = 0;
    	$WidgetController = new WidgetController();
    
    	for($i=$nbHistoDays; $i>=0; $i--){
    
    		$date = $WidgetController->getDate($i,'-');
    		$msg_array = $this->getDayCriticalErrorMsg($date);
    
    		$tabWeekCount[$index] = array("date"=>$date, "errors"=>$msg_array);
    		$index=$index+1;
    	}
    	return $tabWeekCount;
    }
}
