<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptflights
 *
 * @ORM\Table(name="TblFPTFlights", indexes={@ORM\Index(name="IDX_C6DF75A855505656", columns={"FK_User_id"}), @ORM\Index(name="IDX_C6DF75A8A1EFF39A", columns={"FK_AircraftType_id"})})
 * @ORM\Entity
 */
class Tblfptflights
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_FlightNumber", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pkFlightnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PK_FlightDate", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pkFlightdate;

    /**
     * @var float
     *
     * @ORM\Column(name="PK_Version", type="float", precision=24, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pkVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="EDT", type="string", length=10, nullable=true)
     */
    private $edt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=true)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="DatedFlightInstruction", type="text", length=-1, nullable=true)
     */
    private $datedflightinstruction;

    /**
     * @var integer
     *
     * @ORM\Column(name="Finalisation", type="smallint", nullable=true)
     */
    private $finalisation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Prepointage", type="smallint", nullable=true)
     */
    private $prepointage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Inratable", type="smallint", nullable=true)
     */
    private $inratable = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ponctualite", type="smallint", nullable=true)
     */
    private $ponctualite = '0';

    /**
     * @var \Tbluser
     *
     * @ORM\ManyToOne(targetEntity="Tbluser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_User_id", referencedColumnName="PK_id")
     * })
     */
    private $fkUser;

    /**
     * @var \Tblaircrafttype
     *
     * @ORM\ManyToOne(targetEntity="Tblaircrafttype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_AircraftType_id", referencedColumnName="PK_id")
     * })
     */
    private $fkAircrafttype;



    /**
     * Set pkFlightnumber
     *
     * @param string $pkFlightnumber
     * @return Tblfptflights
     */
    public function setPkFlightnumber($pkFlightnumber)
    {
        $this->pkFlightnumber = $pkFlightnumber;

        return $this;
    }

    /**
     * Get pkFlightnumber
     *
     * @return string 
     */
    public function getPkFlightnumber()
    {
        return $this->pkFlightnumber;
    }

    /**
     * Set pkFlightdate
     *
     * @param string $pkFlightdate
     * @return Tblfptflights
     */
    public function setPkFlightdate($pkFlightdate)
    {
        $this->pkFlightdate = $pkFlightdate;

        return $this;
    }

    /**
     * Get pkFlightdate
     *
     * @return string 
     */
    public function getPkFlightdate()
    {
        return $this->pkFlightdate;
    }

    /**
     * Set pkVersion
     *
     * @param float $pkVersion
     * @return Tblfptflights
     */
    public function setPkVersion($pkVersion)
    {
        $this->pkVersion = $pkVersion;

        return $this;
    }

    /**
     * Get pkVersion
     *
     * @return float 
     */
    public function getPkVersion()
    {
        return $this->pkVersion;
    }

    /**
     * Set edt
     *
     * @param string $edt
     * @return Tblfptflights
     */
    public function setEdt($edt)
    {
        $this->edt = $edt;

        return $this;
    }

    /**
     * Get edt
     *
     * @return string 
     */
    public function getEdt()
    {
        return $this->edt;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tblfptflights
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set datedflightinstruction
     *
     * @param string $datedflightinstruction
     * @return Tblfptflights
     */
    public function setDatedflightinstruction($datedflightinstruction)
    {
        $this->datedflightinstruction = $datedflightinstruction;

        return $this;
    }

    /**
     * Get datedflightinstruction
     *
     * @return string 
     */
    public function getDatedflightinstruction()
    {
        return $this->datedflightinstruction;
    }

    /**
     * Set finalisation
     *
     * @param integer $finalisation
     * @return Tblfptflights
     */
    public function setFinalisation($finalisation)
    {
        $this->finalisation = $finalisation;

        return $this;
    }

    /**
     * Get finalisation
     *
     * @return integer 
     */
    public function getFinalisation()
    {
        return $this->finalisation;
    }

    /**
     * Set prepointage
     *
     * @param integer $prepointage
     * @return Tblfptflights
     */
    public function setPrepointage($prepointage)
    {
        $this->prepointage = $prepointage;

        return $this;
    }

    /**
     * Get prepointage
     *
     * @return integer 
     */
    public function getPrepointage()
    {
        return $this->prepointage;
    }

    /**
     * Set inratable
     *
     * @param integer $inratable
     * @return Tblfptflights
     */
    public function setInratable($inratable)
    {
        $this->inratable = $inratable;

        return $this;
    }

    /**
     * Get inratable
     *
     * @return integer 
     */
    public function getInratable()
    {
        return $this->inratable;
    }

    /**
     * Set ponctualite
     *
     * @param integer $ponctualite
     * @return Tblfptflights
     */
    public function setPonctualite($ponctualite)
    {
        $this->ponctualite = $ponctualite;

        return $this;
    }

    /**
     * Get ponctualite
     *
     * @return integer 
     */
    public function getPonctualite()
    {
        return $this->ponctualite;
    }

    /**
     * Set fkUser
     *
     * @param \DBORM\CSIBundle\Entity\Tbluser $fkUser
     * @return Tblfptflights
     */
    public function setFkUser(\DBORM\CSIBundle\Entity\Tbluser $fkUser = null)
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    /**
     * Get fkUser
     *
     * @return \DBORM\CSIBundle\Entity\Tbluser 
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * Set fkAircrafttype
     *
     * @param \DBORM\CSIBundle\Entity\Tblaircrafttype $fkAircrafttype
     * @return Tblfptflights
     */
    public function setFkAircrafttype(\DBORM\CSIBundle\Entity\Tblaircrafttype $fkAircrafttype = null)
    {
        $this->fkAircrafttype = $fkAircrafttype;

        return $this;
    }

    /**
     * Get fkAircrafttype
     *
     * @return \DBORM\CSIBundle\Entity\Tblaircrafttype 
     */
    public function getFkAircrafttype()
    {
        return $this->fkAircrafttype;
    }
}
