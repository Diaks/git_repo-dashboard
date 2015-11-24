<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltypeprofil
 *
 * @ORM\Table(name="TblTypeProfil")
 * @ORM\Entity
 */
class Tbltypeprofil
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
     * @ORM\Column(name="TypeProfil", type="string", length=50, nullable=true)
     */
    private $typeprofil;



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
     * Set typeprofil
     *
     * @param string $typeprofil
     * @return Tbltypeprofil
     */
    public function setTypeprofil($typeprofil)
    {
        $this->typeprofil = $typeprofil;

        return $this;
    }

    /**
     * Get typeprofil
     *
     * @return string 
     */
    public function getTypeprofil()
    {
        return $this->typeprofil;
    }
}
