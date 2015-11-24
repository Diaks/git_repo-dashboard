<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltraksccc
 *
 * @ORM\Table(name="TblTraksCCC", indexes={@ORM\Index(name="IDX_74A32F2D62C6738A", columns={"FK_action_id"}), @ORM\Index(name="IDX_74A32F2D94038302", columns={"FK_status_id"}), @ORM\Index(name="IDX_74A32F2D9AED6FCA", columns={"FK_user_id"}), @ORM\Index(name="IDX_74A32F2DC5DF7645", columns={"FK_resultat_id"}), @ORM\Index(name="IDX_74A32F2D63BE2921", columns={"FK_hub"})})
 * @ORM\Entity
 */
class Tbltraksccc
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
     * @ORM\Column(name="FK_subsector_code", type="string", length=50, nullable=false)
     */
    private $fkSubsectorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="FlightDate", type="string", length=50, nullable=true)
     */
    private $flightdate;

    /**
     * @var string
     *
     * @ORM\Column(name="TraksComment", type="string", length=250, nullable=true)
     */
    private $trakscomment;

    /**
     * @var string
     *
     * @ORM\Column(name="CCCComment", type="string", length=250, nullable=true)
     */
    private $ccccomment;

    /**
     * @var string
     *
     * @ORM\Column(name="RFOComment", type="string", length=250, nullable=true)
     */
    private $rfocomment;

    /**
     * @var integer
     *
     * @ORM\Column(name="Priorite", type="smallint", nullable=true)
     */
    private $priorite;

    /**
     * @var string
     *
     * @ORM\Column(name="ULD", type="string", length=50, nullable=true)
     */
    private $uld;

    /**
     * @var string
     *
     * @ORM\Column(name="AWB", type="string", length=50, nullable=true)
     */
    private $awb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHistorique", type="datetime", nullable=false)
     */
    private $datehistorique;

    /**
     * @var \Tblaction
     *
     * @ORM\ManyToOne(targetEntity="Tblaction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_action_id", referencedColumnName="PK_id")
     * })
     */
    private $fkAction;

    /**
     * @var \Tblstatus
     *
     * @ORM\ManyToOne(targetEntity="Tblstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_status_id", referencedColumnName="PK_id")
     * })
     */
    private $fkStatus;

    /**
     * @var \Tbluser
     *
     * @ORM\ManyToOne(targetEntity="Tbluser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_user_id", referencedColumnName="PK_id")
     * })
     */
    private $fkUser;

    /**
     * @var \Tbltraksresultat
     *
     * @ORM\ManyToOne(targetEntity="Tbltraksresultat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_resultat_id", referencedColumnName="PK_id")
     * })
     */
    private $fkResultat;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_hub", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkHub;



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
     * Set fkSubsectorCode
     *
     * @param string $fkSubsectorCode
     * @return Tbltraksccc
     */
    public function setFkSubsectorCode($fkSubsectorCode)
    {
        $this->fkSubsectorCode = $fkSubsectorCode;

        return $this;
    }

    /**
     * Get fkSubsectorCode
     *
     * @return string 
     */
    public function getFkSubsectorCode()
    {
        return $this->fkSubsectorCode;
    }

    /**
     * Set flightdate
     *
     * @param string $flightdate
     * @return Tbltraksccc
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
     * Set trakscomment
     *
     * @param string $trakscomment
     * @return Tbltraksccc
     */
    public function setTrakscomment($trakscomment)
    {
        $this->trakscomment = $trakscomment;

        return $this;
    }

    /**
     * Get trakscomment
     *
     * @return string 
     */
    public function getTrakscomment()
    {
        return $this->trakscomment;
    }

    /**
     * Set ccccomment
     *
     * @param string $ccccomment
     * @return Tbltraksccc
     */
    public function setCcccomment($ccccomment)
    {
        $this->ccccomment = $ccccomment;

        return $this;
    }

    /**
     * Get ccccomment
     *
     * @return string 
     */
    public function getCcccomment()
    {
        return $this->ccccomment;
    }

    /**
     * Set rfocomment
     *
     * @param string $rfocomment
     * @return Tbltraksccc
     */
    public function setRfocomment($rfocomment)
    {
        $this->rfocomment = $rfocomment;

        return $this;
    }

    /**
     * Get rfocomment
     *
     * @return string 
     */
    public function getRfocomment()
    {
        return $this->rfocomment;
    }

    /**
     * Set priorite
     *
     * @param integer $priorite
     * @return Tbltraksccc
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;

        return $this;
    }

    /**
     * Get priorite
     *
     * @return integer 
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set uld
     *
     * @param string $uld
     * @return Tbltraksccc
     */
    public function setUld($uld)
    {
        $this->uld = $uld;

        return $this;
    }

    /**
     * Get uld
     *
     * @return string 
     */
    public function getUld()
    {
        return $this->uld;
    }

    /**
     * Set awb
     *
     * @param string $awb
     * @return Tbltraksccc
     */
    public function setAwb($awb)
    {
        $this->awb = $awb;

        return $this;
    }

    /**
     * Get awb
     *
     * @return string 
     */
    public function getAwb()
    {
        return $this->awb;
    }

    /**
     * Set datehistorique
     *
     * @param \DateTime $datehistorique
     * @return Tbltraksccc
     */
    public function setDatehistorique($datehistorique)
    {
        $this->datehistorique = $datehistorique;

        return $this;
    }

    /**
     * Get datehistorique
     *
     * @return \DateTime 
     */
    public function getDatehistorique()
    {
        return $this->datehistorique;
    }

    /**
     * Set fkAction
     *
     * @param \DBORM\KLMBundle\Entity\Tblaction $fkAction
     * @return Tbltraksccc
     */
    public function setFkAction(\DBORM\KLMBundle\Entity\Tblaction $fkAction = null)
    {
        $this->fkAction = $fkAction;

        return $this;
    }

    /**
     * Get fkAction
     *
     * @return \DBORM\KLMBundle\Entity\Tblaction 
     */
    public function getFkAction()
    {
        return $this->fkAction;
    }

    /**
     * Set fkStatus
     *
     * @param \DBORM\KLMBundle\Entity\Tblstatus $fkStatus
     * @return Tbltraksccc
     */
    public function setFkStatus(\DBORM\KLMBundle\Entity\Tblstatus $fkStatus = null)
    {
        $this->fkStatus = $fkStatus;

        return $this;
    }

    /**
     * Get fkStatus
     *
     * @return \DBORM\KLMBundle\Entity\Tblstatus 
     */
    public function getFkStatus()
    {
        return $this->fkStatus;
    }

    /**
     * Set fkUser
     *
     * @param \DBORM\KLMBundle\Entity\Tbluser $fkUser
     * @return Tbltraksccc
     */
    public function setFkUser(\DBORM\KLMBundle\Entity\Tbluser $fkUser = null)
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    /**
     * Get fkUser
     *
     * @return \DBORM\KLMBundle\Entity\Tbluser 
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * Set fkResultat
     *
     * @param \DBORM\KLMBundle\Entity\Tbltraksresultat $fkResultat
     * @return Tbltraksccc
     */
    public function setFkResultat(\DBORM\KLMBundle\Entity\Tbltraksresultat $fkResultat = null)
    {
        $this->fkResultat = $fkResultat;

        return $this;
    }

    /**
     * Get fkResultat
     *
     * @return \DBORM\KLMBundle\Entity\Tbltraksresultat 
     */
    public function getFkResultat()
    {
        return $this->fkResultat;
    }

    /**
     * Set fkHub
     *
     * @param \DBORM\KLMBundle\Entity\Tblairport $fkHub
     * @return Tbltraksccc
     */
    public function setFkHub(\DBORM\KLMBundle\Entity\Tblairport $fkHub = null)
    {
        $this->fkHub = $fkHub;

        return $this;
    }

    /**
     * Get fkHub
     *
     * @return \DBORM\KLMBundle\Entity\Tblairport 
     */
    public function getFkHub()
    {
        return $this->fkHub;
    }
}
