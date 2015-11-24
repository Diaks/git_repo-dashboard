<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptcontain
 *
 * @ORM\Table(name="TblFPTContain", indexes={@ORM\Index(name="IDX_7144378AB41EA3FFD3F072244D225600", columns={"FK_FlightNumber", "FK_FlightDate", "FK_Version"})})
 * @ORM\Entity
 */
class Tblfptcontain
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
     * @var float
     *
     * @ORM\Column(name="TotalWeight", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalweight;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalPMD", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalpmd;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalPLD", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalpld;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalAKE", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalake;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalGrossWeight", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalgrossweight;

    /**
     * @var float
     *
     * @ORM\Column(name="OpticofWeight", type="float", precision=53, scale=0, nullable=true)
     */
    private $opticofweight;

    /**
     * @var float
     *
     * @ORM\Column(name="OpticofPMD", type="float", precision=53, scale=0, nullable=true)
     */
    private $opticofpmd;

    /**
     * @var float
     *
     * @ORM\Column(name="OpticofAKE", type="float", precision=53, scale=0, nullable=true)
     */
    private $opticofake;

    /**
     * @var float
     *
     * @ORM\Column(name="OpticofPLD", type="float", precision=53, scale=0, nullable=true)
     */
    private $opticofpld;

    /**
     * @var float
     *
     * @ORM\Column(name="SDXAKE", type="float", precision=53, scale=0, nullable=true)
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
     * @ORM\Column(name="SDXLoose_Vol", type="float", precision=53, scale=0, nullable=true)
     */
    private $sdxlooseVol;

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
     * @var float
     *
     * @ORM\Column(name="NAR_POUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $narPour;

    /**
     * @var float
     *
     * @ORM\Column(name="ONH_POUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $onhPour;

    /**
     * @var float
     *
     * @ORM\Column(name="NARONH_POUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $naronhPour;

    /**
     * @var float
     *
     * @ORM\Column(name="DSKPMD", type="float", precision=53, scale=0, nullable=true)
     */
    private $dskpmd;

    /**
     * @var float
     *
     * @ORM\Column(name="DSKPLD", type="float", precision=53, scale=0, nullable=true)
     */
    private $dskpld;

    /**
     * @var float
     *
     * @ORM\Column(name="DSKAKE", type="float", precision=53, scale=0, nullable=true)
     */
    private $dskake;

    /**
     * @var float
     *
     * @ORM\Column(name="SCBAvg", type="float", precision=53, scale=0, nullable=true)
     */
    private $scbavg;

    /**
     * @var \Tblfptflights
     *
     * @ORM\ManyToOne(targetEntity="Tblfptflights")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_FlightNumber", referencedColumnName="PK_FlightNumber"),
     *   @ORM\JoinColumn(name="FK_FlightDate", referencedColumnName="PK_FlightDate"),
     *   @ORM\JoinColumn(name="FK_Version", referencedColumnName="PK_Version")
     * })
     */
    private $fkFlightnumber;



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
     * Set totalweight
     *
     * @param float $totalweight
     * @return Tblfptcontain
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
     * @param float $totalpmd
     * @return Tblfptcontain
     */
    public function setTotalpmd($totalpmd)
    {
        $this->totalpmd = $totalpmd;

        return $this;
    }

    /**
     * Get totalpmd
     *
     * @return float 
     */
    public function getTotalpmd()
    {
        return $this->totalpmd;
    }

    /**
     * Set totalpld
     *
     * @param float $totalpld
     * @return Tblfptcontain
     */
    public function setTotalpld($totalpld)
    {
        $this->totalpld = $totalpld;

        return $this;
    }

    /**
     * Get totalpld
     *
     * @return float 
     */
    public function getTotalpld()
    {
        return $this->totalpld;
    }

    /**
     * Set totalake
     *
     * @param float $totalake
     * @return Tblfptcontain
     */
    public function setTotalake($totalake)
    {
        $this->totalake = $totalake;

        return $this;
    }

    /**
     * Get totalake
     *
     * @return float 
     */
    public function getTotalake()
    {
        return $this->totalake;
    }

    /**
     * Set totalgrossweight
     *
     * @param float $totalgrossweight
     * @return Tblfptcontain
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
     * Set opticofweight
     *
     * @param float $opticofweight
     * @return Tblfptcontain
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
     * @param float $opticofpmd
     * @return Tblfptcontain
     */
    public function setOpticofpmd($opticofpmd)
    {
        $this->opticofpmd = $opticofpmd;

        return $this;
    }

    /**
     * Get opticofpmd
     *
     * @return float 
     */
    public function getOpticofpmd()
    {
        return $this->opticofpmd;
    }

    /**
     * Set opticofake
     *
     * @param float $opticofake
     * @return Tblfptcontain
     */
    public function setOpticofake($opticofake)
    {
        $this->opticofake = $opticofake;

        return $this;
    }

    /**
     * Get opticofake
     *
     * @return float 
     */
    public function getOpticofake()
    {
        return $this->opticofake;
    }

    /**
     * Set opticofpld
     *
     * @param float $opticofpld
     * @return Tblfptcontain
     */
    public function setOpticofpld($opticofpld)
    {
        $this->opticofpld = $opticofpld;

        return $this;
    }

    /**
     * Get opticofpld
     *
     * @return float 
     */
    public function getOpticofpld()
    {
        return $this->opticofpld;
    }

    /**
     * Set sdxake
     *
     * @param float $sdxake
     * @return Tblfptcontain
     */
    public function setSdxake($sdxake)
    {
        $this->sdxake = $sdxake;

        return $this;
    }

    /**
     * Get sdxake
     *
     * @return float 
     */
    public function getSdxake()
    {
        return $this->sdxake;
    }

    /**
     * Set sdxlooseWgt
     *
     * @param float $sdxlooseWgt
     * @return Tblfptcontain
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
     * @return Tblfptcontain
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
     * Set narWgt
     *
     * @param float $narWgt
     * @return Tblfptcontain
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
     * @return Tblfptcontain
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
     * @return Tblfptcontain
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
     * @param float $narPour
     * @return Tblfptcontain
     */
    public function setNarPour($narPour)
    {
        $this->narPour = $narPour;

        return $this;
    }

    /**
     * Get narPour
     *
     * @return float 
     */
    public function getNarPour()
    {
        return $this->narPour;
    }

    /**
     * Set onhPour
     *
     * @param float $onhPour
     * @return Tblfptcontain
     */
    public function setOnhPour($onhPour)
    {
        $this->onhPour = $onhPour;

        return $this;
    }

    /**
     * Get onhPour
     *
     * @return float 
     */
    public function getOnhPour()
    {
        return $this->onhPour;
    }

    /**
     * Set naronhPour
     *
     * @param float $naronhPour
     * @return Tblfptcontain
     */
    public function setNaronhPour($naronhPour)
    {
        $this->naronhPour = $naronhPour;

        return $this;
    }

    /**
     * Get naronhPour
     *
     * @return float 
     */
    public function getNaronhPour()
    {
        return $this->naronhPour;
    }

    /**
     * Set dskpmd
     *
     * @param float $dskpmd
     * @return Tblfptcontain
     */
    public function setDskpmd($dskpmd)
    {
        $this->dskpmd = $dskpmd;

        return $this;
    }

    /**
     * Get dskpmd
     *
     * @return float 
     */
    public function getDskpmd()
    {
        return $this->dskpmd;
    }

    /**
     * Set dskpld
     *
     * @param float $dskpld
     * @return Tblfptcontain
     */
    public function setDskpld($dskpld)
    {
        $this->dskpld = $dskpld;

        return $this;
    }

    /**
     * Get dskpld
     *
     * @return float 
     */
    public function getDskpld()
    {
        return $this->dskpld;
    }

    /**
     * Set dskake
     *
     * @param float $dskake
     * @return Tblfptcontain
     */
    public function setDskake($dskake)
    {
        $this->dskake = $dskake;

        return $this;
    }

    /**
     * Get dskake
     *
     * @return float 
     */
    public function getDskake()
    {
        return $this->dskake;
    }

    /**
     * Set scbavg
     *
     * @param float $scbavg
     * @return Tblfptcontain
     */
    public function setScbavg($scbavg)
    {
        $this->scbavg = $scbavg;

        return $this;
    }

    /**
     * Get scbavg
     *
     * @return float 
     */
    public function getScbavg()
    {
        return $this->scbavg;
    }

    /**
     * Set fkFlightnumber
     *
     * @param \DBORM\KLMBundle\Entity\Tblfptflights $fkFlightnumber
     * @return Tblfptcontain
     */
    public function setFkFlightnumber(\DBORM\KLMBundle\Entity\Tblfptflights $fkFlightnumber = null)
    {
        $this->fkFlightnumber = $fkFlightnumber;

        return $this;
    }

    /**
     * Get fkFlightnumber
     *
     * @return \DBORM\KLMBundle\Entity\Tblfptflights 
     */
    public function getFkFlightnumber()
    {
        return $this->fkFlightnumber;
    }
}
