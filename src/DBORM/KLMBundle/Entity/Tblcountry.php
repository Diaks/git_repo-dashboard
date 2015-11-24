<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcountry
 *
 * @ORM\Table(name="TblCountry")
 * @ORM\Entity
 */
class Tblcountry
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_Country_code", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=50, nullable=true)
     */
    private $country;



    /**
     * Get pkCountryCode
     *
     * @return string 
     */
    public function getPkCountryCode()
    {
        return $this->pkCountryCode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Tblcountry
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
