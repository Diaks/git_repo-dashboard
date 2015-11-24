<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltraksresultat
 *
 * @ORM\Table(name="TblTraksResultat")
 * @ORM\Entity
 */
class Tbltraksresultat
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
     * @ORM\Column(name="ResultatLabel", type="string", length=50, nullable=false)
     */
    private $resultatlabel;



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
     * Set resultatlabel
     *
     * @param string $resultatlabel
     * @return Tbltraksresultat
     */
    public function setResultatlabel($resultatlabel)
    {
        $this->resultatlabel = $resultatlabel;

        return $this;
    }

    /**
     * Get resultatlabel
     *
     * @return string 
     */
    public function getResultatlabel()
    {
        return $this->resultatlabel;
    }
}
