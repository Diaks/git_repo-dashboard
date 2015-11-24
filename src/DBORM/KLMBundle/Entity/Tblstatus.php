<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblstatus
 *
 * @ORM\Table(name="TblStatus")
 * @ORM\Entity
 */
class Tblstatus
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
     * @ORM\Column(name="LabelStatus", type="string", length=50, nullable=false)
     */
    private $labelstatus;



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
     * Set labelstatus
     *
     * @param string $labelstatus
     * @return Tblstatus
     */
    public function setLabelstatus($labelstatus)
    {
        $this->labelstatus = $labelstatus;

        return $this;
    }

    /**
     * Get labelstatus
     *
     * @return string 
     */
    public function getLabelstatus()
    {
        return $this->labelstatus;
    }
}
