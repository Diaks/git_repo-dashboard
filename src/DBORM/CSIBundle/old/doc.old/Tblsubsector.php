<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use General\WidgetBundle\Controller\WidgetController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Tblsubsector
 *
 * @ORM\Table(name="TblSubSector", indexes={@ORM\Index(name="IDX_C940AEED21614BD8", columns={"FK_sector_id"})})
 * @ORM\Entity
 */
class Tblsubsector
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_SubSector_code", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkSubsectorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var \Tblsector
     *
     * @ORM\ManyToOne(targetEntity="Tblsector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_sector_id", referencedColumnName="PK_id")
     * })
     */
    private $fkSector;
	
    private $conn, $WidgetController;
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    }
    public function getAllSubsec()
    {
    	return $this->conn->fetchAll(
    			"SELECT PK_SubSector_code
    				FROM Tblsubsector s"
    	);
    }
    public function getSubSector(){
    	
    }
    public function setSubSector($var){
    	 
    }
    
}
