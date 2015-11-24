<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use General\WidgetBundle\Controller\WidgetController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use General\WidgetBundle\Tests\simple_html_dom;
use Doctrine\ORM\Query\AST\Functions\SubstringFunction;

/**
 * Tblsubsectorklmcode
 *
 * @ORM\Table(name="TblSubSectorKLMCode", indexes={@ORM\Index(name="IDX_E72DA6242E862701", columns={"FK_subsector_id"})})
 * @ORM\Entity
 */
class Tblsubsectorklmcode
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
     * @ORM\Column(name="KLM_subsec_code", type="string", length=50, nullable=true)
     */
    private $klmSubsecCode;

    /**
     * @var \Tblsubsector
     *
     * @ORM\ManyToOne(targetEntity="Tblsubsector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_subsector_id", referencedColumnName="PK_SubSector_code")
     * })
     */
    private $fkSubsector;
    
	private $conn, $WidgetController, $simple_html_dom;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    }
    public function getKLMCode(Connection $subsect)
    {
    	 return $this->conn->fetchColumn(
    		"SELECT s.KLM_subsec_code
    					FROM Tblsubsectorklmcode s
    					WHERE s.FK_subsector_id = '".$subsect."'");
    }
   

}
