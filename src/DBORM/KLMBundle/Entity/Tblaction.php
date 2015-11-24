<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblaction
 *
 * @ORM\Table(name="TblAction")
 * @ORM\Entity
 */
class Tblaction
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
     * @ORM\Column(name="ActionLabel", type="string", length=50, nullable=false)
     */
    private $actionlabel;



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
     * Set actionlabel
     *
     * @param string $actionlabel
     * @return Tblaction
     */
    public function setActionlabel($actionlabel)
    {
        $this->actionlabel = $actionlabel;

        return $this;
    }

    /**
     * Get actionlabel
     *
     * @return string 
     */
    public function getActionlabel()
    {
        return $this->actionlabel;
    }
}
