<?php

namespace DBORM\OLDCSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptsnapshot
 *
 * @ORM\Table(name="tblFPTSnapshot", indexes={@ORM\Index(name="IX_tblFPTSnapshot", columns={"DateCreation"})})
 * @ORM\Entity
 */
class Tblfptsnapshot
{
    /**
     * @var string
     * @ORM\Id
 	 * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="FlightNumber", type="string", length=10, nullable=true)
     */
    private $flightnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="FlightDate", type="string", length=10, nullable=true)
     */
    private $flightdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=true)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="Analyst", type="string", length=15, nullable=true)
     */
    private $analyst;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Handover", type="boolean", nullable=true)
     */
    private $handover;

    /**
     * @var string
     *
     * @ORM\Column(name="AircraftType", type="string", length=10, nullable=true)
     */
    private $aircrafttype;

    /**
     * @var string
     *
     * @ORM\Column(name="Routing", type="string", length=50, nullable=true)
     */
    private $routing;

    /**
     * @var string
     *
     * @ORM\Column(name="EDT", type="string", length=10, nullable=true)
     */
    private $edt;

    /**
     * @var float
     *
     * @ORM\Column(name="OpticofWeight", type="float", precision=53, scale=0, nullable=true)
     */
    private $opticofweight;

    /**
     * @var integer
     *
     * @ORM\Column(name="OpticofPMD", type="integer", nullable=true)
     */
    private $opticofpmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="OpticofPLD", type="integer", nullable=true)
     */
    private $opticofpld;

    /**
     * @var integer
     *
     * @ORM\Column(name="OpticofAKE", type="integer", nullable=true)
     */
    private $opticofake;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalWeight", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalweight;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalPMD", type="integer", nullable=true)
     */
    private $totalpmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalPLD", type="integer", nullable=true)
     */
    private $totalpld;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalAKE", type="integer", nullable=true)
     */
    private $totalake;

    /**
     * @var integer
     *
     * @ORM\Column(name="DSKPMD", type="integer", nullable=true)
     */
    private $dskpmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="DSKPLD", type="integer", nullable=true)
     */
    private $dskpld;

    /**
     * @var integer
     *
     * @ORM\Column(name="DSKAKE", type="integer", nullable=true)
     */
    private $dskake;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertOther", type="boolean", nullable=true)
     */
    private $alertother;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertSensitive", type="boolean", nullable=true)
     */
    private $alertsensitive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertDSK", type="boolean", nullable=true)
     */
    private $alertdsk;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertAVIH", type="boolean", nullable=true)
     */
    private $alertavih;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertULD", type="boolean", nullable=true)
     */
    private $alertuld;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertCHO", type="boolean", nullable=true)
     */
    private $alertcho;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertECO", type="boolean", nullable=true)
     */
    private $alerteco;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalGrossWeight", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalgrossweight;

    /**
     * @var string
     *
     * @ORM\Column(name="AnalystID", type="string", length=10, nullable=true)
     */
    private $analystid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="WorkOrder", type="boolean", nullable=true)
     */
    private $workorder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertOPTIPlus", type="boolean", nullable=true)
     */
    private $alertoptiplus;

    /**
     * @var string
     *
     * @ORM\Column(name="DatedFlt_Instruct", type="string", length=1024, nullable=true)
     */
    private $datedfltInstruct;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PrÃ©pointage", type="boolean", nullable=true)
     */
    private $prã©pointage;

    /**
     * @var integer
     *
     * @ORM\Column(name="SDXAKE", type="integer", nullable=true)
     */
    private $sdxake;

    /**
     * @var float
     *
     * @ORM\Column(name="SDXLoose_WGT", type="float", precision=53, scale=0, nullable=true)
     */
    private $sdxlooseWgt;

    /**
     * @var float
     *
     * @ORM\Column(name="SDXLoose_VOL", type="float", precision=53, scale=0, nullable=true)
     */
    private $sdxlooseVol;

    /**
     * @var float
     *
     * @ORM\Column(name="Version", type="float", precision=53, scale=0, nullable=true)
     */
    private $version;

    /**
     * @var float
     *
     * @ORM\Column(name="NAR_WGT", type="float", precision=53, scale=0, nullable=true)
     */
    private $narWgt;

    /**
     * @var float
     *
     * @ORM\Column(name="ONH_WGT", type="float", precision=53, scale=0, nullable=true)
     */
    private $onhWgt;

    /**
     * @var float
     *
     * @ORM\Column(name="NARONH_WGT", type="float", precision=53, scale=0, nullable=true)
     */
    private $naronhWgt;

    /**
     * @var integer
     *
     * @ORM\Column(name="NAR_POUR", type="integer", nullable=true)
     */
    private $narPour;

    /**
     * @var integer
     *
     * @ORM\Column(name="ONH_POUR", type="integer", nullable=true)
     */
    private $onhPour;

    /**
     * @var integer
     *
     * @ORM\Column(name="NARONH_POUR", type="integer", nullable=true)
     */
    private $naronhPour;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AlertOPTIPlus_Transit", type="boolean", nullable=true)
     */
    private $alertoptiplusTransit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Finalisation", type="boolean", nullable=true)
     */
    private $finalisation;



    /**
     * Set flightnumber
     *
     * @param string $flightnumber
     * @return Tblfptsnapshot
     */
    public function setFlightnumber($flightnumber)
    {
        $this->flightnumber = $flightnumber;

        return $this;
    }

    /**
     * Get flightnumber
     *
     * @return string 
     */
    public function getFlightnumber()
    {
        return $this->flightnumber;
    }

    /**
     * Set flightdate
     *
     * @param string $flightdate
     * @return Tblfptsnapshot
     */
    public function setFlightdate($flightdate)
    {
        $this->flightdate = $flightdate;

        return $this;
    }

    /**
     * Get flightdate
     *
     * @return string 
     */
    public function getFlightdate()
    {
        return $this->flightdate;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tblfptsnapshot
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
     * Set analyst
     *
     * @param string $analyst
     * @return Tblfptsnapshot
     */
    public function setAnalyst($analyst)
    {
        $this->analyst = $analyst;

        return $this;
    }

    /**
     * Get analyst
     *
     * @return string 
     */
    public function getAnalyst()
    {
        return $this->analyst;
    }

    /**
     * Set handover
     *
     * @param boolean $handover
     * @return Tblfptsnapshot
     */
    public function setHandover($handover)
    {
        $this->handover = $handover;

        return $this;
    }

    /**
     * Get handover
     *
     * @return boolean 
     */
    public function getHandover()
    {
        return $this->handover;
    }

    /**
     * Set aircrafttype
     *
     * @param string $aircrafttype
     * @return Tblfptsnapshot
     */
    public function setAircrafttype($aircrafttype)
    {
        $this->aircrafttype = $aircrafttype;

        return $this;
    }

    /**
     * Get aircrafttype
     *
     * @return string 
     */
    public function getAircrafttype()
    {
        return $this->aircrafttype;
    }

    /**
     * Set routing
     *
     * @param string $routing
     * @return Tblfptsnapshot
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
     * Set edt
     *
     * @param string $edt
     * @return Tblfptsnapshot
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
     * Set opticofweight
     *
     * @param float $opticofweight
     * @return Tblfptsnapshot
     */
    public function setOpticofweight($opticofweight)
    {
        $this->opticofweight = $opticofweight;

        return $this;
    }

    /**
     * Get opticofweight
     *
     * @return float 
     */
    public function getOpticofweight()
    {
        return $this->opticofweight;
    }

    /**
     * Set opticofpmd
     *
     * @param integer $opticofpmd
     * @return Tblfptsnapshot
     */
    public function setOpticofpmd($opticofpmd)
    {
        $this->opticofpmd = $opticofpmd;

        return $this;
    }

    /**
     * Get opticofpmd
     *
     * @return integer 
     */
    public function getOpticofpmd()
    {
        return $this->opticofpmd;
    }

    /**
     * Set opticofpld
     *
     * @param integer $opticofpld
     * @return Tblfptsnapshot
     */
    public function setOpticofpld($opticofpld)
    {
        $this->opticofpld = $opticofpld;

        return $this;
    }

    /**
     * Get opticofpld
     *
     * @return integer 
     */
    public function getOpticofpld()
    {
        return $this->opticofpld;
    }

    /**
     * Set opticofake
     *
     * @param integer $opticofake
     * @return Tblfptsnapshot
     */
    public function setOpticofake($opticofake)
    {
        $this->opticofake = $opticofake;

        return $this;
    }

    /**
     * Get opticofake
     *
     * @return integer 
     */
    public function getOpticofake()
    {
        return $this->opticofake;
    }

    /**
     * Set totalweight
     *
     * @param float $totalweight
     * @return Tblfptsnapshot
     */
    public function setTotalweight($totalweight)
    {
        $this->totalweight = $totalweight;

        return $this;
    }

    /**
     * Get totalweight
     *
     * @return float 
     */
    public function getTotalweight()
    {
        return $this->totalweight;
    }

    /**
     * Set totalpmd
     *
     * @param integer $totalpmd
     * @return Tblfptsnapshot
     */
    public function setTotalpmd($totalpmd)
    {
        $this->totalpmd = $totalpmd;

        return $this;
    }

    /**
     * Get totalpmd
     *
     * @return integer 
     */
    public function getTotalpmd()
    {
        return $this->totalpmd;
    }

    /**
     * Set totalpld
     *
     * @param integer $totalpld
     * @return Tblfptsnapshot
     */
    public function setTotalpld($totalpld)
    {
        $this->totalpld = $totalpld;

        return $this;
    }

    /**
     * Get totalpld
     *
     * @return integer 
     */
    public function getTotalpld()
    {
        return $this->totalpld;
    }

    /**
     * Set totalake
     *
     * @param integer $totalake
     * @return Tblfptsnapshot
     */
    public function setTotalake($totalake)
    {
        $this->totalake = $totalake;

        return $this;
    }

    /**
     * Get totalake
     *
     * @return integer 
     */
    public function getTotalake()
    {
        return $this->totalake;
    }

    /**
     * Set dskpmd
     *
     * @param integer $dskpmd
     * @return Tblfptsnapshot
     */
    public function setDskpmd($dskpmd)
    {
        $this->dskpmd = $dskpmd;

        return $this;
    }

    /**
     * Get dskpmd
     *
     * @return integer 
     */
    public function getDskpmd()
    {
        return $this->dskpmd;
    }

    /**
     * Set dskpld
     *
     * @param integer $dskpld
     * @return Tblfptsnapshot
     */
    public function setDskpld($dskpld)
    {
        $this->dskpld = $dskpld;

        return $this;
    }

    /**
     * Get dskpld
     *
     * @return integer 
     */
    public function getDskpld()
    {
        return $this->dskpld;
    }

    /**
     * Set dskake
     *
     * @param integer $dskake
     * @return Tblfptsnapshot
     */
    public function setDskake($dskake)
    {
        $this->dskake = $dskake;

        return $this;
    }

    /**
     * Get dskake
     *
     * @return integer 
     */
    public function getDskake()
    {
        return $this->dskake;
    }

    /**
     * Set alertother
     *
     * @param boolean $alertother
     * @return Tblfptsnapshot
     */
    public function setAlertother($alertother)
    {
        $this->alertother = $alertother;

        return $this;
    }

    /**
     * Get alertother
     *
     * @return boolean 
     */
    public function getAlertother()
    {
        return $this->alertother;
    }

    /**
     * Set alertsensitive
     *
     * @param boolean $alertsensitive
     * @return Tblfptsnapshot
     */
    public function setAlertsensitive($alertsensitive)
    {
        $this->alertsensitive = $alertsensitive;

        return $this;
    }

    /**
     * Get alertsensitive
     *
     * @return boolean 
     */
    public function getAlertsensitive()
    {
        return $this->alertsensitive;
    }

    /**
     * Set alertdsk
     *
     * @param boolean $alertdsk
     * @return Tblfptsnapshot
     */
    public function setAlertdsk($alertdsk)
    {
        $this->alertdsk = $alertdsk;

        return $this;
    }

    /**
     * Get alertdsk
     *
     * @return boolean 
     */
    public function getAlertdsk()
    {
        return $this->alertdsk;
    }

    /**
     * Set alertavih
     *
     * @param boolean $alertavih
     * @return Tblfptsnapshot
     */
    public function setAlertavih($alertavih)
    {
        $this->alertavih = $alertavih;

        return $this;
    }

    /**
     * Get alertavih
     *
     * @return boolean 
     */
    public function getAlertavih()
    {
        return $this->alertavih;
    }

    /**
     * Set alertuld
     *
     * @param boolean $alertuld
     * @return Tblfptsnapshot
     */
    public function setAlertuld($alertuld)
    {
        $this->alertuld = $alertuld;

        return $this;
    }

    /**
     * Get alertuld
     *
     * @return boolean 
     */
    public function getAlertuld()
    {
        return $this->alertuld;
    }

    /**
     * Set alertcho
     *
     * @param boolean $alertcho
     * @return Tblfptsnapshot
     */
    public function setAlertcho($alertcho)
    {
        $this->alertcho = $alertcho;

        return $this;
    }

    /**
     * Get alertcho
     *
     * @return boolean 
     */
    public function getAlertcho()
    {
        return $this->alertcho;
    }

    /**
     * Set alerteco
     *
     * @param boolean $alerteco
     * @return Tblfptsnapshot
     */
    public function setAlerteco($alerteco)
    {
        $this->alerteco = $alerteco;

        return $this;
    }

    /**
     * Get alerteco
     *
     * @return boolean 
     */
    public function getAlerteco()
    {
        return $this->alerteco;
    }

    /**
     * Set totalgrossweight
     *
     * @param float $totalgrossweight
     * @return Tblfptsnapshot
     */
    public function setTotalgrossweight($totalgrossweight)
    {
        $this->totalgrossweight = $totalgrossweight;

        return $this;
    }

    /**
     * Get totalgrossweight
     *
     * @return float 
     */
    public function getTotalgrossweight()
    {
        return $this->totalgrossweight;
    }

    /**
     * Set analystid
     *
     * @param string $analystid
     * @return Tblfptsnapshot
     */
    public function setAnalystid($analystid)
    {
        $this->analystid = $analystid;

        return $this;
    }

    /**
     * Get analystid
     *
     * @return string 
     */
    public function getAnalystid()
    {
        return $this->analystid;
    }

    /**
     * Set workorder
     *
     * @param boolean $workorder
     * @return Tblfptsnapshot
     */
    public function setWorkorder($workorder)
    {
        $this->workorder = $workorder;

        return $this;
    }

    /**
     * Get workorder
     *
     * @return boolean 
     */
    public function getWorkorder()
    {
        return $this->workorder;
    }

    /**
     * Set alertoptiplus
     *
     * @param boolean $alertoptiplus
     * @return Tblfptsnapshot
     */
    public function setAlertoptiplus($alertoptiplus)
    {
        $this->alertoptiplus = $alertoptiplus;

        return $this;
    }

    /**
     * Get alertoptiplus
     *
     * @return boolean 
     */
    public function getAlertoptiplus()
    {
        return $this->alertoptiplus;
    }

    /**
     * Set datedfltInstruct
     *
     * @param string $datedfltInstruct
     * @return Tblfptsnapshot
     */
    public function setDatedfltInstruct($datedfltInstruct)
    {
        $this->datedfltInstruct = $datedfltInstruct;

        return $this;
    }

    /**
     * Get datedfltInstruct
     *
     * @return string 
     */
    public function getDatedfltInstruct()
    {
        return $this->datedfltInstruct;
    }

    /**
     * Set prã©pointage
     *
     * @param boolean $prã©pointage
     * @return Tblfptsnapshot
     */
    public function setPrã©pointage($prã©pointage)
    {
        $this->prã©pointage = $prã©pointage;

        return $this;
    }

    /**
     * Get prã©pointage
     *
     * @return boolean 
     */
    public function getPrã©pointage()
    {
        return $this->prã©pointage;
    }

    /**
     * Set sdxake
     *
     * @param integer $sdxake
     * @return Tblfptsnapshot
     */
    public function setSdxake($sdxake)
    {
        $this->sdxake = $sdxake;

        return $this;
    }

    /**
     * Get sdxake
     *
     * @return integer 
     */
    public function getSdxake()
    {
        return $this->sdxake;
    }

    /**
     * Set sdxlooseWgt
     *
     * @param float $sdxlooseWgt
     * @return Tblfptsnapshot
     */
    public function setSdxlooseWgt($sdxlooseWgt)
    {
        $this->sdxlooseWgt = $sdxlooseWgt;

        return $this;
    }

    /**
     * Get sdxlooseWgt
     *
     * @return float 
     */
    public function getSdxlooseWgt()
    {
        return $this->sdxlooseWgt;
    }

    /**
     * Set sdxlooseVol
     *
     * @param float $sdxlooseVol
     * @return Tblfptsnapshot
     */
    public function setSdxlooseVol($sdxlooseVol)
    {
        $this->sdxlooseVol = $sdxlooseVol;

        return $this;
    }

    /**
     * Get sdxlooseVol
     *
     * @return float 
     */
    public function getSdxlooseVol()
    {
        return $this->sdxlooseVol;
    }

    /**
     * Set version
     *
     * @param float $version
     * @return Tblfptsnapshot
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return float 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set narWgt
     *
     * @param float $narWgt
     * @return Tblfptsnapshot
     */
    public function setNarWgt($narWgt)
    {
        $this->narWgt = $narWgt;

        return $this;
    }

    /**
     * Get narWgt
     *
     * @return float 
     */
    public function getNarWgt()
    {
        return $this->narWgt;
    }

    /**
     * Set onhWgt
     *
     * @param float $onhWgt
     * @return Tblfptsnapshot
     */
    public function setOnhWgt($onhWgt)
    {
        $this->onhWgt = $onhWgt;

        return $this;
    }

    /**
     * Get onhWgt
     *
     * @return float 
     */
    public function getOnhWgt()
    {
        return $this->onhWgt;
    }

    /**
     * Set naronhWgt
     *
     * @param float $naronhWgt
     * @return Tblfptsnapshot
     */
    public function setNaronhWgt($naronhWgt)
    {
        $this->naronhWgt = $naronhWgt;

        return $this;
    }

    /**
     * Get naronhWgt
     *
     * @return float 
     */
    public function getNaronhWgt()
    {
        return $this->naronhWgt;
    }

    /**
     * Set narPour
     *
     * @param integer $narPour
     * @return Tblfptsnapshot
     */
    public function setNarPour($narPour)
    {
        $this->narPour = $narPour;

        return $this;
    }

    /**
     * Get narPour
     *
     * @return integer 
     */
    public function getNarPour()
    {
        return $this->narPour;
    }

    /**
     * Set onhPour
     *
     * @param integer $onhPour
     * @return Tblfptsnapshot
     */
    public function setOnhPour($onhPour)
    {
        $this->onhPour = $onhPour;

        return $this;
    }

    /**
     * Get onhPour
     *
     * @return integer 
     */
    public function getOnhPour()
    {
        return $this->onhPour;
    }

    /**
     * Set naronhPour
     *
     * @param integer $naronhPour
     * @return Tblfptsnapshot
     */
    public function setNaronhPour($naronhPour)
    {
        $this->naronhPour = $naronhPour;

        return $this;
    }

    /**
     * Get naronhPour
     *
     * @return integer 
     */
    public function getNaronhPour()
    {
        return $this->naronhPour;
    }

    /**
     * Set alertoptiplusTransit
     *
     * @param boolean $alertoptiplusTransit
     * @return Tblfptsnapshot
     */
    public function setAlertoptiplusTransit($alertoptiplusTransit)
    {
        $this->alertoptiplusTransit = $alertoptiplusTransit;

        return $this;
    }

    /**
     * Get alertoptiplusTransit
     *
     * @return boolean 
     */
    public function getAlertoptiplusTransit()
    {
        return $this->alertoptiplusTransit;
    }

    /**
     * Set finalisation
     *
     * @param boolean $finalisation
     * @return Tblfptsnapshot
     */
    public function setFinalisation($finalisation)
    {
        $this->finalisation = $finalisation;

        return $this;
    }

    /**
     * Get finalisation
     *
     * @return boolean 
     */
    public function getFinalisation()
    {
        return $this->finalisation;
    }
}
