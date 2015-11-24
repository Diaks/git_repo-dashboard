<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptrouting
 *
 * @ORM\Table(name="TblFPTRouting", indexes={@ORM\Index(name="IDX_9F5379B892A71727", columns={"FK_Airport_origin"}), @ORM\Index(name="IDX_9F5379B879ACDBB4", columns={"FK_Airport_dest_1"}), @ORM\Index(name="IDX_9F5379B8E0A58A0E", columns={"FK_Airport_dest_2"}), @ORM\Index(name="IDX_9F5379B897A2BA98", columns={"FK_Airport_dest_3"}), @ORM\Index(name="IDX_9F5379B89C62F3B", columns={"FK_Airport_dest_4"}), @ORM\Index(name="IDX_9F5379B87EC11FAD", columns={"FK_Airport_dest_5"}), @ORM\Index(name="IDX_9F5379B8E7C84E17", columns={"FK_Airport_dest_6"}), @ORM\Index(name="IDX_9F5379B890CF7E81", columns={"FK_Airport_dest_7"}), @ORM\Index(name="IDX_9F5379B8B41EA3FFD3F072244D225600", columns={"FK_FlightNumber", "FK_FlightDate", "FK_Version"})})
 * @ORM\Entity
 */
class Tblfptrouting
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
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_origin", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportOrigin;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_1", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest1;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_2", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest2;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_3", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest3;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_4", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest4;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_5", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest5;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_6", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest6;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Airport_dest_7", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkAirportDest7;

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
     * Set fkAirportOrigin
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportOrigin
     * @return Tblfptrouting
     */
    public function setFkAirportOrigin(\DBORM\CSIBundle\Entity\Tblairport $fkAirportOrigin = null)
    {
        $this->fkAirportOrigin = $fkAirportOrigin;

        return $this;
    }

    /**
     * Get fkAirportOrigin
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportOrigin()
    {
        return $this->fkAirportOrigin;
    }

    /**
     * Set fkAirportDest1
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest1
     * @return Tblfptrouting
     */
    public function setFkAirportDest1(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest1 = null)
    {
        $this->fkAirportDest1 = $fkAirportDest1;

        return $this;
    }

    /**
     * Get fkAirportDest1
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest1()
    {
        return $this->fkAirportDest1;
    }

    /**
     * Set fkAirportDest2
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest2
     * @return Tblfptrouting
     */
    public function setFkAirportDest2(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest2 = null)
    {
        $this->fkAirportDest2 = $fkAirportDest2;

        return $this;
    }

    /**
     * Get fkAirportDest2
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest2()
    {
        return $this->fkAirportDest2;
    }

    /**
     * Set fkAirportDest3
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest3
     * @return Tblfptrouting
     */
    public function setFkAirportDest3(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest3 = null)
    {
        $this->fkAirportDest3 = $fkAirportDest3;

        return $this;
    }

    /**
     * Get fkAirportDest3
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest3()
    {
        return $this->fkAirportDest3;
    }

    /**
     * Set fkAirportDest4
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest4
     * @return Tblfptrouting
     */
    public function setFkAirportDest4(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest4 = null)
    {
        $this->fkAirportDest4 = $fkAirportDest4;

        return $this;
    }

    /**
     * Get fkAirportDest4
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest4()
    {
        return $this->fkAirportDest4;
    }

    /**
     * Set fkAirportDest5
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest5
     * @return Tblfptrouting
     */
    public function setFkAirportDest5(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest5 = null)
    {
        $this->fkAirportDest5 = $fkAirportDest5;

        return $this;
    }

    /**
     * Get fkAirportDest5
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest5()
    {
        return $this->fkAirportDest5;
    }

    /**
     * Set fkAirportDest6
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest6
     * @return Tblfptrouting
     */
    public function setFkAirportDest6(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest6 = null)
    {
        $this->fkAirportDest6 = $fkAirportDest6;

        return $this;
    }

    /**
     * Get fkAirportDest6
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest6()
    {
        return $this->fkAirportDest6;
    }

    /**
     * Set fkAirportDest7
     *
     * @param \DBORM\CSIBundle\Entity\Tblairport $fkAirportDest7
     * @return Tblfptrouting
     */
    public function setFkAirportDest7(\DBORM\CSIBundle\Entity\Tblairport $fkAirportDest7 = null)
    {
        $this->fkAirportDest7 = $fkAirportDest7;

        return $this;
    }

    /**
     * Get fkAirportDest7
     *
     * @return \DBORM\CSIBundle\Entity\Tblairport 
     */
    public function getFkAirportDest7()
    {
        return $this->fkAirportDest7;
    }

    /**
     * Set fkFlightnumber
     *
     * @param \DBORM\CSIBundle\Entity\Tblfptflights $fkFlightnumber
     * @return Tblfptrouting
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
