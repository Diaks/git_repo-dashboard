<?php

namespace DBORM\OLDCSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * Tblfptpcsettings
 *
 * @ORM\Table(name="tblFPTPCSettings")
 * @ORM\Entity
 */
class Tblfptpcsettings
{
    /**
     * @var integer
     * 
     * @ORM\Id
 	 * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="RobotPCAFR", type="string", length=12, nullable=true)
     */
    private $robotpcafr;

    /**
     * @var string
     *
     * @ORM\Column(name="LastTimeAlive", type="string", length=20, nullable=true)
     */
    private $lasttimealive;

    /**
     * @var string
     *
     * @ORM\Column(name="TID", type="string", length=20, nullable=true)
     */
    private $tid;



    /**
     * Set id
     *
     * @param integer $id
     * @return Tblfptpcsettings
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
     * Set robotpcafr
     *
     * @param string $robotpcafr
     * @return Tblfptpcsettings
     */
    public function setAFR($robotpcafr)
    {
        $this->robotpcafr = $robotpcafr;

        return $this;
    }

    /**
     * Get robotpcafr
     *
     * @return string 
     */
    public function getAFR()
    {
        return $this->robotpcafr;
    }

    /**
     * Set lasttimealive
     *
     * @param string $lasttimealive
     * @return Tblfptpcsettings
     */
    public function setLasttimealive($lasttimealive)
    {
        $this->lasttimealive = $lasttimealive;

        return $this;
    }

    /**
     * Get lasttimealive
     *
     * @return string 
     */
    public function getLasttimealive()
    {
        return $this->lasttimealive;
    }

    /**
     * Set tid
     *
     * @param string $tid
     * @return Tblfptpcsettings
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return string 
     */
    public function getTid()
    {
        return $this->tid;
    }
    private $conn;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    }
    
    public function getPcSettings(){
    	return $this->conn->fetchAll(
    			"SELECT p.id as id, p.robotpcafr as afr, p.lasttimealive as last_time, p.tid as tid
    			FROM Tblfptpcsettings p");
    }
    
    public function deletePc($id){
    	
    	$this->conn->delete('Tblfptpcsettings', array('id' => $id));
    }
    
    public function addPc($afr, $tid){
    	
    	$id=$this->getPcCount()+1;
    	$time = date("M j Y g:iA");
    	$exist=$this->conn->fetchArray(
    			"SELECT p.id as id
    			FROM Tblfptpcsettings p
    			WHERE p.id = ?", array($id));
    	
    	while($exist)
    	{
    		$id=$id+1;
    		$exist=$this->conn->fetchArray(
    			"SELECT p.id as id
    			FROM Tblfptpcsettings p
    			WHERE p.id = ?", array($id));
    	}
    	$this->conn->insert('tblFPTPCSettings', array('id' => $id, 'robotpcafr' => $afr, 'tid' => $tid, 'lasttimealive' => $time));
    	
    }
    
    public function getPcCount(){
    	return $this->conn->fetchColumn('SELECT COUNT (*) FROM Tblfptpcsettings');
    }
   
}
