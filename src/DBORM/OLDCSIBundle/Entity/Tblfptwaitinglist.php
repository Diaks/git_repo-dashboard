<?php

namespace DBORM\OLDCSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TestBundle\Fabpot\FooBundle\Controller\DefaultController;
use Doctrine\DBAL\Connection;

/**
 * Tblfptwaitinglist
 *
 * @ORM\Table(name="tblFPTWaitingList")
 * @ORM\Entity
 */

class Tblfptwaitinglist
{
	
    /**
 	* 
 	* @ORM\Column(type="integer")
 	* @ORM\Id
 	* @ORM\GeneratedValue(strategy="AUTO")
 	*/
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Flight", type="string", length=20, nullable=false)
     */
    private $flight;

    /**
     * @var float
     *
     * @ORM\Column(name="Version", type="float", precision=53, scale=0, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EvtdateTime", type="datetime", nullable=true)
     */
    private $evtdatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=200, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="RMUser", type="string", length=20, nullable=true)
     */
    private $rmuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartTime", type="datetime", nullable=true)
     */
    private $starttime;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlreadyTried", type="integer", nullable=true)
     */
    private $alreadytried;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Type", type="string", length=1, nullable=true)
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="Parameter1", type="string", length=250, nullable=true)
     */
    private $parameter1;

    /**
     * @var string
     *
     * @ORM\Column(name="Parameter2", type="string", length=250, nullable=true)
     */
    private $parameter2;

    private $conn;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Tblfptwaitinglist
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set flight
     *
     * @param string $flight
     * @return Tblfptwaitinglist
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
     * Set version
     *
     * @param float $version
     * @return Tblfptwaitinglist
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return float 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Tblfptwaitinglist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set evtdatetime
     *
     * @param \DateTime $evtdatetime
     * @return Tblfptwaitinglist
     */
    public function setEvtdatetime($evtdatetime)
    {
        $this->evtdatetime = $evtdatetime;

        return $this;
    }

    /**
     * Get evtdatetime
     *
     * @return \DateTime 
     */
    public function getEvtdatetime()
    {
        return $this->evtdatetime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Tblfptwaitinglist
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
     * Set rmuser
     *
     * @param string $rmuser
     * @return Tblfptwaitinglist
     */
    public function setRmuser($rmuser)
    {
        $this->rmuser = $rmuser;

        return $this;
    }

    /**
     * Get rmuser
     *
     * @return string 
     */
    public function getRmuser()
    {
        return $this->rmuser;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Tblfptwaitinglist
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set alreadytried
     *
     * @param integer $alreadytried
     * @return Tblfptwaitinglist
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
     * Set idType
     *
     * @param string $idType
     * @return Tblfptwaitinglist
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return string 
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set parameter1
     *
     * @param string $parameter1
     * @return Tblfptwaitinglist
     */
    public function setParameter1($parameter1)
    {
        $this->parameter1 = $parameter1;

        return $this;
    }

    /**
     * Get parameter1
     *
     * @return string 
     */
    public function getParameter1()
    {
        return $this->parameter1;
    }

    /**
     * Set parameter2
     *
     * @param string $parameter2
     * @return Tblfptwaitinglist
     */
    public function setParameter2($parameter2)
    {
        $this->parameter2 = $parameter2;

        return $this;
    }

    /**
     * Get parameter2
     *
     * @return string 
     */
    public function getParameter2()
    {
        return $this->parameter2;
    }
    
    public function getNbStatus($status){
    	 
    	return $this->conn->fetchColumn('SELECT COUNT (*) FROM Tblfptwaitinglist WHERE status= ?', array($status), 0);
    }
    
    public function status_purge_status($status){
    	 
    	$this->conn->delete('Tblfptwaitinglist', array('status' => $status));
    }
}
