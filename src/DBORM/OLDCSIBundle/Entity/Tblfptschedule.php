<?php

namespace DBORM\OLDCSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptschedule
 *
 * @ORM\Table(name="tblFPTSchedule")
 * @ORM\Entity
 */
class Tblfptschedule
{
    /**
     * @var string
     *
     * @ORM\Id
 	 * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="Sector", type="string", length=15, nullable=true)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="Subsector", type="string", length=15, nullable=true)
     */
    private $subsector;

    /**
     * @var string
     *
     * @ORM\Column(name="Flight", type="string", length=15, nullable=true)
     */
    private $flight;

    /**
     * @var string
     *
     * @ORM\Column(name="Origin", type="string", length=15, nullable=true)
     */
    private $origin;

    /**
     * @var string
     *
     * @ORM\Column(name="Routing", type="string", length=15, nullable=true)
     */
    private $routing;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeAvion", type="string", length=15, nullable=true)
     */
    private $typeavion;

    /**
     * @var string
     *
     * @ORM\Column(name="DOW", type="string", length=15, nullable=true)
     */
    private $dow;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbJ", type="integer", nullable=true)
     */
    private $nbj;

    /**
     * @var string
     *
     * @ORM\Column(name="ETD", type="string", length=15, nullable=true)
     */
    private $etd;

    /**
     * @var string
     *
     * @ORM\Column(name="PMD", type="string", length=15, nullable=true)
     */
    private $pmd;

    /**
     * @var string
     *
     * @ORM\Column(name="PLD", type="string", length=15, nullable=true)
     */
    private $pld;

    /**
     * @var string
     *
     * @ORM\Column(name="AKE", type="string", length=15, nullable=true)
     */
    private $ake;

    /**
     * @var string
     *
     * @ORM\Column(name="deb_periode", type="string", length=15, nullable=true)
     */
    private $debPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_periode", type="string", length=15, nullable=true)
     */
    private $finPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="Instructions", type="string", length=2000, nullable=true)
     */
    private $instructions;

    /**
     * @var string
     *
     * @ORM\Column(name="fdvtime", type="string", length=15, nullable=true)
     */
    private $fdvtime;

    /**
     * @var string
     *
     * @ORM\Column(name="MaxPayload", type="string", length=15, nullable=true)
     */
    private $maxpayload;

    /**
     * @var string
     *
     * @ORM\Column(name="VolMD", type="string", length=15, nullable=true)
     */
    private $volmd;

    /**
     * @var string
     *
     * @ORM\Column(name="VolLD", type="string", length=15, nullable=true)
     */
    private $volld;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail_Subsector", type="string", length=50, nullable=true)
     */
    private $mailSubsector;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail_Assistant", type="string", length=50, nullable=true)
     */
    private $mailAssistant;

    /**
     * @var string
     *
     * @ORM\Column(name="WGT_LSE", type="string", length=15, nullable=true)
     */
    private $wgtLse;

    /**
     * @var string
     *
     * @ORM\Column(name="VOL_LSE", type="string", length=15, nullable=true)
     */
    private $volLse;

    /**
     * @var string
     *
     * @ORM\Column(name="PLD_LSE", type="string", length=15, nullable=true)
     */
    private $pldLse;

    /**
     * @var string
     *
     * @ORM\Column(name="LEN_20FT", type="string", length=15, nullable=true)
     */
    private $len20ft;



    /**
     * Set sector
     *
     * @param string $sector
     * @return Tblfptschedule
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set subsector
     *
     * @param string $subsector
     * @return Tblfptschedule
     */
    public function setSubsector($subsector)
    {
        $this->subsector = $subsector;

        return $this;
    }

    /**
     * Get subsector
     *
     * @return string 
     */
    public function getSubsector()
    {
        return $this->subsector;
    }

    /**
     * Set flight
     *
     * @param string $flight
     * @return Tblfptschedule
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return string 
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return Tblfptschedule
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
     * Set routing
     *
     * @param string $routing
     * @return Tblfptschedule
     */
    public function setRouting($routing)
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Get routing
     *
     * @return string 
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Set typeavion
     *
     * @param string $typeavion
     * @return Tblfptschedule
     */
    public function setTypeavion($typeavion)
    {
        $this->typeavion = $typeavion;

        return $this;
    }

    /**
     * Get typeavion
     *
     * @return string 
     */
    public function getTypeavion()
    {
        return $this->typeavion;
    }

    /**
     * Set dow
     *
     * @param string $dow
     * @return Tblfptschedule
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
     * Set nbj
     *
     * @param integer $nbj
     * @return Tblfptschedule
     */
    public function setNbj($nbj)
    {
        $this->nbj = $nbj;

        return $this;
    }

    /**
     * Get nbj
     *
     * @return integer 
     */
    public function getNbj()
    {
        return $this->nbj;
    }

    /**
     * Set etd
     *
     * @param string $etd
     * @return Tblfptschedule
     */
    public function setEtd($etd)
    {
        $this->etd = $etd;

        return $this;
    }

    /**
     * Get etd
     *
     * @return string 
     */
    public function getEtd()
    {
        return $this->etd;
    }

    /**
     * Set pmd
     *
     * @param string $pmd
     * @return Tblfptschedule
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
     * @return Tblfptschedule
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
     * @return Tblfptschedule
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
     * Set debPeriode
     *
     * @param string $debPeriode
     * @return Tblfptschedule
     */
    public function setDebPeriode($debPeriode)
    {
        $this->debPeriode = $debPeriode;

        return $this;
    }

    /**
     * Get debPeriode
     *
     * @return string 
     */
    public function getDebPeriode()
    {
        return $this->debPeriode;
    }

    /**
     * Set finPeriode
     *
     * @param string $finPeriode
     * @return Tblfptschedule
     */
    public function setFinPeriode($finPeriode)
    {
        $this->finPeriode = $finPeriode;

        return $this;
    }

    /**
     * Get finPeriode
     *
     * @return string 
     */
    public function getFinPeriode()
    {
        return $this->finPeriode;
    }

    /**
     * Set instructions
     *
     * @param string $instructions
     * @return Tblfptschedule
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return string 
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set fdvtime
     *
     * @param string $fdvtime
     * @return Tblfptschedule
     */
    public function setFdvtime($fdvtime)
    {
        $this->fdvtime = $fdvtime;

        return $this;
    }

    /**
     * Get fdvtime
     *
     * @return string 
     */
    public function getFdvtime()
    {
        return $this->fdvtime;
    }

    /**
     * Set maxpayload
     *
     * @param string $maxpayload
     * @return Tblfptschedule
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
     * Set volmd
     *
     * @param string $volmd
     * @return Tblfptschedule
     */
    public function setVolmd($volmd)
    {
        $this->volmd = $volmd;

        return $this;
    }

    /**
     * Get volmd
     *
     * @return string 
     */
    public function getVolmd()
    {
        return $this->volmd;
    }

    /**
     * Set volld
     *
     * @param string $volld
     * @return Tblfptschedule
     */
    public function setVolld($volld)
    {
        $this->volld = $volld;

        return $this;
    }

    /**
     * Get volld
     *
     * @return string 
     */
    public function getVolld()
    {
        return $this->volld;
    }

    /**
     * Set mailSubsector
     *
     * @param string $mailSubsector
     * @return Tblfptschedule
     */
    public function setMailSubsector($mailSubsector)
    {
        $this->mailSubsector = $mailSubsector;

        return $this;
    }

    /**
     * Get mailSubsector
     *
     * @return string 
     */
    public function getMailSubsector()
    {
        return $this->mailSubsector;
    }

    /**
     * Set mailAssistant
     *
     * @param string $mailAssistant
     * @return Tblfptschedule
     */
    public function setMailAssistant($mailAssistant)
    {
        $this->mailAssistant = $mailAssistant;

        return $this;
    }

    /**
     * Get mailAssistant
     *
     * @return string 
     */
    public function getMailAssistant()
    {
        return $this->mailAssistant;
    }

    /**
     * Set wgtLse
     *
     * @param string $wgtLse
     * @return Tblfptschedule
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
     * @return Tblfptschedule
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
     * @return Tblfptschedule
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
     * @return Tblfptschedule
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
}
