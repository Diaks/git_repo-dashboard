<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcity
 *
 * @ORM\Table(name="TblCity")
 * @ORM\Entity
 */
class Tblcity
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_City_code", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkCityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=50, nullable=true)
     */
    private $city;



    /**
     * Get pkCityCode
     *
     * @return string 
     */
    public function getPkCityCode()
    {
        return $this->pkCityCode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Tblcity
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
