<?php

namespace DBORM\OLDCSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * Tblfdvshc
 *
 * @ORM\Table(name="tblFDVSHC")
 * @ORM\Entity
 */
class Tblfdvshc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SHC", type="string", length=10, nullable=true)
     */
    private $shc;

    /**
     * @var string
     *
     * @ORM\Column(name="Priority", type="decimal", precision=2, scale=2)
     */
    private $priority;



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
     * Set shc
     *
     * @param string $shc
     * @return Tblfdvshc
     */
    public function setShc($shc)
    {
        $this->shc = $shc;

        return $this;
    }

    /**
     * Get shc
     *
     * @return string 
     */
    public function getShc()
    {
        return $this->shc;
    }

    /**
     * Set priority
     *
     * @param decimal $priority
     * @return Tblfdvshc
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return decimal
     */
    public function getPriority()
    {
        return $this->priority;
    }
    
	public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    }
    
    public function getPrio(){
    	$prio_array = array();
    	
    	$prio_array['Tblfdvshc'] = $this->conn->fetchAll(
    			"SELECT 'Shc'as type, s.Shc as uld, s.Priority as priority
    			FROM Tblfdvshc s
    			ORDER BY s.Priority");
    	
    	$prio_array['Tblfdvsktc'] = $this->conn->fetchAll(
    			"SELECT 'Sktc'as type, s.Sktc as uld, s.Priority as priority
    			FROM Tblfdvsktc s
    			ORDER BY s.Priority");
    	
    	$prio_array['Tblfdvsegment'] = $this->conn->fetchAll(
    			"SELECT 'Segment'as type, s.Segment as uld, s.Priority as priority
    			FROM Tblfdvsegment s
    			ORDER BY s.Priority");
    	
    	return $prio_array;
    }
    public function updatePrio($table, $type, $uld, $prio){
    	$this->conn->update($table, array(
    			'Priority' =>$prio), array($type => $uld));
    }
}
