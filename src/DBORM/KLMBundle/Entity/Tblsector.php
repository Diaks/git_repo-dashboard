<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsector
 *
 * @ORM\Table(name="TblSector")
 * @ORM\Entity
 */
class Tblsector
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;

    /**
     * @var string
     *
     * @ORM\Column(name="SectorLabel", type="string", length=50, nullable=true)
     */
    private $sectorlabel;



    /**
     * Get pkId
     *
     * @return string 
     */
    public function getPkId()
    {
        return $this->pkId;
    }

    /**
     * Set sectorlabel
     *
     * @param string $sectorlabel
     * @return Tblsector
     */
    public function setSectorlabel($sectorlabel)
    {
        $this->sectorlabel = $sectorlabel;

        return $this;
    }

    /**
     * Get sectorlabel
     *
     * @return string 
     */
    public function getSectorlabel()
    {
        return $this->sectorlabel;
    }
}
