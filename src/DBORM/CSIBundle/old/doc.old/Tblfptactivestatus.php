<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;

use General\WidgetBundle\Controller\WidgetController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Tblfptactivestatus
 *
 * @ORM\Table(name="TblFPTActiveStatus", indexes={@ORM\Index(name="IDX_D453B727B41EA3FFD3F072244D225600", columns={"FK_FlightNumber", "FK_FlightDate", "FK_Version"}), @ORM\Index(name="IDX_D453B72716F201A1", columns={"FK_Status_id"})})
 * @ORM\Entity
 */
class Tblfptactivestatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="text", length=-1, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlreadyTried", type="integer", nullable=true)
     */
    private $alreadytried;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartTimeEvt", type="datetime", nullable=true)
     */
    private $starttimeevt;

    /**
     * @var \Tblfptflights
     *
     * @ORM\ManyToOne(targetEntity="Tblfptflights")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_FlightNumber", referencedColumnName="PK_FlightNumber"),
     *   @ORM\JoinColumn(name="FK_FlightDate", referencedColumnName="PK_FlightDate"),
     *   @ORM\JoinColumn(name="FK_Version", referencedColumnName="PK_Version")
     * })
     */
    private $fkFlightnumber;

    /**
     * @var \Tblfptstatus
     *
     * @ORM\ManyToOne(targetEntity="Tblfptstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Status_id", referencedColumnName="PK_id")
     * })
     */
    private $fkStatus;



    /**
     * Get pkId
     *
     * @return integer 
     */
    public function getPkId()
    {
        return $this->pkId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Tblfptactivestatus
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set alreadytried
     *
     * @param integer $alreadytried
     * @return Tblfptactivestatus
     */
    public function setAlreadytried($alreadytried)
    {
        $this->alreadytried = $alreadytried;

        return $this;
    }

    /**
     * Get alreadytried
     *
     * @return integer 
     */
    public function getAlreadytried()
    {
        return $this->alreadytried;
    }

    /**
     * Set starttimeevt
     *
     * @param \DateTime $starttimeevt
     * @return Tblfptactivestatus
     */
    public function setStarttimeevt($starttimeevt)
    {
        $this->starttimeevt = $starttimeevt;

        return $this;
    }

    /**
     * Get starttimeevt
     *
     * @return \DateTime 
     */
    public function getStarttimeevt()
    {
        return $this->starttimeevt;
    }

    /**
     * Set fkFlightnumber
     *
     * @param \DBORM\CSIBundle\Entity\Tblfptflights $fkFlightnumber
     * @return Tblfptactivestatus
     */
    public function setFkFlightnumber(\DBORM\CSIBundle\Entity\Tblfptflights $fkFlightnumber = null)
    {
        $this->fkFlightnumber = $fkFlightnumber;

        return $this;
    }

    /**
     * Get fkFlightnumber
     *
     * @return \DBORM\CSIBundle\Entity\Tblfptflights 
     */
    public function getFkFlightnumber()
    {
        return $this->fkFlightnumber;
    }

    /**
     * Set fkStatus
     *
     * @param \DBORM\CSIBundle\Entity\Tblfptstatus $fkStatus
     * @return Tblfptactivestatus
     */
    public function setFkStatus(\DBORM\CSIBundle\Entity\Tblfptstatus $fkStatus = null)
    {
        $this->fkStatus = $fkStatus;

        return $this;
    }

    /**
     * Get fkStatus
     *
     * @return \DBORM\CSIBundle\Entity\Tblfptstatus 
     */
    public function getFkStatus()
    {
        return $this->fkStatus;
    }
        
    private $conn, $WidgetController;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    }
    
    public function getDayFlightDone($date, $hour1 = '00:00:00', $hour2 = '23:59:59'){
    
    	return $this->conn->fetchColumn(
    			"SELECT COUNT(*)
    					FROM Tblfptactivestatus a
    					WHERE a.FK_Status_id != 'REQUESTED'
    					AND a.FK_Status_id != 'ERROR'
    					AND a.FK_Status_id != 'PROCESSING'
    					AND a.starttimeevt BETWEEN ? AND ?", array($date.' '.$hour1, $date.' '.$hour2));
    
    }
    
    public function getDayFlightDoneWithoutHandover($date, $sector, $hour1 = '00:00:00', $hour2 = '23:59:59'){
    	
    	return $this->conn->fetchAll(
    			" SELECT a.FK_FlightNumber, a.FK_FlightDate
						FROM Tblfptactivestatus a, Tblflightschedule f
						WHERE NOT Exists (
							select *
							from Tblfpthandover h
								where h.FK_FlightNumber = a.FK_FlightNumber
								and h.FK_FlightDate = a.FK_FlightDate
						)
    					AND a.FK_FlightNumber = f.PK_Flight
    					AND f.FK_sector_id = '".$sector."'
    					AND a.FK_Status_id = 'PUBLISHED'
    					AND a.starttimeevt BETWEEN ? AND ?", array($date.' '.$hour1, $date.' '.$hour2));
    
    }
    
    public function getDayFlightFail($date, $hour1 = '00:00:00', $hour2 = '23:59:59'){
    	 
    	return $this->conn->fetchColumn(
    			"SELECT COUNT(*)
    					FROM Tblfptactivestatus a
    					WHERE a.FK_Status_id = 'ERROR'
    					AND a.starttimeevt BETWEEN ? AND ?", array($date.' '.$hour1, $date.' '.$hour2));
    }
    
    public function getDayFlightFailMsg($date, $hour1 = '00:00:00', $hour2 = '23:59:59'){
    
    	$reformated_array = array();
    	 
    	$error_flight_tab = $this->conn->fetchAll(
    			"SELECT a.FK_FlightNumber, a.FK_FlightDate, a.FK_Version, a.StartTimeEvt, a.Comment
    				FROM Tblfptactivestatus a
    				WHERE a.FK_Status_id = 'ERROR'
    				AND a.starttimeevt BETWEEN ? AND ?", array($date.' '.$hour1, $date.' '.$hour2));
    	 
    	foreach($error_flight_tab as $flight){
    
    		$flight_id = $flight["FK_FlightNumber"]."/".$flight["FK_FlightDate"].' v'.$flight["FK_Version"];
    		$reformated_array[] = array("alert_color"=>"toDo",
    				'flight'=>$flight_id,
    				"evtdate"=>date('H:i:s', strtotime($flight["StartTimeEvt"])),
    				"formatError"=>$flight["Comment"]);
    	}
    	return $reformated_array;
    }
    
    public function getErrorMsgHistoDays($nbHistoDays){
    	$tabWeekCount = array();
    	$index = 0;
    	//$WidgetController = new WidgetController();
    
    	for($i=$nbHistoDays; $i>=0; $i--){
    
    		$date = $this->WidgetController->getDate($i,'-');
    		$msg_array = $this->getDayFlightFailMsg($date);
    
    		$tabWeekCount[$index] = array("date"=>$date, "errors"=>$msg_array);
    		$index=$index+1;
    	}
    	return $tabWeekCount;
    }
    
    public function getSuccesHistoDays($nbHistoDays){
    	$tabWeekCount = array();
    	$index = 0;
    	//$WidgetController = new WidgetController();
    	 
    	for($i=$nbHistoDays; $i>=0; $i--){
    
    		$date = $this->WidgetController->getDate($i,'-');
    		$dayCount = $this->getDayFlightDone($date);
    
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
    
    public function getSuccesHistoHours($nbHistoHours){
    	 
    	$tabHourCount = array();
    	$index = 0;
    	//$WidgetController = new WidgetController($this->controller);
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
    		$hourCount = $hourCount + $this->getDayFlightDone($date, $this->WidgetController->getHour(($hourdiff)+1,'-'), $this->WidgetController->getHour($hourdiff,'-'));
    
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
    
    public function getErrorHistoDays($nbHistoDays){
    	$tabWeekCount = array();
    	$index = 0;
    	//$WidgetController = new WidgetController();
    
    	for($i=$nbHistoDays; $i>=0; $i--){
    
    		$date = $this->WidgetController->getDate($i,'-');
    		$dayCount = $this->getDayFlightFail($date);
    
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
    
    public function getErrorHistoHours($nbHistoHours){
    
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
    		$hourCount = $hourCount + $this->getDayFlightFail($date, $this->WidgetController->getHour(($hourdiff)+1,'-'), $this->WidgetController->getHour($hourdiff,'-'));
    		 
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
    
}
