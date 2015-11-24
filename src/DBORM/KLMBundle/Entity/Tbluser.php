<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Set departement
     *
     * @param string $departement
     * @return Tbluser
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
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
     * Set password
     *
     * @param string $password
     * @return Tbluser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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

    /**
     * Set fkSector
     *
     * @param \DBORM\KLMBundle\Entity\Tblsector $fkSector
     * @return Tbluser
     */
    public function setFkSector(\DBORM\KLMBundle\Entity\Tblsector $fkSector = null)
    {
        $this->fkSector = $fkSector;

        return $this;
    }

    /**
     * Get fkSector
     *
     * @return \DBORM\KLMBundle\Entity\Tblsector 
     */
    public function getFkSector()
    {
        return $this->fkSector;
    }

    /**
     * Set fkTypeprofil
     *
     * @param \DBORM\KLMBundle\Entity\Tbltypeprofil $fkTypeprofil
     * @return Tbluser
     */
    public function setFkTypeprofil(\DBORM\KLMBundle\Entity\Tbltypeprofil $fkTypeprofil = null)
    {
        $this->fkTypeprofil = $fkTypeprofil;

        return $this;
    }

    /**
     * Get fkTypeprofil
     *
     * @return \DBORM\KLMBundle\Entity\Tbltypeprofil 
     */
    public function getFkTypeprofil()
    {
        return $this->fkTypeprofil;
    }
}
