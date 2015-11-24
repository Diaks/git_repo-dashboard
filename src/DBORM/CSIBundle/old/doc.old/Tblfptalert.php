<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptalert
 *
 * @ORM\Table(name="TblFPTAlert", indexes={@ORM\Index(name="IDX_87834F53B41EA3FFD3F072244D225600", columns={"FK_FlightNumber", "FK_FlightDate", "FK_Version"})})
 * @ORM\Entity
 */
class Tblfptalert
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
     * @var integer
     *
     * @ORM\Column(name="AlertOther", type="smallint", nullable=true)
     */
    private $alertother = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertSensitive", type="smallint", nullable=true)
     */
    private $alertsensitive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertDSK", type="smallint", nullable=true)
     */
    private $alertdsk = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertAVIH", type="smallint", nullable=true)
     */
    private $alertavih = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertCHO", type="smallint", nullable=true)
     */
    private $alertcho = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertECO", type="smallint", nullable=true)
     */
    private $alerteco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertOptiPlus", type="smallint", nullable=true)
     */
    private $alertoptiplus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertOptiPlusTransit", type="smallint", nullable=true)
     */
    private $alertoptiplustransit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AlertULD", type="smallint", nullable=true)
     */
    private $alertuld = '0';

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
     * Set alertother
     *
     * @param integer $alertother
     * @return Tblfptalert
     */
    public function setAlertother($alertother)
    {
        $this->alertother = $alertother;

        return $this;
    }

    /**
     * Get alertother
     *
     * @return integer 
     */
    public function getAlertother()
    {
        return $this->alertother;
    }

    /**
     * Set alertsensitive
     *
     * @param integer $alertsensitive
     * @return Tblfptalert
     */
    public function setAlertsensitive($alertsensitive)
    {
        $this->alertsensitive = $alertsensitive;

        return $this;
    }

    /**
     * Get alertsensitive
     *
     * @return integer 
     */
    public function getAlertsensitive()
    {
        return $this->alertsensitive;
    }

    /**
     * Set alertdsk
     *
     * @param integer $alertdsk
     * @return Tblfptalert
     */
    public function setAlertdsk($alertdsk)
    {
        $this->alertdsk = $alertdsk;

        return $this;
    }

    /**
     * Get alertdsk
     *
     * @return integer 
     */
    public function getAlertdsk()
    {
        return $this->alertdsk;
    }

    /**
     * Set alertavih
     *
     * @param integer $alertavih
     * @return Tblfptalert
     */
    public function setAlertavih($alertavih)
    {
        $this->alertavih = $alertavih;

        return $this;
    }

    /**
     * Get alertavih
     *
     * @return integer 
     */
    public function getAlertavih()
    {
        return $this->alertavih;
    }

    /**
     * Set alertcho
     *
     * @param integer $alertcho
     * @return Tblfptalert
     */
    public function setAlertcho($alertcho)
    {
        $this->alertcho = $alertcho;

        return $this;
    }

    /**
     * Get alertcho
     *
     * @return integer 
     */
    public function getAlertcho()
    {
        return $this->alertcho;
    }

    /**
     * Set alerteco
     *
     * @param integer $alerteco
     * @return Tblfptalert
     */
    public function setAlerteco($alerteco)
    {
        $this->alerteco = $alerteco;

        return $this;
    }

    /**
     * Get alerteco
     *
     * @return integer 
     */
    public function getAlerteco()
    {
        return $this->alerteco;
    }

    /**
     * Set alertoptiplus
     *
     * @param integer $alertoptiplus
     * @return Tblfptalert
     */
    public function setAlertoptiplus($alertoptiplus)
    {
        $this->alertoptiplus = $alertoptiplus;

        return $this;
    }

    /**
     * Get alertoptiplus
     *
     * @return integer 
     */
    public function getAlertoptiplus()
    {
        return $this->alertoptiplus;
    }

    /**
     * Set alertoptiplustransit
     *
     * @param integer $alertoptiplustransit
     * @return Tblfptalert
     */
    public function setAlertoptiplustransit($alertoptiplustransit)
    {
        $this->alertoptiplustransit = $alertoptiplustransit;

        return $this;
    }

    /**
     * Get alertoptiplustransit
     *
     * @return integer 
     */
    public function getAlertoptiplustransit()
    {
        return $this->alertoptiplustransit;
    }

    /**
     * Set alertuld
     *
     * @param integer $alertuld
     * @return Tblfptalert
     */
    public function setAlertuld($alertuld)
    {
        $this->alertuld = $alertuld;

        return $this;
    }

    /**
     * Get alertuld
     *
     * @return integer 
     */
    public function getAlertuld()
    {
        return $this->alertuld;
    }

    /**
     * Set fkFlightnumber
     *
     * @param \DBORM\CSIBundle\Entity\Tblfptflights $fkFlightnumber
     * @return Tblfptalert
     */
    public function setFkFlightnumber(\DBORM\CSIBundle\Entity\Tblfptflights $fkFlightnumber = null)
    {
        $this->fkFlightnumber = $fkFlightnumber;

        return $this;
    }

    /**
     * Get fkFlightnumber
     *
     * @return \DBORM\CSIBundle\Entity\Tblfptflights 
     */
    public function getFkFlightnumber()
    {
        return $this->fkFlightnumber;
    }
}
