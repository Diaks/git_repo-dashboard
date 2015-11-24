<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * Tbltypeprofil
 *
 * @ORM\Table(name="TblTypeProfil")
 * @ORM\Entity
 */
class Tbltypeprofil
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
     * @ORM\Column(name="TypeProfil", type="string", length=50, nullable=true)
     */
    private $typeprofil;



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
     * Set typeprofil
     *
     * @param string $typeprofil
     * @return Tbltypeprofil
     */
    public function setTypeprofil($typeprofil)
    {
        $this->typeprofil = $typeprofil;

        return $this;
    }

    /**
     * Get typeprofil
     *
     * @return string 
     */
    public function getTypeprofil()
    {
        return $this->typeprofil;
    }
    
    private $conn;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    }
    
    public function getAllTypes(){
    
    	$types_Array = array();
    	$res = $this->conn->fetchAll(
    			"SELECT t.PK_id as id, t.TypeProfil as lbl
    			FROM TblTypeProfil t");
    	foreach ($res as $type_profil){
    		$types_Array[$type_profil['id']] = $type_profil['lbl'];
    	}
    	return $types_Array;
    }
    
    public function getNbUserByType($type_id){
    
    	return $this->conn->fetchColumn(
    			"SELECT COUNT(*)
    					FROM TblTypeProfil t, Tbluser u
    					WHERE t.PK_id = u.FK_TypeProfil_id
    					AND t.PK_id = ?", array($type_id));
    
    }
    
    public function addType($label){
    	 
    	$this->conn->insert('TblTypeProfil', array('TypeProfil' => $label));
    	
    }
    
    public function deleteGroup($id){
    	$this->conn->delete('TblTypeProfil', array('PK_id' => $id));
    }
    
}
