<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\ORM\QueryBuilder;


/**
 * Tblqueuesreasonscsorequest
 *
 * @ORM\Table(name="TblQueuesReasonsCSORequest")
 * @ORM\Entity
 */
class Tblqueuesreasonscsorequest
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
     * @ORM\Column(name="Libelle", type="string", length=100, nullable=false)
     */
    private $libelle;
	
    
    private $conn;
    
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    }
    
    
    public function getAll()
    {
    	return $this->conn->fetchAll(
    			"SELECT Pk_id, Libelle FROM Tblqueuesreasonscsorequest qr ORDER BY qr.Libelle"
        );
    }
    
    

}
