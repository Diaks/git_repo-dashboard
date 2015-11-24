<?php

namespace DBORM\CSIBundle\Entity;
use Doctrine\DBAL\Connection;
use General\WidgetBundle\Controller\WidgetController;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcccactioncomment
 *
 * @ORM\Table(name="TblCCCActionComment")
 * @ORM\Entity
 */
class Tblcccactioncomment
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;

    private $conn, $WidgetController;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    }

    /**
     * Get pkId
     *
     * @return string 
     */
    public function getPkId()
    {
        return $this->pkId;
    }
    public function getAll()
    {
    	return $this->conn->fetchAll(
    			"SELECT * 
    			FROM Tblcccactioncomment c"
    	);
    }
}
