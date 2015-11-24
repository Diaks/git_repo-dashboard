<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;

use General\WidgetBundle\Controller\WidgetController;
/**
 * Tblfptactivestatus
 *
 * @ORM\Table(name="TblFPTHandover", indexes={@ORM\Index(name="IDX_D453B727B41EA3FFD3F072244D225600H", columns={"FK_FlightNumber", "FK_FlightDate", "FK_Version"}), @ORM\Index(name="IDX_D453B72716F201A1H", columns={"FK_Status_id"})})
 * @ORM\Entity
 */
class Tblfpthandover
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
    public function getDayHandoverDone($date, $hour1 = '00:00:00', $hour2 = '23:59:59'){
    
    	$error_flight_tab = $this->conn->fetchAll(
    			"SELECT a.FK_FlightNumber, a.FK_FlightDate, a.FK_Version
    				FROM Tblfpthandover a
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
    public function getHandoverDone($date, $subsector, $pre){
    	return $this->conn->fetchAll(
    			" SELECT f.FK_subSector_id, f.PK_Flight, f.ETD_Time
					from Tblfpthandover h, Tblflightschedule f
						where h.FK_FlightNumber = f.PK_Flight
    					and f.FK_subSector_id = '".$subsector."'
    					and f.ETD_Time ".$pre." 2200
						and h.FK_FlightDate = '".$date."'
    					group by f.FK_subSector_id, f.PK_Flight, f.ETD_Time
    					order by ETD_Time DESC");
    }
    public function getDayFlightDoneBySubSec($subsector){
    
    	$date = strtoupper(date("dMy", strtotime($this->WidgetController->getDate(1,'+'))));
    	$today_flights = $this->getHandoverDone($date, $subsector, '<');
    	
    	$date = strtoupper(date("dMy", strtotime($this->WidgetController->getDate(1,'+'))));
    	$tomorrow_flights = $this->getHandoverDone($date, $subsector, '>');
    	$flights_to_do = array();
    	foreach ($today_flights as $flight){
    		$flights_to_do[]=$flight;
    	}
    	foreach ($tomorrow_flights as $flight){
    		$flights_to_do[]=$flight;
    	}
    	return $flights_to_do;
    	
    }
    
    
}
