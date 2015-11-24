<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblflightschedule
 *
 * @ORM\Table(name="TblFlightSchedule", indexes={@ORM\Index(name="IDX_1EF1E41A1EFF39A", columns={"FK_AircraftType_id"}), @ORM\Index(name="IDX_1EF1E4121614BD8", columns={"FK_sector_id"})})
 * @ORM\Entity
 */
class Tblflightschedule
{
    /**
     * @var string
     *
     * @ORM\Column(name="FK_subSector_id", type="string", length=50, nullable=false)
     */
    private $fkSubsectorId;

    /**
     * @var string
     *
     * @ORM\Column(name="PK_Flight", type="string", length=50, nullable=false)
     */
    private $pkFlight;

    /**
     * @var string
     *
     * @ORM\Column(name="Origin", type="string", length=50, nullable=true)
     */
    private $origin;

    /**
     * @var string
     *
     * @ORM\Column(name="ESC", type="string", length=50, nullable=true)
     */
    private $esc;

    /**
     * @var string
     *
     * @ORM\Column(name="DOW", type="string", length=50, nullable=true)
     */
    private $dow;

    /**
     * @var string
     *
     * @ORM\Column(name="Nb_jours", type="string", length=50, nullable=true)
     */
    private $nbJours;

    /**
     * @var string
     *
     * @ORM\Column(name="ETD_Time", type="string", length=50, nullable=true)
     */
    private $etdTime;

    /**
     * @var string
     *
     * @ORM\Column(name="PMD", type="string", length=50, nullable=true)
     */
    private $pmd;

    /**
     * @var string
     *
     * @ORM\Column(name="PLD", type="string", length=50, nullable=true)
     */
    private $pld;

    /**
     * @var string
     *
     * @ORM\Column(name="AKE", type="string", length=50, nullable=true)
     */
    private $ake;

    /**
     * @var string
     *
     * @ORM\Column(name="Period_DU", type="string", length=50, nullable=true)
     */
    private $periodDu;

    /**
     * @var string
     *
     * @ORM\Column(name="Period_AU", type="string", length=50, nullable=true)
     */
    private $periodAu;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaires", type="text", length=-1, nullable=true)
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="FDV_Time", type="string", length=50, nullable=true)
     */
    private $fdvTime;

    /**
     * @var string
     *
     * @ORM\Column(name="MaxPayload", type="string", length=50, nullable=true)
     */
    private $maxpayload;

    /**
     * @var string
     *
     * @ORM\Column(name="Vol_MD", type="string", length=50, nullable=true)
     */
    private $volMd;

    /**
     * @var string
     *
     * @ORM\Column(name="Vol_LD", type="string", length=50, nullable=true)
     */
    private $volLd;

    /**
     * @var string
     *
     * @ORM\Column(name="Wgt_LSE", type="string", length=50, nullable=true)
     */
    private $wgtLse;

    /**
     * @var string
     *
     * @ORM\Column(name="Vol_LSE", type="string", length=50, nullable=true)
     */
    private $volLse;

    /**
     * @var string
     *
     * @ORM\Column(name="PLD_LSE", type="string", length=50, nullable=true)
     */
    private $pldLse;

    /**
     * @var string
     *
     * @ORM\Column(name="LEN20FT", type="string", length=50, nullable=true)
     */
    private $len20ft;

    /**
     * @var integer
     *
     * @ORM\Column(name="PK_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;

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
     * @var \Tblsector
     *
     * @ORM\ManyToOne(targetEntity="Tblsector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_sector_id", referencedColumnName="PK_id")
     * })
     */
    private $fkSector;



    /**
     * Set fkSubsectorId
     *
     * @param string $fkSubsectorId
     * @return Tblflightschedule
     */
    public function setFkSubsectorId($fkSubsectorId)
    {
        $this->fkSubsectorId = $fkSubsectorId;

        return $this;
    }

    /**
     * Get fkSubsectorId
     *
     * @return string 
     */
    public function getFkSubsectorId()
    {
        return $this->fkSubsectorId;
    }

    /**
     * Set pkFlight
     *
     * @param string $pkFlight
     * @return Tblflightschedule
     */
    public function setPkFlight($pkFlight)
    {
        $this->pkFlight = $pkFlight;

        return $this;
    }

    /**
     * Get pkFlight
     *
     * @return string 
     */
    public function getPkFlight()
    {
        return $this->pkFlight;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return Tblflightschedule
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set esc
     *
     * @param string $esc
     * @return Tblflightschedule
     */
    public function setEsc($esc)
    {
        $this->esc = $esc;

        return $this;
    }

    /**
     * Get esc
     *
     * @return string 
     */
    public function getEsc()
    {
        return $this->esc;
    }

    /**
     * Set dow
     *
     * @param string $dow
     * @return Tblflightschedule
     */
    public function setDow($dow)
    {
        $this->dow = $dow;

        return $this;
    }

    /**
     * Get dow
     *
     * @return string 
     */
    public function getDow()
    {
        return $this->dow;
    }

    /**
     * Set nbJours
     *
     * @param string $nbJours
     * @return Tblflightschedule
     */
    public function setNbJours($nbJours)
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    /**
     * Get nbJours
     *
     * @return string 
     */
    public function getNbJours()
    {
        return $this->nbJours;
    }

    /**
     * Set etdTime
     *
     * @param string $etdTime
     * @return Tblflightschedule
     */
    public function setEtdTime($etdTime)
    {
        $this->etdTime = $etdTime;

        return $this;
    }

    /**
     * Get etdTime
     *
     * @return string 
     */
    public function getEtdTime()
    {
        return $this->etdTime;
    }

    /**
     * Set pmd
     *
     * @param string $pmd
     * @return Tblflightschedule
     */
    public function setPmd($pmd)
    {
        $this->pmd = $pmd;

        return $this;
    }

    /**
     * Get pmd
     *
     * @return string 
     */
    public function getPmd()
    {
        return $this->pmd;
    }

    /**
     * Set pld
     *
     * @param string $pld
     * @return Tblflightschedule
     */
    public function setPld($pld)
    {
        $this->pld = $pld;

        return $this;
    }

    /**
     * Get pld
     *
     * @return string 
     */
    public function getPld()
    {
        return $this->pld;
    }

    /**
     * Set ake
     *
     * @param string $ake
     * @return Tblflightschedule
     */
    public function setAke($ake)
    {
        $this->ake = $ake;

        return $this;
    }

    /**
     * Get ake
     *
     * @return string 
     */
    public function getAke()
    {
        return $this->ake;
    }

    /**
     * Set periodDu
     *
     * @param string $periodDu
     * @return Tblflightschedule
     */
    public function setPeriodDu($periodDu)
    {
        $this->periodDu = $periodDu;

        return $this;
    }

    /**
     * Get periodDu
     *
     * @return string 
     */
    public function getPeriodDu()
    {
        return $this->periodDu;
    }

    /**
     * Set periodAu
     *
     * @param string $periodAu
     * @return Tblflightschedule
     */
    public function setPeriodAu($periodAu)
    {
        $this->periodAu = $periodAu;

        return $this;
    }

    /**
     * Get periodAu
     *
     * @return string 
     */
    public function getPeriodAu()
    {
        return $this->periodAu;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     * @return Tblflightschedule
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set fdvTime
     *
     * @param string $fdvTime
     * @return Tblflightschedule
     */
    public function setFdvTime($fdvTime)
    {
        $this->fdvTime = $fdvTime;

        return $this;
    }

    /**
     * Get fdvTime
     *
     * @return string 
     */
    public function getFdvTime()
    {
        return $this->fdvTime;
    }

    /**
     * Set maxpayload
     *
     * @param string $maxpayload
     * @return Tblflightschedule
     */
    public function setMaxpayload($maxpayload)
    {
        $this->maxpayload = $maxpayload;

        return $this;
    }

    /**
     * Get maxpayload
     *
     * @return string 
     */
    public function getMaxpayload()
    {
        return $this->maxpayload;
    }

    /**
     * Set volMd
     *
     * @param string $volMd
     * @return Tblflightschedule
     */
    public function setVolMd($volMd)
    {
        $this->volMd = $volMd;

        return $this;
    }

    /**
     * Get volMd
     *
     * @return string 
     */
    public function getVolMd()
    {
        return $this->volMd;
    }

    /**
     * Set volLd
     *
     * @param string $volLd
     * @return Tblflightschedule
     */
    public function setVolLd($volLd)
    {
        $this->volLd = $volLd;

        return $this;
    }

    /**
     * Get volLd
     *
     * @return string 
     */
    public function getVolLd()
    {
        return $this->volLd;
    }

    /**
     * Set wgtLse
     *
     * @param string $wgtLse
     * @return Tblflightschedule
     */
    public function setWgtLse($wgtLse)
    {
        $this->wgtLse = $wgtLse;

        return $this;
    }

    /**
     * Get wgtLse
     *
     * @return string 
     */
    public function getWgtLse()
    {
        return $this->wgtLse;
    }

    /**
     * Set volLse
     *
     * @param string $volLse
     * @return Tblflightschedule
     */
    public function setVolLse($volLse)
    {
        $this->volLse = $volLse;

        return $this;
    }

    /**
     * Get volLse
     *
     * @return string 
     */
    public function getVolLse()
    {
        return $this->volLse;
    }

    /**
     * Set pldLse
     *
     * @param string $pldLse
     * @return Tblflightschedule
     */
    public function setPldLse($pldLse)
    {
        $this->pldLse = $pldLse;

        return $this;
    }

    /**
     * Get pldLse
     *
     * @return string 
     */
    public function getPldLse()
    {
        return $this->pldLse;
    }

    /**
     * Set len20ft
     *
     * @param string $len20ft
     * @return Tblflightschedule
     */
    public function setLen20ft($len20ft)
    {
        $this->len20ft = $len20ft;

        return $this;
    }

    /**
     * Get len20ft
     *
     * @return string 
     */
    public function getLen20ft()
    {
        return $this->len20ft;
    }

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
     * Set fkAircrafttype
     *
     * @param \DBORM\KLMBundle\Entity\Tblaircrafttype $fkAircrafttype
     * @return Tblflightschedule
     */
    public function setFkAircrafttype(\DBORM\KLMBundle\Entity\Tblaircrafttype $fkAircrafttype = null)
    {
        $this->fkAircrafttype = $fkAircrafttype;

        return $this;
    }

    /**
     * Get fkAircrafttype
     *
     * @return \DBORM\KLMBundle\Entity\Tblaircrafttype 
     */
    public function getFkAircrafttype()
    {
        return $this->fkAircrafttype;
    }

    /**
     * Set fkSector
     *
     * @param \DBORM\KLMBundle\Entity\Tblsector $fkSector
     * @return Tblflightschedule
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
}
