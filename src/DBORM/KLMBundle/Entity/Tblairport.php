<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblairport
 *
 * @ORM\Table(name="TblAirport", indexes={@ORM\Index(name="IDX_8AE443B2E95E0CEC", columns={"FK_City_code"}), @ORM\Index(name="IDX_8AE443B28C6B24DB", columns={"FK_Country_code"})})
 * @ORM\Entity
 */
class Tblairport
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_Airport_code", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkAirportCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Airport", type="string", length=50, nullable=true)
     */
    private $airport;

    /**
     * @var string
     *
     * @ORM\Column(name="FSCZone", type="string", length=50, nullable=true)
     */
    private $fsczone;

    /**
     * @var string
     *
     * @ORM\Column(name="FSCZoneID1", type="string", length=50, nullable=true)
     */
    private $fsczoneid1;

    /**
     * @var string
     *
     * @ORM\Column(name="FSCZoneID2", type="string", length=50, nullable=true)
     */
    private $fsczoneid2;

    /**
     * @var \Tblcity
     *
     * @ORM\ManyToOne(targetEntity="Tblcity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_City_code", referencedColumnName="PK_City_code")
     * })
     */
    private $fkCityCode;

    /**
     * @var \Tblcountry
     *
     * @ORM\ManyToOne(targetEntity="Tblcountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Country_code", referencedColumnName="PK_Country_code")
     * })
     */
    private $fkCountryCode;



    /**
     * Get pkAirportCode
     *
     * @return string 
     */
    public function getPkAirportCode()
    {
        return $this->pkAirportCode;
    }

    /**
     * Set airport
     *
     * @param string $airport
     * @return Tblairport
     */
    public function setAirport($airport)
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * Get airport
     *
     * @return string 
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * Set fsczone
     *
     * @param string $fsczone
     * @return Tblairport
     */
    public function setFsczone($fsczone)
    {
        $this->fsczone = $fsczone;

        return $this;
    }

    /**
     * Get fsczone
     *
     * @return string 
     */
    public function getFsczone()
    {
        return $this->fsczone;
    }

    /**
     * Set fsczoneid1
     *
     * @param string $fsczoneid1
     * @return Tblairport
     */
    public function setFsczoneid1($fsczoneid1)
    {
        $this->fsczoneid1 = $fsczoneid1;

        return $this;
    }

    /**
     * Get fsczoneid1
     *
     * @return string 
     */
    public function getFsczoneid1()
    {
        return $this->fsczoneid1;
    }

    /**
     * Set fsczoneid2
     *
     * @param string $fsczoneid2
     * @return Tblairport
     */
    public function setFsczoneid2($fsczoneid2)
    {
        $this->fsczoneid2 = $fsczoneid2;

        return $this;
    }

    /**
     * Get fsczoneid2
     *
     * @return string 
     */
    public function getFsczoneid2()
    {
        return $this->fsczoneid2;
    }

    /**
     * Set fkCityCode
     *
     * @param \DBORM\KLMBundle\Entity\Tblcity $fkCityCode
     * @return Tblairport
     */
    public function setFkCityCode(\DBORM\KLMBundle\Entity\Tblcity $fkCityCode = null)
    {
        $this->fkCityCode = $fkCityCode;

        return $this;
    }

    /**
     * Get fkCityCode
     *
     * @return \DBORM\KLMBundle\Entity\Tblcity 
     */
    public function getFkCityCode()
    {
        return $this->fkCityCode;
    }

    /**
     * Set fkCountryCode
     *
     * @param \DBORM\KLMBundle\Entity\Tblcountry $fkCountryCode
     * @return Tblairport
     */
    public function setFkCountryCode(\DBORM\KLMBundle\Entity\Tblcountry $fkCountryCode = null)
    {
        $this->fkCountryCode = $fkCountryCode;

        return $this;
    }

    /**
     * Get fkCountryCode
     *
     * @return \DBORM\KLMBundle\Entity\Tblcountry 
     */
    public function getFkCountryCode()
    {
        return $this->fkCountryCode;
    }
}
