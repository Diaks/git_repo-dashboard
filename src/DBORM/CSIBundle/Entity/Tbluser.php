<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * Tbluser
 *
 * @ORM\Table(name="TblUser", indexes={@ORM\Index(name="IDX_5FED80ACA390C97B", columns={"FK_Sector_id"}), @ORM\Index(name="IDX_5FED80ACE5E4B93", columns={"FK_TypeProfil_id"})})
 * @ORM\Entity
 */
class Tbluser
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Departement", type="string", length=50, nullable=true)
     */
    private $departement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UserStartDate", type="datetime", nullable=true)
     */
    private $userstartdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UserEndDate", type="datetime", nullable=true)
     */
    private $userenddate;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="text", length=-1, nullable=true)
     */
    private $password;

    /**
     * @var \Tblsector
     *
     * @ORM\ManyToOne(targetEntity="Tblsector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Sector_id", referencedColumnName="PK_id")
     * })
     */
    private $fkSector;

    /**
     * @var \Tbltypeprofil
     *
     * @ORM\ManyToOne(targetEntity="Tbltypeprofil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_TypeProfil_id", referencedColumnName="PK_id")
     * })
     */
    private $fkTypeprofil;



    /**
     * Get pkId
     *
     * @return string 
     */
    public function getPkId()
    {
        return $this->pkId;
    }

    /**
     * Set userstartdate
     *
     * @param \DateTime $userstartdate
     * @return Tbluser
     */
    public function setUserstartdate($userstartdate)
    {
        $this->userstartdate = $userstartdate;

        return $this;
    }

    /**
     * Get userstartdate
     *
     * @return \DateTime 
     */
    public function getUserstartdate()
    {
        return $this->userstartdate;
    }

    /**
     * Set userenddate
     *
     * @param \DateTime $userenddate
     * @return Tbluser
     */
    public function setUserenddate($userenddate)
    {
        $this->userenddate = $userenddate;

        return $this;
    }

    /**
     * Get userenddate
     *
     * @return \DateTime 
     */
    public function getUserenddate()
    {
        return $this->userenddate;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    private $conn;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    }
    
    public function getTypeProfil(){
    	return $this->fkTypeprofil;
    }
    public function setTypeProfil($var){
    	return $this->fkTypeprofil = $var;
    }
    public function getUser($id, $password)
    {
    	return $this->conn->fetchAssoc(
    			"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.password = ?",
    			array($id, $password)
    	);
    }
    
    
    public function findUser($id)
    {
    	return $this->conn->fetchAssoc(
    			"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?",
    			array($id)
    	);
    }
    
    public function findUsersByAttribute($id = null, $firstname = null, $lastname = null, $type = null)
    {
    	if(isset($id) && isset($firstname) && isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.FirstName = ?
    							AND u.LastName = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($id, $firstname, $lastname, $type)
    		);
    	}
    	
    	elseif(isset($id) && isset($firstname) && isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.FirstName = ?
    							AND u.LastName = ?",
    				array($id, $firstname, $lastname)
    		);
    	}
    	
    	elseif(isset($id) && isset($firstname) && !isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.FirstName = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($id, $firstname, $type)
    		);
    	}
    	
    	elseif(isset($id) && !isset($firstname) && isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.LastName = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($id, $lastname, $type)
    		);
    	}
    	
    	elseif(!isset($id) && isset($firstname) && isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.FirstName = ?
    							AND u.LastName = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($firstname, $lastname, $type)
    		);
    	}
    	
    	elseif(isset($id) && isset($firstname) && !isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.FirstName = ?",
    				array($id, $firstname)
    		);
    	}
    	
    	elseif(isset($id) && !isset($firstname) && isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.LastName = ?",
    				array($id, $lastname)
    		);
    	}
    	
    	elseif(!isset($id) && isset($firstname) && isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.FirstName = ?
    							AND u.LastName = ?",
    				array($firstname, $lastname)
    		);
    	}
    	
    	elseif(isset($id) && !isset($firstname) && !isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($id, $type)
    		);
    	}
    	
    	elseif(!isset($id) && isset($firstname) && !isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.FirstName = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($firstname, $type)
    		);
    	}
    	
    	elseif(!isset($id) && !isset($firstname) && isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.LastName = ?
    							AND u.FK_TypeProfil_id = ?",
    				array($lastname, $type)
    		);
    	}
    	
    	elseif(isset($id) && !isset($firstname) && !isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.PK_id = ?",
    				array($id)
    		);
    	}
    	
    	elseif(!isset($id) && isset($firstname) && !isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.FirstName = ?",
    				array($firstname)
    		);
    	}
    	
    	elseif(!isset($id) && !isset($firstname) && isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.LastName = ?",
    				array($lastname)
    		);
    	}
    	
    	elseif(!isset($id) && !isset($firstname) && !isset($lastname) && isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u
    							WHERE u.FK_TypeProfil_id = ?",
    				array($type)
    		);
    	}
    	
    	elseif(!isset($id) && !isset($firstname) && !isset($lastname) && !isset($type)){
    		return $this->conn->fetchAll(
    				"SELECT *
    							FROM Tbluser u"
    		);
    	}
    }
    
    public function getAll()
    {
    	return $this->conn->fetchAll(
    			"SELECT *
                    			FROM Tbluser u
                    			ORDER BY u.LastName"
    	);
    }
    
    public function deleteUser($id){
    
    	$this->conn->delete('Tbluser', array('PK_id' => $id));
    }
    
    public function addUser($Matricule, $firstname, $lastname, $password, $Typeprofil){
    	
    	if($this->findUser($Matricule)){
    		$this->updateUser($Matricule, $firstname, $lastname, $password, $Typeprofil, null, null);
    	}
    	else{
    		$this->conn->insert('Tbluser', array('PK_id' => $Matricule,
    				'FirstName' =>$firstname,
    				'LastName' =>$lastname,
    				'Password' =>$this->encodePassword($password),
    				'FK_TypeProfil_id' =>$Typeprofil));
    	}
    }
    
    public function updateUser($Matricule, $firstname, $lastname, $password, $Typeprofil, $departement, $sector){
    	$this->conn->update('Tbluser', array(
    			'FirstName' =>$firstname,
    			'LastName' =>$lastname,
    			'FK_TypeProfil_id' =>$Typeprofil,
    			'Departement' =>$departement,
    			'FK_Sector_id' =>$sector), array('PK_id' => $Matricule));
    	 
    	if(isset($password)){
    		$password = $this->encodePassword($password);
    		$this->conn->update('Tbluser', array('Password' =>$password), array('PK_id' => $Matricule));
    	}
    	 
    }
    public function encodePassword($pass)
    {
    	$salt = 418562002;
    	return hash('sha256', $salt . $pass); // Custom function for encrypt
    }
    public function getMatricule(){
    	return $this->pkId;
    }
    public function setMatricule($Matricule){
    	$this->pkId = $Matricule;
    }
    
    /**
     * Set password
     *
     * @param string $password
     * @return Tbluser
     */
    public function setPassword($Password){
    	$this->password = $Password;
    }
    
    /**
     * Set departement
     *
     * @param string $departement
     * @return Tbluser
     */
	public function setDepartement($departement){
    	$this->departement = $departement;
    }
    
    /**
     * Get departement
     *
     * @return string
     */
	public function getDepartement(){
    	return $this->departement;
    }
    
    public function setSector($sector){
    	$this->fkSector = $sector;
    }
    public function getSector(){
    	return $this->fkSector;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Tbluser
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Tbluser
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set fkSector
     *
     * @param \DBORM\CSIBundle\Entity\Tblsector $fkSector
     * @return Tbluser
     */
    public function setFkSector(\DBORM\CSIBundle\Entity\Tblsector $fkSector = null)
    {
        $this->fkSector = $fkSector;

        return $this;
    }

    /**
     * Get fkSector
     *
     * @return \DBORM\CSIBundle\Entity\Tblsector 
     */
    public function getFkSector()
    {
        return $this->fkSector;
    }

    /**
     * Set fkTypeprofil
     *
     * @param \DBORM\CSIBundle\Entity\Tbltypeprofil $fkTypeprofil
     * @return Tbluser
     */
    public function setFkTypeprofil(\DBORM\CSIBundle\Entity\Tbltypeprofil $fkTypeprofil = null)
    {
        $this->fkTypeprofil = $fkTypeprofil;

        return $this;
    }

    /**
     * Get fkTypeprofil
     *
     * @return \DBORM\CSIBundle\Entity\Tbltypeprofil 
     */
    public function getFkTypeprofil()
    {
        return $this->fkTypeprofil;
    }
}
